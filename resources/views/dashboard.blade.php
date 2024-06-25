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
                            <div class="label-service card" style="background-color: #0D6EFDff">Visualizar</div>
                            <a class="btn btn-primary btn-service" href="{{ route('planning.index') }}" id="button-addon2"><ion-icon class="ionic-service" name="eye-outline"></a>
                        </div>
                        <div class="input-group d-flex justify-content-end">
                            <div class="label-service card" style="background-color: #188251ff">Criar</div>
                            <button class="btn btn-success btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="add-circle-outline"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem">
                <img src="/img/planning.jpg" class="card-img-top" alt="Planejamento">
                <div class="card-body">
                    <h5 class="card-title">Planejamento</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias recusandae at deserunt quo autem laboriosam facilis, neque </p>
                </div>
                <div class="card-footer" style="padding: 20px 15px">
                    <div class="card-btn-container">
                        <div class="input-group">
                            <div class="label-service card" style="background-color: #0D6EFDff">Visualizar</div>
                            <button class="btn btn-primary btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="eye-outline"></button>
                        </div>
                        <div class="input-group d-flex justify-content-end">
                            <div class="label-service card" style="background-color: #188251ff">Criar</div>
                            <button class="btn btn-success btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="add-circle-outline"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem">
                <img src="/img/planning.jpg" class="card-img-top" alt="Planejamento">
                <div class="card-body">
                    <h5 class="card-title">Planejamento</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias recusandae at deserunt quo autem laboriosam facilis, neque </p>
                </div>
                <div class="card-footer" style="padding: 20px 15px">
                    <div class="card-btn-container">
                        <div class="input-group">
                            <div class="label-service card" style="background-color: #0D6EFDff">Visualizar</div>
                            <button class="btn btn-primary btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="eye-outline"></button>
                        </div>
                        <div class="input-group d-flex justify-content-end">
                            <div class="label-service card" style="background-color: #188251ff">Criar</div>
                            <button class="btn btn-success btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="add-circle-outline"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem">
                <img src="/img/planning.jpg" class="card-img-top" alt="Planejamento">
                <div class="card-body">
                    <h5 class="card-title">Planejamento</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias recusandae at deserunt quo autem laboriosam facilis, neque </p>
                </div>
                <div class="card-footer" style="padding: 20px 15px">
                    <div class="card-btn-container">
                        <div class="input-group">
                            <div class="label-service card" style="background-color: #0D6EFDff">Visualizar</div>
                            <button class="btn btn-primary btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="eye-outline"></button>
                        </div>
                        <div class="input-group d-flex justify-content-end">
                            <div class="label-service card" style="background-color: #188251ff">Criar</div>
                            <button class="btn btn-success btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="add-circle-outline"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 30rem">
                <img src="/img/planning.jpg" class="card-img-top" alt="Planejamento">
                <div class="card-body">
                    <h5 class="card-title">Planejamento</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias recusandae at deserunt quo autem laboriosam facilis, neque </p>
                </div>
                <div class="card-footer" style="padding: 20px 15px">
                    <div class="card-btn-container">
                        <div class="input-group">
                            <div class="label-service card" style="background-color: #0D6EFDff">Visualizar</div>
                            <button class="btn btn-primary btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="eye-outline"></button>
                        </div>
                        <div class="input-group d-flex justify-content-end">
                            <div class="label-service card" style="background-color: #188251ff">Criar</div>
                            <button class="btn btn-success btn-service" type="button" id="button-addon2"><ion-icon class="ionic-service" name="add-circle-outline"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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

{{-- 
#188251ff;
#FFFFFFff;
#20885Aff;
#188251ff; --}}