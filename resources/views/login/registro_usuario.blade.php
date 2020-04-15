@extends('User/Layouts/app_user')

@section('content')
<style>
.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #4ECDC4;

}
.fab{
    background-color: white;
}
.social_icon span:hover{
color: white;
background-color:#4ECDC4;
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

</style>
<div class="section">
<div class="container">

    <div class="card " >

        <div class="card-header" style="background-color: #15161d;">
            <h3>Crear <span style="color:#4ecdc4">Cuenta</span> </h3>
            <div class="d-flex justify-content-end social_icon">
                <span><i class="fab fa-facebook-square"></i></span>
                <span><i class="fab fa-google-plus-square"></i></span>
                <span><i class="fab fa-twitter-square"></i></span>
            </div>
        </div>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="card-body ">
                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" name="nombre"class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre" value="{{ old('nombre') }}" autofocus>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" placeholder="Apellido" value="{{ old('apellido') }}">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="input-group form-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input id="email" type="email" placeholder="Correo Electrónico" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  >
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="input-group form-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                            </div>
                            <input id="email-confirm" type="email" placeholder="email_confirmation" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">
                            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="input-group form-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input id="password" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="email" autocomplete="new-password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="input-group form-group">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            </div>
                            <input id="password-confirm" type="password" placeholder="Contraseña" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" autocomplete="new-password">
                            
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                </div> 
            </div>   
            <p class="text-center"> <button class="btn btn-success" type="submit" style="background-color:#4ecdc4; border-color:#4ecdc4"> Cear Cuenta </button>  </p>
        </form>
        <p class="text-center title ">
                <strong> "Todos los Campos  son obligatorios" </strong> 
        </p>
    </div>

</div>
</div>
@endsection
