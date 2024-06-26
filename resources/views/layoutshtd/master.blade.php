<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title', 'HikerTrack')</title>
    @include('layoutshtd.app.css')   
    @yield('style')

</head>
<body>
    <!-- Header -->


    <!-- Sidebar -->


    <!-- Main content -->

    <div id="main-wrapper">
    @include('layoutshtd.header')
    @include('layoutshtd.sidebar')
        @yield('content')
        @include('layoutshtd.footer')
    </div>

    @include('layoutshtd.app.script')   
</body>
</html>
