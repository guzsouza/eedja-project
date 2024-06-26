<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupStudentRequest;
use App\Http\Requests\UpdateGroupStudentRequest;
use App\Services\GroupStudentService;

class GroupStudentController extends Controller
{
    protected $groupStudentService;
    public function __construct(GroupStudentService $groupStudentService){
        $this->groupStudentService = $groupStudentService;
    }

    //GET /planejamento
    public function index(){
        return $this->groupStudentService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.groupStudents.create');
    }

    //POST /planejamento/criar
    public function store(StoreGroupStudentRequest $request){
        return $this->groupStudentService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $group_id, int $student_id){
        return $this->groupStudentService->getById($group_id, $student_id);
    }

    //GET /planejamento/editar/id
    public function edit(int $group_id, int $student_id){
        return $this->groupStudentService->getById($group_id, $student_id);
    }

    //PUT /planejamento/editar/id
    public function update(int $group_id, int $student_id, UpdateGroupStudentRequest $request){
        return $this->groupStudentService->update($group_id, $student_id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $group_id, int $student_id){
        return $this->groupStudentService->delete($group_id, $student_id);
    }
}
