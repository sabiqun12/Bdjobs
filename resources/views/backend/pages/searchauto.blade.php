<!DOCTYPE html>
<html>
<head>
    <title>Laravel 9 Autocomplete search using jQuery UI - Nicesnippets.com</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript">
        // var siteUrl = "{{url('/')}}";
    </script>
</head>
<body>
 
<div class="container mt-4">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h2>Laravel 9 Autocomplete search using jQuery UI - Nicesnippets.com</h2>
        </div>
 
        <div class="card-body">

            <form name="autocomplete-textbox" id="autocomplete-textbox" method="POST" action="{{ route('searchdata')}}">
                @csrf
         
                <div class="form-group">
                    <label for="exampleInputEmail1">Search Name:</label>
                    <input type="text" id="first_name" name="first_name" class="form-control">
                </div>
     
            </form>
        </div>
    </div>
</div>  
    <script type="text/javascript">
        $(document).ready(function() {
            $( "#first_name" ).autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "/autocomplete",
                        data:{
                            term : request.term
                        },
                        dataType: "json",
                        success: function(data){
                            console.log(data);
                            var resp = $.map(data,function(obj){
                                return obj.first_name;
                            }); 
                            response(resp);
                        }
                    });
                },
                minLength: 2
                select: function (event, ui) {
                $('#first_name').val(ui.item.value);
                return false;
            }
            });
        });
    </script>
</body>
</html>