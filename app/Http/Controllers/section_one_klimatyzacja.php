<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\db_section_one_klimatyzacja;
use Image;

class section_one_klimatyzacja extends Controller
{

    public function section_one_klimatyzacja_square_one()
    {

        $section_one_square_one = db_section_one_klimatyzacja::find(1);
        return view('backend.section_one_klimatyzacja.section_one_klimatyzacja_square_one', compact('section_one_square_one'));
    }





    public function section_one_klimatyzacja_square_one_insert(Request $request)
    {

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();  // 3434343443.jpg

        Image::make($image)->resize(600, 400)->save('upload/klimatyzacja/' . $name_gen);
        $save_url = 'upload/klimatyzacja/' . $name_gen;

        db_section_one_klimatyzacja::insert([

            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'image' => $save_url,
            'model_1' => $request->model_1,
            'model_2' => $request->model_2,
            'model_3' => $request->model_3,
            'model_4' => $request->model_4,
            'model_5' => $request->model_5,
            'model_6' => $request->model_6,
            'model_7' => $request->model_7,
            'model_8' => $request->model_8,
            'model_9' => $request->model_9,
            'model_10' => $request->model_10,
            'model_11' => $request->model_11,
            'model_12' => $request->model_12,
            'model_13' => $request->model_13,
            'model_14' => $request->model_14,
            'model_15' => $request->model_15,
            'model_16' => $request->model_16,
            'model_17' => $request->model_17,
            'model_18' => $request->model_18,
            'model_19' => $request->model_19,
            'model_20' => $request->model_20,
            'model_21' => $request->model_21,




        ]);


        return redirect()->back();
    }


    public function section_one_klimatyzacja_square_all_show()
    {

        $section_one_square_all = db_section_one_klimatyzacja::all();
        return view('backend.section_one_klimatyzacja.section_one_klimatyzacja_all_square', compact('section_one_square_all'));
    }


    public function edit_square_one_klimatyzacja($id)
    {

        $section_one_edit = db_section_one_klimatyzacja::findOrFail($id);
        return view('backend.section_one_klimatyzacja.square_one_klimatyzacja_edit', compact('section_one_edit'));
    }



    public function update_square_one_klimatyzacja(Request $request)
    {
        $section_portfolio_id = $request->id;

        // Retrieve the old image path from the database
        $oldImage = db_section_one_klimatyzacja::findOrFail($section_portfolio_id)->image;

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
            db_section_one_klimatyzacja::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,
                'image' => $save_url,
                'model_1' => $request->model_1,
                'model_2' => $request->model_2,
                'model_3' => $request->model_3,
                'model_4' => $request->model_4,
                'model_5' => $request->model_5,
                'model_6' => $request->model_6,
                'model_7' => $request->model_7,
                'model_8' => $request->model_8,
                'model_9' => $request->model_9,
                'model_10' => $request->model_10,
                'model_11' => $request->model_11,
                'model_12' => $request->model_12,
                'model_13' => $request->model_13,
                'model_14' => $request->model_14,
                'model_15' => $request->model_15,
                'model_16' => $request->model_16,
                'model_17' => $request->model_17,
                'model_18' => $request->model_18,
                'model_19' => $request->model_19,
                'model_20' => $request->model_20,
                'model_21' => $request->model_21,
            ]);

            return redirect()->route('section_one_klimatyzacja_square_all_show');
        } else {
            // Update the database without changing the image
            db_section_one_klimatyzacja::findOrFail($section_portfolio_id)->update([
                'text_1' => $request->text_1,
                'text_2' => $request->text_2,
                'model_1' => $request->model_1,
                'model_2' => $request->model_2,
                'model_3' => $request->model_3,
                'model_4' => $request->model_4,
                'model_5' => $request->model_5,
                'model_6' => $request->model_6,
                'model_7' => $request->model_7,
                'model_8' => $request->model_8,
                'model_9' => $request->model_9,
                'model_10' => $request->model_10,
                'model_11' => $request->model_11,
                'model_12' => $request->model_12,
                'model_13' => $request->model_13,
                'model_14' => $request->model_14,
                'model_15' => $request->model_15,
                'model_16' => $request->model_16,
                'model_17' => $request->model_17,
                'model_18' => $request->model_18,
                'model_19' => $request->model_19,
                'model_20' => $request->model_20,
                'model_21' => $request->model_21,
            ]);

            return redirect()->route('section_one_klimatyzacja_square_all_show');
        }
    }




    public function delete_square_one_klimatyzacja($id)
    {
        $portfolio = db_section_one_klimatyzacja::findOrFail($id);
        $img = $portfolio->image;

        // Sprawdzamy, czy zmienna $img nie jest pusta, zanim usuniemy plik
        if (!empty($img) && file_exists($img)) {
            unlink($img);
        }

        db_section_one_klimatyzacja::findOrFail($id)->delete();

        return redirect()->back();
    }
}
