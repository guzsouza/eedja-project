<?php

namespace App\Services;

use App\Models\GroupDisciplineAssociation;
use App\Http\Requests\StoreGroupDisciplineAssociationRequest;
use App\Http\Requests\UpdateGroupDisciplineAssociationRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class GroupDisciplineAssociationService{
    private function findGroup(int $group_id, int $discipline_id){
        return GroupDisciplineAssociation::where("group_id", $group_id)
                                        ->where("discipline_id", $discipline_id)
                                        ->first();
    }

    public function getAll(){
        try{
            return GroupDisciplineAssociation::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $group_id, int $discipline_id){
        try{
            return $this->findGroup($group_id, $discipline_id);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreGroupDisciplineAssociationRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $groupDiscipline = GroupDisciplineAssociation::create($request->only(
                    'group_id',
                    'discipline_id'
                ));

                return $groupDiscipline;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $group_id, int $discipline_id, UpdateGroupDisciplineAssociationRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $groupDiscipline = $this->findGroup($group_id, $discipline_id);
                $groupDiscipline->fill($request->only(
                    'group_id',
                    'discipline_id'
                ))->save();

                return $groupDiscipline;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $group_id, int $discipline_id){
        try{
            return DB::transaction(function() use($group_id, $discipline_id){
                $groupDiscipline = $this->findGroup($group_id, $discipline_id);
                $groupDiscipline->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}