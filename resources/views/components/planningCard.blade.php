@props([
    'index' => 1,
    'planning',
    'search' => 'simple',
    'isPlanning' => true
])

<div class="container mt-1">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="btn-container-documentation">
                <button class="form-control" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePlanning{{ $planning['id'] }}" aria-expanded="false" aria-controls="collapseExample" onclick="toggleDrop(this)">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="planning-name">
                            <strong>{{ $index }}</strong> - {{ $planning['date'] }}
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
                    @if($isPlanning)
                        <div class="list-style">
                            <x-buttonStyle
                                action="Visualizar Planilha"
                                ionic="arrow-forward-circle-outline"
                                color="success"
                                href="{{ route('spreadsheet.showById', ['id' => $planning['spreadsheet_id']]) }}"
                            />
                        </div>
                    @else
                        <div class="list-style">
                            <div class="link-drop d-flex justify-content-between">
                                <x-buttonStyle
                                    action="Editar"
                                    ionic="settings-outline"
                                    color="primary"
                                    data-bs-toggle="modal"
                                    data-bs-target="#edit-{{ $planning['id'] }}"
                                />
                                <x-buttonStyle
                                    action="Deletar"
                                    ionic="trash-outline"
                                    color="danger"
                                    data-bs-toggle="modal"
                                    data-bs-target="#confirmDelete-{{ $planning['id'] }}"
                                />
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@if($search === 'simple')
    <x-modal id="confirmDelete-{{ $planning['id'] }}" title="Exclusão planejamento da planilha">
        <div>
            <p>Você tem certeza que deseja excluir este planejamento?
            <br>Esta ação é definitiva.</p>
        </div>
        <div class="mt-3">
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
    </x-modal>

    {{-- Edit modal --}}
    <x-modal id="edit-{{ $planning['id'] }}" title="Editar planejamento">
        <x-planning.form
            action="{{ route('planning.update', ['id' => $planning['id']]) }}"
            update="{{ true }}"
            :planning="$planning"
            id="{{ $planning['spreadsheet_id'] }}"
        />
    </x-modal>
@endif