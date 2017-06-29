<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>

    <script type="text/javascript" src="../../../js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="../../../fonts/font-awesome-4.6.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../css/publicCommon.css">


    @yield("pageCss")


</head>
<body>
{{--header--}}
@include('layouts.common.commonTop')

@include('layouts.common.header')

@include('layouts.common.navigationIndex')

{{--content--}}

@yield("bodyContent")


{{--footer--}}
<script type="text/javascript" src="../../../../js/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="../../../../js/jquery-validation/js/additional-methods.js"></script>
<script type="text/javascript" src="../../../../js/layer3.0.3/layer.js"></script>

@include('layouts.common.footer')

@yield("pageScripts")
</body>
</html>