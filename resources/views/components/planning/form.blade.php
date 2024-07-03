<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ route('planning.simple') }}" method="POST" id="planningForm">
        @csrf
        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Selecione a turma</option>
                @foreach ($groups as $group)
                    <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
                @endforeach
            </select>
            <label for="floatingSelect">Turma</label>
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected disabled>Selecione a disciplina</option>
                @foreach ($disciplines as $discipline)
                    <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
                @endforeach
            </select>
            <label for="floatingSelect">Disciplina</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingTextarea2" style="height: 80px"></textarea>
            <label for="floatingTextarea2">Conteúdos</label>
        </div>
                
        <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingTextarea2" style="height: 80px"></textarea>
            <label for="floatingTextarea2">Habilidades</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingTextarea2" style="height: 80px"></textarea>
            <label for="floatingTextarea2">Recursos</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingTextarea2" style="height: 80px"></textarea>
            <label for="floatingTextarea2">Metodologia</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" id="floatingTextarea2" style="height: 80px"></textarea>
            <label for="floatingTextarea2">Projetos</label>
        </div>
    </form>
</div>