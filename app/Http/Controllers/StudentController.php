<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Services\StudentService;

class StudentController extends Controller
{
    protected $studentService;
    public function __construct(StudentService $studentService){
        $this->studentService = $studentService;
    }

    //GET /planejamento
    public function index(){
        return $this->studentService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.student.create');
    }

    //POST /planejamento/criar
    public function store(StoreStudentRequest $request){
        return $this->studentService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $id){
        return $this->studentService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->studentService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateStudentRequest $request){
        return $this->studentService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->studentService->delete($id);
    }
}
