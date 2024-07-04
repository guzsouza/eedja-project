<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ route('planning.simple') }}" method="POST" id="planningForm">
        @csrf
        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="group_id" required>
                <option selected disabled>Selecione a turma</option>
                @if(isset($planning))
                    <option value="{{ $planning['group']['id'] }}" selected>{{ $planning['group']['name'] }}</option>
                @else
                    @foreach ($groups as $group)
                        <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
                    @endforeach
                @endif
            </select>
            <label for="floatingSelect">Turma</label>
        </div>

        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="discipline_id">
                <option selected disabled>Selecione a disciplina</option>
                @if(isset($planning))
                    <option value="{{ $planning['discipline']['id'] }}" selected>{{ $planning['discipline']['name'] }}</option>
                @else
                    @foreach ($disciplines as $discipline)
                        <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
                    @endforeach
                @endif
            </select>
            <label for="floatingSelect">Disciplina</label>
        </div>

        <input type="hidden" value="1" name="teacher_id">

        <div class="form-floating mb-3">
            <input class="form-control" id="floatingInput" style="height: 80px" name="content" value="@isset($planning){{ old('content', $planning['content']) ?? '' }}@endisset" placeholder="Conteúdos">
            <label for="floatingInput">Conteúdos</label>
        </div>
                
        <div class="form-floating mb-3">
            <input class="form-control" id="floatingInput" style="height: 80px"name="skills" value="@isset($planning){{ old('skills', $planning['skills']) ?? '' }}@endisset" placeholder="Habilidades">
            <label for="floatingInput">Habilidades</label>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" id="floatingInput" style="height: 80px"name="resources" value="@isset($planning){{ old('resources', $planning['resource']) ?? '' }}@endisset" placeholder="Recursos">
            <label for="floatingInput">Recursos</label>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" id="floatingInput" style="height: 80px" name="metodology" value="@isset($planning){{ old('metodology', $planning['metodology']) ?? '' }}@endisset" placeholder="Metodologias adotadas">
            <label for="floatingInput">Metodologia</label>
        </div>

        <div class="form-floating mb-3">
            <input class="form-control" id="floatingInput" style="height: 80px" name="project" value="@isset($planning){{ old('project', $planning['project']) ?? '' }}@endisset" placeholder="Trabalhos e projetos">
            <label for="floatingInput">Projetos</label>
        </div>

        @if($update)
            <div class="mt-5">
                <x-buttonStyle
                    type="submit"
                    color="success"
                    action="Atualizar"
                    ionic="checkmark-outline"
                />
            </div>
        @else
            <div class="mt-5">
                <x-buttonStyle
                    type="submit"
                    color="success"
                    action="Enviar"
                    ionic="paper-plane-outline"
                />
            </div>
        @endif
    </form>
</div>