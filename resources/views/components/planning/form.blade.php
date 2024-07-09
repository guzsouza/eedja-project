<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ $action }}" method="POST" id="planningForm">
        @if($update)
            @method('PUT')
        @endif
        @csrf
        <input type="hidden" name="spreadsheet_id" value="@yield('id')">

        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" style="height: 80px" name="date" value="@isset($planning){{ old('date', $planning['date']) ?? '' }}@endisset" placeholder="Conteúdos">
            <label for="floatingInput">Data</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" style="height: 80px" name="content" value="@isset($planning){{ old('content', $planning['content']) ?? '' }}@endisset" placeholder="Conteúdos">
            <label for="floatingInput">Conteúdos</label>
        </div>
                
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" style="height: 80px"name="skills" value="@isset($planning){{ old('skills', $planning['skills']) ?? '' }}@endisset" placeholder="Habilidades">
            <label for="floatingInput">Habilidades</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" style="height: 80px"name="resource" value="@isset($planning){{ old('resources', $planning['resource']) ?? '' }}@endisset" placeholder="Recursos">
            <label for="floatingInput">Recursos</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" style="height: 80px" name="metodology" value="@isset($planning){{ old('metodology', $planning['metodology']) ?? '' }}@endisset" placeholder="Metodologias adotadas">
            <label for="floatingInput">Metodologia</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" style="height: 80px" name="project" value="@isset($planning){{ old('project', $planning['project']) ?? '' }}@endisset" placeholder="Trabalhos e projetos">
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