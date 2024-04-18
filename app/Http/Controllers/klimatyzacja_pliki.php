<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\db_klimatyzacja_pliki;
use Image;

class klimatyzacja_pliki extends Controller
{



    public function klimatyzacja_pliki_square_one()
    {

        $section_one_square_one = db_klimatyzacja_pliki::find(1);
        return view('backend.klimatyzacja_pliki.section_one_square_one', compact('section_one_square_one'));
    }


    public function klimatyzacja_pliki_square_one_insert(Request $request)
    {

        // Saving plik_1
        $plik_1_file = $request->file('plik_1');
        $plik_1_name_gen = hexdec(uniqid()) . '.' . $plik_1_file->getClientOriginalExtension();
        $plik_1_file->move('upload/pliki', $plik_1_name_gen);
        $plik_1_save_url = 'upload/pliki/' . $plik_1_name_gen;

        // Saving plik_2
        $plik_2_file = $request->file('plik_2');
        $plik_2_name_gen = hexdec(uniqid()) . '.' . $plik_2_file->getClientOriginalExtension();
        $plik_2_file->move('upload/pliki', $plik_2_name_gen);
        $plik_2_save_url = 'upload/pliki/' . $plik_2_name_gen;

        // Saving image
        $image = $request->file('image');
        $image_name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $image->move('upload/pliki', $image_name_gen);
        $image_save_url = 'upload/pliki/' . $image_name_gen;

        db_klimatyzacja_pliki::insert([
            'plik_1' => $plik_1_save_url,
            'plik_2' => $plik_2_save_url,
            'image' => $image_save_url,
        ]);

        return redirect()->back();
    }





    public function klimatyzacja_pliki_square_all_show()
    {

        $section_one_square_all = db_klimatyzacja_pliki::all();
        return view('backend.klimatyzacja_pliki.section_one_all_square', compact('section_one_square_all'));
    }


    // public function klimatyzacja_pliki_edit_square_one($id)
    // {

    //     $section_one_edit = db_klimatyzacja_pliki::findOrFail($id);
    //     return view('backend.klimatyzacja_pliki.square_one_edit', compact('section_one_edit'));
    // }



    // public function klimatyzacja_pliki_update_square_one(Request $request)
    // {
    //     $section_portfolio_id = $request->id;

    //     // Retrieve the old image path from the database
    //     $oldImage = db_klimatyzacja_pliki::findOrFail($section_portfolio_id)->image;

    //     if ($request->file('image')) {
    //         $image = $request->file('image');
    //         $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

    //         // Delete the old image file from the server
    //         if (file_exists($oldImage)) {
    //             unlink($oldImage);
    //         }

    //         Image::make($image)->save('upload/pliki/' . $name_gen);
    //         $save_url = 'upload/pliki/' . $name_gen;

    //         // Update the database with new information
    //         db_klimatyzacja_pliki::findOrFail($section_portfolio_id)->update([
    //             'plik_1' => $request->plik_1,
    //             'plik_2' => $request->plik_2,
    //             'image' => $save_url,
    //         ]);

    //         return redirect()->route('section_one_square_all_show');
    //     } else {
    //         // Update the database without changing the image
    //         db_klimatyzacja_pliki::findOrFail($section_portfolio_id)->update([
    //             'plik_1' => $request->plik_1,
    //             'plik_2' => $request->plik_2,

    //         ]);

    //         return redirect()->route('section_one_square_all_show');
    //     }
    // }




    public function klimatyzacja_pliki_delete_square_one($id)
    {
        $portfolio = db_klimatyzacja_pliki::findOrFail($id);
        $img = $portfolio->image;
        $plik1 = $portfolio->plik_1;
        $plik2 = $portfolio->plik_2;


        // Sprawdzamy, czy zmienna $img nie jest pusta, zanim usuniemy plik
        if (!empty($img) && file_exists($img) && file_exists($plik1) && file_exists($plik2) ) {
            unlink($img);
            unlink($plik1);
            unlink($plik2);
        }

        db_klimatyzacja_pliki::findOrFail($id)->delete();

        return redirect()->back();
    }
}
