<?php

namespace App\Services;

use App\Models\GroupStudent;
use App\Http\Requests\StoreGroupStudentRequest;
use App\Http\Requests\UpdateGroupStudentRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class GroupStudentService{
    private function findTeacher(int $id){
        return GroupStudent::findOrFail($id);
    }

    public function getAll(){
        try{
            return GroupStudent::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findTeacher($id)->with('group', 'teacher');
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

                return $groupStudent->with('teacher', 'group');
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateGroupStudentRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $groupStudent = $this->findTeacher($id);
                $groupStudent->fill($request->only(
                    'name'
                ))->save();

                return $groupStudent->with('teacher', 'group');
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $groupStudent = $this->findTeacher($id);
                $groupStudent->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}