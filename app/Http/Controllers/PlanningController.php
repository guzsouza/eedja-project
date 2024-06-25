<?php

namespace App\Http\Controllers;

use App\Models\Planning;
use App\Http\Requests\StorePlanningRequest;
use App\Http\Requests\UpdatePlanningRequest;

use App\Services\PlanningService;

class PlanningController extends Controller{
    protected $planningService;
    public function __construct(PlanningService $planningService){
        $this->planningService = $planningService;
    }

    public function index(){
        $plannings = $this->planningService->getAll();
        return view('planning', ['plannings' => $plannings]);
    }
    

    public function create(){
        return view('components.planning.create');
    }

    public function store(StorePlanningRequest $request){
        return $this->planningService->add($request);
    }

    public function show(int $id){
        return $this->planningService->getById($id);
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