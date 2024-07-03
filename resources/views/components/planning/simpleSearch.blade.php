<div class="mb-3" style="padding: 10px 30px">
    <form action="{{ route('planning.simple') }}" method="POST" id="planningFilter">
        @csrf
        <select class="form-select" aria-label="Default select example" name="group_id">
            <option selected disabled>Escolha o regimento</option>
            @foreach ($groups as $group)
                <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
            @endforeach
        </select>
        
        <select class="mt-3 form-select" aria-label="Default select example" name="discipline_id">
            <option selected disabled>Escolha a disciplina</option>
            @foreach ($disciplines as $discipline)
                <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
            @endforeach
        </select>

        <input type="hidden" value="{{ now()->year }}" name="year">

        <select class="mt-3 form-select" aria-label="Default select example" name="bimester">
            <option selected disabled>Escolha o bimestre</option>
            <option value="1">1º Bimestre</option>
            <option value="2">2º Bimestre</option>
            <option value="3">3º Bimestre</option>
            <option value="4">4º Bimestre</option>
        </select>
    </form>
</div>