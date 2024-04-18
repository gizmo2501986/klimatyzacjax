<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_section_seven_photos;

use Image;

class section_seven extends Controller
{

    public function section_seven_square_one()
    {

        $section_one_square_one = db_section_seven_photos::find(1);
        return view('backend.section_seven.section_seven_square_one', compact('section_one_square_one'));
    }





    public function section_seven_square_one_insert(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(600, 400)->save('upload/sekcja7/' . $name_gen);
        $save_url = 'upload/sekcja7/' . $name_gen;

        db_section_seven_photos::insert([


            'image' => $save_url,




        ]);


        return redirect()->back();
    }


    public function section_seven_square_all_show()
    {

        $section_one_square_all = db_section_seven_photos::all();
        return view('backend.section_seven.section_seven_all_square', compact('section_one_square_all'));
    }


    public function edit_square_seven($id)
    {

        $section_one_edit = db_section_seven_photos::findOrFail($id);
        return view('backend.section_seven.square_seven_edit', compact('section_one_edit'));
    }



    public function update_square_seven(Request $request)
    {
        $section_portfolio_id = $request->id;

        // Retrieve the old image path from the database
        $oldImage = db_section_seven_photos::findOrFail($section_portfolio_id)->image;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            // Delete the old image file from the server
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }

            Image::make($image)->save('upload/sekcja7/' . $name_gen);
            $save_url = 'upload/sekcja7/' . $name_gen;

            // Update the database with new information
            db_section_seven_photos::findOrFail($section_portfolio_id)->update([

                'image' => $save_url,

            ]);

            return redirect()->route('section_seven_square_all_show');
        } else {
            // Update the database without changing the image
            db_section_seven_photos::findOrFail($section_portfolio_id)->update([

            ]);

            return redirect()->route('section_seven_square_all_show');
        }
    }




    public function delete_square_seven($id)
    {
        $portfolio = db_section_seven_photos::findOrFail($id);
        $img = $portfolio->image;

        // Sprawdzamy, czy zmienna $img nie jest pusta, zanim usuniemy plik
        if (!empty($img) && file_exists($img)) {
            unlink($img);
        }

        db_section_seven_photos::findOrFail($id)->delete();

        return redirect()->back();
    }






}
