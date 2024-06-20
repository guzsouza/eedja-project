<?php

namespace App\Services;

use App\Models\Teacher;
use App\Http\Requests\StoreTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class TeacherService{
    private function findTeacher(int $id){
        return Teacher::findOrFail($id);
    }

    public function getAll(){
        try{
            return Teacher::all();
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

    public function add(StoreTeacherRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $teacher = Teacher::create($request->only(
                    'name'
                ));

                return $teacher->with('teacher', 'group');
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, StoreTeacherRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $teacher = $this->findTeacher($id);
                $teacher->fill($request->only(
                    'name'
                ))->save();

                return $teacher->with('teacher', 'group');
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $teacher = $this->findTeacher($id);
                $teacher->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}