<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - @yield('backend_title') </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/adminlte.min.css">
    @yield('pagewise_style')
</head>


<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('backend.layouts.inc.navbar')
        @include('backend.layouts.inc.sidebar')
        <div class="content-wrapper">
            <div class="content-header">
                <div class="row mb-2">
                  <div class="col-sm-6">
                      <h2>@yield('content_title')</h2>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                  </div><!-- /.col -->
                </div><!-- /.row -->
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('backend.layouts.inc.footer')
    </div>

    @yield('pagewise_script')
</body>

</html>
