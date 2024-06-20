<?php

namespace App\Services;

use App\Models\Planning;
use App\Http\Requests\StorePlanningRequest;
use App\Http\Requests\UpdatePlanningRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class PlanningService{
    private function findPlanning(int $id){
        return Planning::findOrFail($id);
    }

    public function getAll(){
        try{
            return Planning::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findPlanning($id);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StorePlanningRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $planning = Planning::create($request->only(
                    'group_id',
                    'teacher_id',
                    'discipline_id',
                    'classes',
                    'startDate',
                    'endDate',
                    'date',
                    'content',
                    'skills',
                    'resource',
                    'metodology',
                    'project'
                ));

                return $planning;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdatePlanningRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $planning = $this->findPlanning($id);
                $planning->fill($request->only(
                    'group_id',
                    'teacher_id',
                    'discipline_id',
                    'classes',
                    'startDate',
                    'endDate',
                    'date',
                    'content',
                    'skills',
                    'resource',
                    'metodology',
                    'project'
                ))->save();

                return $planning;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $planning = $this->findPlanning($id);
                $planning->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}