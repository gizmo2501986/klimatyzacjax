<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sekcja_kwadrat_dwa;
use Image;

class section_five extends Controller
{

    public function section_five_square_one()
    {

        $section_one_square_one = sekcja_kwadrat_dwa::find(1);
        return view('backend.section_five.section_one_square_one', compact('section_one_square_one'));
    }





    public function section_five_square_one_insert(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(600, 400)->save('upload/kwadrat2/' . $name_gen);
        $save_url = 'upload/kwadrat2/' . $name_gen;

        sekcja_kwadrat_dwa::insert([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'image' => $save_url,
            'opis' => $request->opis,



        ]);


        return redirect()->back();
    }


    public function section_five_square_all_show()
    {

        $section_one_square_all = sekcja_kwadrat_dwa::all();
        return view('backend.section_five.section_one_all_square', compact('section_one_square_all'));
    }


    public function edit_square_five($id)
    {

        $section_one_edit = sekcja_kwadrat_dwa::findOrFail($id);
        return view('backend.section_five.square_one_edit', compact('section_one_edit'));
    }



    public function update_square_five(Request $request)
    {
        $section_portfolio_id = $request->id;

        // Retrieve the old image path from the database
        $oldImage = sekcja_kwadrat_dwa::findOrFail($section_portfolio_id)->image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Delete the old image file from the server
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            Image::make($image)->save('upload/kwadrat2/' . $name_gen);
            $save_url = 'upload/kwadrat2/' . $name_gen;

            // Update the database with new information
            sekcja_kwadrat_dwa::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,
                'image' => $save_url,
                'opis' => $request->opis,
            ]);

            return redirect()->route('section_five_square_all_show');
        } else {
            // Update the database without changing the image
            sekcja_kwadrat_dwa::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,
                'opis' => $request->opis,
            ]);

            return redirect()->route('section_five_square_all_show');
        }
    }




    public function delete_square_five($id)
    {
        $portfolio = sekcja_kwadrat_dwa::findOrFail($id);
        $img = $portfolio->image;

        // Sprawdzamy, czy zmienna $img nie jest pusta, zanim usuniemy plik
        if (!empty($img) && file_exists($img)) {
            unlink($img);
        }

        sekcja_kwadrat_dwa::findOrFail($id)->delete();

        return redirect()->back();
    }












}
