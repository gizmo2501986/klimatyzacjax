<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_section_one_klienci_text;

use Image;

class section_one_klienci extends Controller
{

    public function section_one_klienci_show()
    {

        $section_one = db_section_one_klienci_text::find(1);
        return view('backend.section_one_klienci.section_one_show', compact('section_one'));
    }


    public function section_one_klienci_insert(Request $request)
    {

        $section_one_id = $request->id;

        db_section_one_klienci_text::findOrFail($section_one_id)->update([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'text_3' => $request->text_3,
            'text_4' => $request->text_4,
            'text_5' => $request->text_5,


        ]);

        return redirect()->back();
    }
}
