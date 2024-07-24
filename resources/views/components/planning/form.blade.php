@props([
    'action',
    'id',
    'planning' => ['a'],
    'update' => false
])

<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ $action }}" method="POST" id="planningForm">
        @if($update)
            @method('PUT')
        @endif
        @csrf
        <input type="hidden" name="spreadsheet_id" value="{{ $id }}">

        <x-inputField
            type="date"
            id="date"
            name="date"
            label="Data"
            value="{{ old('date', optional($planning)->date) }}"
        />
        
        <div class="mb-3">
            <x-textAreaField
                id="resume"
                name="resume"
                label="Resumo"
                placeholder="Digite o resumo don planejamento"
                value="{{ old('resume', optional($planning)->resume) }}"
            />
        </div>

        <div class="mb-3">
            <x-textAreaField
                id="contents"
                name="contents"
                label="Conteúdos"
                placeholder="Conteúdos"
                value="{{ old('contents', optional($planning)->contents) }}"
            />
        </div>
                
        <div class="mb-3">
            <x-textAreaField
                id="skills"
                name="skills"
                label="Habilidades"
                placeholder="Habilidades"
                value="{{ old('skills', optional($planning)->skills) }}"
            />
        </div>

        <div class="mb-3">
            <x-textAreaField
                id="resources"
                name="resources"
                label="Recurso"
                placeholder="Recurso"
                value="{{ old('resources', optional($planning)->resources) }}"
            />
        </div>

        <div class="mb-3">
            <x-textAreaField
                id="methodologies"
                name="methodologies"
                label="Metodologia"
                placeholder="Metodologia"
                value="{{ old('metodology', optional($planning)->methodologies) }}"
            />
        </div>

        <div class="mb-3">
            <x-textAreaField
                id="projects"
                name="projects"
                label="Projetos"
                placeholder="Projetos"
                value="{{ old('project', optional($planning)->projects) }}"
            />
        </div>


        <div class="mt-5">
            <x-buttonStyle
                type="submit"
                color="success"
                action="{{ $update ? 'Atualizar' : 'Enviar' }}"
                ionic="{{ $update ? 'checkmark-outline' : 'paper-plane-outline' }}"
            />
        </div>
    </form>
</div>