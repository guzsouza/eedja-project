<div style="padding: 10px 30px" id="step1">
    <div class="mb-3">
        <div>
            <h5>Filtrar por:</h5>

            <x-checkField
                id="yearFilter"
                label="Ano"
            />

            <x-checkField
                id="groupFilter"
                label="Turma"
            />

            <x-checkField
                id="bimesterFilter"
                label="Bimestre"
            />

            <x-checkField
                id="teacherFilter"
                label="Professor"
            />

            <x-checkField
                id="disciplineFilter"
                label="Disciplina"
            />

            <x-checkField
                id="dateFilter"
                label="Data"
            />

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

<div class="mb-3" id="step2" style="display: none;">
    <form action="{{ route('planning.show') }}" method="get" id="planningFilter">
        @csrf
        <x-selectField
            name="year"
            id="yearSelect"
            hide="{{ true }}"
            :options="[
                '2023',
                '2024',
                '2025'
            ]"
            placeholder="Selecione o ano"
            arrayOptions="{{ false }}"
        />

        <x-selectField
            name="group_id"
            id="groupSelect"
            hide="{{ true }}"
            :options="$groups"
            placeholder="Selecione o regimento"
        />
        
        <x-selectField
            name="Bimestre"
            id="bimesterSelect"
            hide="{{ true }}"
            :options="[
                [
                    'id' => '1',
                    'name' => '1º bimestre'
                ],
                [
                    'id' => '2',
                    'name' => '2º bimestre'
                ],
                [
                    'id' => '3',
                    'name' => '3º bimestre'
                ],
                [
                    'id' => '4',
                    'name' => '4º bimestre'
                ]
            ]"
            placeholder="Selecione o bimestre"
        />
        
        <x-selectField
            name="teacher_id"
            id="teacherSelect"
            hide="{{ true }}"
            :options="$teachers"
            placeholder="Selecione o professor"
        />
        
        <x-selectField
            name="discipline_id"
            id="disciplineSelect"
            hide="{{ true }}"
            :options="$disciplines"
            placeholder="Selecione a disciplina"
        />

        <x-inputField
            id="dateInput"
            name="date"
            type="date"
            hide="{{ true }}"
        />
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
                        <div>
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
    $(document).ready(function() {
        restartFilters();
    });

    function restartFilters(){
        document.getElementById('yearSelect').selectedIndex = 0;
        document.getElementById('groupSelect').selectedIndex = 0;
        document.getElementById('bimesterSelect').selectedIndex = 0;       
        document.getElementById('teacherSelect').selectedIndex = 0;      
        document.getElementById('disciplineSelect').selectedIndex = 0;
        $("#dateInput").hide().find('input').val("");
    }

    function changeStep(step) {
        if(step === 'step2'){
            $("#step1").fadeOut(500, function (){
                restartFilters();
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
        if($('#yearFilter').is(':checked')){
            $("#yearSelect").show();
        } else{
            $("#yearSelect").hide();
        }

        if($('#groupFilter').is(':checked')){
            $("#groupSelect").show();
        } else{
            $("#groupSelect").hide();
        }

        if($('#bimesterFilter').is(':checked')){
            $("#bimesterSelect").show();
        } else{
            $("#bimesterSelect").hide();
        }

        if($('#teacherFilter').is(':checked')){
            $("#teacherSelect").show();
        } else{
            $("#teacherSelect").hide();
        }

        if($('#disciplineFilter').is(':checked')){
            $("#disciplineSelect").show();
        } else{
            $("#disciplineSelect").hide();
        }

        if($('#dateFilter').is(':checked')){
            $("#dateInput").show();
        } else{
            $("#dateInput").hide();
        }
    }
</script>