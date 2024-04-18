<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_section_six_head;
use App\Models\db_section_six_text;

class section_six extends Controller
{

    public function section_six_show_head()
    {

        $section_two = db_section_six_head::find(1);
        return view('backend.section_six.section_six_head', compact('section_two'));
    }


    public function section_six_insert(Request $request)
    {

        $section_two_id = $request->id;

        db_section_six_head::findOrFail($section_two_id)->update([

            'text_head' => $request->text_head,

        ]);

        return redirect()->back();
    }



    public function section_six_text()
    {

        return view('backend.section_six.section_six_text');
    }

    public function section_six_text_insert(Request $request){

        db_section_six_text::insert([

            'text_1' => $request->text_1,


        ]);

        return redirect()->back();
    }


    public function section_six_text_all(){

        $section_two_all = db_section_six_text::latest()->get();
        return view('backend.section_six.section_six_text_all', compact('section_two_all'));
    }

    public function section_six_text_edit($id)
    {

        $section_two_edit = db_section_six_text::findOrFail($id);
        return view('backend.section_six.section_six_text_edit', compact('section_two_edit'));
    }


    public function section_six_text_edit_update(Request $request)
    {

        $section_two_edit = $request->id;

        db_section_six_text::findOrFail($section_two_edit)->update([

            'text_1' => $request->text_1,


        ]);

        return redirect()->back();

    }


    public function section_six_text_delete($id){


        db_section_six_text::findOrFail($id)->delete();

        return redirect()->back();
    }








}
