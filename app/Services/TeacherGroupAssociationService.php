<?php

namespace App\Services;

use App\Models\TeacherGroupAssociation;
use App\Http\Requests\StoreTeacherGroupAssociationRequest;
use App\Http\Requests\UpdateTeacherGroupAssociationRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class TeacherGroupAssociationService{
    private function findTeacherGroupAssociation(int $teacher_id, int $group_id){
        return TeacherGroupAssociation::findOrFail($teacher_id, $group_id);
    }

    public function getAll(){
        try{
            return TeacherGroupAssociation::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $teacher_id, int $group_id){
        try{
            return $this->findTeacherGroupAssociation($teacher_id, $group_id);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreTeacherGroupAssociationRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $teachergroup = TeacherGroupAssociation::create($request->only(
                    'group_id',
                    'teacher_id'
                ));

                return $teachergroup;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $teacher_id, int $group_id, UpdateTeacherGroupAssociationRequest $request){
        try{
            return DB::transaction(function() use($teacher_id, $group_id, $request){
                $teachergroup = $this->findTeacherGroupAssociation($teacher_id, $group_id);
                $teachergroup->fill($request->only(
                    'group_id',
                    'teacher_id'
                ))->save();

                return $teachergroup;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $teacher_id, int $group_id){
        try{
            return DB::transaction(function() use($teacher_id, $group_id){
                $teachergroup = $this->findTeacherGroupAssociation($teacher_id, $group_id);
                $teachergroup->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}