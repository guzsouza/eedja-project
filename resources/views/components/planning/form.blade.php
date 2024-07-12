<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ $action }}" method="POST" id="planningForm">
        @if($update)
            @method('PUT')
        @endif
        @csrf
        <input type="hidden" name="spreadsheet_id" value="{{ $id }}">

        <div class="mb-3">
        <label for="data">Data</label>
            <input type="date" class="form-control" id="data" name="date" value="@isset($planning){{ old('date', $planning['date']) ?? '' }}@endisset">
        </div>

        <div class="mb-3">
            <label for="content">Conteúdos</label>
            <textarea class="form-control" id="content" style="height: 80px" name="content" placeholder="Conteúdos">@isset($planning){{ old('content', $planning['content']) ?? '' }}@endisset</textarea>
        </div>
                
        <div class="mb-3">
            <label for="skills">Habilidades</label>
            <textarea class="form-control" id="skills" style="height: 80px"name="skills" placeholder="Habilidades">@isset($planning){{ old('skills', $planning['skills']) ?? '' }}@endisset</textarea>
        </div>

        <div class="mb-3">
            <label for="resource">Recursos</label>
            <textarea class="form-control" id="resource" style="height: 80px"name="resource" placeholder="Recursos">@isset($planning){{ old('resources', $planning['resource']) ?? '' }}@endisset</textarea>
        </div>

        <div class="mb-3">
            <label for="metodology">Metodologia</label>
            <textarea class="form-control" id="metodology" style="height: 80px" name="metodology" placeholder="Metodologias adotadas">@isset($planning){{ old('metodology', $planning['metodology']) ?? '' }}@endisset</textarea>
        </div>

        <div class="mb-3">
            <label for="project">Projetos</label>
            <textarea class="form-control" id="project" style="height: 80px" name="project" placeholder="Trabalhos e projetos">@isset($planning){{ old('project', $planning['project']) ?? '' }}@endisset</textarea>
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