<?php

namespace App\Services;

use App\Models\TeacherGroupAssociation;
use App\Http\Requests\StoreTeacherGroupAssociationRequest;
use App\Http\Requests\UpdateTeacherGroupAssociationRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class TeacherGroupAssociationService{
    private function findTeacherGroupAssociation(int $id){
        return TeacherGroupAssociation::findOrFail($id);
    }

    public function getAll(){
        try{
            return TeacherGroupAssociation::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findTeacherGroupAssociation($id);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreTeacherGroupAssociationRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $teachergroup = TeacherGroupAssociation::create($request->only(
                    'teacher_id',
                    'discipline_name',
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

                return $teachergroup;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, StoreTeacherGroupAssociationRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $teachergroup = $this->findTeacherGroupAssociation($id);
                $teachergroup->fill($request->only(
                    'group_id',
                    'teacher_id',
                    'discipline_name',
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

                return $teachergroup;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $teachergroup = $this->findTeacherGroupAssociation($id);
                $teachergroup->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}