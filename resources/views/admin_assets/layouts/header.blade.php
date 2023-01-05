 <meta charset="utf-8" style="--scrollbar-width:16px; --moz-scrollbar-thin:16px; font-size: 0.925rem;">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../" />

    <title>@yield('title') - Admin Panel  </title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./node_modules/bootstrap/dist/css/bootstrap.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./node_modules/@fortawesome/fontawesome-free/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./node_modules/@fortawesome/fontawesome-free/css/regular.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./node_modules/@fortawesome/fontawesome-free/css/brands.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./node_modules/@fortawesome/fontawesome-free/css/solid.css')}}">


    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- include vendor stylesheets used in "Dashboard" page. see "/views//pages/partials/dashboard/@vendor-stylesheets.hbs" -->


    <!-- include fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./dist/css/ace-font.css')}}">



    <!-- ace.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./dist/css/ace.css')}}">


    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('admin_assets/./assets/favicon.png')}}" />

    <!-- "Dashboard" page styles, specific to this page for demo only -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./views/pages/dashboard/@page-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./dist/css/ace-themes.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./node_modules/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./node_modules/datatables.net-buttons-bs4/css/buttons.bootstrap4.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/./views/pages/table-datatables/@page-style.css')}}">