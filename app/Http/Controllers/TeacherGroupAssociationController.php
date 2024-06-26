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
    public function show(int $teacher_id, int $group_id){
        return $this->teacherGroupService->getById($teacher_id, $group_id);
    }

    //GET /planejamento/editar/id
    public function edit(int $teacher_id, int $group_id){
        return $this->teacherGroupService->getById($teacher_id, $group_id);
    }

    //PUT /planejamento/editar/id
    public function update(int $teacher_id, int $group_id, UpdateTeacherGroupAssociationRequest $request){
        return $this->teacherGroupService->update($teacher_id, $group_id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $teacher_id, int $group_id){
        return $this->teacherGroupService->delete($teacher_id, $group_id);
    }
}
