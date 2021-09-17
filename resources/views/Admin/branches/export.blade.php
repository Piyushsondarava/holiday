<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export</title>
</head>

<body>
    @include('Admin.include.export_header')

        <table>
            <thead>
                <tr>
                    <th>S.No.</th>
                    <th>Branch Name</th>
                    <th>Base Currency</th>
                    <th>Branch Manager</th>
                    <th>Support No.</th>
                    <th>City Name</th>
                    <th>State Name</th>
                    <th>Country Name</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Deleted At</th>
                </tr>
            </thead>
            <tbody>
                @if(count($data) > 0)
                    @foreach ($data as $k=>$v)
                        <tr>
                            <td>{{ $k }}</td>
                            <td>{{ $v->name }}</td>
                            <td>{{ $v->currencyName->name }}</td>
                            <td></td>
                            <td>{{ $v->support_no }}</td>
                            <td>{{ $v->cityName->city_name }}</td>
                            <td>{{ $v->stateName->state_name }}</td>
                            <td>{{ $v->countryName->country_name }}</td>
                            <td>{{ ($v->status == 1)?"Active":"Deactive" }}</td>
                            <td>{{ !empty($v->created_at)?Date("d M, Y h:i A",strtotime($v->created_at)):"" }}</td>
                            <td>{{ !empty($v->updated_at)?Date("d M, Y h:i A",strtotime($v->updated_at)):"" }}</td>
                            <td>{{ !empty($v->deleted_at)?Date("d M, Y h:i A",strtotime($v->deleted_at)):"" }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>

    @include('Admin.include.export_footer')
</body>

</html>