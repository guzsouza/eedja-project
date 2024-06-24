<x-app-layout>
    <div class="card-container">
        <div class="card" style="width: 25rem;">
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
</x-app-layout>

<style>
    .test{
      background-color: black;
    }

    .card-container{
        display: flex;
        justify-content: center;
    }

    .section-container{
        display: flex;
        align-content: center;
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
</style>

{{-- 
#188251ff;
#FFFFFFff;
#20885Aff;
#188251ff; --}}