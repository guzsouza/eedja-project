<?php

namespace App\Services;

use App\Models\Spreadsheet;
use Illuminate\Http\Request;
use App\Http\Requests\StoreSpreadsheetRequest;
use App\Http\Requests\UpdateSpreadsheetRequest;
use Illuminate\Support\Facades\DB;
use Exception;

class SpreadsheetService{
    private function findSpreadsheet(int $id){
        return Spreadsheet::findOrFail($id);
    }

    public function getAll(){
        try{
            return Spreadsheet::all();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getById(int $id){
        try{
            $spreadsheet = $this->findSpreadsheet($id);
            return response()->json([$spreadsheet]);
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function getSpreadsheet(Request $request){
        try{
            return Spreadsheet::where('group_id', $request->group_id)
                                ->where('discipline_id', $request->discipline_id)
                                ->where('bimester', $request->bimester)
                                ->with('plannings', 'teacher', 'group', 'discipline')
                                ->first();
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function add(StoreSpreadsheetRequest $request){
        try{
            return DB::transaction(function() use($request){ 
                $spreadsheet = Spreadsheet::create($request->only(
                    'group_id',
                    'teacher_id',
                    'discipline_id',
                    'bimester',
                    'year',
                    'classes',
                    'startDate',
                    'endDate',
                ));

                return $spreadsheet;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function update(int $id, UpdateSpreadsheetRequest $request){
        try{
            return DB::transaction(function() use($id, $request){
                $spreadsheet = $this->findSpreadsheet($id);
                $spreadsheet->fill($request->only(
                    'group_id',
                    'teacher_id',
                    'discipline_id',
                    'bimester',
                    'year',
                    'classes',
                    'startDate',
                    'endDate',
                ))->save();

                return $spreadsheet;
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }

    public function delete(int $id){
        try{
            return DB::transaction(function() use($id){
                $spreadsheet = $this->findSpreadsheet($id);
                $spreadsheet->delete();
                return response()->json(['Deleted'], 204);
            });
        } catch (Exception $e){
            return response()->json(['Details' => $e], 400);
        }
    }
}