<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title') | LERUfic</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @yield('frontcss')
  <link rel="stylesheet" href="{{URL::asset('semantic/semantic.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('semantic/semantic.css')}}">
  <link rel="stylesheet" href="{{URL::asset('css/font-awesome.min.css')}}">
  <link rel="shortcut icon" href="{{URL::asset('/favicon.ico')}}" type="image/x-icon">
  <style type="text/css">
    body{
      background-color:#f1f1f1;
      background-image:url({{URL::asset('noise.png')}});
      background-repeat:repeat;
      background-position:top left;
      background-attachment:fixed;
    }
  </style>
  @yield('backcss')
</head>
<body>
  <div class="ui left demo vertical inverted sidebar labeled icon menu">
    <a class="item"><i class="home icon"></i>Dashboard</a>
    <div class="item"><i class="money icon"></i>Pembayaran
      <hr>
      <div class="menu">
        <a class="item">Sudah Dibayar</a>
        <a class="item">Belom Dibayar</a>
      </div>
    </div>

    <div class="item"><i class="dropbox icon"></i>Inventaris
      <hr>
      <div class="menu">
        <a class="item">List Inventaris</a>
      </div>
    </div>
    
    <div class="item"><i class="info icon"></i>Informasi
      <hr>
      <div class="menu">
        <a class="item">Data User</a>
        <a class="item">Data Kontrakan</a>
      </div>
    </div>

    <div class="item"><i class="options icon"></i>Setting
      <hr>
      <div class="menu">
        <a class="item">Setting User</a>
      </div>
    </div>

    <a class="item"><i class="sign out icon"></i>Sign Out</a>
  
  </div>
    <div class="pusher">
      @yield('navbar')
      <div class="ui container">
        @yield('content')
        @yield('modal')
      </div>
    </div>
  @yield('frontjs')
  <script src="{{URL::asset('js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('semantic/semantic.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
  <script>
    $('#toggle').click(function(){
      $('.ui.sidebar').sidebar('toggle');
    });
  </script>
  @yield('backjs')
</body>
</html>