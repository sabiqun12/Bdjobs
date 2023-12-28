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
<div class="container-fluid">
          <div class="row d-flex justify-content-start">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="text-center bg-success">Personal Information </h3>
                    </div>
                    <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="">
                          <label for="name" class="col-md-4">First Name</label><span class="col-md-1">:</span>
                          <td>{{ $personaldata->first_name }}</td>
                        </div>
                        <div class="">
                          <label for="name" class="col-md-4">Gender</label><span class="col-md-1">:</span>
                          <td>{{ $personaldata->gender }}</td>
  
                        </div>
                        <div class="">
                          <label for="name" class="col-md-4">Phone</label><span class="col-md-1">:</span>
                           <td>{{ $personaldata->phone }}</td>
  
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="">
                          <label for="name" class="col-md-4"> Last Name</label><span class="col-md-1">:</span>
                          <td>{{ $personaldata->last_name }}</td>
                        </div>
                        <div class="">
                          <label for="name" class="col-md-4">Religion</label><span class="col-md-1">:</span>
                          <td>{{ $personaldata->religion }}</td>
                      </div>
                      <div class="">
                        <label for="name" class="col-md-4">Address</label><span class="col-md-1">:</span>
                        <td>{{ $personaldata->address }}</td>
                    </div>
                    </div>
          </div>
          </div>
</div>
</div>
</div>
</div>

<!-- <div class="container">
<div class="row d-flex justify-content-start">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center bg-info font-weight-bold text-dark">Personal Information </h3>
          </div>
          <div class="card-body">
          <table class="table table-light table-striped ">
  <thead>
    <tr>      
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Religion</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>   
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $personaldata->first_name  }}</td>
      <td>{{ $personaldata->last_name }}</td>
      <td>{{ $personaldata->gender }}</td>
      <td>{{ $personaldata->religion }}</td>
      <td>{{ $personaldata->phone }}</td> 
      <td>{{ $personaldata->address }}</td>
    </tr>
</tbody>
</table>
</div>
</div>
</div> -->
 <!-- <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-warning">Personal Information</h3>
          </div>
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
        
        </div>
</div>
</div>
</div>  -->
<div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center bg-success">Education </h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table class="table table-bordered">
              <thead>
                <tr>                         
                  <!-- <th>ID</th> -->
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
                  <!-- <td>{{ $data->id }}</td> -->
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

<!-- <div class="container">
    <div class="row d-flex justify-content-start">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center bg-warning">Certification </h3>
          </div>
         
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
       
        </div>
        </div>
</div>
</div> -->
<div class="container-fluid">
          <div class="row d-flex justify-content-start">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <h3 class="text-center bg-success">Certification</h3>
                    </div>
                    <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="">
                          <label for="name" class="col-md-4">Training Title</label><span class="col-md-1">:</span>
                          <td>{{ $personaldata->T_title }}</td>
                        </div>
                        <div class="">
                          <label for="name" class="col-md-4">Topics</label><span class="col-md-1">:</span>
                          <td>{{$personaldata->topic }}</td>
  
                        </div>
                        <div class="">
                          <label for="name" class="col-md-4">Country</label><span class="col-md-1">:</span>
                           <td>{{ $personaldata->country }}</td>
  
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="">
                          <label for="name" class="col-md-4"> Institute</label><span class="col-md-1">:</span>
                          <td>{{ $personaldata->institute }}</td>
                        </div>
                        <div class="">
                          <label for="name" class="col-md-4">Training Year</label><span class="col-md-1">:</span>
                          <td>{{ $personaldata->t_year  }}</td>
                      </div>
                      <div class="">
                        <label for="name" class="col-md-4">Duration</label><span class="col-md-1">:</span>
                        <td>{{  $personaldata->duration }}</td>
                    </div>
                    </div>
          </div>
          </div>
</div>
</div>
</div>
</div>
@endsection


@section('pagewise_script')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>


@endsection