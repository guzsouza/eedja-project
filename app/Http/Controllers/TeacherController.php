<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Services\TeacherService;

class TeacherController extends Controller
{
    protected $teacherService;
    public function __construct(TeacherService $teacherService){
        $this->teacherService = $teacherService;
    }

    //GET /planejamento
    public function index(){
        return $this->teacherService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.teacher.create');
    }

    //POST /planejamento/criar
    public function store(StoreTeacherRequest $request){
        return $this->teacherService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $id){
        return $this->teacherService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->teacherService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateTeacherRequest $request){
        return $this->teacherService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->teacherService->delete($id);
    }
}
