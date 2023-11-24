<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href={{asset("style/images/favicon.png")}}>
    <title>Hygge</title>
    @include('site.style')

</head>
<body>
@include('site.navbar')
@yield('content')
@include('site.footer')
<script src={{asset("style/js/jquery.min.js")}}></script>
<script src={{asset("style/js/bootstrap.min.js")}}></script>
<script src={{asset("style/js/plugins.js")}}></script>
<script src={{asset("style/js/jquery.themepunch.tools.min.js")}}></script>
<script src={{asset("style/js/scripts.js")}}></script>
</body>
</html>
