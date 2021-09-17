<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Currency;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomExport;
use App\Helpers\Helper;
use Yajra\DataTables\Facades\DataTables;

class BranchController extends Controller
{

    public function __construct()
    {
        session()->flash('pageTitle', 'Branch');
        session()->flash('createRoute', 'branch.create');
        session()->flash('viewRoute', 'branch.index');
        session()->flash('exportRoute', 'branch.export');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admin.branches.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currencies = Currency::where("status",1)->get();
        return view('Admin.branches.create',["currencies"=>$currencies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->input();
        unset($input['_token']);
        Branch::create($input);
        Helper::successMsg("insert", "Branch");
        return redirect()->route('branch.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Branch::with(['currencyName','countryName','stateName','cityName'])->find(decrypt($id));
        $currencies = Currency::where("status",1)->get();
        return view('Admin.branches.edit', ['data' => $data, "currencies" => $currencies]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->input();
        unset($input['_token']);
        unset($input['_method']);
        Branch::where("id",$id)->update($input);
        Helper::successMsg("update", "Branch");
        return redirect()->route('branch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Branch::where("id",decrypt($id))->delete();
        Helper::successMsg("delete", "Branch");
        return redirect()->route('branch.index');
    }
    public function status(Request $request, $id)
    {
        Branch::where("id",decrypt($id))->update(array("status"=>$request->status,"updated_at"=>date("Y-m-d H:i:s")));
        Helper::successMsg("Status", "Branch");
        return redirect()->route('branch.index');
    }
    public function data(Request $request)
    {
        $tableData = Branch::with(['currencyName','countryName','stateName','cityName'])->orderBy('id', 'desc')->get();
        $datatable = DataTables::of($tableData)
            ->addIndexColumn()
            ->addColumn('currency_name', function ($val) {
                $val = json_decode($val->currencyName,true);
                return $val['name'];
            })
            ->addColumn('branch_manager_name', function ($val) {
                return "Not Assigned";
            })
            ->addColumn('country_name', function ($val) {
                $val = json_decode($val->countryName,true);
                return $val['country_name'];
            })
            ->addColumn('state_name', function ($val) {
                $val = json_decode($val->stateName,true);
                return $val['state_name'];
            })
            ->addColumn('city_name', function ($val) {
                $val = json_decode($val->cityName,true);
                return $val['city_name'];
            })
            ->addColumn('status', function ($val) {
                $encrypt = encrypt($val->id);
                $status = "";
                
                if($val->status == "0"){
                    //disable
                    $status .= '<button style="" class="btn btn-sm status_btn btn-danger btn-link" data-next_click="1" data-status_link="' . route('branch.status', $encrypt) . '" rel="tooltip" data-placement="bottom" title="Deactive"><i class="fas fa-times" aria-hidden="true"></i></button>';
                }else{
                    $status .= '<button style="" class="btn btn-sm status_btn btn-success btn-link" data-next_click="0" data-status_link="' . route('branch.status', $encrypt) . '" rel="tooltip" data-placement="bottom" title="Active"><i class="fas fa-check" aria-hidden="true"></i></button>';
                }
                return $status;
            })
            ->addColumn('action', function ($val) {
                $encrypt = encrypt($val->id);
                $action = "";
                
                $action .= '<a class="btn btn-sm btn-primary btn-link" href="' . route('branch.edit', $encrypt) . '" rel="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-pen" aria-hidden="true"></i></a>';
                // $action .= '<button style="" class="btn btn-sm delete_btn btn-danger btn-link" data-delete_link="' . route('branch.destroy', $encrypt) . '" rel="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash" aria-hidden="true"></i></button>';
                
                return $action;
            })
            ->rawColumns(['currency_name','branch_manager_name','country_name','state_name','city_name','status','action'])
            ->make(true);
        return $datatable;
    }
    public function export()
    {
        $data = Branch::with(['currencyName','countryName','stateName','cityName'])->orderBy('id', 'desc')->get();
        return Excel::download(new CustomExport("Admin.branches.export", ["data"=>$data]),  'branches.xlsx');
    }
}
