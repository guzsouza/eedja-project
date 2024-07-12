<x-app-layout>
    @section('title', 'Planejamento')
    <div class="row">
        @if(isset($spreadsheetNotFound))
            <div class="row">
                <div class="container mt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="input-group">
                                <div class="form-control align-items-center d-grid">
                                    <h2 class="text-center">Nenhuma planilha encontrada</h2>
                                    <div class="d-flex justify-content-around align-items-center">
                                        <a href="{{ route('dashboard')}}" class="list-style">
                                            <x-buttonStyle
                                                type="submit"
                                                color="primary"
                                                action="Pesquisar Novamente"
                                                ionic="arrow-back-outline"
                                            />
                                        </a>
                            
                                        <a data-bs-toggle="modal" data-bs-target="#createSpreadsheet" class="list-style">
                                            <x-buttonStyle
                                                type="submit"
                                                color="success"
                                                action="Crie uma planilha"
                                                ionic="add-outline"
                                            />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    

            {{-- create spreadsheet modal --}}
            <div class="modal fade" id="createSpreadsheet" tabindex="-1" aria-labelledby="createSpreadsheetLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="createSpreadsheetLabel">Planilhas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <x-spreadsheet.form
                                action="{{ route('spreadsheet.store') }}"
                                update="{{ false }}"
                                :params="$params"
                            />
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="container mt-1">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between teste">
                            <div>
                                <a class="input-group d-flex justify-content-end list-style" data-bs-toggle="modal" data-bs-target="#editSpreadsheet">
                                    <button class="btn btn-primary">Editar Planilha</button>
                                </a>
                            </div>
                            <div>
                                <a class="input-group d-flex justify-content-end list-style" data-bs-toggle="modal" data-bs-target="#createPlanning">
                                    <button class="btn btn-success">Adicionar planejamento</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="container mt-1">
                <div class="row justify-content-center">
                    <div class="col-md-8 d-flex">
                        <div class="input-group">
                            <div class="text-center form-control d-grid">
                                <div class="form-control">
                                    <h1><strong>{{ $spreadsheet['group']['name'] }} - {{ $spreadsheet['bimester'] }}º Bimestre de {{ $spreadsheet['year'] }}</strong></h1>
                                </div>
                                <div class="form-control d-flex justify-content-between">
                                    <h3 class="col-sm-6 d-flex justify-content-center">Professor: {{ $spreadsheet['teacher']['name'] }}</h3>
                                    <h3 class="col-sm-6 d-flex justify-content-center">Disciplina: {{ $spreadsheet['discipline']['name'] }}</h3>
                                </div>
                                <div class="form-control d-flex justify-content-between">
                                    <p class="col-sm-6 d-flex justify-content-center"><span><strong>Número de aulas: </strong>{{ $spreadsheet['classes'] }}</span></p>
                                    <p class="col-sm-6 d-flex justify-content-center"><span><strong>Período: </strong>{{ $spreadsheet['startDate'] }} <strong> até </strong> {{ $spreadsheet['endDate'] }}</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($spreadsheet['plannings']) > 0)
                @php
                    $count = 1;
                @endphp
                @foreach ($spreadsheet['plannings'] as $planning)
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
                                                <a data-bs-toggle="modal" data-bs-target="#edit-{{ $planning['id'] }}" class="btn btn-primary button-action d-flex align-items-center justify-content-center" style="width: 100%" data-bs-toggle="modal" data-bs-target="#edit-{{ $planning['id'] }}">
                                                    <ion-icon class="icon-action" name="settings-outline" style="font-size: 1.5rem"></ion-icon>
                                                </a>
                                                <a class="btn btn-danger button-action d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#confirmDelete-{{ $planning['id'] }}" style="width: 100%">
                                                    <ion-icon class="icon-action" name="trash-outline" style="font-size: 1.5rem"></ion-icon>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- confirmDelete modal --}}
                    <div class="modal fade" id="confirmDelete-{{ $planning['id'] }}" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="confirmDeleteLabel">Exclusão planejamento da planilha</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Você tem certeza que deseja excluir este planejamento?
                                    <br>Esta ação é definitiva.</p>
                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <form action="{{ route('planning.delete', ['id' => $planning['id']]) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-buttonStyle
                                            type="submit"
                                            color="danger"
                                            action="Remover"
                                            ionic="trash-outline"
                                        />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Create Planning Modal --}}
                    <div class="modal fade" id="createPlanning" tabindex="-1" aria-labelledby="createPlanningLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="createPlanningLabel">Adição de Planejamento</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <x-planning.form
                                        action="{{ route('planning.store') }}" 
                                        update="{{ false }}"
                                        id="{{ $planning['spreadsheet_id'] }}"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Edit modal --}}
                    <div class="modal fade" id="edit-{{ $planning['id'] }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="createLabel">Edição de Planejamento da Planilha</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <x-planning.form
                                        action="{{ route('planning.update', ['id' => $planning['id']]) }}"
                                        update="{{ true }}"
                                        :planning="$planning"
                                        id="{{ $planning['spreadsheet_id'] }}"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="container mt-1">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="btn-container-documentation">
                                <div class="form-control">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <span class="planning-name">
                                            Não há planejamentos
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            {{-- edit spreadsheet modal --}}
            <div class="modal fade" id="editSpreadsheet" tabindex="-1" aria-labelledby="editSpreadsheetLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="editSpreadsheetLabel">Edição de Planilha</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <x-spreadsheet.form
                                action="{{ route('spreadsheet.update') }}"
                                update="{{ true }}"
                                :spreadsheet="$spreadsheet"
                            />
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