<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Iconos  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
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

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Crear Cuenta</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
            <form method="POST" action="{{ route('register') }}">
				@csrf
					<div class="input-group form-group">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input id="name" placeholder="Nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        	
					</div>
					<div class="input-group form-group">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input id="email" type="email" placeholder="Correo Electronico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >
                        	
					</div>

					<div class="input-group form-group" id="show_hide_password">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                  		
						<div class="input-group-prepend">
							<span class="input-group-text">
								<a href=""  onclick="mostrarContrasena()"><i id='ico' class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
					</div>
					<div class="input-group form-group" id="show_hide_password">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input id="password-confirm" type="password" placeholder="Confirmar Contraseña" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password">
                  		
						<div class="input-group-prepend">
							<span class="input-group-text">
								<a href=""  onclick="mostrarContrasena()"><i id='ico' class="fa fa-eye-slash" aria-hidden="true"></i></a>
                        </div>
					</div>

					<div class="form-group">
						<input type="submit"  class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<!-- <div class="d-flex justify-content-center links">
					Don't have an account?<a href="{{ route('register') }}">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div> -->
			</div>
		</div>
	</div>
</div>
    
<script>
  function mostrarConrasena(){
   
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass(  );
        }
    
}
</script>
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