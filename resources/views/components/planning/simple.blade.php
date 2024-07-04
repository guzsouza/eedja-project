<x-app-layout>
    @section('title', 'Planejamento')
    <div class="row">
        @if(count($plannings) > 0)        
            <div class="container mt-1">
                <div class="row justify-content-center">
                    <div class="col-md-8 d-flex">
                        <div class="input-group">
                            <div class="form-control d-grid text-center">
                                <div class="form-control">
                                    <h1><strong>{{ $plannings[0]['group']['name'] }} - {{ $plannings[0]['bimester'] }}º Bimestre de {{ $plannings[0]['year'] }}</strong></h1>
                                </div>
                                <div class="form-control d-flex justify-content-between">
                                    <h3 class="col-sm-6 d-flex justify-content-center">Professor: {{ $plannings[0]['teacher']['name'] }}</h3>
                                    <h3 class="col-sm-6 d-flex justify-content-center">Disciplina: {{ $plannings[0]['discipline']['name'] }}</h3>
                                </div>
                                <div class="form-control d-flex justify-content-between">
                                    <p class="col-sm-6 d-flex justify-content-center"><span><strong>Número de aulas: </strong>{{ $plannings[0]['classes'] }}</span></p>
                                    <p class="col-sm-6 d-flex justify-content-center"><span><strong>Período: </strong>{{ $plannings[0]['startDate'] }} <strong> até </strong> {{ $plannings[0]['endDate'] }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @php
                $count = 1;
            @endphp
            @foreach ($plannings as $planning)
                <div class="container mt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="btn-container-documentation">
                                <button class="form-control" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlanning{{ $planning['id'] }}" aria-expanded="false" aria-controls="collapseExample" onclick="toggleDrop(this)">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="planning-name">
                                            <strong>{{ $count }}</strong> - {{ $planning['date'] }}
                                            @php
                                                $count++;
                                            @endphp
                                        </span>
                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                    </div>
                                </button>
                                <div class="collapse btn-drop" id="collapsePlanning{{ $planning['id'] }}">
                                    <div class="list-style">
                                        <div class="link-drop">
                                            <p><strong>Conteúdo: </strong>{{ $planning['content'] }}</p>
                                        </div>
                                    </div>
                                    <div class="list-style">
                                        <div class="link-drop">
                                            <p><strong>Habilidades: </strong>{{ $planning['skills'] }}</p>
                                        </div>
                                    </div>
                                    <div class="list-style">
                                        <div class="link-drop">
                                            <p><strong>Recursos: </strong>{{ $planning['resource'] }}</p>
                                        </div>
                                    </div>
                                    <div class="list-style">
                                        <div class="link-drop">
                                            <p><strong>Metodologia:</strong> {{ $planning['metodology'] }}</p>
                                        </div>
                                    </div>
                                    <div class="list-style">
                                        <div class="link-drop">
                                            <p><strong>Projetos: </strong>{{ $planning['project'] }}</p>
                                        </div>
                                    </div>
                                    <div class="list-style">
                                        <div class="link-drop d-flex justify-content-between">
                                            <a href="{{ route('planning.edit', ['id' => $planning['id']]) }}" class="btn btn-primary button-action d-flex align-items-center justify-content-center" style="width: 100%" data-bs-toggle="modal" data-bs-target="#edit-{{ $planning['id'] }}">
                                                <ion-icon class="icon-action" name="settings-outline" style="font-size: 1.5rem"></ion-icon>
                                            </a>
                                            <a class="btn btn-danger button-action d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#confirm-{{ $planning['id'] }}" style="width: 100%">
                                                <ion-icon class="icon-action" name="trash-outline" style="font-size: 1.5rem"></ion-icon>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="confirm-{{ $planning['id'] }}" tabindex="-1" aria-labelledby="confirmLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="confirmLabel">Excluir planejamento</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Você tem certeza que deseja excluir este planejamento?
                                <br>Esta ação é definitiva.</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('planning.delete', ['id' => $planning    ['id']]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit" style="display: flex; align-items: center; padding: 0 15px;" data-bs-toggle="modal" data-bs-target="#confirm">
                                        <ion-icon class="icon-action" name="trash-outline"></ion-icon>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="edit-{{ $planning['id'] }}" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="createLabel">Planejamentos</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <x-planning.form
                                    update="{{ true }}"
                                    :planning="$planning"
                                />
                            </div>
                        </div>
                    </div>
                </div>       
            @endforeach    
        @else
            <div class="row">
                <div class="container mt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="form-control align-items-center d-grid">
                                    <span>
                                        Nenhum registro encontrado
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        @endif
    </div>
    <style>
        .planning-name {
            display: inline-block;
            white-space: nowrap;
            vertical-align: middle;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 90%;
        }

        .action-button{
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }

        .container{
            margin: 10px;
        }

        .form-control{
            padding: 15px;
            border-radius: 8px;
        }

        .form-select{
            padding: 15px;
            border-radius: 8px;
        }

        .btn-primary{
            border-color: #009FEF;
            background-color: #009FEF;
            color: white;
        }

        .btn-primary:hover{
            background-color: #0893d8;
            border-color: #0893d8;
        }

        .link-drop{
            padding: 10px;
        }

        .link-drop:hover{
            background-color: #f4f4f5;
        }

        .list-style {
            text-decoration: none;
            color: inherit;
        }

        .list-style:hover {
            text-decoration: none;
        }
    </style>
</x-app-layout>