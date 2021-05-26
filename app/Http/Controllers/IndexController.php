<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Counter;

class IndexController extends Controller
{
    public function show()
    {
        $sumup = DB::select('select type,count(*) as cnt from counters group by type order by type asc');
        
        if (count($sumup)>2) {
            return view('welcome', ['chanting' => $sumup[0]->cnt,'kowtow'=>$sumup[1]->cnt,'veg'=>$sumup[2]->cnt]);
        }else{
            return view('welcome', ['chanting' =>0,'kowtow'=>0,'veg'=>0]);
        }
    }

    public function store(Request $request)
    {
        $key=collect($request->all())->except('_token')->keys()[0];
        DB::insert('insert into counters (type,created_at) values (?,DATE_ADD(NOW(), INTERVAL 8 HOUR))',[$key]);
        return redirect('/');
    } 
    
    
}
