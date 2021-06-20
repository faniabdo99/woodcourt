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
    <link rel="stylesheet" href="{{url('public')}}/css/basic.min.css">
    <link rel="stylesheet" href="{{url('public')}}/css/dropzone.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"/>
    @if(strpos(url()->current(), 'admin'))
      <link rel="stylesheet" type="text/css" href="{{url('public')}}/datatables/datatables.min.css" >
    @endif
    <link rel="stylesheet" href="{{url('public')}}/css/app.css">
    <link rel="stylesheet" href="{{url('public')}}/css/flaticon.css">
    @if(Route::currentRouteName() == 'expert-hub')
      <link rel="stylesheet" href="{{url('public')}}/font/flaticon.css">
    @endif
    <link rel="shortcut icon" href="{{url('public')}}/images/favicon.png" />
    <title>The Wood Court - {{$PageTitle ?? 'Kitchen, Floor ... and More'}}</title>
    <meta name="description" content="{{$Description ?? ''}}" >
    <meta name="keywords" content="مدونة , نقرة , مقالات , برمجة , تصميم , أكواد , تقنية">
    <link rel="canonical" href="{{url()->current()}}" >
    <!-- Open Graph data -->
    <meta property="og:title" content="The Wood Court - {{$PageTitle ?? ''}}" >
    <meta property="og:type" content="{{$ogType ?? ''}}" >
    <meta property="og:url" content="{{url()->current()}}" >
    <meta property="og:image" content="{{$ogImage ?? url('public/images/the-wood-court-og.jpg')}}">
    <meta property="og:description" content="{{$Description ?? ''}}" >
    <meta property="og:site_name" content="The Wood Court" >
    <meta name="application-name" content="The Wood Court">
    <meta name="msapplication-TileColor" content="#0D8287">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-RND47459CZ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-RND47459CZ');
    </script>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '536546090685604',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v10.0'
        });
      };
    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
    <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PPPW7VJ');</script>
    <!-- End Google Tag Manager -->
  </head>
