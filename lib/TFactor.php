<?php

class TFactor{
    const BETS = [0.10, 0.50, 1, 5];
    const MINBET = self::BETS[0];

    private static function log($msg){
        echo $msg.PHP_EOL;
    }

    public static function getMaxTries(float $balance, float $minbet){
        $t = 0; $tbal = $balance;

        while($tbal > $minbet){
            $t++;
            self::log("tbal = ".$tbal.", fiche = ".$minbet.", t = ".$t); 
            $tbal = round($tbal - $minbet, 2);
            $minbet = $minbet*2;  
        }

        return $t;
    }

    public static function getBalanceToPlay(int $tries, float $minbet){
        $tbal = 0;
        $f= true;

        while($f){
            $tbal = $tbal + $minbet;
            if(self::getMaxTries($tbal, $minbet) >= $tries){
                $f = false;
            }
        }

        self::log("toplay = ".$tbal); 

    }
}

?>
