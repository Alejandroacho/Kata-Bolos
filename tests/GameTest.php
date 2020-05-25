<?php

use App\Game;
use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{   
     //Tests de la función roll:

    public function test_roll_es_numero()
    {
        $trialRoll=new Game;
        $result=$trialRoll->roll(False, 0);

        $this->assertIsNumeric($result);
    }  
    public function test_roll_no_mayor_a_10_x10()
    {
        $veces=0;
        while ($veces<10){
            $trialRoll=new Game;
            $result=$trialRoll->roll(False, 0);

            $this->assertLessThanOrEqual(10 , $result);

            $veces += 1;
        }
    }
    public function test_roll_a_partir_de_0_x10()
    {
        $veces=0;
        while ($veces<10){
            $trialRoll=new Game;
            $result=$trialRoll->roll(False, 0);

            $this->assertGreaterThanOrEqual(0 , $result);

            $veces+=1;
        }
    }
    public function test_roll_segunda_tirada_menor_o_igual_a_los_pines_en_pie_x10()
    {
        $veces=0;
        while ($veces<10)
        {       
            $firstRollScore=rand(0,9);
            $standPins=(10-$firstRollScore);

            $trialRoll=new Game;
            $result=$trialRoll->roll(True, $firstRollScore);
    
            $this->assertLessThanOrEqual($standPins, $result);

            $veces+=1;
        }
    }

    //Tests de función frame:

    public function test_frame_es_númerico()
    {
        $veces=0;
        while($veces<50)
        {
            $trialFrame=new Game;
            $result=$trialFrame->frame();
            $veces+=1;
        }

        $this->assertIsNumeric($result);
    }
    public function test_frame_es_menor_de_10()
    {
        $maximumScore=10;

        $trialFrame=new Game;
        $result=$trialFrame->frame();

        $this->assertLessThanOrEqual($maximumScore, $result);
    }

    //Test de score:
    
    public function test_score_devuelve_un_array()
    {
        $playersNumber=2;

        $trialScore=new Game;
        $result=$trialScore->score($playersNumber);

        $this->assertIsArray($result);
    }
    public function test_score_contiene_player_1()
    {
        $playersNumber=2;

        $trialScore=new Game;
        $result=$trialScore->score($playersNumber);

        $this->assertContains("Player 1",$result[0]);
    }
    public function test_score_contiene_player_2()
    {
        $playersNumber=2;

        $trialScore=new Game;
        $result=$trialScore->score($playersNumber);

        $this->assertContains("Player 2",$result[1]);
    }
}

// ***********************************************
// *       Made with <3 in Factoria F5           *
// ***********************************************

?>