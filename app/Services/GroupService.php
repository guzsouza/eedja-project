<?php

namespace App\Services;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class GroupService{
    private function findGroup(int $id){
        return Group::findOrFail($id);
    }

    public function getAll(){
        try{
            return Group::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findGroup($id)->toArray();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreGroupRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $group = Group::create($request->only(
                    'reg_id',
                    'name'
                ));

                return $group;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateGroupRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $group = $this->findGroup($id);
                $group->fill($request->only(
                    'name',
                    'shift_id'
                ))->save();

                return $group;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $group = $this->findGroup($id);
                $group->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}