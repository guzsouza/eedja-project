<x-auth title="Boas vindas">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <x-cardLogin title="Entrar">
            <div class="mt-1">
                <x-floatingInputField
                    type="email"
                    name="email"
                    label="Email"
                    ionic="mail-outline"
                />
            </div>
            <div class="mt-3">
                <x-floatingInputField
                    type="pasword"
                    name="password"
                    ionic="lock-closed-outline"
                    label="Senha"
                />
            </div>
            <div class="d-flex">
                <p style="font-size: 0.9rem" class="mt-2"><a href="{{ route('password.request') }}">Esqueceu a senha?</a></p>
            </div>

            <div class="mt-4 d-grid justify-content-center align-content-center">
                <x-buttonStyle
                    type="submit"
                    action="Avançar"
                    ionic="log-in-outline"
                />
                <span style="font-size: 0.9rem;" class="mt-2">Não possui conta? <a href="{{ route('register') }}">Crie uma!</a></span>
            </div>
        </x-cardLogin>
    </form>
</x-auth>