<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\db_product_scienno_sufitowe;

class add_product_scienno_sufitowe extends Controller
{


    public function scienno_sufitowe_text()
    {

        return view('backend.add_product_scienno_sufitowe.product_text');
    }

    public function scienno_sufitowe_insert(Request $request)
    {

        db_product_scienno_sufitowe::insert([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function scienno_sufitowe_text_all()
    {

        $section_two_all = db_product_scienno_sufitowe::latest()->get();
        return view('backend.add_product_scienno_sufitowe.product_text_all', compact('section_two_all'));
    }

    public function scienno_sufitowe_text_edit($id)
    {

        $section_two_edit = db_product_scienno_sufitowe::findOrFail($id);
        return view('backend.add_product_scienno_sufitowe.product_text_edit', compact('section_two_edit'));
    }


    public function scienno_sufitowe_text_edit_update(Request $request)
    {

        $section_two_edit = $request->id;

        db_product_scienno_sufitowe::findOrFail($section_two_edit)->update([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function scienno_sufitowe_text_delete($id)
    {


        db_product_scienno_sufitowe::findOrFail($id)->delete();

        return redirect()->back();
    }
}
