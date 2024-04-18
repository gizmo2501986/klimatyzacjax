<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_product_scienne;

class add_product_scienne extends Controller
{



    // public function section_two_show_head()
    // {

    //     $section_two = db_section_two_head::find(1);
    //     return view('backend.section_two.section_two_head', compact('section_two'));
    // }


    // public function section_two_insert(Request $request)
    // {

    //     $section_two_id = $request->id;

    //     db_section_two_head::findOrFail($section_two_id)->update([

    //         'text_head' => $request->text_head,

    //     ]);

    //     return redirect()->back();
    // }



    public function scienne_text()
    {

        return view('backend.add_product_scienne.product_text');
    }

    public function scienne_text_insert(Request $request){

        db_product_scienne::insert([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();
    }


    public function product_text_all(){

        $section_two_all = db_product_scienne::latest()->get();
        return view('backend.add_product_scienne.product_text_all', compact('section_two_all'));
    }

    public function product_text_edit($id)
    {

        $section_two_edit = db_product_scienne::findOrFail($id);
        return view('backend.add_product_scienne.product_text_edit', compact('section_two_edit'));
    }


    public function product_text_edit_update(Request $request)
    {

        $section_two_edit = $request->id;

        db_product_scienne::findOrFail($section_two_edit)->update([

            'producent' => $request->producent,
            'model' => $request->model,
            'chlodzenie' => $request->chlodzenie,
            'grzanie' => $request->grzanie,
            'm2' => $request->m2,
            'cena' => $request->cena,

        ]);

        return redirect()->back();

    }


    public function product_text_delete($id){


        db_product_scienne::findOrFail($id)->delete();

        return redirect()->back();
    }







}
