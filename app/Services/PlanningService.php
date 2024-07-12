<?php

namespace App\Services;

use App\Models\Planning;
use App\Models\Spreadsheet;
use Illuminate\Http\Request;
use App\Http\Requests\StorePlanningRequest;
use App\Http\Requests\UpdatePlanningRequest;
use Illuminate\Support\Facades\DB;
use Exception;
use Carbon\Carbon;
use Illuminate\Http\Response;

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

    public function getPlanningsBySpreadsheet(int $id){
        try{
            $plannings = Planning::Where('spreadsheet_id', $id)
                            ->orderBy('date', 'ASC')
                            ->get()
                            ->toArray();
            $planningsData = $plannings;
            return $planningsData;
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StorePlanningRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $planning = Planning::create($request->only(
                    'spreadsheet_id',
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

    public function getPlannings(Request $request){
        try{
            if($this->hasOnly($request, 'date')){
                $plannings = Planning::where('date', $request->date)
                            ->orderBy('date', 'ASC')
                            ->get();
            }else{
                $spreadsheets = Spreadsheet::with('plannings');

                if($request->has('bimester')){
                    $spreadsheets->where('bimester', $request->bimester);
                } 

                if($request->has('group_id')){
                    $spreadsheets->where('group_id', $request->group_id);
                }

                if ($request->has('teacher_id')) {
                    $spreadsheets->where('teacher_id', $request->teacher_id);
                }

                if ($request->has('discipline_id')) {
                    $spreadsheets->where('discipline_id', $request->discipline_id);
                }

                if ($request->has('year')) {
                    $spreadsheets->where('year', $request->year);
                }

                $spreadsheets = $spreadsheets->get();
                $plannings = [];
                foreach($spreadsheets as $spreadsheet){
                    foreach($spreadsheet['plannings'] as $planning){
                        $plannings[] = $planning;
                    }
                }

                if ($request->has('date')){
                    $date = Carbon::parse($request->input('date'))->format('Y-m-d');
                    $filtered = array_filter($plannings, function($planning) use ($date){
                        return isset($planning['date']) && Carbon::parse($planning['date'])->format('Y-m-d') === $date;
                    });
                    $plannings = array_values($filtered);
                }
            }
            return $plannings;
            
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    private function hasOnly($request, $field){
        $fields = array_keys($request->all());
        return count($fields) === 2 && in_array($field, $fields);
    }

    public function update(int $id, UpdatePlanningRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $planning = $this->findPlanning($id);
                $planning->fill($request->only(
                    'spreadsheet_id',
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