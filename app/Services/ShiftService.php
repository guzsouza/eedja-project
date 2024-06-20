<?php

namespace App\Services;

use App\Models\Shift;
use App\Http\Requests\StoreShiftRequest;
use App\Http\Requests\UpdateShiftRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class ShiftService{
    private function findShift(int $id){
        return Shift::findOrFail($id);
    }

    public function getAll(){
        try{
            return Shift::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findShift($id)->with('group', 'Shift');
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreShiftRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $shift = Shift::create($request->only(
                    'name'
                ));

                return $shift;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateShiftRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $shift = $this->findShift($id);
                $shift->fill($request->only(
                    'name'
                ))->save();

                return $shift;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $shift = $this->findShift($id);
                $shift->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}