@extends('backend.layouts.master1')
@section('backend_title')
    user
@endsection

@section('pagewise_style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" crossorigin="anonymous">

<style type="text/css">
.dataTables_length{
    padding: 20px 0;
}
</style>
@endsection

@section('content')
<div class="container">
    <table class="table ">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <tbody>

          <tr>
            <td>{{ $personaldata->id }}</th>
            <td>{{ $personaldata->first_name }}</td>
            <td>{{ $personaldata->address }}</td>
            <td>{{ $personaldata->phone }}</td>
          </tr>
        </tbody>
      </table>
   </div>
@endsection


@section('pagewise_script')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


@endsection