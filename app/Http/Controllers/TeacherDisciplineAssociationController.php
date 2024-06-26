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
    public function show(int $teacher_id, int $discipline_id){
        return $this->teacherDisciplineService->getById($teacher, $discipline);
    }

    //GET /planejamento/editar/id
    public function edit(int $teacher_id, int $discipline_id){
        return $this->teacherDisciplineService->getById($teacher_id, $discipline_id);
    }

    //PUT /planejamento/editar/id
    public function update(int $teacher_id, int $discipline_id, UpdateTeacherDisciplineAssociationRequest $request){
        return $this->teacherDisciplineService->update($teacher_id, $discipline_id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $teacher_id, int $discipline_id){
        return $this->teacherDisciplineService->delete($teacher_id, $discipline_id);
    }
}
