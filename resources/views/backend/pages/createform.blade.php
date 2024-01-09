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

/* .form-control::placeholder {
    font-style: italic;
    font-size: 0.85rem;
    color: #aaa;
} */

.intl-tel-input,
.iti {
    width: 100%;
}
</style>
@endsection

@section('content')
<div class="container">
{{--    <form id="contact" action="{{ route('user.form')}}" method="POST">--}}
{{--    @csrf--}}
        {!! Form::open(['route' => 'datastore', "id" => "contact"], ) !!}
        {!! Form::token() !!}

        <div>
            <h3>Personal Information</h3>
            <section>
                <div class="form-row ">
                    <div class="form-group col-md-6">
                        {!! Form::label("first_name", "First name") !!}
                        {!! Form::text("first_name", old('first_name'), ['class' => 'form-control',
                        'placeholder' => 'First Name', 'required' => true]) !!}
{{--                        <label for="first_name">First name</label>--}}
{{--                        <input type="text" class="form-control" id="" name="first_name" required>--}}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label("last_name", " Last name") !!}
                        {!! Form::text("last_name", old('last_name'), ['class' => 'form-control',
                         'placeholder' => 'Last name', 'required' => true]) !!}
{{--                        <label for="last_name">Last Name</label>--}}
{{--                        <input type="text" class="form-control" name="last_name" required>--}}
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
{{--                        <label for="gender">Gender</label>--}}
{{--                        <select class="form-control js-select" name="gender" required>--}}
{{--                            <option>Select</option>--}}
{{--                            <option>Male</option>--}}
{{--                            <option>Female</option>--}}
{{--                        </select>--}}
                        {!! Form::label('gender', 'Gender') !!}
                        {!! Form::select('gender', ['' => 'Select', 'Male' => 'Male', 'Female' => 'Female'], null,
                        ['class' => 'form-control js-select', 'required' => true]) !!}
                    </div>
                    <div class="form-group col-md-6">
{{--                        <label for="Religion">Religion</label>--}}
{{--                        <select class="form-control js-select" name="religion" required>--}}
{{--                            <option>Islam</option>--}}
{{--                            <option>Hindu</option>--}}
{{--                            <option>Christan</option>--}}
{{--                        </select>--}}
                        {!! Form::label('religion', 'Religion') !!}
                        {!! Form::select('religion', ['' => 'Select', 'Islam' => 'Islam', 'Hindu' => 'Hindu', 'Christian' => 'Christian'], null,
                        ['class' => 'form-control js-select', 'required' => 'required']) !!}
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label("address", " Address ") !!}
                        {!! Form::text("address", old('address'), ['class' => 'form-control',
                         'placeholder' => 'Address', 'required' => true]) !!}
{{--                        <label for="address">Address</label>--}}
{{--                        <input type="text" class="form-control" id="user_add" name="address" required>--}}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label("phone", " Phone ") !!}
                        {!! Form::text("phone", old('phone'), ['class' => 'form-control', 'id' => 'mobile_code',
                         'placeholder' => 'Phone', 'required' => true]) !!}
{{--                        <label for="phone">Phone</label>--}}
{{--                        <input type="tel" class="form-control" id="mobile_code" name="phone" required>--}}
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('district', 'Select District') !!}
                        {!! Form::select('district', $dis, null, ['id' => 'district', 'class' => 'form-control', 'onchange' => "getThanaByDistrictId('district', this.value, 'thana');"]) !!}

                        {{--                        <label for="district">Select District</label>--}}
{{--                        <select name="district" id="district" class="form-control"--}}
{{--                            onchange="getThanaByDistrictId('district', this.value, 'thana');">--}}
{{--                            <!-- <option value="Kurigram">Select</option> -->--}}
{{--                            @foreach( $dis as $key => $district)--}}
{{--                            <option value="{{ $key }}">{{ $district }}</option>--}}
{{--                            @endforeach--}}
{{--                        </select>--}}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('thana', 'Select Thana') !!}
                        {!! Form::select('thana', ['' => 'Select'], null, ['id' => 'thana', 'class' => 'form-control']) !!}
{{--                        <label for="thana">Select Thana</label>--}}
{{--                        <select name="thana" id="thana" class="form-control">--}}
{{--                            <option value="">Select</option>--}}
{{--                        </select>--}}
                    </div>
                </div>

            </section>
            <h3>Education</h3>
            <section>

                <div class="panel-body margin">
                    <div class="table-responsive">
                        <table id="tableID" class="table table-striped table-bordered table-condensed"
                            style="margin-bottom: 0">
                            <thead>
                                <tr>
                                    <th style="text-align: center">Level of Education</th>
                                    <th style="text-align: center">Concentration/Major/Group</th>
                                    <th style="text-align: center">Institute Name</th>
                                    <th style="text-align: center">Board</th>
                                    <th style="text-align: center">Result</th>
                                    <th style="text-align: center">Passing Year</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr id="template_row_id" data-number="0">
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="elevel" name="elevel[]"
                                            required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="group[]" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="iname[]" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="board[]" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="result[]"
                                            required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="pyear[]" required>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary addTableRows"
                                            onclick="addTableRows('tableID', 'template_row_id');">
                                            <i class="fa fa-plus"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


            </section>
            <h3>Certification</h3>
            <section>
                <div class="row ml-5">
                    <div class="col">
                        {!! Form::label('t_title', 'Training Title') !!}
                        {!! Form::text('t_title', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="col ml-5">
                        {!! Form::label('country', 'Country') !!}
                        {!! Form::text('country', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>

                <div class="row mt-3 ml-5">
                    <div class="col">
                        {!! Form::label('t_cover', 'Topics Covered') !!}
                        {!! Form::text('t_cover', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="col ml-5">
                        {!! Form::label('t_year', 'Training Year') !!}
                        {!! Form::text('t_year', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>

                <div class="row mt-3 ml-5">
                    <div class="col">
                        {!! Form::label('t_institute', 'Institute') !!}
                        {!! Form::text('t_institute', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="col ml-5">
                        {!! Form::label('duration', 'Duration') !!}
                        {!! Form::text('duration', null, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>

                <div class="form-group mt-3 mx-5">
                    {!! Form::submit('Save', ['class' => 'btn btn-success text-center']) !!}
                </div>

            </section>
        </div>
 {!! Form::close() !!}
</div>


</html>
@endsection

@section('pagewise_script')
<!-- for dropdown dependency ajax jquery cdn -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
<!-- end dropdown dependency ajax jquery cdn -->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!-- for dropdown dependency ajax jquery cdn -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> -->
<!-- end dropdown dependency ajax jquery cdn -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
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

function addTableRows(tableID, template_row_id) {
    // Copy the template row (first row) of table and reset the ID and Styling
    var new_row = document.getElementById(template_row_id).cloneNode(true);
    new_row.id = "";
    new_row.style.display = "";
    var current_total_row = "";


    var final_total_row = current_total_row + 1;

    // Generate an ID of the new Row, set the row id and append the new row into table
    var last_row_number = $('#' + tableID).find('tbody tr').last().attr('data-number');
    if (last_row_number != '' && typeof last_row_number !== "undefined") {
        last_row_number = parseInt(last_row_number) + 1;
    } else {
        last_row_number = Math.floor(Math.random() * 101);
    }

    var new_row_id = 'rowCount' + tableID + last_row_number;
    new_row.id = new_row_id;
    $("#" + tableID).append(new_row);


    // Convert the add button into remove button of the new row
    $("#" + tableID).find('#' + new_row_id).find('.addTableRows').removeClass('btn-primary').addClass('btn-danger')
        .attr('onclick', 'removeTableRow("' + tableID + '","' + new_row_id + '")');
    // Icon change of the remove button of the new row
    $("#" + tableID).find('#' + new_row_id).find('.addTableRows > .fa').removeClass('fa-plus').addClass('fa-times');
    // data-number attribute update of the new row
    $('#' + tableID).find('tbody tr').last().attr('data-number', last_row_number);

    // Get all input box elements from the new row, reset the value, and change the name of input box
    var all_input_box = $("#" + tableID).find('#' + new_row_id).find('input');
    all_input_box.val(''); // value reset
    for (var i = 0; i < all_input_box.length; i++) {
        var name_of_input_box = all_input_box[i].name;
        var id_of_input_box = all_input_box[i].id;
        var updated_name_of_input_box = name_of_input_box.replace('[0]', '[' + current_total_row + ']');
        var updated_id_of_input_box = id_of_input_box.replace('0', +current_total_row);
        all_input_box[i].name = updated_name_of_input_box;
        all_input_box[i].id = updated_id_of_input_box;
    }
    ///remove


} // end of addTableRowForIRC() function
function removeTableRow(tableID, removeNum) {
    $('#' + tableID).find('#' + removeNum).remove();
    $('#other_product_info_table').find('#rowCountother_product_info_table' + removeNum.charAt(removeNum.length - 1))
        .remove();
    let current_total_row = $('#' + tableID).find('tbody tr').length;
    if (current_total_row <= 3) {
        //const tableFooter = document.getElementById('autoFooter');
        const tableFooter = document.querySelector('#' + tableID + ' #autoFooter');
        if (tableFooter) {
            tableFooter.remove();
        }
    }
}


// country code plugin code
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
<script>
function getThanaByDistrictId(district_id, district_value, thana_div, old_data) {
    // define old_data as an optional parameter
    if (typeof old_data === 'undefined') {
        old_data = 0;
    }

    var _token = $('input[name="_token"]').val();
    if (district_value !== '') {


        $.ajax({
            type: "GET",
            url: "/users/thana",
            data: {
                _token: _token,
                districtId: district_value
            },
            beforeSend: function() {
                $("#" + district_id).after('<span class="loading_data">Loading...</span>');
            },
            success: function (response) {
                var option = '<option value="">Select Thana</option>';
                if (response.responseCode == 1) {
                    $.each(response.data, function (id, value) {
                        if (id.trim() == old_data) {
                            option += '<option value="' + id + '" selected>' + value + '</option>';
                        } else {
                            option += '<option value="' + id + '">' + value + '</option>';
                        }
                    });
                }
                $("#" + thana_div).html(option);
            },
            complete: function() {
                $("#" + district_id).next('.loading_data').remove();
                $("#" + district_id).parent().find('.loading_data').hide();
            },
        });
    }
}
</script>
@endsection
