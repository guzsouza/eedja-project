<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherGroupAssociationRequest;
use App\Http\Requests\UpdateTeacherGroupAssociationRequest;
use App\Services\TeacherGroupAssociationService;

class TeacherGroupAssociationController extends Controller
{
    protected $teacherGroupService;
    public function __construct(TeacherGroupAssociationService $teacherGroupService){
        $this->teacherGroupService = $teacherGroupService;
    }

    //GET /planejamento
    public function index(){
        return $this->teacherGroupService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.teacherGroup.create');
    }

    //POST /planejamento/criar
    public function store(StoreTeacherGroupAssociationRequest $request){
        return $this->teacherGroupService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $id){
        return $this->teacherGroupService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->teacherGroupService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateTeacherGroupAssociationRequest $request){
        return $this->teacherGroupService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->teacherGroupService->delete($id);
    }
}
