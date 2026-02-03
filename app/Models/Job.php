<?php

namespace App\Models;



class Job {
    public static function all(){
        return [
            ['title'=>'software engineer','salary'=>'$2000'],
            ['title'=>'Graphic designer','salary'=>'$1000']
        ];
    }
}
