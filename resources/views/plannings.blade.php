<x-app-layout>
    @section('title', 'Planejamentos')
        <select name="group">
            <option value="" selected disabled>Selecione o regimento</option>
            @foreach ($groups as $group)
                <option value="{{ $group['id'] }}">{{ $group['name'] }}</option>
            @endforeach
        </select>

        <select name="planning" onchange="showTable()">
            <option value="" selected disabled>Selecione o regimento</option>
            @foreach ($plannings as $planning)
                <option value="{{ $planning['id'] }}">{{ $planning['discipline']['name'] }}</option>
            @endforeach
        </select>

        <table class="table table-hover" id="table" style="display: none">
            <thead>
                <tr>
                </tr>
            </thead>
            <thead>
              <tr>
                <th scope="col">Data</th>
                <th scope="col">Turma</th>
                <th scope="col">Aulas</th>
                <th scope="col">Prazo</th>
                <th scope="col">Professor</th>
                <th scope="col">Conteúdos</th>
                <th scope="col">Objetivos a alcançar</th>
                <th scope="col">Recursos utilizados</th>
                <th scope="col">Metodologia</th>
                <th scope="col">Projetos</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($plannings as $planning)
              <tr>
                    <th scope="row">{{ $planning['date'] }}</th>
                    <td>{{ $planning['group']['name'] }}</td>
                    <td>{{ $planning['classes'] }}</td>
                    <td>{{ $planning['startDate'] }} até {{ $planning['endDate'] }}</td>
                    <td>{{ $planning['teacher']['name'] }}</td>
                    <td>{{ $planning['content'] }}</td>
                    <td>{{ $planning['skills'] }}</td>
                    <td>{{ $planning['resource'] }}</td>
                    <td>{{ $planning['metodology'] }}</td>
                    <td>{{ $planning['project'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>


          <script>
                function showTable(){
                    //requisição 
                    $("table").show();
                }
          </script>
</x-app-layout>