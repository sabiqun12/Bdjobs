@extends('backend.layouts.master')
@section('backend_title')
    user
@endsection
@section('content_title')
    User Profile
@endsection

@section('pagewise_style')
    {{-- <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/dist/css/adminlte.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/jquery.steps.css">
    <!-- for table -->
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    {{-- Phone css --}}
    {{-- <!-- phone plugin css -->
    <link rel="stylesheet" href="css/phone.css" /> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/2.0.4/css/intlTelInput.css" />

    <style type="text/css">
        #installationForm .tab-content {
            margin-top: 20px;
        }

        .intl-tel-input,
        .iti {
            width: 100%;
        }
    </style>
@endsection


@section('content')
    <div class="container">
        <form id="contact" action="{{ route('user.edit') }}" method="POST">
            @csrf
            {{-- @PUT --}}
            <div>
                <h3>Personal Information</h3>
                <section>
                    <div class="row ml-5 ">
                        <div class="col">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="col ml-5">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                    </div>
                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="gender">Gender</label>
                            <select class="form-control" name="gender" required>
                                <option value="1">Select</option>
                                <option value="2">Male</option>
                                <option value="1">Female</option>

                            </select>
                        </div>
                        <div class="col ml-5">
                            <label for="Religion">Religion</label>
                            <input type="text" class="form-control" name="religion" required>
                        </div>
                    </div>
                    <div class="form-group row mt-3 ml-5">
                        <div class="col form-group">
                            <label for="last_name">Phone Number</label>
                            <input type="tel" id="phone" class="form-control" id="mobile_code"
                                placeholder="Phone Number" name="phone" required>
                        </div>
                        <div class="col ml-5">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                    </div>

                </section>
                <h3>Education</h3>
                <section>
                    <div class="mt-2">
                        <a class="btn btn-primary btn-sm pull-right" id="insertRow" href="#"><i
                                class="fa fa-plus"></i></a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Level of Education</th>
                                    <th scope="col">Concentration/Major/Group</th>
                                    <th scope="col">Institute Name</th>
                                    <th scope="col">Board</th>
                                    <th scope="col">Result</th>
                                    <th scope="col">Passing Year</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                        {{-- <div class="row ml-5">
                        <div class="col">
                            <label for="last_name">Level of Education</label>
                            <select class="form-control">
                                <option value="0">SSC</option>
                                <option value="1">HSC</option>
                                <option value="2">Bachelors/Honors</option>
                                <option value="3">Masters</option>
                                <option value="4">PHD</option>

                            </select>
                        </div>
                        <div class="col ml-5">
                            <label for="major">Concentration/ Major/Group</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="last_name">Board</label>
                            <select class="form-control" required>
                                <option value="0">Dhaka</option>
                                <option value="1">Rajshahi</option>
                                <option value="2">Chittagong</option>
                                <option value="3">Dinajpur</option>
                                <option value="4">Cumilla</option>

                            </select>
                        </div>
                        <div class="col ml-5">
                            <label for="major">Institute Name</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="last_name">Result</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col ml-5">
                            <label for="major">Passing Year</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div> --}}


                </section>
                <h3>Certification</h3>
                <section>
                    <div class="row ml-5">
                        <div class="col">
                            <label for="Training Title">Training Title </label>
                            <input type="text" class="form-control" name="t_title" required>
                        </div>
                        <div class="col ml-5">
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" name="country" required>
                        </div>
                    </div>
                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="Topics Covered">Topics Covered</label>
                            <input type="text" class="form-control" name="t_cover" required>
                        </div>
                        <div class="col ml-5">
                            <label for="training year">Training Year </label>
                            <input type="text" class="form-control" name="t_year" required>
                        </div>
                    </div>

                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="institute">Institute</label>
                            <input type="text" class="form-control" name="t_institute" required>
                        </div>
                        <div class="col ml-5">
                            <label for="major">Duration </label>
                            <input type="text" class="form-control" name="duration" required>
                        </div>
                    </div>
                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="Trainning Certificate">Trainning Certificate</label>
                            <input type="file" class="form-control" name="t_certificate" id="exampleInputFile"
                                required>
                        </div>
                        <div class="col ml-5">
                            {{-- <label for="last_name">Trainning Certificate</label>
                            <input type="file" class="form-control" id="exampleInputFile"> --}}
                        </div>

                    </div>
                    {{-- <button class="btn btn-success text-center mt-3 btn-md" type="submit">Save</button> --}}

                    <div class="form-group mt-3 mx-5 ">
                        <button class="btn btn-success text-center" type="submit">Save</button>
                    </div>


                </section>

            </div>
        </form>
    </div>


    </html>
@endsection

@section('pagewise_script')
    {{-- <!-- jQuery -->
    <script src="{{ asset('assets/backend') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/backend') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="{{ asset('assets/backend') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/backend') }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/backend') }}/dist/js/demo.js"></script> --}}

    <!-- for scripts.js -->


    {{-- //for steps.js --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/jquery.steps/jquery.steps.js"></script>
    <!-- end step.js -->
    <!-- for country code with phone.js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/2.0.4/js/intlTelInput.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/2.0.4/js/intlTelInput.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/2.0.4/lib/libphonenumber/build/isValidNumber.js">
    </script>
    <!-- end phone.js -->



    <script>
        var form = $("#contact");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }

            }
        });


        form.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                alert("Submitted!");
            }
        });



        // add row js
        $(function() {

            // Start counting from the third row
            var counter = 1;

            $("#insertRow").on("click", function(event) {
                event.preventDefault();

                var newRow = $("<tr>");
                var cols = '';

                // Table columns
                cols += '<th scrope="row">' + counter + '</th>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="elevel" name="elevel" name" required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="igroup" name="group"  name" required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="board" name="board" v  required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="iname" name="iname"  required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="result" name="result"  required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="pyear" name="pyear"  required></td>';

                cols +=
                    '<td><button class="btn btn-danger rounded-0" id ="deleteRow"><i class="fa fa-trash"></i></button</td>';



                // Insert the columns inside a row
                newRow.append(cols);

                // Insert the row inside a table
                $("table").append(newRow);

                // Increase counter after each row insertion
                counter++;
            });

            // Remove row when delete btn is clicked
            $("table").on("click", "#deleteRow", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });



        });

          // -----Country Code Selection
          $("#mobile_code").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });


    </script>
@endsection
