<!DOCTYPE html>
<html lang="en">


<head>
@include('web.inc.head')
</head>

<body>


@include('web.inc.header')
@include('web.inc.nav')
@include('web.inc.sidebar')

@yield('main-body')
@include('web.inc.footer')
@include('web.inc.script')
</body>

</html>
