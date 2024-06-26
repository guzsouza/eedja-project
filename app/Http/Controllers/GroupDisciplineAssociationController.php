<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGroupDisciplineAssociationRequest;
use App\Http\Requests\UpdateGroupDisciplineAssociationRequest;
use App\Services\GroupDisciplineAssociationService;

class GroupDisciplineAssociationController extends Controller
{
    protected $groupDisciplineService;
    public function __construct(GroupDisciplineAssociationService $groupDisciplineService){
        $this->groupDisciplineService = $groupDisciplineService;
    }

    //GET /planejamento
    public function index(){
        return $this->groupDisciplineService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.groupDiscipline.create');
    }

    //POST /planejamento/criar
    public function store(StoreGroupDisciplineAssociationRequest $request){
        return $this->groupDisciplineService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $group_id, int $discipline_id){
        return $this->groupDisciplineService->getById($group_id, $discipline_id);
    }

    //GET /planejamento/editar/id
    public function edit(int $group_id, int $discipline_id){
        return $this->groupDisciplineService->getById($group_id, $discipline_id);
    }

    //PUT /planejamento/editar/id
    public function update(int $group_id, int $discipline_id, UpdateGroupDisciplineAssociationRequest $request){
        return $this->groupDisciplineService->update($group_id, $discipline_id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $group_id, int $discipline_id){
        return $this->groupDisciplineService->delete($group_id, $discipline_id);
    }
}
