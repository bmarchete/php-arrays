<?php

class Handler
{
    public static function arrayHandler()
    {
        $a = [];

        $a['nomes'] = explode(' ', $_POST['nome']);
        $a['idade'] = $_POST['idade'] >= 18 ? 'Maior' : 'Menor';
        
        $a['esportes'] = array_map(function($value){
            $x = rand(1,1000);
             $temp[] = $value;
             $temp[] = $x;

             return $temp;

        }, $_POST['esportes']);

        $alternativas['casado'] = $_POST['casado'];
        $alternativas['filhos'] = $_POST['filhos'];
        $alternativas['empregado'] = $_POST['empregado'];

        $a['alternativas'] = array_filter($alternativas, function($v){
            return $v == 'sim';
        });

        return $a;
    }
}