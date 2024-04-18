<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekcja_kwadrat;
use App\Models\sekcja_kwadrat_dwa;
use App\Models\db_section_one_klimatyzacja;
use App\Models\db_product_scienne;
use App\Models\db_product_kasetonowe;
use App\Models\db_section_one_kasetonowa;
use App\Models\db_section_one_scienno_sufitowe;
use App\Models\db_section_one_kanalowa;
use App\Models\db_section_one_multisplit;

class frontend extends Controller
{

    public function frontend_index(){

        return view('frontend.index');
    }

    public function oferta(){

        return view('frontend.oferta');
    }

    public function klienci(){

        return view('frontend.klienci');
    }

    public function serwis(){

        return view('frontend.serwis');
    }

    public function kontakt(){

        return view('frontend.kontakt');
    }

    public function scienne(){
        return view('frontend.oferta.scienne');
    }

    public function alergik(){
        return view('frontend.info.alergik');
    }

    public function smog(){
        return view('frontend.info.smog');
    }

    public function wazne(){
        return view('frontend.wazneinformacje');
    }

    public function r32($id){

        $info = sekcja_kwadrat::findOrFail($id);
        return view('frontend.main_4_kwadraty.r32', compact('info'));
    }

    public function kwadraty_bottom($id){

        $kwadraty_bottom = sekcja_kwadrat_dwa::findOrFail($id);
        return view('frontend.main_4_kwadraty.kwadraty_bottom', compact('kwadraty_bottom'));
    }

    public function klimatyzacja_info($id){

        $klimatyzacja_info = db_section_one_klimatyzacja::findOrFail($id);
        return view('frontend.main_4_kwadraty.klimatyzacja', compact('klimatyzacja_info'));
    }

    public function klimatyzacja_scienno_sufitowa($id){

        $text = db_section_one_scienno_sufitowe::findOrFail($id);
        return view('frontend.main_4_kwadraty.scienno_sufitowa', compact('text'));
    }

    public function klimatyzacja_kasetonowa($id){

        $text = db_section_one_kasetonowa::findOrFail($id);
        return view('frontend.main_4_kwadraty.kasetonowa', compact('text'));
    }


    public function klimatyzacja_kanalowa($id){

        $text = db_section_one_kanalowa::findOrFail($id);
        return view('frontend.main_4_kwadraty.kanalowa', compact('text'));
    }

    public function klimatyzacja_multisplit($id){

        $text = db_section_one_multisplit::findOrFail($id);
        return view('frontend.main_4_kwadraty.multisplit', compact('text'));
    }


}
