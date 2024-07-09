<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use Illuminate\Http\Request;
use App\Http\Requests\StorePlanningRequest;
use App\Http\Requests\UpdatePlanningRequest;


use App\Services\PlanningService;
use App\Services\GroupService;
use App\Services\DisciplineService;
use App\Services\TeacherService;

class PlanningController{
    //serviços usados
    protected $planningService;
    protected $groupIndexService;
    protected $disciplineIndexService;
    protected $teacherIndexService;
    
    //construtor dos serviços
    public function __construct(PlanningService $planningService, GroupService $groupIndexService, DisciplineService $disciplineIndexService, TeacherService $teacherIndexService){
        $this->planningService = $planningService;
        $this->groupIndexService = $groupIndexService;
        $this->disciplineIndexService = $disciplineIndexService;
        $this->teacherIndexService = $teacherIndexService;
    }

    //index de grupos disciplinas e planejamentos
    public function index(){
        $plannings = $this->planningService->getAll();
        $groups = $this->groupIndexService->getAll();
        $disciplines = $this->disciplineIndexService->getAll();
        $teachers = $this->teacherIndexService->getAll();
        return view('dashboard', ['plannings' => $plannings, 'groups' => $groups, 'disciplines' => $disciplines, 'teachers' => $teachers]);
    }
    
    public function create(){
        return view('components.planning.create');
    }

    public function show(Request $request){
        return $this->spreadsheetService->getPlannings($request);
    }

    public function store(StorePlanningRequest $request){
        return $this->planningService->add($request);
    }

    public function edit(int $id){
        return $this->planningService->getById($id);
    }

    public function update(int $id, UpdatePlanningRequest $request){
        return $this->planningService->update($id, $request);
    }

    public function destroy(int $id){
        $this->planningService->delete($id);
        return redirect()->back()->with('status', 'Planejamento deletado');
    }
}