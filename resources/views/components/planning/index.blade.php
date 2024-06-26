<x-app-layout>
    @section('title', 'Planejamentos')
    <section class="section-container">
        <div class="card-container d-flex">
            <button type="button" class="btn btn bg-primary" onclick="changeStep('1')">Busca Simples</button>
            <button type="button" class="btn btn bg-primary" onclick="changeStep('2')">Busca avançada</button>
        </div>
        <div class="card-container" id="step1">
            <form action="{{ route('planning.show') }}" method="POST" id="planningFilter">
                    @csrf
                <div class="card">  
                    <select class="form-select" aria-label="Default select example" name="group_id">
                        <option selected disabled>Escolha o regimento</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
                        @endforeach
                    </select>
                    
                    <select class="form-select mt-3" aria-label="Default select example" name="discipline_id">
                        <option selected disabled>Escolha a disciplina</option>
                        @foreach ($disciplines as $discipline)
                            <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
                        @endforeach
                    </select>

                    <input type="hidden" value="{{ now()->year }}" name="year">
    
                    <select class="form-select mt-3" aria-label="Default select example" name="bimester">
                        <option selected disabled>Escolha o bimestre</option>
                        <option value="1">1º Bimestre</option>
                        <option value="2">2º Bimestre</option>
                        <option value="3">3º Bimestre</option>
                        <option value="4">4º Bimestre</option>
                    </select>

                    <button type="submit" class="btn btn-success mt-3">Enviar</button>
                </div>
            </form>
        </div>

        <div class="card-container" id="step2">
            <form action="{{ route('planning.show') }}" method="POST" id="planningFilter">
                    @csrf
                <div class="card">  
                    <select class="form-select" aria-label="Default select example" name="group_id">
                        <option selected disabled>Escolha o regimento</option>
                        @foreach ($groups as $group)
                            <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
                        @endforeach
                    </select>
    
                    <select class="form-select mt-3" aria-label="Default select example" name="bimester">
                        <option selected disabled>Escolha o bimestre</option>
                        <option value="1">1º Bimestre</option>
                        <option value="2">2º Bimestre</option>
                        <option value="3">3º Bimestre</option>
                        <option value="4">4º Bimestre</option>
                    </select>
                    <div class="d-flex input-group mt-3">
                        <input type="checkbox" name="check" id="teacherCheck" onchange="showInput('teacher')">
                        <p>Selecionar professor</p>
                    </div>
                    <select class="form-select mt-3" aria-label="Default select example" name="year" id="teachers" style="display: none">
                        <option selected disabled>Escolha o professor</option>
                        @foreach ($disciplines as $discipline)
                            <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
                        @endforeach
                    </select>
                    
                    <div class="d-flex input-group mt-3">
                        <input type="checkbox" name="check" id="disciplineCheck" onchange="showInput('discipline')">
                        <p>Selecionar disciplina</p>
                    </div>
                    <select class="form-select mt-3" aria-label="Default select example" name="discipline_id" id="disciplines" style="display: none">
                        <option selected disabled>Escolha a disciplina</option>
                        @foreach ($disciplines as $discipline)
                            <option value="{{ $discipline['id'] }}">{{ $discipline['name'] }}</option>
                        @endforeach
                    </select>

                    <select class="form-select mt-3" aria-label="Default select example" name="year">
                        <option selected disabled>Escolha o ano</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>

                    <button type="submit" class="btn btn-success mt-3">Enviar</button>
                </div>
            </form>
        </div>
    </section>
    <script>
        document
        $("#step1").show();
        $("#step2").hide();

        function changeStep(step){
            if(step === "1"){
                $("#step2").fadeOut(250, function(){
                    $("#step1").fadeIn(250);
                });
            } else if(step === "2"){
                $("#step1").fadeOut(250, function(){
                    $("#step2").fadeIn(250);
                });
            }
        }

        function showInput(input){
            if(input === "teacher"){
                if(document.getElementById('teacherCheck').checked){
                    $("#teachers").fadeIn(500);
                }
                else{
                    $("#teachers").fadeOut(500);
                }
            } else if(input === "discipline"){
                if(document.getElementById('disciplineCheck').checked){
                    $("#disciplines").fadeIn(500);
                }
                else{
                    $("#disciplines").fadeOut(500);
                }
            }
        }

        function submitForm(){
            document.getElementById('planningFilter').submit();
        }
    </script>
</x-app-layout>

<style>
    .card-container {
        display: flex;
        flex-wrap: wrap; /* Correct property for wrapping */
        gap: 50px;
        justify-content: center; /* Center children horizontally */
        align-items: center; /* Center children vertically */
    }

    .card{
        width: 30rem;
        padding: 30px;
    }
    .section-container{
        min-height: 100vh;  
    }
    
</style>