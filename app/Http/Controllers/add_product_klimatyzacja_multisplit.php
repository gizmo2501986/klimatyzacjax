<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_product_multisplit;

class add_product_klimatyzacja_multisplit extends Controller
{


    public function multisplit_text()
    {

        return view('backend.add_product_multisplit.product_text');
    }

    public function multisplit_insert(Request $request)
    {

        db_product_multisplit::insert([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function multisplit_text_all()
    {

        $section_two_all = db_product_multisplit::latest()->get();
        return view('backend.add_product_multisplit.product_text_all', compact('section_two_all'));
    }

    public function multisplit_text_edit($id)
    {

        $section_two_edit = db_product_multisplit::findOrFail($id);
        return view('backend.add_product_multisplit.product_text_edit', compact('section_two_edit'));
    }


    public function multisplit_text_edit_update(Request $request)
    {

        $section_two_edit = $request->id;

        db_product_multisplit::findOrFail($section_two_edit)->update([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function multisplit_text_delete($id)
    {


        db_product_multisplit::findOrFail($id)->delete();

        return redirect()->back();
    }














}
