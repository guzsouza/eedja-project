<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ $action }}" method="POST" id="planningForm">
        @csrf
        <div class="mb-3">
            <label for="group">Turma</label>
            <div class="form-control" id="group" aria-label="label select example">
                @if($update) {{ $spreadsheet['group']['name'] }} @else {{ $params['group']['name'] }} @endif
            </div>
        </div>
        <input type="hidden" name="group_id" value="@if($update){{ $spreadsheet['group']['id'] }}@else{{ $params['group']['id'] }}@endif">

        <div class="mb-3">
            <label for="discipline">Disciplina</label>
            <div class="form-control" id="discipline" aria-label="label select example">
                @if($update) {{ $spreadsheet['discipline']['name'] }} @else {{ $params['discipline']['name'] }} @endif
            </div>
        </div>
        <input type="hidden" name="discipline_id" value="@if($update){{ $spreadsheet['discipline']['id'] }}@else{{ $params['discipline']['id'] }}@endif">

        <div class="mb-3">
            <label for="bimester">Bimestre</label>
            <div class="form-control" id="bimester" aria-label="label select example">
                @if($update) {{ $spreadsheet['bimester'] }}º @else {{ $params['bimester'] }}º @endif Bimestre
            </div>
        </div>
        <input type="hidden" name="bimester" value="@if($update){{ $spreadsheet['bimester'] }}@else{{ $params['bimester'] }}@endif">

        <div class="form- mb-3">
            <label for="classes">Número de aulas</label>
            <input type="number" class="form-control" id="classes" name="classes" value="@isset($spreadsheet){{ old('classes', $spreadsheet['classes']) ?? '' }}@endisset">
        </div>

        <div class="form- mb-3">
            <label for="startDate">Data de início</label>
            <input type="date" class="form-control" id="startDate" name="startDate" value="@isset($spreadsheet){{ old('endDate', $spreadsheet['endDate']) ?? '' }}@endisset">
        </div>

        <div class="form- mb-3">
            <label for="endDate">Data final</label>
            <input type="date" class="form-control" id="endDate" name="endDate" value="@isset($spreadsheet){{ old('endDate', $spreadsheet['endDate']) ?? '' }}@endisset">
        </div>

        <input type="hidden" name="teacher_id" value="1">
        <input type="hidden" name="year" value="{{ now()->year }}">

        @if($update)
            <input type="hidden" name="id" value="{{ $spreadsheet['id'] }}">
        @endif

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