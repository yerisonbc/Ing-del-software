<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{Route::currentRouteName() }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/User/mystyle.css')}}">
   
</head>

<style>
   
    html,body{
background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #fff;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
/* background-color: #4ECDC4; */
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: white;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}

</style>
<body>
<header>
      <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: rgba(0,0,0,0.5) !important;">
          <div class="container-fluid">
                <div class="col-3">
                    <a href="{{route('inicio_user')}}" class="logo"><b>Tecno<span>SHOP</span></b></a>

                        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                </div>
            </div>
      </nav>
  </header>
<div class="container">
	<div class="d-flex justify-content-center h-100">

		<div class="card">
			<div class="card-header">
				<h3>Inic<span style="color:#4ecdc4">iar ses</span>ión  </h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">

                <form method="POST" action="{{ route('login') }}">
				    @csrf

					<div class="input-group form-group">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input id="email" type="email" placeholder="Correo Electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
                        @enderror
					</div>

					<div class="input-group form-group" id="show_hide_password">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  		
						<div class="input-group-prepend">
							<span class="input-group-text">
								<a href=""  onclick="mostrarContrasena()"><i id='ico' class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
					</div>

					<div class="row align-items-center remember">
						<input type="checkbox">Recordarme
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" style="background-color:#4ecdc4; color:#fff">
					</div>
				</form>
			</div>

			<div class="card-footer">

				<div class="d-flex justify-content-center links">
					¿No tienes cuenta?<a href="{{ route('registro') }}">Regístrate</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
				</div>

			</div>
		</div>
	</div>
</div>
    

<script>
  function mostrarContrasena(){
	event.preventDefault();
      var tipo = document.getElementById("password");
      var i = document.getElementById("ico");
      if(tipo.type == "password"){
          tipo.type = "text";
		  i.className= "fa fa-eye"
      }else{
          tipo.type = "password";
		  i.className = "fa fa-eye-slash" ;
      }
  }
</script>
</body>
</html>