<?php

//  ************************************************************
//  *                     REGLAS DE BOLOS                      *
//  *                                                          *
//  * Hay minimo 2 jugadores                                   *
//  * Cada jugador tiene 10 turnos                             *
//  * Cada turno tiene 2 tiradas                               *
//  * Orden de turnos consecutivo sin repetir                  *
//  *                                                          *
//  * SPARE -  tirar 10 bolos en 2 tiradas (1 turno)           *
//  * Recompensa: los puntos del siguiente turno que hagas se  *
//  * suman al turno del spare                                 *
//  *                                                          *
//  * STRIKE -  tirar 10 bolos en 1 tiradas (1 turno)          *
//  * Recompensa: los puntos de los 2 siguientes turnos que    *
//  * hagas se suman al turno del strike                       *
//  ************************************************************

namespace App;

final class Game
{
    public function roll($firstRoll, $firstRollScore)
    {
        if ($firstRoll==False AND $firstRollScore==0)
        {
            $rollScore=rand(0,10);
            print PHP_EOL . "First Roll = " . $rollScore;
            return $rollScore;
        }

        if ($firstRoll==True AND $firstRollScore!=10)
        {
            $pinsActive=(10-$firstRollScore);
            $rollScore=rand(0,$pinsActive);
            print PHP_EOL . "Second Roll = " . $rollScore;
            return $rollScore;
        }
    }
    public function frame()
    {
        $scoreRollOne=$this->roll(False,0);

        if ($scoreRollOne!=10)
        {            
            $scoreRollTwo=$this->roll(True,$scoreRollOne);
            $scoreFrame=($scoreRollOne+$scoreRollTwo);
            if($scoreFrame==10)
            {
                $spare=$this->spare();
                return $scoreFrame;
            }
            return $scoreFrame;
        }

        if ($scoreRollOne==10)
        {
            $strike=$this->strike();
            $scoreFrame=$scoreRollOne;
            return $scoreFrame;
        }

    }
    public function strike()
    {
            print " OLÉ un STRIKE";
    }
    public function spare()
    {
            print " OLÉ un SPARE";
    }
    public function score($playersNumber)
    {
        
    }
}

// ***********************************************
// *       Made with <3 in Factoria F5           *
// ***********************************************
?>
