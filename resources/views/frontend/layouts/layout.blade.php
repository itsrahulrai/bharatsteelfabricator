<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.headerLink')
</head>

<body id="body" class="it-magic-cursor">
    @include('frontend.includes.header')

   
    @yield('content')

</body>



@include('frontend.includes.footerLink')



</html>
