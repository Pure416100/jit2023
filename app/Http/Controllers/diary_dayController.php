<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diary_day;
class diary_dayController extends Controller
{
    public function store(Request $request)
    {
        
        $diary = new diary_day;
        $diary-> color_feel_today = $request->flexRadioDefault;
        $diary-> sensation_level = $request->input('value');
        $diary-> detail_t1 = $request->v3;   
        $diary-> detail_t1 = $request->v3;   
        $diary->save();
        return redirect('/results');
    
    }
}
