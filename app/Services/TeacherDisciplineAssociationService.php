<?php

namespace App\Services;

use App\Models\TeacherDisciplineAssociation;
use App\Http\Requests\StoreTeacherDisciplineAssociationRequest;
use App\Http\Requests\UpdateTeacherDisciplineAssociationRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class TeacherDisciplineAssociationService{
    private function findTeacherDisciplineAssociation(int $teacher_id, $discipline_id){
        return TeacherDisciplineAssociation::where("teacher_id", $teacher_id)
                                            ->where("discipline_id", $discipline_id)
                                            ->first();
    }

    public function getAll(){
        try{
            return TeacherDisciplineAssociation::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $teacher_id, $discipline_id){
        try{
            return $this->findTeacherDisciplineAssociation($teacher_id, $discipline_id);
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

    public function update(int $teacher_id, $discipline_id, UpdateTeacherDisciplineAssociationRequest $request){
        try{
            return DB::transaction(function() use($teacher_id, $discipline_id, $request){
                $teacherDiscipline = $this->findTeacherDisciplineAssociation($teacher_id, $discipline_id);
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

    public function delete(int $teacher_id, $discipline_id){
        try{
            return DB::transaction(function() use($teacher_id, $discipline_id){
                $teacherDiscipline = $this->findTeacherDisciplineAssociation($teacher_id, $discipline_id);
                $teacherDiscipline->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}