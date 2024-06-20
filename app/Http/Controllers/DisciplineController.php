<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDisciplineRequest;
use App\Http\Requests\UpdateDisciplineRequest;
use App\Services\DisciplineService;

class DisciplineController
{
    protected $disciplineService;
    public function __construct(DisciplineService $disciplineService){
        $this->disciplineService = $disciplineService;
    }

    //GET /planejamento
    public function index(){
        return $this->disciplineService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.discipline.create');
    }

    //POST /planejamento/criar
    public function store(StoreDisciplineRequest $request){
        return $this->disciplineService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $id){
        return $this->disciplineService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->disciplineService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateDisciplineRequest $request){
        return $this->disciplineService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->disciplineService->delete($id);
    }
}
