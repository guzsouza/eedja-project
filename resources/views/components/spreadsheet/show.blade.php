<x-app-layout>
    @section('title', 'Planejamento')
    <div class="row">
        @if(isset($spreadsheetNotFound))
            <x-spreadsheet.notFound
                :params="$params"
            />
        @else
            <div class="container mt-1">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between teste">
                            <x-buttonStyle
                                color="primary"
                                ionic="settings-outline"
                                action="Editar planilha"
                                data-bs-toggle="modal"
                                data-bs-target="#editSpreadsheet"
                            />
                            <x-buttonStyle
                                color="success"
                                ionic="add-outline"
                                action="Adicionar planejamento"
                                data-bs-toggle="modal"
                                data-bs-target="#createPlanning"
                            />
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
                    $index = 1;
                @endphp
                @foreach ($spreadsheet['plannings'] as $planning)
                    <x-planningCard
                        :planning="$planning"
                        index="{{ $index }}"
                    />
                    @php
                        $index++;
                    @endphp
                @endforeach
            @else
                <x-notPlanningFound/>
            @endif
            {{-- Create Planning Modal --}}
            <x-modal id="createPlanning" title="Criando planejamento">
                <x-planning.form
                    action="{{ route('planning.store') }}" 
                    update="{{ false }}"
                    id="{{ $spreadsheet['id'] }}"
                />
            </x-modal>

            {{-- edit spreadsheet modal --}}
            <x-modal id="editSpreadsheet" title="Edição de planilha">
                <x-spreadsheet.form
                    action="{{ route('spreadsheet.update') }}"
                    update="{{ true }}"
                    :spreadsheet="$spreadsheet"
                />
            </x-modal>
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