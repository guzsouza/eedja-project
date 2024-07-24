<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ $action }}" method="POST" id="planningForm">
        @csrf
        @if($update)
            @method('PUT')
        @endif
        <x-labelValueField 
            id="group" 
            label="Turma" 
            value="{{ $update ? $spreadsheet['group']['name'] : $params['group']['name'] }}"
            name="group_id" 
            hiddenValue="{{ $update ? $spreadsheet['group']['id'] : $params['group']['id'] }}"
        />

        <x-labelValueField 
            id="discipline" 
            label="Disciplina" 
            value="{{ $update ? $spreadsheet['discipline']['name'] : $params['discipline']['name'] }}"
            name="discipline_id" 
            hiddenValue="{{ $update ? $spreadsheet['discipline']['id'] : $params['discipline']['id'] }}"
        />

        <x-labelValueField 
            id="bimester" 
            label="Bimestre" 
            value="{{ $update ? $spreadsheet['bimester'] . 'º' : $params['bimester'] . 'º' }} Bimestre"
            name="bimester" 
            placeholder="Bimestre"
            hiddenValue="{{ $update ? $spreadsheet['bimester'] : $params['bimester'] }}"
        />

        <x-inputField 
            id="classes" 
            label="Número de aulas" 
            type="number" 
            name="classes"
            placeholder="Números de aulas"
            value="{{ old('classes', $update ? optional($spreadsheet)->classes : '') }}" 
        />

        <x-inputField 
            id="startDate" 
            label="Data de início" 
            type="date" 
            name="startDate"
            placeholder="Data inicial"
            value="{{ old('startDate', $update ? optional($spreadsheet)->startDate : '' ) }}" 
        />

        <x-inputField 
            id="endDate" 
            label="Data final" 
            type="date" 
            name="endDate"
            placeholder="Data Final"
            value="{{ old('endDate', $update ? optional($spreadsheet)->endDate : '' ) }}" 
        />

        <input type="hidden" name="teacher_id" value="1">
        <input type="hidden" name="year" value="{{ now()->year }}">

        @if($update)
            <input type="hidden" name="id" value="{{ optional($spreadsheet)->id }}">
        @endif

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