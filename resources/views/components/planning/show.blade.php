<x-app-layout>
    @section('title', 'Planejamento')
    <div class="row">
        <div class="container mt-1">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="btn-container-documentation form-control">
                        <a class="d-flex justify-content-between align-items-center list-style" data-bs-toggle="collapse" data-bs-target="#collapseHeader" aria-expanded="false" aria-controls="collapseExample" onclick="toggleDrop(this)">
                            <h1><strong>Busca avançada</strong></h1>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                        </a>

                        <div class="collapse btn-drop" id="collapseHeader">
                            @foreach ($params as $param)
                            <div class="list-style">
                                <div class="link-drop">
                                    <h3>{{ $param }}</h3>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
            @if(count($plannings) > 0)
            @php
                $index = 1;
            @endphp
            @foreach ($plannings as $planning)
                <x-planningCard
                    :planning="$planning"
                    index="{{ $index }}"
                />
                @php
                    $index++;
                @endphp
            @endforeach
        @else
            <x-searchNotFound/>
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