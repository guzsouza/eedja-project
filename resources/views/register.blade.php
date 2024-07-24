<x-auth title="Cadastre-se">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <x-cardLogin title="Entrar">
        <div class="mt-1">
            <x-floatingInputField
                name="name"
                label="Nome"
                icon="{{ false }}"
            />
            <x-floatingInputField
                name="lastname"
                label="Sobrenome"
                icon="{{ false }}"
            />
            <x-floatingInputField
                name="cpf"
                label="CPF"
                icon="{{ false }}"
            />
            <x-floatingInputField
                name="email"
                label="Email"
                icon="{{ false }}"
            />
            <x-floatingInputField
                name="password"
                label="Senha"
                icon="{{ false }}"
            />
            <x-floatingInputField
                name="password"
                label="Senha"
                icon="{{ false }}"
            />
        </div>
</x-auth>