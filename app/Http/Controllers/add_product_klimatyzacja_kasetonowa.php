<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_product_kasetonowe;

class add_product_klimatyzacja_kasetonowa extends Controller
{

    public function kasetonowe_text()
    {

        return view('backend.add_product_kasetonowe.product_text');
    }

    public function kasetonowe_insert(Request $request)
    {

        db_product_kasetonowe::insert([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function kasetonowe_text_all()
    {

        $section_two_all = db_product_kasetonowe::latest()->get();
        return view('backend.add_product_kasetonowe.product_text_all', compact('section_two_all'));
    }

    public function kasetonowe_text_edit($id)
    {

        $section_two_edit = db_product_kasetonowe::findOrFail($id);
        return view('backend.add_product_kasetonowe.product_text_edit', compact('section_two_edit'));
    }


    public function kasetonowe_text_edit_update(Request $request)
    {

        $section_two_edit = $request->id;

        db_product_kasetonowe::findOrFail($section_two_edit)->update([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function kasetonowe_text_delete($id)
    {


        db_product_kasetonowe::findOrFail($id)->delete();

        return redirect()->back();
    }













}
