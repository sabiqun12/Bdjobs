<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - @yield('backend_title') </title>
    @include('backend.layouts.inc.style')
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
            {{-- @yield('content_header') --}}
            <div class="content">
                @yield('content')
            </div>
        </div>
        @include('backend.layouts.inc.footer')
    </div>

    @include('backend.layouts.inc.script')

    @yield('pagewise_script')
</body>

</html>
