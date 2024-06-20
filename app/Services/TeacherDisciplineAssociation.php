<?php

namespace App\Services;

use App\Models\TeacherDisciplineAssociation;
use App\Http\Requests\StoreTeacherDisciplineAssociationRequest;
use App\Http\Requests\UpdateTeacherDisciplineAssociationRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class TeacherDisciplineAssociationService{
    private function findTeacherDisciplineAssociation(int $id){
        return TeacherDisciplineAssociation::findOrFail($id);
    }

    public function getAll(){
        try{
            return TeacherDisciplineAssociation::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findTeacherDisciplineAssociation($id);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreTeacherDisciplineAssociationRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $teacherDiscipline = TeacherDisciplineAssociation::create($request->only(
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

                return $teacherDiscipline;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, StoreTeacherDisciplineAssociationRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $teacherDiscipline = $this->findTeacherDisciplineAssociation($id);
                $teacherDiscipline->fill($request->only(
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

                return $teacherDiscipline;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $teacherDiscipline = $this->findTeacherDisciplineAssociation($id);
                $teacherDiscipline->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}