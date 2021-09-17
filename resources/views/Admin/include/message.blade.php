@if(Session::has('message') && Session::has('type'))
    <div class="alert alert-{{ session('type') }}">
        {{ session('message') }}
    </div>
@endif