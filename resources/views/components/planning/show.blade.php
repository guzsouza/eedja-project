<x-app-layout>
    @section('title', 'Planejamento')

    <div class="row d-flex justify-content-center">
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
                                <th scope="col"></th> <!-- Coluna vazia para o botão de expandir/collapse -->
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
                                        <button class="btn btn-info btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDetails{{ $loop->index }}" aria-expanded="false" aria-controls="collapseDetails{{ $loop->index }}">
                                            Detalhes
                                        </button>
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
                                            <button class="btn btn-primary"><ion-icon class="action-button" name="pencil"></ion-icon></button>
                                            <button class="btn btn-danger"><ion-icon class="action-button" name="trash-sharp"></ion-icon></button>
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