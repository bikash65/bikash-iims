<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="  {{URL::asset('cms/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('cms/img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Mahalaxmi Cold Store</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{URL::asset('cms/css/bootstrap.min.css')}}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{URL::asset('cms/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="{{URL::asset('cms/css/paper-dashboard.css')}}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{URL::asset('cms/css/demo.css')}}" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="{{URL::asset('cms/css/font.css')}}" rel="stylesheet">





</head>
@yield('content')