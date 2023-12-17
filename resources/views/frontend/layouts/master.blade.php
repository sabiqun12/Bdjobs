<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap_landing_page</title>
    @include('frontend.layouts.inc.style')
</head>

<body>
    {{-- header page --}}
    @include('frontend.layouts.inc.header')

    @yield('content')
    {{-- banner page --}}
    {{-- product page --}}
    {{-- client page --}}

    {{-- ending client --}}

    {{-- contact page --}}

    {{-- ending page --}}


    {{-- footer page --}}
    @include('frontend.layouts.inc.footer')

    @yield('banner_script')
    {{-- script file --}}
</body>

</html>
