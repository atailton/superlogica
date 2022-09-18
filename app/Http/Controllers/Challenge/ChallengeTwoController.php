<?php

namespace App\Http\Controllers\Challenge;

use App\Http\Controllers\Controller;

class ChallengeTwoController extends Controller
{
    /*
       Exercício 2 
    */

    public function index(): void
    {
        //topic 1 and 2
        $topic1and2 = array();
        $topic1and2 = $this->generateRandomArray();

        //topic 3
        $topic3 = $topic1and2[3];

        //topic 4
        $topic4 = implode(",", $topic1and2);

        //topic 5
        $topic5 = explode(",", $topic4);
        unset($topic1and2);

        //topic 6
        $topic6 = in_array(14, $topic5) ? true : false;
        
        //topic 7
        $topic5 = $this->topicSeven($topic5);

        //topic 8
        array_pop($topic5);

        //topic 9
        $topic9 = count($topic5);
        
        //topic 10
        $topic5 = array_reverse($topic5);
    }

    private function generateRandomArray(): array
    {
        $array = array();
        $array = range(1, 100);
        shuffle($array);
        $array = array_slice($array, 0, 7);
        return $array;
    }

    private function topicSeven($array): array
    {
        for($i = 0; $i < count($array); $i++){
            if(isset($array[$i-1]) && $array[$i] < $array[$i-1]){
                unset($array[$i]);
                $array = array_values($array);
                $i = $i-1;
            }
        }
        return $array;
    }

}
