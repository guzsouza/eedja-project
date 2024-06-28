<x-app-layout>
    @section('title', 'Planejamento')
    @if(count($plannings) > 0)
    <div class="row d-flex justify-content-center" id="simpleSearch">
        <div class="col-sm-11 card">
            <table class="table table-hover">
                <div class="row d-flex text-center mt-3">
                    <div class="col-sm-4">
                        <span style="font-size: 1.7rem">Turma: {{ $plannings[0]['group']['name'] }}</span>
                    </div>
                    <div class="col-sm-4">
                        <span style="font-size: 1.7rem">Plano de aula / Cronograma de aulas</span>
                    </div>
                    <div class="col-sm-4">
                        <span style="font-size: 1.7rem">{{ $plannings[0]['bimester'] }}º Bimestre - </span>
                        <span style="font-size: 1.7rem">{{ $plannings[0]['year'] }}</span>
                    </div>
                </div>
                <hr>
                <div class="row d-flex text-center">
                    <div class="col-sm-3">
                        <span style="font-size: 1.5rem">{{ $plannings[0]['teacher']['name'] }}</span>
                    </div>
                    <div class="col-sm-3">
                        <span style="font-size: 1.5rem">Nº de aulas: {{ $plannings[0]['classes'] }}</span>
                    </div>
                    <div class="col-sm-3">
                        <span style="font-size: 1.5rem">{{ $plannings[0]['discipline']['name'] }}</span>
                    </div>
                    <div class="col-sm-3">
                        <span style="font-size: 1.5rem">Prazo: {{ $plannings[0]['startDate'] }} até {{ $plannings[0]['endDate'] }}</span>
                    </div>
                </div>
                <hr>
                <thead>
                    <tr>
                        <th scope="col" style="width: 8rem">Data</th>
                        <th scope="col">Conteúdos</th>
                        <th scope="col">Habilidades</th>
                        <th scope="col">Recursos utilizados</th>
                        <th scope="col">Metodologia</th>
                        <th scope="col">Trabalhos</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($plannings as $planning)
                    <tr>
                        <td scope="row">{{ $planning['date'] }}</td>
                        <td> {{ $planning['content'] }}</td>
                        <td> {{ $planning['skills'] }}</td>
                        <td> {{ $planning['resource'] }}</td>
                        <td> {{ $planning['metodology'] }}</td>
                        <td> {{ $planning['project'] }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Opções
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Excluir</a></li>
                                    <li><a class="dropdown-item" href="#">Editar</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @else
        <p>Não foi encontrado um planejamento<a href="">Crie um agora!</a></p>
    @endif
    
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