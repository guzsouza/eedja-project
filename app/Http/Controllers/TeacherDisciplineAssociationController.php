<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherDisciplineAssociationRequest;
use App\Http\Requests\UpdateTeacherDisciplineAssociationRequest;
use App\Services\TeacherDisciplineAssociationService;

class TeacherDisciplineAssociationController extends Controller
{
    protected $teacherDisciplineService;
    public function __construct(TeacherDisciplineAssociationService $teacherDisciplineService){
        $this->teacherDisciplineService = $teacherDisciplineService;
    }

    //GET /planejamento
    public function index(){
        return $this->teacherDisciplineService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.teacherDiscipline.create');
    }

    //POST /planejamento/criar
    public function store(StoreTeacherDisciplineAssociationRequest $request){
        return $this->teacherDisciplineService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $id){
        return $this->teacherDisciplineService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->teacherDisciplineService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateTeacherDisciplineAssociationRequest $request){
        return $this->teacherDisciplineService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->teacherDisciplineService->delete($id);
    }
}
