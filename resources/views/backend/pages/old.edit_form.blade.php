@extends('backend.layouts.master1')
@section('backend_title')
    user
@endsection

@section('pagewise_style')
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/jquery.steps.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js"></script>
    <script src="{{ asset('assets/backend') }}/plugins/jquery.steps/jquery.steps.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />



    <style type="text/css">
        #installationForm .tab-content {
            margin-top: 20px;
        }

        .form-control::placeholder {
            font-style: italic;
            font-size: 0.85rem;
            color: #aaa;
        }

        .intl-tel-input,
        .iti {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <form id="contact" action="{{ route('user.update', $personaldata->id )}}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <h3>Personal Information</h3>
                <section>
                    <div class="form-row ">
                        <div class="form-group col-md-6">
                            <label for="first_name">First name</label>
                             <input type="text" class="form-control" id="" name="first_name" value="{{ $personaldata->first_name}}" required> 
                        </div> 
                        <div class="form-group col-md-6">
                            <label for="last_name">Last Name</label>
                           <input type="tel" class="form-control" name="last_name"  value="{{ $personaldata->last_name}}" required> 
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="gender">Gender</label>
                            <select class="form-control js-select" name="gender"  value="" required>
                                <option value="{{ $personaldata->gender }}">Male</option>
                                <option value="{{ $personaldata->gender }}">Female</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Religion">Religion</label>
                            <select class="form-control js-select" name="religion"  value="{{ $personaldata->religion}}" required>
                                <option value="Hindu">Hindu</option>
                                <option value="Islam">Islam</option>
                                <option value="Christan">Christan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="user_add" name="address"  value="{{ $personaldata->address}}" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="mobile_code" name="phone"  value="{{ $personaldata->phone}}" required>
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
                            @foreach($education as $data=>$edu)
                                <tr>
                                    <td><input class="form-control rounded-0" type="hidden" id="" name="e_id[]" value="{{ $edu->id }}" required></td>
                                    <td><input class="form-control rounded-0" type="text" id="elevel" name="elevel[]" value="{{ $edu->Education }}" required></td>
                                    <td><input class="form-control rounded-0" type="text" id="igroup" name="group[]"  value="{{ $edu->Group }}" required></td>
                                    <td><input class="form-control rounded-0" type="text" id="board" name="iname[]"  value="{{ $edu->I_Name }}"  required></td>
                                    <td><input class="form-control rounded-0" type="text" id="" name="board[]" value="{{ $edu->Board }}"  required></td>
                                    <td><input class="form-control rounded-0" type="text" id="" name="result[]" value="{{ $edu->Result }}"  required></td>
                                    <td><input class="form-control rounded-0" type="text" id="" name="pyear[]" value="{{ $edu->Passing_Year }}"  required></td>
                                    <td><button class="btn btn-danger rounded-0" id ="deleteRow"><i class="fa fa-trash"></i></button</td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                        <!-- Add rows button-->
                        <!-- <a class="btn btn-primary rounded-0 btn-block" id="insertRow" href="#">Add new row</a> -->

                        {{-- </div><a style="font-size: 8pt; text-decoration: none" target="_blank"
                    href="http://frontendfreecode.com"></a> --}}

                </section>
                <h3>Certification</h3>
                <section>
                    <div class="row ml-5">
                        <div class="col">
                            <label for="Training Title">Training Title </label>
                            <input type="text" class="form-control" name="t_title"  value="{{ $personaldata->T_title}}" required>
                        </div>
                        <div class="col ml-5">
                            <label for="Country">Country</label>
                            <input type="text" class="form-control" name="country"  value="{{ $personaldata->country}}" required>
                        </div>
                    </div>
                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="Topics Covered">Topics Covered</label>
                            <input type="text" class="form-control" name="t_cover"  value="{{ $personaldata->topic}}" required>
                        </div>
                        <div class="col ml-5">
                            <label for="training year">Training Year </label>
                            <input type="text" class="form-control" name="t_year"  value="{{ $personaldata->t_year}}" required>
                        </div>
                    </div>

                    <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="institute">Institute</label>
                            <input type="text" class="form-control" name="t_institute"  value="{{ $personaldata->institute}}" required>
                        </div>
                        <div class="col ml-5">
                            <label for="major">Duration </label>
                            <input type="text" class="form-control" name="duration"  value="{{ $personaldata->duration}}" required>
                        </div>
                    </div>
                     {{-- <div class="row mt-3 ml-5">
                        <div class="col">
                            <label for="Trainning Certificate">Trainning Certificate</label>
                            <input type="file" class="form-control" name="t_certificate"  value="{{ $personaldata->name}}" id="exampleInputFile"
                                required>
                        </div>
                        <div class="col ml-5">
                            {{-- <label for="last_name">Trainning Certificate</label>
                        <input type="file" class="form-control" id="exampleInputFile"> --}}
                        {{-- </div> --}}
{{-- 
                    </div>   --}}
                    {{-- <button class="btn btn-success text-center mt-3 btn-md" type="submit">Save</button> --}}

                    <div class="form-group mt-3 mx-5 ">
                        <button class="btn btn-success text-center" type="submit">Update</button>
                    </div>


                </section>
            </div>
        </form>
    </div>

    </html>
@endsection

@section('pagewise_script')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>






    <script>
        var form = $("#contact");
        form.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },

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

                // Table columns
                cols += '<th scrope="row">' + counter + '</th>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="elevel" name="elevel[]" name" required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="igroup" name="group[]"  name" required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="board" name="board[]"  required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="iname" name="iname[]"  required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="result" name="result[]"  required></td>';
                cols +=
                    '<td><input class="form-control rounded-0" type="text" id="pyear" name="pyear[]"  required></td>';

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


        $("#mobile_code").intlTelInput({
            initialCountry: "BD",
            separateDialCode: true,
            // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
        });

        //SELECT2.JS
    //     $(document).ready(function() {
    //     $('.form-control js-select').select2();
    // });
    </script>
@endsection
