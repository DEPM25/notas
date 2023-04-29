<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('img/Escudo.png') }}">
    <script src="https://kit.fontawesome.com/cefde82d95.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body>
    <img class="wave" src="{{ asset('img/wave.svg') }}">
    <div class="container">
        <div class="img">
            <img class="img" src="{{ asset('img/img_login.svg') }}" alt="">
        </div>
        

        <div class="login-container">
            
            <form class="sign-in" action="{{ route('iniciar-sesion') }}" method="POST" id="sign_in">
                @csrf
                <img src="{{ asset('img/Escudo.png') }}" alt="">
                <h2>Bienvenido</h2>

                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                @endif

                <div class="input-div one">
                    <i class="fas fa-user"></i>
                    <div>
                        <h5 class="label">Usuario</h5>
                        <input class="input" name="nick" type="text" value="{{ old('nick') }}">
                    </div>
                </div>
                <div class="input-div two">
                    <i class="fas fa-lock"></i>
                    <div>
                        <h5 class="label">Contraseña</h5>
                        <input class="input" name="password" id="pass" type="password">
                    </div>
                    <section>
                        <i class="fas fa-eye" id="btn_show" onclick="show_pass()"></i>
                    </section>
                </div>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>

    <script>
        const inputs = document.querySelectorAll(".input");
        function focusFunc() {
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }
        function blurFunc() {
            let parent = this.parentNode.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }
        inputs.forEach((input) => {
            input.addEventListener("focus", focusFunc);
            input.addEventListener("blur", blurFunc);
        });
        function show_pass(){
            var btn = document.getElementById("btn_show");
            var temp = document.getElementById("pass");
            if (temp.type === "password") {
                btn.className = "fas fa-eye-slash";
                temp.type = "text";
            }else{
                temp.type = "password";
                btn.className = "fas fa-eye";
            }
        }
    </script>
</body>
</html>