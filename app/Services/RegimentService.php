<?php

namespace App\Services;

use App\Models\Regiment;
use App\Http\Requests\StoreRegimentRequest;
use App\Http\Requests\UpdateRegimentRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class RegimentService{
    private function findRegiment(int $id){
        return Regiment::findOrFail($id);
    }

    public function getAll(){
        try{
            return Regiment::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findRegiment($id)->with('group', 'Regiment');
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreRegimentRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $regiment = Regiment::create($request->only(
                    'name'
                ));

                return $regiment;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateRegimentRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $regiment = $this->findRegiment($id);
                $regiment->fill($request->only(
                    'name'
                ))->save();

                return $regiment;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $regiment = $this->findRegiment($id);
                $regiment->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}