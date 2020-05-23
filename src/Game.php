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
    public function roll()
    {
        $rollScore= rand (0,10);
        return $rollScore;
    }
    public function frame()
    {

    }
    public function score()
    {

    }
}

// ***********************************************
// *       Made with <3 in Factoria F5           *
// ***********************************************

?>
