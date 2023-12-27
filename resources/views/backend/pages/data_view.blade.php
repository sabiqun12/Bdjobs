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
    <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">View Data Table</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>ID</th>
                  <th> Name</th>
                  <th>Gender</th>
                  <th>Religion</th>
                  <th>Phone</th>
                  <th>Address</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ $personaldata->id }}</td>
                  <td>{{ $personaldata->first_name }}</td>
                  <td>{{ $personaldata->gender }}</td>
                  <td>{{ $personaldata->religion }}</td> 
                  <td>{{ $personaldata->phone }}</td> 
                  <td>{{ $personaldata->address }}</td>  
                </tr>               
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
</div>
</div>
</div>
<div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Education </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>                         
                  <th>ID</th>
                  <th>Education Level</th>
                  <th>Group</th>
                  <th>Institute</th>
                  <th>Board</th>
                  <th>Result</th>
                  <th>Passing year</th>                 
                </tr>
              </thead>
              <tbody>
              @foreach($educationdata as $data)
                <tr>
                  <td>{{ $data->id }}</td>
                  <td>{{ $data->Education }} </td>
                  <td>{{ $data->Group }}</td> 
                  <td>{{ $data->I_Name }}</td> 
                  <td>{{ $data->Board }}</td> 
                  <td>{{ $data->Result  }}</td> 
                  <td>{{ $data->Passing_Year }}</td>  
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        </div>
</div>
</div>

<div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Certification </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>                         
                  <th>Training Title</th>
                  <th>Topics</th>
                  <th>Country</th>
                  <th>Institute</th>
                  <th>Training Year</th>
                  <th>Duration</th>
                               
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{ $personaldata->T_title }}</td>
                  <td>{{ $personaldata->topic }} </td>
                  <td>{{ $personaldata->country}}</td> 
                  <td>{{ $personaldata->institute  }}</td> 
                  <td>{{ $personaldata->t_year  }}</td> 
                  <td>{{ $personaldata->duration }}</td> 

                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        </div>
</div>
</div>
@endsection


@section('pagewise_script')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


@endsection