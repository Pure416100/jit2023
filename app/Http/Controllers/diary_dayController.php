<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\diary_day;
use App\Models\diary_day2;
use App\Models\rounds_completed;
use Illuminate\Support\Facades\Auth;

class diary_dayController extends Controller
{
    public function store(Request $request)
    {
        
        $rounds = 1;
        for ($rounds = 1;  $rounds <= 21;  $rounds++) {
                $diary1 = new rounds_completed;
                $diary1-> user_id = Auth::user()->id;
                $diary1 -> jobs_id  = "1";
               
                if (request()->has('save')) {
                    $rounds++;
                    if($rounds > 21) $rounds = 1;
                }
                $diary1->rounds = $rounds;

                $diary1-> score = "10";
                $diary1->save();    
            } 

        $diary = new diary_day;
        $diary-> color_feel_today = $request->flexRadioDefault;
        $diary-> sensation_level = $request->input('value');
        $diary-> detail_t1 = $request->v3;
        $diary->diary_day()->associate($diary1); 
        $diary->save();


        return redirect('/results');
    
    }

    public function store2(Request $request)
    {
        $rounds = 1;
        for ($rounds = 1;  $rounds <= 21;  $rounds++) {
                $diary1 = new rounds_completed;
                $diary1-> user_id = Auth::user()->id;
                $diary1 -> jobs_id  = "2";
                 if (request()->has('save')) {
                    $rounds++;
                    if($rounds > 21) $rounds = 1;
                }
                $diary1->rounds = $rounds;
                $diary1-> score = "10";
                $diary1->save();    
            }

        $diary = new diary_day2();
        $diary-> color_feel_today = $request->flexRadioDefault;
        $diary-> sensation_level = $request->input('value');
        $diary-> detail_t1 = $request->v3;
        $diary->diary_day()->associate($diary1); 
        $diary->save();

        
        return redirect('/results');
    
    }
}
