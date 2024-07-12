<x-app-layout>
    @section('title', 'Planejamento')
    <div class="row">
        @if(isset($plannings))
            <div class="container mt-1">
                <div class="row justify-content-center">
                    <div class="col-md-8 d-flex">
                        <div class="input-group">
                            <div class="text-center form-control d-grid">
                                <div class="form-control">
                                    Você buscou por:
                                    @foreach ($params as $param)
                                        <p>{{ $param }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(count($plannings) > 0)
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
                                            <div class="link-drop">
                                                <p><strong>Planilha: </strong>Planilha correspondente</p>
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
                                    <h1 class="modal-title fs-5" id="confirmDeleteLabel">Exclusão de planejamento</h1>
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
                    {{-- Edit modal --}}
                    <div class="modal fade" id="edit-{{ $planning['id'] }}" tabindex="-1" aria-labelledby="editLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="createLabel">Edição de Planejamento</h1>
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
                <div class="row">
                    <div class="container mt-1">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="input-group">
                                    <div class="form-control align-items-center d-grid">
                                        <h2 class="text-center">Nenhum planejamento encontrado</h2>
                                        <div class="d-flex justify-content-around align-items-center">
                                            <a href="{{ route('dashboard')}}" class="list-style">
                                                <x-buttonStyle
                                                    type="submit"
                                                    color="primary"
                                                    action="Pesquisar Novamente"
                                                    ionic="arrow-back-outline"
                                                />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @else
        <div class="row">
            <div class="container mt-1">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="input-group">
                            <div class="form-control align-items-center d-grid">
                                <h2 class="text-center">Nenhum planejamento encontrado</h2>
                                <div class="d-flex justify-content-around align-items-center">
                                    <a href="{{ route('dashboard')}}" class="list-style">
                                        <x-buttonStyle
                                            type="submit"
                                            color="primary"
                                            action="Pesquisar Novamente"
                                            ionic="arrow-back-outline"
                                        />
                                    </a>
                                </div>
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