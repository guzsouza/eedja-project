<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ $action }}" method="POST" id="planningForm">
        
        @csrf
        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="group_id" required>
                <option selected disabled>Selecione a turma</option>
                @if(isset($spreadsheet))
                    <option value="{{ $spreadsheet['group']['id'] }}" selected>{{ $spreadsheet['group']['name'] }}</option>
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
                @if(isset($spreadsheet))
                    <option value="{{ $spreadsheet['discipline']['id'] }}" selected>{{ $spreadsheet['discipline']['name'] }}</option>
                @else
                    @foreach ($disciplines as $discipline)
                        <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
                    @endforeach
                @endif
            </select>
            <label for="floatingSelect">Disciplina</label>
        </div>

        <input type="hidden" value="1" name="teacher_id">
        {{-- <input type="hidden" value="{{ Auth::user()->id }}" name="teacher_id"> --}}

        <div class="form-floating mb-3">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="discipline_id">
                @if(isset($spreadsheet))
                    <option value="{{ $spreadsheet['bimester'] }}" selected>{{ $spreadsheet['bimester'] }}</option>
                @else    
                    <option value="1">1º Bimester</option>
                    <option value="2">2º Bimester</option>
                    <option value="3">3º Bimester</option>
                    <option value="4">4º Bimester</option>
                @endif
                <option selected disabled>Selecione a disciplina</option>
            </select>
            <label for="floatingSelect">Bimestre</label>
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