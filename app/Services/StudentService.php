<?php

namespace App\Services;

use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class StudentService{
    private function findStudent(int $id){
        return Student::findOrFail($id);
    }

    public function getAll(){
        try{
            return Student::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            return $this->findStudent($id);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreStudentRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $student = Student::create($request->only(
                    'name'
                ));

                return $student;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateStudentRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $student = $this->findStudent($id);
                $student->fill($request->only(
                    'name'
                ))->save();

                return $student;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $student = $this->findStudent($id);
                $student->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}