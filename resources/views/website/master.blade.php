<!DOCTYPE html>
<html lang="en">
<head>
 @include('website.includes.meta')
 <!-- SITE TITLE -->
     <title>Shopwise -@yield('title')</title>
     @include('website.includes.style')
     @include('website.includes.header-script-link')
</head>

<body>

@include('website.includes.header')

@yield('body_part')

@include('website.includes.footer')
<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>
@include('website.includes.script')

</body>
</html>
