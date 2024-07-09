<div style="padding: 10px 30px" id="step1">
    <div class="mb-3">
        <div>
            <h5>Filtrar por:</h5>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="yearFilter">
                <label class="form-check-label" for="flexCheckDefault">
                  Ano
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="groupFilter">
                <label class="form-check-label" for="flexCheckDefault">
                  Turma
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="bimesterFilter">
                <label class="form-check-label" for="flexCheckDefault">
                  Bimestre
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="teacherFilter">
                <label class="form-check-label" for="flexCheckDefault">
                  Professor
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="disciplineFilter">
                <label class="form-check-label" for="flexCheckDefault">
                  Disciplina
                </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="dateFilter">
                <label class="form-check-label" for="flexCheckDefault">
                  Data
                </label>
            </div>            

            <div class="mt-5 d-flex justify-content-center">
                <div onclick="changeStep('step2')">
                    <x-buttonStyle
                        type="button"
                        color="success"
                        action="Filtrar"
                        ionic="filter-outline"
                    />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mb-3" id="step2">
    <form action="" method="get" id="planningFilter">
        @csrf
        <select class="form-select" aria-label="Default select example" name="year" id="year">
            <option selected disabled>Escolha o ano</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
        </select>

        <select class="mt-3 form-select" aria-label="Default select example" name="group_id" id="group">
            <option selected disabled>Escolha o regimento</option>
            @foreach ($groups as $group)
                <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
            @endforeach
        </select>

        <select class="mt-3 form-select" aria-label="Default select example" name="bimester" id="bimester">
            <option selected disabled>Escolha o bimestre</option>
            <option value="1">1º Bimestre</option>
            <option value="2">2º Bimestre</option>
            <option value="3">3º Bimestre</option>
            <option value="4">4º Bimestre</option>
        </select>
                            
        <select class="mt-3 form-select" aria-label="Default select example" name="teacher_id" id="teacher">
            <option selected disabled>Escolha o professor</option>
            @foreach ($teachers as $teacher)
                <option value="{{ $teacher['id'] }}">{{ $teacher['name'] }}</option>
            @endforeach
        </select>
        
        <select class="mt-3 form-select" aria-label="Default select example" name="discipline_id" id="discipline">
            <option selected disabled>Escolha a disciplina</option>
            @foreach ($disciplines as $discipline)
                <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
            @endforeach
        </select>

        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="floatingInput" name="date" id="date">
            <label for="floatingInput">Data</label>
        </div>

        <div class="mt-5 d-flex justify-content-between">
            <div>
                <div class="card-btn-container">
                    <div class="input-group d-flex justify-content-center">
                        <div onclick="changeStep('step1')">
                            <x-buttonStyle
                                type="button"
                                color="primary"
                                action="Voltar"
                                ionic="arrow-back-outline"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card-btn-container">
                    <div class="input-group d-flex justify-content-center">
                        <div onclick="changeStep('step1')">
                            <x-buttonStyle
                                type="submit"
                                color="success"
                                action="Buscar"
                                ionic="search-outline"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    restartFilters();
    
    function restartFilters(){
        $("#step1").show();
        $("#step2").hide();
        $("#year").hide();
        $("#group").hide();
        $("#bimester").hide();
        $("#teacher").hide();
        $("#discipline").hide();
        $("#date").hide();
    }

    function changeStep(step) {
        if(step === 'step2'){
            $("#step1").fadeOut(500, function (){
                showFilters();
                $("#step2").fadeIn(500);
            });
        } else if(step === 'step1'){
            $("#step2").fadeOut(500, function (){
                restartFilters();
                $("#step1").fadeIn(500);
            });
        }
    }

    function showFilters(){
        if(document.getElementById('yearFilter').checked){
            $("#year").show();
        }
        if(document.getElementById('groupFilter').checked){
            $("#group").show();
        }
        if(document.getElementById('bimesterFilter').checked){
            $("#bimester").show();
        }
        if(document.getElementById('teacherFilter').checked){
            $("#teacher").show();
        }
        if(document.getElementById('disciplineFilter').checked){
            $("#disicpline").show();
        }
        if(document.getElementById('dateFilter').checked){
            $("#date").show();
        }
    }
</script>