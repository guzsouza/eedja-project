<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use Illuminate\Http\Request;
use App\Http\Requests\StorePlanningRequest;
use App\Http\Requests\UpdatePlanningRequest;


use App\Services\PlanningService;
use App\Services\GroupService;
use App\Services\DisciplineService;

class PlanningController{
    //serviços usados
    protected $planningService;
    protected $groupIndexService;
    protected $disciplineIndexService;
    
    //construtor dos serviços
    public function __construct(PlanningService $planningService, GroupService $groupIndexService, DisciplineService $disciplineIndexService){
        $this->planningService = $planningService;
        $this->groupIndexService = $groupIndexService;
        $this->disciplineIndexService = $disciplineIndexService;
    }

    //index de grupos disciplinas e planejamentos
    public function index(){
        $plannings = $this->planningService->getAll();
        $groups = $this->groupIndexService->getAll();
        $disciplines = $this->disciplineIndexService->getAll();
        return view('components.planning.index', ['plannings' => $plannings, 'groups' => $groups, 'disciplines' => $disciplines]);
    }
    

    public function create(){
        return view('components.planning.create');
    }

    public function store(StorePlanningRequest $request){
        return $this->planningService->add($request);
    }

    public function show(Request $request){
        return $this->planningService->getPlannings($request);
    }

    public function edit(int $id){
        return $this->planningService->getById($id);
    }

    public function update(int $id, UpdatePlanningRequest $request){
        return $this->planningService->update($id, $request);
    }

    public function destroy(int $id){
        return $this->planningService->delete($id);
    }
}