@props([
    'params' => false
])

<div class="row">
    <div class="container mt-1">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="input-group">
                    <div class="form-control align-items-center d-grid">
                        <h2 class="text-center">Busca não encontrada</h2>
                        <div class="d-flex justify-content-around align-items-center">
                            <x-buttonStyle
                                type="submit"
                                color="primary"
                                action="Pesquisar Novamente"
                                ionic="arrow-back-outline"
                                href="{{ route('dashboard')}}"
                            />
                            @if($params)
                                <x-buttonStyle
                                    type="submit"
                                    color="success"
                                    action="Crie uma planilha"
                                    ionic="add-outline"
                                    data-bs-toggle="modal"
                                    data-bs-target="#createSpreadsheet"
                                />
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  

@if($params)
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
@endif