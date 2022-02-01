<?php

$podaci=[];

function izbornik ()
{
    echo '1.pregled upisanog' . PHP_EOL;
    echo '2.boja i broj' . PHP_EOL;
    echo '3.Izlaz iz programa' . PHP_EOL;
    echo 'Izbor :' ;

    $terminal=fopen('php://stdin','r');
    $unosKorisnika =fgets($terminal);
    switch($unosKorisnika){
        case 1:
        ispis();
        break;
        case 2:
            unos();
            break;
            case 3:
                break;    
    }

    
}

function ispis ()
{
    if(count($GLOBALS['podaci'])===0){
        echo 'Nema unesenih podataka' . PHP_EOL;
    }else{
        foreach($GLOBALS['podaci'] as $bojaibroj){
            echo $bojaibroj ->boja . ' ' .$bojaibroj ->broj . PHP_EOL;
        }
    }
    izbornik();
}

function unos()
{
    $bojaibroj= new StdClass();
    echo 'Boja: ';
    $terminal=fopen('php://stdin','r');
    $unosKorisnika =fgets($terminal);
    $bojaibroj ->boja=str_replace(["\n","\r"], '', $unosKorisnika);
    echo 'unesi broj :'; 
    $bojaibroj->broj=str_replace(["\n","\r"], '',fgets($terminal));
    $GLOBALS['podaci'][]=$bojaibroj;
    izbornik();
}



izbornik();

