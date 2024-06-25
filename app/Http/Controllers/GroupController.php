<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Services\GroupService;
use App\Services\PlanningService;

class GroupController extends Controller{
    protected $groupService;
    protected $planningService;
    public function __construct(GroupService $groupService, PlanningService $planningService){
        $this->groupService = $groupService;
        $this->planningService = $planningService;
    }

    public function index(){
        $groups = $this->groupService->getAll();
        $plannings = $this->planningService->getAll();
        return view('plannings', ['groups' => $groups, 'plannings' => $plannings]);

    }

    public function create(){
        return view('components.group.create');
    }

    public function store(StoreGroupRequest $request){
        return $this->groupService->add($request);
    }

    public function show(int $id){
        return $this->groupService->getById($id);
    }

    public function edit(int $id){
        return $this->groupService->getById($id);
    }

    public function update(int $id, UpdateGroupRequest $request){
        return $this->groupService->update($id, $request);
    }

    public function destroy(int $id){
        return $this->groupService->delete($id);
    }
}
