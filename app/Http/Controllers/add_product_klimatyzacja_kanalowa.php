<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_product_kanalowa;
use Image;

class add_product_klimatyzacja_kanalowa extends Controller
{



    public function kanalowe_text()
    {

        return view('backend.add_product_kanalowe.product_text');
    }

    public function kanalowe_insert(Request $request)
    {

        db_product_kanalowa::insert([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function kanalowe_text_all()
    {

        $section_two_all = db_product_kanalowa::latest()->get();
        return view('backend.add_product_kanalowe.product_text_all', compact('section_two_all'));
    }

    public function kanalowe_text_edit($id)
    {

        $section_two_edit = db_product_kanalowa::findOrFail($id);
        return view('backend.add_product_kanalowe.product_text_edit', compact('section_two_edit'));
    }


    public function kanalowe_text_edit_update(Request $request)
    {

        $section_two_edit = $request->id;

        db_product_kanalowa::findOrFail($section_two_edit)->update([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function kanalowe_text_delete($id)
    {


        db_product_kanalowa::findOrFail($id)->delete();

        return redirect()->back();
    }


















}
