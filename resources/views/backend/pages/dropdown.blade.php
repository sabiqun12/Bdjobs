<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Laravel Dynamic Dependent Dropdown</title>
</head>

<body>

<form method="" action="">


    <label for="District">Select District:</label>
    <select name="district" id="district" onchange="getThanaByDistrictId('district',this.value, 'thana');">
        <option>Select</option>

        @foreach($dis as $key => $value)
            <option value="{{ $key }}">{{ $value }}</option>
        @endforeach

    </select>

    <br><br>


    <label for="cars">Select Thana:</label>
    <select name="thana" id="thana">
        <option value="">Uttara Thana</option>
    </select>
    <br><br>

</form>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    function getThanaByDistrictId(district_id, district_value, thana_div, old_data) {
        // define old_data as an optional parameter
        if (typeof old_data === 'undefined') {
            old_data = 0;
        }
        if (district_value !== '') {
            console.log(district_value);

            {{--// $("#loaderImg").html("<img style='margin-top: -15px;' src='<?php echo url(); ?>/public/assets/images/ajax-loader.gif' alt='loading' />");--}}
            $.ajax({
                type: "GET",
                url: "/users/thana",
                data: {
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
}
    }


</script>

</html>
