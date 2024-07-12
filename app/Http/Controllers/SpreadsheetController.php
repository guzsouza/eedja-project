<?php

namespace App\Http\Controllers;

use App\Models\SpreadSheet;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSpreadSheetRequest;
use App\Http\Requests\UpdateSpreadSheetRequest;
use App\Services\SpreadsheetService;
use App\Services\GroupService;
use App\Services\DisciplineService;

class SpreadsheetController{
    protected $spreadsheetService;
    protected $disciplineService;
    protected $groupService;

    public function __construct(SpreadsheetService $spreadsheetService, GroupService $groupService, DisciplineService $disciplineService){
        $this->spreadsheetService = $spreadsheetService;
        $this->disciplineService = $disciplineService;
        $this->groupService = $groupService;
    }

    //POST /planilha/criar
    public function store(StoreSpreadSheetRequest $request){
        $spreadsheet = $this->spreadsheetService->add($request);
        return view('components.spreadsheet.show', ['spreadsheet' => $spreadsheet]);
    }

    //GET /planilha/
    public function show(Request $request){
        $spreadsheet = $this->spreadsheetService->getSpreadsheet($request);
        if(!$spreadsheet){
            $group = $this->groupService->getById($request->group_id);
            $discipline = $this->disciplineService->getById($request->discipline_id);
            $params = [
                'group' => $group,
                'discipline' => $discipline,
                'bimester' => $request->bimester
            ];
            return view('components.spreadsheet.show', ['params' => $params, 'spreadsheetNotFound' => true]);
        } else{
            return view('components.spreadsheet.show', ['spreadsheet' => $spreadsheet]);
        }
    }

    //PUT /planilha/editar/id
    public function update(UpdateSpreadsheetRequest $request){
        $id = $request->id;
        $this->spreadsheetService->update($id, $request);
        return redirect()->back()->with('status', 'Planilha editada com sucesso!');
    }

    //Delete /planilha/excluir/id
    public function destroy(int $id){
        return redirect()->back()->with('status', 'Planilha deletada');
    }
}
