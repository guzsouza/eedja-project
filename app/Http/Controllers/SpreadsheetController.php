<?php

namespace App\Http\Controllers;

use App\Models\SpreadSheet;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSpreadSheetRequest;
use App\Http\Requests\UpdateSpreadSheetRequest;
use App\Services\SpreadsheetService;
use App\Services\PlanningService;

class SpreadsheetController{
    protected $spreadhsheetService;
    public function __construct(SpreadsheetService $spreadhsheetService, PlanningService $planningService){
        $this->spreadsheetService = $spreadhsheetService;
        $this->planningService = $planningService;
    }

    //POST /planilha/criar
    public function store(Request $request){
        return $this->spreadsheetService->add($request);
    }

    //GET /planilha/
    public function show(Request $request){
        $spreadsheet = $this->spreadsheetService->getSpreadsheet($request);
        return view('components.spreadsheet.show', ['spreadsheet' => $spreadsheet]);
    }

    //PUT /planilha/editar/id
    public function update(int $id, UpdateSpreadsheetRequest $request){
        return $this->spreadsheetService->update($id, $request);
    }

    //Delete /planilha/excluir/id
    public function destroy(int $id){
        return $this->spreadsheetService->delete($id);
    }
}
