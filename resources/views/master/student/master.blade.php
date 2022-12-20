<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('teacherAssets')}}/assets/images/favicon-32x32.png" type="image/png"/>
    <!--plugins-->
    <link href="{{asset('teacherAssets')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
          rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="{{asset('teacherAssets')}}/assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/css/bootstrap-extended.css" rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/css/style.css" rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet"
          href="{{asset('teacherAssets')}}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('teacherAssets')}}/assets/css/pace.min.css" rel="stylesheet"/>
    <!-- Summernote css -->
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('teacherAssets')}}/assets/asset/images/favicon.ico">

    <!-- Summernote css -->
    <link href="{{asset('teacherAssets')}}/assets/asset/libs/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="{{asset('teacherAssets')}}/assets/asset/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('teacherAssets')}}/assets/asset/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('teacherAssets')}}/assets/asset/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- End Summernote css -->


    <!--Theme Styles-->
    <link href="{{asset('teacherAssets')}}/assets/css/dark-theme.css" rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/css/light-theme.css" rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/css/semi-dark.css" rel="stylesheet"/>
    <link href="{{asset('teacherAssets')}}/assets/css/header-colors.css" rel="stylesheet"/>








    <title>@yield('title')</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    @include('student.include.header')

    @include('student.include.left-sidebar')


    <main class="page-content">
        @yield('content')
    </main>

    @include('student.include.right-sidebar')

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('teacherAssets')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('teacherAssets')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('teacherAssets')}}/assets/js/pace.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('teacherAssets')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>

<!-- Summernote js -->
<!-- JAVASCRIPT -->
<script src="{{asset('teacherAssets')}}/assets/asset/libs/jquery/jquery.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/asset/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/asset/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/asset/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('teacherAssets')}}/assets/asset/libs/node-waves/waves.min.js"></script>

<!--tinymce js-->
<script src="{{asset('teacherAssets')}}/assets/asset/libs/tinymce/tinymce.min.js"></script>

<!-- Summernote js -->
<script src="{{asset('teacherAssets')}}/assets/asset/libs/summernote/summernote-bs4.min.js"></script>

<!-- init js -->
<script src="{{asset('teacherAssets')}}/assets/asset/js/pages/form-editor.init.js"></script>

<script src="{{asset('teacherAssets')}}/assets/asset/js/app.js"></script>
<!-- End Summernote js -->


<!--app-->
<script src="{{asset('teacherAssets')}}/assets/js/app.js"></script>
<script src="{{asset('teacherAssets')}}/assets/js/index.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
</script>


</body>
</html>
