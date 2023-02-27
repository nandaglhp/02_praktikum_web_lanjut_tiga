<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerpustakaanController extends Controller
{
    //

    function komedi(){
        echo  "ini adalah genre komedi";
    }
    function sains(){
        echo "ini adalah genre romance";
    }
    function sejarah(){
        echo "ini adalah genre sejarah";
    }

    function diskon($diskon){
        echo "anda mendapat diskon sebesar". $diskon;
    }

    function duaribu(){
        echo  "ini adalah buku terbitan tahun 2000";
    }
    function seribu(){
        echo "ini adalah buku terbitan tahun 2001";
    }
    function tigaribu(){
        echo "ini adalah buku terbitan tahun 2003";
    }


}
