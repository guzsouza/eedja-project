<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegimentRequest;
use App\Http\Requests\UpdateRegimentRequest;
use App\Services\RegimentService;

class RegimentController extends Controller
{
    protected $regimentService;
    public function __construct(RegimentService $regimentService){
        $this->regimentService = $regimentService;
    }

    //GET /planejamento
    public function index(){
        return $this->regimentService->getAll();
    }

    //GET /planejamento/criar
    public function create(){
        return view('components.regiment.create');
    }

    //POST /planejamento/criar
    public function store(StoreRegimentRequest $request){
        return $this->regimentService->add($request);
    }

    //GET /planejamento/{id}
    public function show(int $id){
        return $this->regimentService->getById($id);
    }

    //GET /planejamento/editar/id
    public function edit(int $id){
        return $this->regimentService->getById($id);
    }

    //PUT /planejamento/editar/id
    public function update(int $id, UpdateRegimentRequest $request){
        return $this->regimentService->update($id, $request);
    }

    //Delete /planejamento/excluir/id
    public function destroy(int $id){
        return $this->regimentService->delete($id);
    }
}
