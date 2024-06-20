<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupStudentRequest;
use App\Http\Requests\UpdateGroupStudentRequest;
use App\Services\GroupStudentService;

class GroupStudentsController extends Controller
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
    public function show(int $id){
        return $this->groupStudentService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->groupStudentService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateGroupStudentRequest $request){
        return $this->groupStudentService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->groupStudentService->delete($id);
    }
}
