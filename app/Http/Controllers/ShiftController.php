<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShiftRequest;
use App\Http\Requests\UpdateShiftRequest;
use App\Services\ShiftService;

class ShiftController extends Controller
{
    protected $shiftService;
    public function __construct(ShiftService $shiftService){
        $this->shiftService = $shiftService;
    }

    //GET /planejamento
    public function index(){
        return $this->shiftService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.shift.create');
    }

    //POST /planejamento/criar
    public function store(StoreShiftRequest $request){
        return $this->shiftService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $id){
        return $this->shiftService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->shiftService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateShiftRequest $request){
        return $this->shiftService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->shiftService->delete($id);
    }
}
