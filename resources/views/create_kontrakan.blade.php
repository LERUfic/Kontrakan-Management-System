<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href=" {{URL::asset('semantic/semantic.min.css')}}">

  <script src="{{URL::asset('js/jquery.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/semantic.min.js')}}" type="text/javascript"></script>
  <script src="{{URL::asset('js/particles.min.js')}}" type="text/javascript"></script>

  <style type="text/css">
    body {
        background-color:#f1f1f1;
        background-image:url({{URL::asset('noise.png')}});
        background-repeat:repeat;
        background-position:top left;
        background-attachment:fixed;
    }
    
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="{{URL::asset('logo.png')}}" class="image">
      <div class="content" style="color: #8e0000">
        Buat Kontrakan Baru
      </div>
    </h2>
    <form class="ui large form" method>
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="home icon"></i>
            <input type="text" name="kontrakan_ID" placeholder="ID Kontrakan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="kontrakan_name" placeholder="Nama Kontrakan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="kontrakan_pemilik" placeholder="Nama Pemilik Kontrakan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="mobile icon"></i>
            <input type="text" name="kontrakan_HP" placeholder="No HP Pemilik Kontrakan">
          </div>
        </div>
        <div class="field">
          <label style="text-align: left">Tanggal Mulai Ngontrak</label>
          <div class="ui left icon input">
            <i class="calendar icon"></i>
            <input type="date" name="kontrakan_dateawal" placeholder="Tanggal Mulai Ngontrak">
          </div>
        </div>
        <div class="field">
          <label style="text-align: left">Tanggal Selesai Ngontrak</label>
          <div class="ui left icon input">
            <i class="calendar icon"></i>
            <input type="date" name="kontrakan_dateakhir" placeholder="Tanggal Selesai Ngontrak">
          </div>
        </div>
        <input type="hidden" name="kontrakan_jumlah" value="0">
        <input type="submit" class="fluid ui red button" value="Create Kontrakan">
      </div>
      <div class="ui error message"></div>
    </form>
  </div>
</div>

</body>

</html>