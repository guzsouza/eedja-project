<?php

namespace App\Services;

use App\Models\Planning;
use Illuminate\Http\Request;
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
            $planning = $this->findPlanning($id);
            return response()->json([
                $planning,
                $planning->group,
                $planning->teacher,
                $planning->discipline
            ]);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getPlannings(Request $request){
        try{
            $plannings = Planning::orderBy('date', 'ASC');
            
            if($request->has('bimester')){
                $plannings->where('bimester', $request->bimester);
            } 

            if($request->has('group_id')){
                $plannings->where('group_id', $request->group_id);
            }

            if ($request->has('teacher_id')) {
                $plannings->where('teacher_id', $request->teacher_id);
            }

            if ($request->has('discipline_id')) {
                $plannings->where('discipline_id', $request->discipline_id);
            }

            if ($request->has('year')) {
                $plannings->where('year', $request->year);
            }

            return $plannings->get();
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
                    'bimester',
                    'year',
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
                    'bimester',
                    'year',
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