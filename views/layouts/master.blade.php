<!DOCTYPE html>
<!--[if IE 9]>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">
<!--<![endif]-->

<head>
@include('partials/metadata')
</head>

<body class="c-layout-header-fixed c-layout-header-mobile-fixed c-layout-header-topbar c-layout-header-topbar-collapse">

@include('partials/header')

@yield('content')

@include('partials/footer')

@include('partials/styles')
@include('partials/scripts')

</body>

</html>