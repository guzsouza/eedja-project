<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use Illuminate\Http\Request;
use App\Http\Requests\StorePlanningRequest;
use App\Http\Requests\UpdatePlanningRequest;

use Illuminate\Http\Response;
use App\Services\PlanningService;
use App\Services\GroupService;
use App\Services\DisciplineService;
use App\Services\TeacherService;

class PlanningController{
    //serviços usados
    protected $planningService;
    protected $groupService;
    protected $disciplineService;
    protected $teacherService;
    
    //construtor dos serviços
    public function __construct(PlanningService $planningService, GroupService $groupService, DisciplineService $disciplineService, TeacherService $teacherService){
        $this->planningService = $planningService;
        $this->groupService = $groupService;
        $this->disciplineService = $disciplineService;
        $this->teacherService = $teacherService;
    }

    //index de grupos disciplinas e planejamentos
    public function index(){
        $plannings = $this->planningService->getAll();
        $groups = $this->groupService->getAll();
        $disciplines = $this->disciplineService->getAll();
        $teachers = $this->teacherService->getAll();
        return view('dashboard', ['plannings' => $plannings, 'groups' => $groups, 'disciplines' => $disciplines, 'teachers' => $teachers]);
    }

    public function show(Request $request){
        
        if($request->date === NULL){
            $request->offsetUnset('date');
        }
        $plannings = $this->planningService->getPlannings($request);
        if($request->has('teacher_id')){
            $teacher = $this->teacherService->getById($request->teacher_id);
            $params[] = 'Professor: ' . $teacher['name'];
        }
        if($request->has('group_id')){
            $group = $this->groupService->getById($request->group_id);
            $params[] = 'Turma: ' . $group['name'];
        }
        if($request->has('discipline_id')){
            $discipline = $this->disciplineService->getById($request->discipline_id);
            $params[] = 'Disciplina: ' . $discipline['name'];
        }
        if($request->has('bimester')){
            $params[] = 'Bimestre: ' . $request->bimester . 'º';
        }
        if($request->has('year')){
            $params[] = 'Ano: ' . $request->year;
        }
        if($request->has('date')){
            $params[] = 'Data: ' . $request->date;
        }
        return view('components.planning.show', ['plannings' => $plannings, 'params' => $params]);
    }

    public function store(StorePlanningRequest $request){
        $this->planningService->add($request);
        return redirect()->back()->with('status', 'Planejamento criado com sucesso!');
    }

    public function update(int $id, int $planning_id, UpdatePlanningRequest $request){
        $this->planningService->update($planning_id, $request);
        return redirect()->back()->with('status', 'Planejamento editado com sucesso!');
    }

    public function destroy(int $id, int $planning_id){
        $this->planningService->delete($planning_id);
        return redirect()->back()->with('status', 'Planejamento deletado');
    }
}