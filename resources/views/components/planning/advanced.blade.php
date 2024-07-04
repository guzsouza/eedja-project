<x-app-layout>
    @section('title', 'Planejamento')

    <div class="row d-flex justify-content-center" id="advancedSearch">
        <div class="col-sm-11 card">
            <div style="overflow-x: auto">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Regimento</th>
                                <th scope="col">Nº de aulas</th>
                                <th scope="col">Prazo</th>
                                <th scope="col">Bimestre</th>
                                <th scope="col">Disciplina</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($plannings as $planning)
                                <tr>
                                    <td>{{ $planning['date'] }}</td>
                                    <td>{{ $planning['group']['name'] }}</td>
                                    <td>{{ $planning['classes'] }}</td>
                                    <td>{{ $planning['startDate'] }} até {{ $planning['endDate'] }}</td>
                                    <td>{{ $planning['bimester'] }}</td>
                                    <td>{{ $planning['discipline']['name'] }}</td>
                                    <td>{{ $planning['year'] }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDetails{{ $loop->index }}" aria-expanded="false" aria-controls="collapseDetails{{ $loop->index }}">
                                                Detalhes
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <!-- Collapse para os detalhes adicionais -->
                                <tr class="collapse" id="collapseDetails{{ $loop->index }}">
                                    <td colspan="8">    
                                        <div>
                                            <strong>Conteúdos:</strong> {{ $planning['content'] }}<br>
                                            <strong>Habilidades:</strong> {{ $planning['skills'] }}<br>
                                            <strong>Recursos utilizados:</strong> {{ $planning['resource'] }}<br>
                                            <strong>Metodologia:</strong> {{ $planning['metodology'] }}<br>
                                            <strong>Trabalhos:</strong> {{ $planning['project'] }}<br>  
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Opções
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item" href="#">Excluir</a></li>
                                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <style>
        .btn{
            padding: 5px;
        }
        .action-button{
            font-size: 1.5rem;
            display: flex;
            align-items: center;
        }
    </style>
</x-app-layout>