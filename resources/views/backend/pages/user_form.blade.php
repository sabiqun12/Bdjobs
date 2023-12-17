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
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/jquery.steps.css">
    <!-- for table -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        #installationForm .tab-content {
            margin-top: 20px;
        }
    </style>
@endsection


@section('content')
    <div class="container">
        <form id="contact" action="{{ route('user.store')}}" method="POST">
            @csrf
            <div>
                <h3>Personal Information</h3>
                <section>
                    <div class="form-group">
                        <label for="first_name"> Name</label>
                        <input type="text" class="form-control" id="first_name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </section>
                <h3>Profile</h3>
                <section>

                    <div class="mt-2">
                        <a class="btn btn-primary btn-sm pull-right" id="insertRow" href="#"><i class="fa fa-plus"></i></a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Qualification</th>
                                    <th scope="col">Institute</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Passing Year</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>


                        <!-- Add rows button-->
                        {{-- <a class="btn btn-primary rounded-0 " id="insertRow" href="#">Add new row</a> --}}


                    </div><a style="font-size: 8pt; text-decoration: none" target="_blank"
                        href="http://frontendfreecode.com"></a>

                </section>
                <h3>Certification</h3>
                <section>
                    <div class="form-group">
                        <label for="first_name">Course Name</label>
                        <input type="text" class="form-control" id="first_name" name="c_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Institute</label>
                        <input type="text" class="form-control" id="last_name" name="c_in" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload file</label>
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
                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I
                        agree with the Terms and Conditions.</label>
                        <div class="form-group d-flex justify-content-center">
                            <button class="btn btn-success text-center" type="submit">Save</button>
                        </div>


                </section>
                {{-- <h3>Finish</h3>
                <section>
                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I
                        agree with the Terms and Conditions.</label>
                        <div class="form-group d-flex justify-content-center">
                            <button class="btn btn-success text-center" type="submit">Save</button>
                        </div>
                </section> --}}
            </div>
        </form>
    </div>


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

    <!-- for scripts.js -->


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.js"></script>

    <!-- endscript -->
    <!-- Page specific script -->
    {{-- <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script> --}}

    <!-- this is steps.js -->
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
        //  cutom code for radio butto
        // form.validate({
        //     rules: {
        //         gender: "required"
        //     }

        // });

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
        $(function () {

// Start counting from the third row
var counter = 1;

$("#insertRow").on("click", function (event) {
    event.preventDefault();

    var newRow = $("<tr>");
    var cols = '';

    // Table columns
    cols += '<th scrope="row">' + counter + '</th>';
    cols += '<td><input class="form-control rounded-0" type="text" id="qualification" name="qualification" placeholder="Qualification name" required></td>';
    cols += '<td><input class="form-control rounded-0" type="text" id="institute" name="institute" placeholder="institute name" required></td>';
    cols += '<td><input class="form-control rounded-0" type="text" id="subject" name="subject" placeholder="Subject" required></td>';
    cols += '<td><input class="form-control rounded-0" type="text" id="pyear" name="pyear" placeholder="Year" required></td>';
    cols += '<td><button class="btn btn-danger rounded-0" id ="deleteRow"><i class="fa fa-trash"></i></button</td>';
    cols += '<td><button class="btn btn-info rounded-0" id ="editRow"><i class="fa fa-pencil"></i></button</td>';


    // Insert the columns inside a row
    newRow.append(cols);

    // Insert the row inside a table
    $("table").append(newRow);

    // Increase counter after each row insertion
    counter++;
});

// Remove row when delete btn is clicked
$("table").on("click", "#deleteRow", function (event) {
    $(this).closest("tr").remove();
    counter -= 1
});

$("table").on("click", "#editRow", function (event) {
    $(this).closest("tr").remove();
    counter -= 1
});



});




    </script>
@endsection
