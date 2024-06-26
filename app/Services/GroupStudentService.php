<?php

namespace App\Services;

use App\Models\GroupStudent;
use App\Http\Requests\StoreGroupStudentRequest;
use App\Http\Requests\UpdateGroupStudentRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class GroupStudentService{
    private function findTeacher(int $group_id, int $student_id){
        return GroupStudent::where("group_id", $group_id)
                            ->where("student_id", $student_id)
                            ->first();
    }

    public function getAll(){
        try{
            return GroupStudent::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $group_id, int $student_id){
        try{
            return $this->findTeacher($group_id, $student_id);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreGroupStudentRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $groupStudent = GroupStudent::create($request->only(
                    'name'
                ));

                return $groupStudent;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $group_id, int $student_id, UpdateGroupStudentRequest $request){
        try{
            return DB::transaction(function() use($group_id, $student_id, $request){
                $groupStudent = $this->findTeacher($group_id, $student_id);
                $groupStudent->fill($request->only(
                    'name'
                ))->save();

                return $groupStudent;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $group_id, int $student_id){
        try{
            return DB::transaction(function() use($group_id, $student_id){
                $groupStudent = $this->findTeacher($group_id, $student_id);
                $groupStudent->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}