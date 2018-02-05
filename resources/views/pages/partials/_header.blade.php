<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laciudad @yield('title')</title>
    <meta name="description" content="Creativity per excellence">

    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="description" content="@yield('description')">
    <meta property="url" content="@yield('product_url')">
    <meta property="image" content="@yield('product_image')">


    <meta property="og:type" content="website">
    <meta property="og:url" content="https://facebook.com/wisemandesigns">
    <meta property="og:title" content="Laciudad @yield('title')">
    <meta property="og:site_name" content="Laciudad">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('product_image')">
    <meta property="fb:app_id" content="113781612674999">

    <!-- Store CSRF token for AJAX calls -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lacuidad.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('fa/css/fontawesome.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Favicon and Apple Icons -->
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">

</head>
<body>