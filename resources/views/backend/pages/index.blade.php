@extends('backend.layouts.master1')
@section('backend_title')
    user
@endsection

@section('pagewise_style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">

<style type="text/css">
.dataTables_length{
    padding: 20px 0;
}
</style>
@endsection

@section('content')
@if(session()->has('status'))
    <div class="alert alert-success text-center" id="flash-message">{{ session()->get('status') }}</div>
@endif 
<div class="container ml-3">
<div class="row">
    <h1>List Table</h1>
        <div class="col-12">
        <div class="table-responsive my-2">
            <table class="table table-bordered table-striped" id="dataTable">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Religion</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Options</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($personaldata as $data)
                        <tr>
                            <td>{{ $data->id}}</th>
                            <td>{{ $data->first_name}}</td>
                            <td>{{ $data->last_name }}</td>
                            <td>{{ $data->gender }}</td>
                            <td>{{ $data->religion }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->phone }}</td>

                            <td class="d-flex justify-content-start">
                                <div class="container">
                                <a class="btn btn-info btn-sm center" href="{{ route('user.edit', $data->id) }}"><i class="fa fa-edit"></i></a>
                                </div>
                                <div class="container">
                                <a class="btn btn-danger btn-sm center " href="{{ route('user.view', $data->id) }}"><i class="fa fa-eye"></i></a>
                            </td>
                                 </div>
                               
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div>
@endsection


@section('pagewise_script')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
    $('#dataTable').DataTable({
        pagingType: 'first_last_numbers',
    });

});

setTimeout(function() {
        $('#flash-message').fadeOut('fast');
    }, 3000);

</script>

@endsection
