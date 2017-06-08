<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield("title")</title>

    <script type="text/javascript" src="../../../js/jquery.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../../css/reset.css">
    <link rel="stylesheet" type="text/css" href="../../../css/common.css">
    <link rel="stylesheet" type="text/css" href="../../../css/publicCommon.css">
    <link rel="stylesheet" type="text/css" href="../../../css/userOperateCss/baseLogin.css">

</head>
<body>
{{--header--}}
@include('layouts.auth.header')

{{--content--}}
<div class="containerCenter clearfix">
@yield("bodyContent")
</div>

{{--footer--}}
<script type="text/javascript" src="../../../../js/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="../../../../js/jquery-validation/js/additional-methods.js"></script>

@include('layouts.auth.footer')

@yield("pageScripts")
</body>
</html>