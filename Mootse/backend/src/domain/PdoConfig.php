<?php
namespace TSE\workshop_tse_bibli\domain;

class PdoConfig {

    private const DATA = array(
        'host'=>'localhost',
        'dbname'=>'workshop_tse_bibli',
        'username'=>'root',
        //'password'=>'Peterclash@072642'
        'password'=>'52dLmenJspp@y!?ueiHHt'
    );

    public static function getData() {
        return self::DATA;
    }
}
