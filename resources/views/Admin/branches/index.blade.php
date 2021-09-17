@extends('Admin.include.app')
@section('content')


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header card-header-primary card-header-icon">
                        <div class="card-icon">
                            <i class="fas fa-book-reader"> Result Panel</i>
                        </div>
                        <div class="col-md-2 float-right">
                            <a href="{{ route('branch.export') }}" class="btn btn-primary"><i class="fas fa-download"> Export</i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-bordered table-hover data-table dataTable dtr-inline" id="baseTable">
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
                                    <th width="250px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content -->


@endsection
@section('script')
<script type="text/javascript">

    $(function() {

        $(document).on('click', '.delete_btn', function() {
            var delete_link = $(this).data('delete_link');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = delete_link;
                }
            })


        });
        
        $(document).on('click', '.status_btn', function() {
            var status_link = $(this).data('status_link');
            Swal.fire({
                title: 'Are you sure?',
                text: "This Status will change!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    var status = $(this).data('next_click');
                    $.ajax({
                        url: status_link,
                        type: 'GET',
                        data:{status:status},
                        success: function(res) {
                            $('#baseTable').DataTable().clear().draw();
                        }
                    });
                }
            })
        });

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('branch.data') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'currency_name',
                    name: 'currency_name'
                },
                {
                    data: 'branch_manager_name',
                    name: 'branch_manager_name'
                },
                
                {
                    data: 'support_no',
                    name: 'support_no'
                },
                
                {
                    data: 'city_name',
                    name: 'city_name'
                },
                
                {
                    data: 'state_name',
                    name: 'state_name'
                },
                
                {
                    data: 'country_name',
                    name: 'country_name'
                },
                
                {
                    data: 'status',
                    name: 'status'
                },
                
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },
            ],
        });
    });

</script>
@endsection