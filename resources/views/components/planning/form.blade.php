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
                id="content"
                name="content"
                label="Conteúdos"
                placeholder="Conteúdos"
                value="{{ old('content', optional($planning)->content) }}"
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
                id="resource"
                name="resource"
                label="Recurso"
                placeholder="Recurso"
                value="{{ old('resource', optional($planning)->resource) }}"
            />
        </div>

        <div class="mb-3">
            <x-textAreaField
                id="metodology"
                name="metodology"
                label="Metodologia"
                placeholder="Metodologia"
                value="{{ old('metodology', optional($planning)->metodology) }}"
            />
        </div>

        <div class="mb-3">
            <x-textAreaField
                id="project"
                name="project"
                label="Projetos"
                placeholder="Projetos"
                value="{{ old('project', optional($planning)->project) }}"
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