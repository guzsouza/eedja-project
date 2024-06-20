<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Services\GroupService;

class GroupController extends Controller{
    protected $groupService;
    public function __construct(GroupService $groupService){
        $this->groupService = $groupService;
    }

    public function index(){
        return $this->groupService->getAll();
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
