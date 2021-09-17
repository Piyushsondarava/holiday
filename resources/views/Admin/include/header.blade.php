
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">{{ Session::has('pageTitle')?Session::get('pageTitle'):""}}</h1>
          </div><!-- /.col -->

          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ Session::has('pageTitle')?Session::get('pageTitle'):""}}</li>
            </ol> -->
            <div class="row float-right">
                <a class="btn btn-app bg-warning" href="{{ Session::has('createRoute')?route(Session::get('createRoute')):'#'}}">
                    <i class="fas fa-plus-circle"></i>Add
                </a>
                <a class="btn btn-app bg-success nav-link active" href="{{ Session::has('viewRoute')?route(Session::get('viewRoute')):'#'}}">
                    <i class="fas fa-eye"></i>View
                </a>
                <a class="btn btn-app bg-info" data-toggle="modal" href="#Page_Info_Popup">
                    <i class="fas fa-info"></i>Info
                </a>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->