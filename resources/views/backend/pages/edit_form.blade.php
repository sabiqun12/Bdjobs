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
{{--    <form id="contact" action="{{ route('user.update', $personaldata->id )}}" method="POST">--}}
{{--        @csrf--}}
{{--        @method('PUT')--}}
    {!! Form::open(['id' => 'contact', 'route' => ['user.update', $personaldata->id], 'method' => 'PUT']) !!}
    {!! Form::token() !!}
        <div>
            <h3>Personal Information</h3>
            <section>
                <div class="form-row ">
                    <div class="form-group col-md-6">
                        {!! Form::label('first_name', 'First name') !!}
                        {!! Form::text('first_name', $personaldata->first_name,
                        ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                            {!! Form::label('last_name', 'Last Name') !!}
                            {!! Form::tel('last_name', $personaldata->last_name, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
{{--                        <label for="last_name">Last Name</label>--}}
{{--                        <input type="tel" class="form-control" name="last_name" value="{{ $personaldata->last_name }}"--}}
{{--                            required>--}}
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                            {!! Form::label('gender', 'Gender') !!}
                            {!! Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], $personaldata->gender, ['class' => 'form-control', 'required' => 'required']) !!}
                        </div>
{{--                        <label for="gender">Gender</label>--}}
{{--                        <select class="form-control js-select" name="gender" value="" required>--}}
{{--                        <option value="Male" {{ $personaldata->gender == 'Male' ? 'selected' : '' }}>Male</option>--}}
{{--                        <option value="Female" {{ $personaldata->gender == 'Female' ? 'selected' : '' }}>Female</option>--}}
{{--                        </select>--}}
                    <div class="form-group col-md-6">
                            {!! Form::label('religion', 'Religion') !!}
                            {!! Form::select('religion', ['Hindu' => 'Hindu', 'Islam' => 'Islam', 'Christian' => 'Christian'], $personaldata->religion, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
{{--                        <label for="Religion">Religion</label>--}}
{{--                        <select class="form-control js-select" name="religion" value=""--}}
{{--                            required>--}}
{{--                            <option value="Hindu" {{ $personaldata->religion == 'Hindu' ? 'selected' : '' }}>Hindu</option>--}}
{{--                            <option value="Islam" {{ $personaldata->religion == 'Islam' ? 'selected' : '' }}>Islam</option>--}}
{{--                            <option value="Christan" {{ $personaldata->religion == 'Christan' ? 'selected' : '' }}>Christan</option>--}}
{{--                        </select>--}}
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('address', 'Address') !!}
                        {!! Form::text('address', $personaldata->address, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('phone', 'Phone') !!}
                        {!! Form::tel('phone', $personaldata->phone, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="address">Address</label>--}}
{{--                        <input type="text" class="form-control" id="user_add" name="address"--}}
{{--                            value="{{ $personaldata->address }}" required>--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="phone">Phone</label>--}}
{{--                        <input type="tel" class="form-control" id="mobile_code" name="phone"--}}
{{--                            value="{{ $personaldata->phone }}" required>--}}
{{--                    </div>--}}
                </div>


                <div class="form-row">
                    <div class="form-group col-md-6">
                        {!! Form::label('district', 'Select District') !!}
                        {!! Form::select('district', $dis, $personaldata->district, ['id' => 'district', 'class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('thana', 'Select Thana') !!}
                        {!! Form::select('thana', [], null, ['id' => 'thana', 'class' => 'form-control', 'required' => 'required']) !!}
                    </div>
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="district">Select District</label>--}}
{{--                        <select name="district" id="district" class="form-control"--}}
{{--                            required>--}}
{{--                            <!-- <option value="Kurigram">Select</option> -->--}}
{{--                            @foreach( $dis as $key => $district)--}}
{{--                            <option value="{{ $key }}"  {{ $key == $personaldata->district ? 'selected' : ''}}>{{ $district }}</option>--}}
{{--                            @endforeach--}}

{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="thana">Select Thana</label>--}}
{{--                        <select name="thana" id="thana" class="form-control" value="" required>--}}
{{--                            <option value="">Select</option>--}}

{{--                        </select>--}}
{{--                    </div>--}}
                </div>

{{--                <input class="form-control rounded-0" type="hidden" id="thana_id" name="thana_id"--}}
{{--                                            value="{{ $personaldata->thana}}" required>--}}

                {!! Form::hidden('thana_id', $personaldata->thana, ['id' => 'thana_id', 'class' => 'form-control rounded-0', 'required' => 'required']) !!}


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
                                @foreach($education as $data=>$edu)
                                <tr id="template_row_id" data-number="0">
                                    <!-- <td>
                                        <input class="form-control rounded-0" type="hidden" id="" name="e_id[]"
                                            value="{{ $edu->id }}" required>
                                    </td> -->
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="elevel" name="elevel[]"
                                            value="{{ $edu->Education }}" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="group[]"
                                            value="{{ $edu->Group }}" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="iname[]"
                                            value="{{ $edu->I_Name }}" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="board[]"
                                            value="{{ $edu->Board }}" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="result[]"
                                            value="{{ $edu->Result }}" required>
                                    </td>
                                    <td>
                                        <input class="form-control rounded-0" type="text" id="" name="pyear[]"
                                            value="{{ $edu->Passing_Year }}" required>
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-primary addTableRows"
                                            onclick="addTableRows('tableID', 'template_row_id');">
                                            <i class="fa fa-plus"></i></a>
                                    </td>
                                </tr>
                                @endforeach
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
                        {!! Form::text('t_title', $personaldata->T_title, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="col ml-5">
                        {!! Form::label('country', 'Country') !!}
                        {!! Form::text('country', $personaldata->country, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>

                <div class="row mt-3 ml-5">
                    <div class="col">
                        {!! Form::label('t_cover', 'Topics Covered') !!}
                        {!! Form::text('t_cover', $personaldata->topic, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="col ml-5">
                        {!! Form::label('t_year', 'Training Year') !!}
                        {!! Form::text('t_year', $personaldata->t_year, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>

                <div class="row mt-3 ml-5">
                    <div class="col">
                        {!! Form::label('t_institute', 'Institute') !!}
                        {!! Form::text('t_institute',$personaldata->institute, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                    <div class="col ml-5">
                        {!! Form::label('duration', 'Duration') !!}
                        {!! Form::text('duration', $personaldata->duration, ['class' => 'form-control', 'required' => 'required']) !!}
                    </div>
                </div>

                <div class="form-group mt-3 mx-5">
                    {!! Form::submit('Save', ['class' => 'btn btn-success text-center']) !!}
                </div>
            </section>
        </div>
    {!! Form::close() !!}
{{--    </form>--}}
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



$("#mobile_code").intlTelInput({
    initialCountry: "BD",
    separateDialCode: true,
    // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
});

// SELECT2.JS
//     $(document).ready(function() {
//     $('.form-control js-select').select2();
//  });
// </script>

<script>

$(document).ready(function () {
        // Trigger the function on page load
        getThanaByDistrictId('district', $('#district').val(), 'thana');

        // Bind the function to the change event of the district select box
        $('#district').on('change', function () {
            getThanaByDistrictId('district', $(this).val(), 'thana');
        });
    });



function getThanaByDistrictId(district_id, district_value, thana_div, old_data) {
    // define old_data as an optional parameter
    if (typeof old_data === 'undefined') {
        old_data = 0;
    }
var selected_thana = $("#thana_id").val();
// console.log(selected_thana);
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

                            // option += '<option value="' + id + '" selected>' + value + '</option>';
                            option += '<option value="' + id + '" ' + (id == selected_thana ? 'selected' : '') + '>' + value + '</option>';

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
<!--  -->
@endsection
