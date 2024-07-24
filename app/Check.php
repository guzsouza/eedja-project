<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Services\SpreadsheetService;

trait Check{
    protected $spreadsheetService;
    public function __construct(SpreadsheetService $spreadsheetService){
        $this->spreadsheetService = $spreadsheetService;
    }

    public function checkSpreadsheetOwner(Request $request, $isAdmin){
        $user = Auth::user();
        $spreadsheet_id = $request->route('id');
        $spreadsheet = $this->spreadsheetService->getById($spreadsheet_id);
        if ($spreadsheet && ($user['id'] === $spreadsheet['teacher_id'] || $isAdmin)){
            return true;
        } else{
            return false;
        }
    }

    public function checkUserRole($role){
        $user = Auth::user();
        if($user->role === $role || ($role === 'staff' && ($user->role === 'teacher' || $user->role === 'admin' || $user->role === 'supervisor'))){
            return true;
        }
        return false;
    }
}