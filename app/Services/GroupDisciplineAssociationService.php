<?php

namespace App\Services;

use App\Models\GroupDisciplineAssociation;
use App\Http\Requests\StoreGroupDisciplineAssociationRequest;
use App\Http\Requests\UpdateGroupDisciplineAssociationRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class GroupDisciplineAssociationService{
    private function findGroup(int $id){
        return GroupDisciplineAssociation::findOrFail($id);
    }

    public function getAll(){
        try{
            return GroupDisciplineAssociation::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findGroup($id)->with('group', 'discipline');
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

                return $groupDiscipline->with('group', 'discipline');
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateGroupDisciplineAssociationRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $groupDiscipline = $this->findGroup($id);
                $groupDiscipline->fill($request->only(
                    'group_id',
                    'discipline_id'
                ))->save();

                return $groupDiscipline->with('group', 'discipline');
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $groupDiscipline = $this->findGroup($id);
                $groupDiscipline->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}