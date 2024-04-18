<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_wazne_info;

class wazne_info extends Controller
{




    public function wazne_info_text()
    {

        return view('backend.wazne_info.section_two_text');
    }

    public function wazne_info_text_insert(Request $request){

        db_wazne_info::insert([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,

        ]);

        return redirect()->back();
    }


    public function wazne_info_text_all(){

        $section_two_all = db_wazne_info::latest()->get();
        return view('backend.wazne_info.section_two_text_all', compact('section_two_all'));
    }

    public function wazne_info_text_edit($id)
    {

        $section_two_edit = db_wazne_info::findOrFail($id);
        return view('backend.wazne_info.section_two_text_edit', compact('section_two_edit'));
    }


    public function wazne_info_text_edit_update(Request $request)
    {

        $section_two_edit = $request->id;

        db_wazne_info::findOrFail($section_two_edit)->update([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,

        ]);

        return redirect()->back();

    }


    public function wazne_info_text_delete($id){


        db_wazne_info::findOrFail($id)->delete();

        return redirect()->back();
    }




}
