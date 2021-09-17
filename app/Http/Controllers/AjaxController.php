<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\StateList;
use App\Models\CityList;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function country(Request $request){
        $perPage = 15;
        $offset = 0;
        $page = $request->has("page")?$request->page:1;

        if($page > 1){
            $offset = ($page - 1)*$perPage;
        }

        $search = $request->has("search")?$request->search:1;
        $where = array(
            ["country_id", ">", 0],
        );
        if($search != ""){
            array_push($where,["country_name","LIKE", "%$search%"]);
        }

        $country = Country::select("country_id as id","country_name as name")->where($where)->offset($offset)->limit($perPage)->get();
        return response()->json(["status"=>1,"message"=>"Success","items"=>$country]);
    }
    public function state(Request $request){
        $perPage = 15;
        $offset = 0;
        $page = $request->has("page")?$request->page:1;
        $country_id = $request->has("country_id")?$request->country_id:0;

        if($page > 1){
            $offset = ($page - 1)*$perPage;
        }

        $search = $request->has("search")?$request->search:1;
        $where = array(
            ["country_id", $country_id],
        );
        if($search != ""){
            array_push($where,["state_name","LIKE", "%$search%"]);
        }

        $state = StateList::select("state_id as id","state_name as name")->where($where)->offset($offset)->limit($perPage)->get();
        return response()->json(["status"=>1,"message"=>"Success","items"=>$state]);
    }
    public function city(Request $request){
        $perPage = 15;
        $offset = 0;
        $page = $request->has("page")?$request->page:1;
        $state_id = $request->has("state_id")?$request->state_id:0;

        if($page > 1){
            $offset = ($page - 1)*$perPage;
        }

        $search = $request->has("search")?$request->search:1;
        $where = array(
            ["state_id", $state_id],
        );
        if($search != ""){
            array_push($where,["city_name","LIKE", "%$search%"]);
        }

        $city = CityList::select("city_id as id","city_name as name")->where($where)->offset($offset)->limit($perPage)->get();
        return response()->json(["status"=>1,"message"=>"Success","items"=>$city]);
    }

    //Branch Manager
    public function branch_Manager(Request $request){
        return response()->json(["status"=>1,"message"=>"Success","items"=>array()]);
    }
}
