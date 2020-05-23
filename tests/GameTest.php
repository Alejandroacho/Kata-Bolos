<?php

use App\Game;
use PHPUnit\Framework\TestCase;

final class GameTest extends TestCase
{
    public function test_roll_es_numero()
    {
        $trialRoll=new Game;
        $result= $trialRoll->roll();

        $this->assertIsNumeric($result);
    }  
    public function test_roll_no_mayor_a_10()
    {
        $veces=0;
        while ($veces<9){
            $trialRoll=new Game;
            $result= $trialRoll->roll();

            $this->assertLessThanOrEqual(10 , $result);

            $veces += 1;
        }
    }
    public function test_roll_a_partir_de_0()
    {
        $veces=0;
        while ($veces<9){
            $trialRoll=new Game;
            $result= $trialRoll->roll();

            $this->assertGreaterThanOrEqual(0 , $result);

            $veces += 1;
        }
    }
    public function test_frame_tiene_2_rolls()
    {
        
    }
}

// ***********************************************
// *       Made with <3 in Factoria F5           *
// ***********************************************

?>