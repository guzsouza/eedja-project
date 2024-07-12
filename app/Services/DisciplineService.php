<?php

namespace App\Services;

use App\Models\Discipline;
use App\Http\Requests\StoreDisciplineRequest;
use App\Http\Requests\UpdateDisciplineRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class DisciplineService{
    private function findDiscipline(int $id){
        return Discipline::findOrFail($id);
    }

    public function getAll(){
        try{
            return Discipline::orderBy('name', 'ASC')->get();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findDiscipline($id)->toArray();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreDisciplineRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $discipline = Discipline::create($request->only(
                    'name'
                ));

                return $discipline;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateDisciplineRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $discipline = $this->findDiscipline($id);
                $discipline->fill($request->only(
                    'name'
                ))->save();

                return $discipline;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $discipline = $this->findDiscipline($id);
                $discipline->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}