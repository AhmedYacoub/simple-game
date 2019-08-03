<?php

namespace App\Http\Controllers;

use App\Game;
use App\Contracts\GenerateInterface;
use App\Helper\GenerateDataTypes;
use Illuminate\Http\Request;
use App\Helper\CheckResult;

class GameController extends Controller
{
    private $genrate;
    private $check_result;

    public function __construct(GenerateDataTypes $generate, CheckResult $check_result)
    {
        $this->genrate = $generate;
        $this->check_result = $check_result;
    }

    public function index()
    {
        return view('game.index');
    }

    public function play() {
        return view('game.play');
    }

    public function results() {

        $rules = [
            '0' =>  'no win',
            '2' =>  'small win',
            '3' =>  'big win'
        ];

        // genrates an array on integers, with 3 total members and 1 as min and 10 as max
        $results = $this->genrate->config('int', 3, 1, 10);

        // check results occurences
        $this->check_result->config($rules);
        $result_statement = $this->check_result->get($results);

        // dd([
        //     $results,
        //     $result_statement
        // ]);

        return view('game.play')->with('results', $results)->with('result_statement', $result_statement);
    }
}
