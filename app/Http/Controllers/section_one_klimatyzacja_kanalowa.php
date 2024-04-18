<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\db_section_one_kanalowa;
use Image;

class section_one_klimatyzacja_kanalowa extends Controller
{

    public function kanalowa_funkcja_1()
    {

        $section_one_square_one = db_section_one_kanalowa::find(1);
        return view('backend.klimatyzacja_kanalowa.section_one_klimatyzacja_square_one', compact('section_one_square_one'));
    }





    public function kanalowa_funkcja_2(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(600, 400)->save('upload/klimatyzacja/' . $name_gen);
        $save_url = 'upload/klimatyzacja/' . $name_gen;

        db_section_one_kanalowa::insert([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'image' => $save_url,




        ]);


        return redirect()->back();
    }


    public function kanalowa_edit_show()
    {

        $section_one_square_all = db_section_one_kanalowa::all();
        return view('backend.klimatyzacja_kanalowa.section_one_klimatyzacja_all_square', compact('section_one_square_all'));
    }


    public function kanalowa_edit($id)
    {

        $section_one_edit = db_section_one_kanalowa::findOrFail($id);
        return view('backend.klimatyzacja_kanalowa.square_one_klimatyzacja_edit', compact('section_one_edit'));
    }



    public function kanalowa_update (Request $request)
    {
        $section_portfolio_id = $request->id;

        // Retrieve the old image path from the database
        $oldImage = db_section_one_kanalowa::findOrFail($section_portfolio_id)->image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Delete the old image file from the server
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            Image::make($image)->save('upload/klimatyzacja/' . $name_gen);
            $save_url = 'upload/klimatyzacja/' . $name_gen;

            // Update the database with new information
            db_section_one_kanalowa::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,
                'image' => $save_url,

            ]);

            return redirect()->route('kanalowa_edit_show');
        } else {
            // Update the database without changing the image
            db_section_one_kanalowa::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,

            ]);

            return redirect()->route('kanalowa_edit_show');
        }
    }




    public function kanalowa_delete($id)
    {
        $portfolio = db_section_one_kanalowa::findOrFail($id);
        $img = $portfolio->image;

        // Sprawdzamy, czy zmienna $img nie jest pusta, zanim usuniemy plik
        if (!empty($img) && file_exists($img)) {
            unlink($img);
        }

        db_section_one_kanalowa::findOrFail($id)->delete();

        return redirect()->back();
    }









}
