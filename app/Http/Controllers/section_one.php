<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekcja_jeden;
use App\Models\sekcja_kwadrat;

use Image;

class section_one extends Controller
{

    public function section_one_show()
    {

        $section_one = sekcja_jeden::find(1);
        return view('backend.section_one.section_one_show', compact('section_one'));
    }


    public function section_one_insert(Request $request)
    {

        $section_one_id = $request->id;

        sekcja_jeden::findOrFail($section_one_id)->update([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'text_3' => $request->text_3,
            'text_4' => $request->text_4,
            'text_5' => $request->text_5,


        ]);

        return redirect()->back();
    }


    public function section_one_square_one()
    {

        $section_one_square_one = sekcja_kwadrat::find(1);
        return view('backend.section_one.section_one_square_one', compact('section_one_square_one'));
    }





    public function section_one_square_one_insert(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->save('upload/kwadrat/' . $name_gen);
        $save_url = 'upload/kwadrat/' . $name_gen;

        sekcja_kwadrat::insert([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'image' => $save_url,
            'opis' => $request->opis,



        ]);


        return redirect()->back();
    }


    public function section_one_square_all_show()
    {

        $section_one_square_all = sekcja_kwadrat::all();
        return view('backend.section_one.section_one_all_square', compact('section_one_square_all'));
    }


    public function edit_square_one($id)
    {

        $section_one_edit = sekcja_kwadrat::findOrFail($id);
        return view('backend.section_one.square_one_edit', compact('section_one_edit'));
    }



    public function update_square_one(Request $request)
    {
        $section_portfolio_id = $request->id;

        // Retrieve the old image path from the database
        $oldImage = sekcja_kwadrat::findOrFail($section_portfolio_id)->image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Delete the old image file from the server
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            Image::make($image)->save('upload/kwadrat/' . $name_gen);
            $save_url = 'upload/kwadrat/' . $name_gen;

            // Update the database with new information
            sekcja_kwadrat::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,
                'image' => $save_url,
                'opis' => $request->opis,
            ]);

            return redirect()->route('section_one_square_all_show');
        } else {
            // Update the database without changing the image
            sekcja_kwadrat::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,
                'opis' => $request->opis,
            ]);

            return redirect()->route('section_one_square_all_show');
        }
    }




    public function delete_square_one($id)
    {
        $portfolio = sekcja_kwadrat::findOrFail($id);
        $img = $portfolio->image;

        // Sprawdzamy, czy zmienna $img nie jest pusta, zanim usuniemy plik
        if (!empty($img) && file_exists($img)) {
            unlink($img);
        }

        sekcja_kwadrat::findOrFail($id)->delete();

        return redirect()->back();
    }
}
