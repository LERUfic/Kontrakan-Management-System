<!DOCTYPE html>
<html>
<head>
	<title>LERUfic Atans</title>
	<link rel="stylesheet" type="text/css" href=" {{URL::asset('semantic/semantic.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('semantic/semantic.css')}}">
	<style type="text/css">
		#tombol{
			left:83%;
			margin-left: 10px;
			margin-top: 10px;
			z-index: 2;
			position: fixed;
		}
		#particles-js {
		  position:fixed;
		  top:0;
		  right:0;
		  bottom:0;
		  left:0;
		  z-index: 1;
		}
		#formlogin{
			margin-left: 15px;
			margin-top: 15px;
			margin-right: 15px;
			margin-bottom: 15px;
		}
		.logo {
			margin: auto;
			top:0;
		  	right:0;
		  	bottom:0;
		  	left:0;
			position: relative;
		}

		body {
			background-color:#f1f1f1;
			background-image:url({{URL::asset('noise.png')}});
			background-repeat:repeat;
			background-position:top left;
			background-attachment:fixed;
			}
	</style>

</head>
<body>
	<div class="ui buttons" id="tombol" >
	  <button onclick="showSignInModal()" class="ui inverted red button">Sign In</button>
	  <div class="or"></div>
	  <button onclick="showSignUpModal()" class="ui inverted orange	 button">Sign Up</button>
	</div>

	<div class="ui modal" id="modalSignIn">
	  <i class="close icon"></i>
	  <div class="header">
	  	Sign-In
	  </div>
	  <div class="description">
	    <form method="POST" action="#" class="ui form" id="formlogin">
	      	{{ csrf_field() }}
	    	<div class="field">
    			<label>Username</label>
    			<input type="text" name="username" placeholder="username">
  			</div>
  			<div class="field">
    			<label>Password</label>
    			<input type="password" name="password" placeholder="password">
  			</div>
  			<button class="ui button" type="submit">Submit</button>
	    </form>
	    <br>
	  </div>
	</div>
	
	<div class="ui modal" id="modalSignUp">
	  <i class="close icon"></i>
	  <div class="ui attached message">
		  <div class="header">
		  	Sign-Up User
		  </div>
		  <div class="description">
		    <form method="POST" action="#" class="ui form" id="formlogin">
		      	{{ csrf_field() }}
		    	<div class="field">
	    			<label>Username</label>
	    			<input type="text" name="user_username" placeholder="username">
	  			</div>
	  			<div class="field">
	    			<label>Password</label>
	    			<input type="password" name="user_password" placeholder="password">
	  			</div>
	  			<div class="field">
	    			<label>ID Kontrakan</label>
	    			<input type="text" name="kontrakan_ID" placeholder="ID kontrakan">
	  			</div>
				<div class="field">
	    			<label>Nama Lengkap</label>
	    			<input type="text" name="user_fullname" placeholder="Nama Lengkap">
	  			</div>
				<div class="field">
	    			<label>No HP</label>
	    			<input type="text" name="user_noHP" placeholder="No HP">
	  			</div>
	  			<div class="field">
	    			<label>Alamat Asal</label>
	    			<textarea name="user_alamat" rows="2" placeholder="Alamat Asal"></textarea>
	  			</div>
	  			<button class="ui button" type="submit">Submit</button>
		    </form>
		    <hr>
		    <div class="ui bottom attached warning message" id="formlogin">
	  			<i class="icon help"></i>
	  			Belum Punya ID Kontrakan <a href="/create_kontrakan">Masuk Sini</a> Terlebih Dahulu.
			</div>
		    <br>
		  </div>
		  </div>
		</div>
	

	<div id="particles-js"></div>
	<div class="ui container" >
	    <div class="logo" width="100%" height="100%" align="center" align="center">
	      <img src="{{URL::asset('logo.png')}}">
	    </div>
	</div>
	<script src="{{URL::asset('js/jquery-2.2.3.min.js')}}" type="text/javascript"></script>
  	<script src="{{URL::asset('semantic/semantic.min.js')}}" type="text/javascript"></script>
  	<script src="{{URL::asset('js/particles.min.js')}}" type="text/javascript"></script>
  	<script type="text/javascript">
		  particlesJS("particles-js", {
		  "particles": {
		    "number": {
		      "value": 100,
		      "density": {
		        "enable": false,
		        "value_area": 800
			      }
		    },
		    "color": {
		      "value": "#8e0000"
		    },
		    "shape": {
		      "type": "circle",
		      "stroke": {
		        "width": 0,
		        "color": "#000000"
		      },
		      "polygon": {
		        "nb_sides": 3
		      },
		      "image": {
		        "src": "img/github.svg",
		        "width": 100,
		        "height": 100
		      }
		    },
		    "opacity": {
		      "value": 0.5,
		      "random": false,
		      "anim": {
		        "enable": false,
		        "speed": 1,
		        "opacity_min": 0.1,
		        "sync": true
		      }
		    },
		    "size": {
		      "value": 3,
		      "random": false,
		      "anim": {
		        "enable": false,
		        "speed": 40,
		        "size_min": 0.1,
		        "sync": false
		      }
		    },
		    "line_linked": {
		      "enable": true,
		      "distance": 150,
		      "color": "#2f2d2d",
		      "opacity": 0.4,
		      "width": 1
		    },
		    "move": {
		      "enable": true,
		      "speed": 6,
		      "direction": "none",
		      "random": false,
		      "straight": false,
		      "out_mode": "out",
		      "bounce": false,
		      "attract": {
		        "enable": false,
		        "rotateX": 600,
		        "rotateY": 1200
		      }
		    }
		  },
		  "interactivity": {
		    "detect_on": "canvas",
		    "events": {
		      "onhover": {
		        "enable": true,
		        "mode": "grab"
		      },
		      "onclick": {
		        "enable": true,
		        "mode": "repulse"
		      },
		      "resize": true
		    },
		    "modes": {
		      "grab": {
		        "distance": 400,
		        "line_linked": {
		          "opacity": 1
		        }
		      },
		      "bubble": {
		        "distance": 400,
		        "size": 40,
		        "duration": 2,
		        "opacity": 8,
		        "speed": 3
		      },
		      "repulse": {
		        "distance": 200,
		        "duration": 0.4
		      },
		      "push": {
		        "particles_nb": 4
		      },
		      "remove": {
		        "particles_nb": 2
		      }
		    }
		  },
		  "retina_detect": true
		});
  	</script>
  	<script type="text/javascript">
      	function showSignInModal(){
        	$('#modalSignIn').modal({
          		transition: 'browse',
        	}).modal('show');
      	};

      	function showSignUpModal(){
        	$('#modalSignUp').modal({
          		transition: 'browse',
        	}).modal('show');
      	}
  	</script>
</body>
</html>