<div style="padding: 10px 30px">
    <div class="mb-3">
        <div>
            <h5>Filtrar por:</h5>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Ano
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Turma
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Bimestre
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Professor
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Disciplina
                </label>
            </div>

            <div class="mt-5 d-flex justify-content-end">
                <button class="btn btn-success" onclick="changeStep('setp2')">Filtrar</button>
            </div>
        </div>
    </div>

    <div class="mb-3" id="step2">
        <form action="{{ route('planning.advanced') }}" method="POST" id="planningFilter">
            @csrf
            <select class="form-select" aria-label="Default select example" name="year">
                <option selected disabled>Escolha o ano</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
            </select>

            <select class="mt-3 form-select" aria-label="Default select example" name="group_id">
                <option selected disabled>Escolha o regimento</option>
                @foreach ($groups as $group)
                    <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
                @endforeach
            </select>

            <select class="mt-3 form-select" aria-label="Default select example" name="bimester">
                <option selected disabled>Escolha o bimestre</option>
                <option value="1">1º Bimestre</option>
                <option value="2">2º Bimestre</option>
                <option value="3">3º Bimestre</option>
                <option value="4">4º Bimestre</option>
            </select>
                                
            <select class="mt-3 form-select" aria-label="Default select example" name="teacher_id" id="teachers">
                <option selected disabled>Escolha o professor</option>
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher['id'] }}">{{ $teacher['name'] }}</option>
                @endforeach
            </select>
            
            <select class="mt-3 form-select" aria-label="Default select example" name="discipline_id" id="disciplines">
                <option selected disabled>Escolha a disciplina</option>
                @foreach ($disciplines as $discipline)
                    <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
                @endforeach
            </select>
        </form>
    </div>
</div>

<script>
    $("#step1").show();
    $("#step2").hide();

    function changeStep(step){
        if(step === 'step2'){

        } else if (step === 'step1'){
            
        }
    }
</script>