<x-auth title="Boas vindas">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="login-container d-flex justify-content-center align-items-center">
            <div class="col-sm-4 card card-container">
                <div class="d-flex align-items-center">
                    <img src="/img/logo-eedja.svg" alt="" style="width: 50px">
                </div>
                <div class="mt-3">
                    <h4><strong>Entrar</strong></h4>
                </div>
                <div class="mt-1">
                    <div class="card">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInput" placeholder="" name="email">
                            <label for="floatingInput" class="ionic"><ion-icon class="ionic" name="mail-outline"></ion-icon> <span style="margin-left: 10px" class="ionic">Email</span></label>
                        </div>
                    </div>
                    @error('email')
                        <div class="error" style="color: red; font-size: 1rem">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mt-3">
                    <div class="card">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatingInput" placeholder="" name="password">
                            <label for="floatingInput" class="ionic"><ion-icon class="ionic" name="lock-closed-outline"></ion-icon> <span style="margin-left: 10px" class="ionic">Senha</span></label>
                        </div>
                    </div>
                </div>
                @error('password')
                    <div class="error" style="color: red; font-size: 1rem">{{ $message }}</div>
                @enderror
                <div class="d-flex">
                    <p style="font-size: 0.9rem" class="mt-2"><a href="{{ route('password.request') }}">Esqueceu a senha?</a></p>
                </div>
                {{-- <div class="d-flex" style="margin-top: -20px">
                    <p style="font-size: 0.9rem" class="mt-2">Não possui conta? <a href="">Crie uma!</a></p>
                </div> --}}
    
                <div class="mt-4 d-grid justify-content-center align-content-center">
                    <x-buttonStyle
                        type="submit"
                        action="Avançar"
                        ionic="log-in-outline"
                    />
                    {{-- <button class="btn btn-primary" style="padding: 10px 30px">Entrar</button> --}}
                    <span style="font-size: 0.9rem;" class="mt-2">Não possui conta? <a href="{{ route('register') }}">Crie uma!</a></span>
                </div>
            </div>
        </div>
    </form>
</x-auth>

<style>
    .login-container{
        background-image: linear-gradient(white, #ececec);
        height: 90vh;
    }

    .card-container{
        padding: 3% 5%;
        box-shadow: 0px 5px 15px 2px rgba(0, 0, 0, 0.15);
    }

    .form-group{
        padding: 10px;
    }

    .ionic{
        display: flex;
        align-items: center;
        font-size: 1.2rem;
        color: #666F7B;
    }

    a{
        text-decoration: none;
        list-style: none;
    }
</style>