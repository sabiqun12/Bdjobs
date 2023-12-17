@extends('backend.layouts.master')
@section('backend_title')
    user
@endsection
@section('content_title')
    User Profile
@endsection

@section('pagewise_style')
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/dist/css/adminlte.min.css">
@endsection


@section('content')

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    {{-- <h3 class="card-title">User Information</h3> --}}
                                    <ul class="nav nav-tabs d-flex justify-content-center ">
                                
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Personal Info</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">Education Info</a>
                                          </li>
                                          <li class="nav-item">
                                            <a class="nav-link" href="#">Training Info</a>
                                          </li>
                                      </ul>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"> Full Name</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email </label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone</label>
                                            <input type="phone" name="phone"class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select Gender</label>
                                            <select class="form-control" name="gender" id="exampleFormControlSelect1">
                                              <option>Male</option>
                                              <option>Female</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="exampleFormControlSelect1">Select University</label>
                                            <select class="form-control" name="varsity" id="exampleFormControlSelect1">
                                              <option>NSU</option>
                                              <option>DIU</option>
                                              <option>IUB</option>
                                            </select>
                                          </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Present Address</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1"
                                                placeholder="Enter address">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputFile">Upload CV</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose
                                                        file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->

                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->

    </html>
@endsection

@section('pagewise_script')
    <!-- jQuery -->
    <script src="{{ asset('assets/backend') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('assets/backend') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/backend') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/backend') }}/dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
