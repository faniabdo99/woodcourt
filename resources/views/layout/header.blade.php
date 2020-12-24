<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{url('public')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/owl.theme.green.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
    @if(strpos(url()->current(), 'admin'))
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/datatables/datatables.min.css" >
    @endif
    <link rel="stylesheet" href="{{url('public')}}/css/app.css">
    <link rel="stylesheet" href="{{url('public')}}/css/flaticon.css">
    <link rel="shortcut icon" href="{{url('public')}}/images/favicon.png" />
    <title>The Wood Court - {{$PageTitle ?? 'Kitchen, Floor ... and More'}}</title>
  </head>
