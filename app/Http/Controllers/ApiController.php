<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{

    public function dragons(){

    $dragons = DB::table('dragons')->get();


    return new JsonResponse($dragons);

    }
    public function dragonList(){
        $dragonlist = DB::table('dragons')->select('DragonRider')->get();

        return new JsonResponse($dragonlist);
    }
    public function saddles(){
        $saddles = DB::table('saddles')->get();

        return new JsonResponse($saddles);
    }
    public function saddlesFull(){
        $saddlesFull = DB::table('saddles')->join('dragons', 'saddles.id_Dragon', '=', 'dragons.id_Dragon')->get();

        return new JsonResponse($saddlesFull);
    }
    public function goodSaddles(){
        $goodSaddle = DB::table('saddles')->select('Saddle')->where('ConditionIs', '=', 'Good')->get();
        return new JsonResponse($goodSaddle);
    }
    public function riderSaddle(){
        $ridersaddle = DB::table('saddles')->join('dragons','saddles.id_Dragon', '=', 'dragons.id_Dragon')->select('Saddle','DragonRider')->get();
        return new JsonResponse($ridersaddle);
    }
}
