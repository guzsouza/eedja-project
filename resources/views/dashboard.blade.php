<x-app-layout>  
    @section('title', 'Área do professor')
    <section class="section-container">
        <div class="card-container">
            <div class="card" style="width: 30rem">
                <img src="/img/planning.jpg" class="card-img-top" alt="Planejamento">
                <div class="card-body">
                    <h5 class="card-title">Planejamento</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias recusandae at deserunt quo autem laboriosam facilis, neque </p>
                </div>
                <div class="card-footer" style="padding: 20px 15px">
                    <div class="card-btn-container">
                        <div class="input-group">
                            <button class="btn btn-primary btn-service d-flex align-items-center" href="{{ route('planning.index') }}" data-bs-toggle="modal" data-bs-target="#confirm-simple"><span>Visualizar</span></button>
                            <button class="btn btn-primary btn-service d-flex align-items-center" href="{{ route('planning.index') }}" data-bs-toggle="modal" data-bs-target="#confirm-simple"><ion-icon class="ionic-service" name="eye-outline"></ion-icon></button>
                        </div>
                        <div class="input-group d-flex justify-content-end">
                            <button class="btn btn-success btn-service" type="button" data-bs-toggle="modal" data-bs-target="#create"><span>Adicionar</span></button>
                            <button class="btn btn-success btn-service" type="button" data-bs-toggle="modal" data-bs-target="#create"><ion-icon class="ionic-service" name="add-circle-outline"></ion-icon></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="width: 30rem">
                <img src="/img/planning.jpg" class="card-img-top" alt="Planejamento">
                <div class="card-body">
                    <h5 class="card-title">Busca de planejamentos</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias recusandae at deserunt quo autem laboriosam facilis, neque </p>
                </div>
                <div class="card-footer" style="padding: 20px 15px">
                    <div class="card-btn-container">
                        <div class="input-group d-flex justify-content-center">
                            <button class="btn btn-primary btn-service d-flex align-items-center" href="{{ route('planning.index') }}" data-bs-toggle="modal" data-bs-target="#confirm-advanced"><span>Buscar</span></button>
                            <button class="btn btn-primary btn-service d-flex align-items-center" href="{{ route('planning.index') }}" data-bs-toggle="modal" data-bs-target="#confirm-advanced"><ion-icon class="ionic-service" name="search-outline"></ion-icon></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="confirm-simple" tabindex="-1" aria-labelledby="confirmLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirmLabel">Planejamentos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <x-planning.simpleSearch
                      :groups="$groups"
                      :disciplines="$disciplines"
                      :teachers="$teachers"
                    />
                <div class="modal-footer">
                    <button class="btn btn-success" onclick="submitForm()">Enviar</button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirm-advanced" tabindex="-1" aria-labelledby="confirmLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirmLabel">Planejamentos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <x-planning.advancedSearch
                      :groups="$groups"
                      :disciplines="$disciplines"
                      :teachers="$teachers"
                    />
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createLabel">Planejamentos</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <x-planning.form
                        :disciplines="$disciplines"
                        :groups="$groups"
                    />
                <div class="modal-footer">
                    <button class="btn btn-success" onclick="submitForm()">Enviar</button>
                </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<style>
    .test{
      background-color: black;
    }

    .card-container {
        display: flex;
        flex-wrap: wrap; /* Correct property for wrapping */
        gap: 50px;
        justify-content: center; /* Center children horizontally */
        align-items: center; /* Center children vertically */
    }

    .section-container{
        min-height: 100vh;  
    }
    
    .card-btn-container{
        display: flex;
        justify-content: space-between;
    }

    .label-service{
        display: flex;
        align-items: center;
        padding: 10px 20px;
        color: white;
        border: none;
    }

    .btn-service{
        border-left: 1px solid #cccc;
    }

    .ionic-service{
        font-size: 1.5rem;
        padding: 4px 1px;
        display: flex;
        align-items: center;
    }

    .box {
        flex: 1 1 calc(33.33% - 20px); / 3 caixas por linha menos o gap /
        background-color: lightblue;
        height: 100px;
    }

    @media (max-width: 768px) {
        .box {
            flex: 1 1 calc(50% - 20px); / 2 caixas por linha para telas menores /
        }
    }

    @media (max-width: 480px) {
        .box {
            flex: 1 1 calc(100% - 20px); / 1 caixa por linha para telas pequenas */
        }
    }
</style>

<script>
    function submitForm(){
        document.getElementById('planningFilter').submit();
    }
</script>
{{-- 
#188251ff;
#FFFFFFff;
#20885Aff;
#188251ff; --}}