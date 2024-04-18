<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend;
use App\Http\Controllers\section_one;
use App\Http\Controllers\section_two;
use App\Http\Controllers\section_tre;
use App\Http\Controllers\section_four;
use App\Http\Controllers\section_five;
use App\Http\Controllers\section_six;
use App\Http\Controllers\section_seven;
use App\Http\Controllers\section_one_klienci;
use App\Http\Controllers\section_one_klimatyzacja;
use App\Http\Controllers\section_two_klienci;
use App\Http\Controllers\section_two_serwis;
use App\Http\Controllers\section_one_serwis;
use App\Http\Controllers\section_tre_serwis;
use App\Http\Controllers\add_product_scienne;
use App\Http\Controllers\section_one_klimatyzacja_scienno_sufitowe;
use App\Http\Controllers\section_one_klimatyzacja_kasetonowa;
use App\Http\Controllers\add_product_scienno_sufitowe;
use App\Http\Controllers\add_product_klimatyzacja_kasetonowa;
use App\Http\Controllers\section_one_klimatyzacja_kanalowa;
use App\Http\Controllers\add_product_klimatyzacja_kanalowa;
use App\Http\Controllers\section_one_klimatyzacja_multisplit;
use App\Http\Controllers\add_product_klimatyzacja_multisplit;
use App\Http\Controllers\klimatyzacja_pliki;
use App\Http\Controllers\wazne_info;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [frontend::class, 'frontend_index'])->name('frontend_index')->middleware(['web']);
Route::get('/oferta', [frontend::class, 'oferta'])->name('oferta')->middleware(['web']);
Route::get('/klienci', [frontend::class, 'klienci'])->name('klienci')->middleware(['web']);
Route::get('/serwis', [frontend::class, 'serwis'])->name('serwis')->middleware(['web']);
Route::get('/kontakt', [frontend::class, 'kontakt'])->name('kontakt')->middleware(['web']);
Route::get('/klimatyzacja/scienna', [frontend::class, 'scienne'])->name('scienne')->middleware(['web']);
Route::get('/klimatyzacja/dla/alergika', [frontend::class, 'alergik'])->name('alergik')->middleware(['web']);
Route::get('/klimatyzacja/a/smog', [frontend::class, 'smog'])->name('smog')->middleware(['web']);
Route::get('/wazne/informacje', [frontend::class, 'wazne'])->name('wazne')->middleware(['web']);

Route::get('/info/{id}', [frontend::class, 'r32'])->name('r32')->middleware(['web']);
Route::get('/info2/{id}', [frontend::class, 'kwadraty_bottom'])->name('kwadraty_bottom')->middleware(['web']);
Route::get('/klimatyzacja/info/{id}', [frontend::class, 'klimatyzacja_info'])->name('klimatyzacja_info')->middleware(['web']);

Route::get('/klimatyzacja/scienno-sufitowa/info/{id}', [frontend::class, 'klimatyzacja_scienno_sufitowa'])->name('klimatyzacja_scienno_sufitowa')->middleware(['web']);
Route::get('/klimatyzacja/kasetonowa/info/{id}', [frontend::class, 'klimatyzacja_kasetonowa'])->name('klimatyzacja_kasetonowa')->middleware(['web']);
Route::get('/klimatyzacja/kanalowa/info/{id}', [frontend::class, 'klimatyzacja_kanalowa'])->name('klimatyzacja_kanalowa')->middleware(['web']);
Route::get('/klimatyzacja/multisplit/info/{id}', [frontend::class, 'klimatyzacja_multisplit'])->name('klimatyzacja_multisplit')->middleware(['web']);





// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {


    Route::get('/admin/logout', [admin::class, 'rozwal'])->name('rozwal');


    Route::get('/admin/profile', [admin::class, 'admin_profile'])->name('admin_profile');
    Route::get('/admin/profile/edit', [admin::class, 'edit_profile'])->name('edit_profile');

    Route::post('/update/admin/photo', [admin::class, 'update_admin_photo'])->name('update_admin_photo');
    Route::get('/change/admin/password', [admin::class, 'change_password'])->name('change_password');
    Route::post('/update/password', [admin::class, 'update_password'])->name('update_password');



    //section one
    Route::get('/section/one/show', [section_one::class, 'section_one_show'])->name('section_one_show');
    Route::post('/section/one/insert', [section_one::class, 'section_one_insert'])->name('section_one_insert');

    Route::get('/section/one/show/square', [section_one::class, 'section_one_square_one'])->name('section_one_square_one');
    Route::post('/section/one/square/insert', [section_one::class, 'section_one_square_one_insert'])->name('section_one_square_one_insert');
    Route::get('/section/one/square/show/all', [section_one::class, 'section_one_square_all_show'])->name('section_one_square_all_show');

    Route::get('/section/one/square/edit/{id}', [section_one::class, 'edit_square_one'])->name('edit_square_one');
    Route::post('/section/one/square/update', [section_one::class, 'update_square_one'])->name('update_square_one');

    Route::get('/section/one/square/delete/{id}', [section_one::class, 'delete_square_one'])->name('delete_square_one');


    // section two
    Route::get('/section/two/show', [section_two::class, 'section_two_show_head'])->name('section_two_show_head');
    Route::post('/section/two/head/insert', [section_two::class, 'section_two_insert'])->name('section_two_insert');
    Route::get('/section/two/text', [section_two::class, 'section_two_text'])->name('section_two_text');
    Route::post('/section/two/text/insert', [section_two::class, 'section_two_text_insert'])->name('section_two_text_insert');
    Route::get('/section/two/text/all', [section_two::class, 'section_two_text_all'])->name('section_two_text_all');
    Route::get('/section/two/text/edit/{id}', [section_two::class, 'section_two_text_edit'])->name('section_two_text_edit');
    Route::post('/section/two/text/edit/update', [section_two::class, 'section_two_text_edit_update'])->name('section_two_text_edit_update');
    Route::get('/section/two/text/edit/delete/{id}', [section_two::class, 'section_two_text_delete'])->name('section_two_text_delete');

    // section tre
    Route::get('/section/tre/show', [section_tre::class, 'section_tre_show_head'])->name('section_tre_show_head');
    Route::post('/section/tre/head/insert', [section_tre::class, 'section_tre_insert'])->name('section_tre_insert');
    Route::get('/section/tre/text', [section_tre::class, 'section_tre_text'])->name('section_tre_text');
    Route::post('/section/tre/text/insert', [section_tre::class, 'section_tre_text_insert'])->name('section_tre_text_insert');
    Route::get('/section/tre/text/all', [section_tre::class, 'section_tre_text_all'])->name('section_tre_text_all');
    Route::get('/section/tre/text/edit/{id}', [section_tre::class, 'section_tre_text_edit'])->name('section_tre_text_edit');
    Route::post('/section/tre/text/edit/update', [section_tre::class, 'section_tre_text_edit_update'])->name('section_tre_text_edit_update');
    Route::get('/section/tre/text/edit/delete/{id}', [section_tre::class, 'section_tre_text_delete'])->name('section_tre_text_delete');


    // section four
    Route::get('/section/four/show', [section_four::class, 'section_four_show_head'])->name('section_four_show_head');
    Route::post('/section/four/head/insert', [section_four::class, 'section_four_insert'])->name('section_four_insert');
    Route::get('/section/four/text', [section_four::class, 'section_four_text'])->name('section_four_text');
    Route::post('/section/four/text/insert', [section_four::class, 'section_four_text_insert'])->name('section_four_text_insert');
    Route::get('/section/four/text/all', [section_four::class, 'section_four_text_all'])->name('section_four_text_all');
    Route::get('/section/four/text/edit/{id}', [section_four::class, 'section_four_text_edit'])->name('section_four_text_edit');
    Route::post('/section/four/text/edit/update', [section_four::class, 'section_four_text_edit_update'])->name('section_four_text_edit_update');
    Route::get('/section/four/text/edit/delete/{id}', [section_four::class, 'section_four_text_delete'])->name('section_four_text_delete');


    //section five

    Route::get('/section/five/show/square', [section_five::class, 'section_five_square_one'])->name('section_five_square_one');
    Route::post('/section/five/square/insert', [section_five::class, 'section_five_square_one_insert'])->name('section_five_square_one_insert');
    Route::get('/section/five/square/show/all', [section_five::class, 'section_five_square_all_show'])->name('section_five_square_all_show');

    Route::get('/section/five/square/edit/{id}', [section_five::class, 'edit_square_five'])->name('edit_square_five');
    Route::post('/section/five/square/update', [section_five::class, 'update_square_five'])->name('update_square_five');

    Route::get('/section/five/square/delete/{id}', [section_five::class, 'delete_square_five'])->name('delete_square_five');




    //section six
    Route::get('/section/six/show', [section_six::class, 'section_six_show_head'])->name('section_six_show_head');
    Route::post('/section/six/head/insert', [section_six::class, 'section_six_insert'])->name('section_six_insert');
    Route::get('/section/six/text', [section_six::class, 'section_six_text'])->name('section_six_text');
    Route::post('/section/six/text/insert', [section_six::class, 'section_six_text_insert'])->name('section_six_text_insert');
    Route::get('/section/six/text/all', [section_six::class, 'section_six_text_all'])->name('section_six_text_all');
    Route::get('/section/six/text/edit/{id}', [section_six::class, 'section_six_text_edit'])->name('section_six_text_edit');
    Route::post('/section/six/text/edit/update', [section_six::class, 'section_six_text_edit_update'])->name('section_six_text_edit_update');
    Route::get('/section/six/text/edit/delete/{id}', [section_six::class, 'section_six_text_delete'])->name('section_six_text_delete');


    //section seven
    Route::get('/section/seven/show/square', [section_seven::class, 'section_seven_square_one'])->name('section_seven_square_one');
    Route::post('/section/seven/square/insert', [section_seven::class, 'section_seven_square_one_insert'])->name('section_seven_square_one_insert');
    Route::get('/section/seven/square/show/all', [section_seven::class, 'section_seven_square_all_show'])->name('section_seven_square_all_show');

    Route::get('/section/seven/square/edit/{id}', [section_seven::class, 'edit_square_seven'])->name('edit_square_seven');
    Route::post('/section/seven/square/update', [section_seven::class, 'update_square_seven'])->name('update_square_seven');

    Route::get('/section/seven/square/delete/{id}', [section_seven::class, 'delete_square_seven'])->name('delete_square_seven');






    //section one klienci
    Route::get('/section/one/klienci/show', [section_one_klienci::class, 'section_one_klienci_show'])->name('section_one_klienci_show');
    Route::post('/section/one/klienci/insert', [section_one_klienci::class, 'section_one_klienci_insert'])->name('section_one_klienci_insert');

    //section two klienci
    Route::get('/section/two/klienci/show', [section_two_klienci::class, 'section_two_klienci_show_head'])->name('section_two_klienci_show_head');
    Route::post('/section/two/klienci/head/insert', [section_two_klienci::class, 'section_two_klienci_insert'])->name('section_two_klienci_insert');
    Route::get('/section/two/klienci/text', [section_two_klienci::class, 'section_two_klienci_text'])->name('section_two_klienci_text');
    Route::post('/section/two/klienci/text/insert', [section_two_klienci::class, 'section_two_klienci_text_insert'])->name('section_two_klienci_text_insert');
    Route::get('/section/two/klienci/text/all', [section_two_klienci::class, 'section_two_klienci_text_all'])->name('section_two_klienci_text_all');
    Route::get('/section/two/klienci/text/edit/{id}', [section_two_klienci::class, 'section_two_klienci_text_edit'])->name('section_two_klienci_text_edit');
    Route::post('/section/two/klienci/text/edit/update', [section_two_klienci::class, 'section_two_klienci_text_edit_update'])->name('section_two_klienci_text_edit_update');
    Route::get('/section/two/klienci/text/edit/delete/{id}', [section_two_klienci::class, 'section_two_klienci_text_delete'])->name('section_two_klienci_text_delete');




    //section one serwis
    Route::get('/section/one/serwis/show', [section_one_serwis::class, 'section_one_serwis_show_head'])->name('section_one_serwis_show_head');
    Route::post('/section/one/serwis/head/insert', [section_one_serwis::class, 'section_one_serwis_insert'])->name('section_one_serwis_insert');
    Route::get('/section/one/serwis/text', [section_one_serwis::class, 'section_one_serwis_text'])->name('section_one_serwis_text');
    Route::post('/section/one/serwis/text/insert', [section_one_serwis::class, 'section_one_serwis_text_insert'])->name('section_one_serwis_text_insert');
    Route::get('/section/one/serwis/text/all', [section_one_serwis::class, 'section_one_serwis_text_all'])->name('section_one_serwis_text_all');
    Route::get('/section/one/serwis/text/edit/{id}', [section_one_serwis::class, 'section_one_serwis_text_edit'])->name('section_one_serwis_text_edit');
    Route::post('/section/one/serwis/text/edit/update', [section_one_serwis::class, 'section_one_serwis_text_edit_update'])->name('section_one_serwis_text_edit_update');
    Route::get('/section/one/serwis/text/edit/delete/{id}', [section_one_serwis::class, 'section_one_serwis_text_delete'])->name('section_one_serwis_text_delete');





    //section two serwis
    Route::get('/section/two/serwis/show', [section_two_serwis::class, 'section_two_serwis_show_head'])->name('section_two_serwis_show_head');
    Route::post('/section/two/serwis/head/insert', [section_two_serwis::class, 'section_two_serwis_insert'])->name('section_two_serwis_insert');
    Route::get('/section/two/serwis/text', [section_two_serwis::class, 'section_two_serwis_text'])->name('section_two_serwis_text');
    Route::post('/section/two/serwis/text/insert', [section_two_serwis::class, 'section_two_serwis_text_insert'])->name('section_two_serwis_text_insert');
    Route::get('/section/two/serwis/text/all', [section_two_serwis::class, 'section_two_serwis_text_all'])->name('section_two_serwis_text_all');
    Route::get('/section/two/serwis/text/edit/{id}', [section_two_serwis::class, 'section_two_serwis_text_edit'])->name('section_two_serwis_text_edit');
    Route::post('/section/two/serwis/text/edit/update', [section_two_serwis::class, 'section_two_serwis_text_edit_update'])->name('section_two_serwis_text_edit_update');
    Route::get('/section/two/serwis/text/edit/delete/{id}', [section_two_serwis::class, 'section_two_serwis_text_delete'])->name('section_two_serwis_text_delete');


    //section two serwis
    Route::get('/section/two/serwis/show', [section_two_serwis::class, 'section_two_serwis_show_head'])->name('section_two_serwis_show_head');
    Route::post('/section/two/serwis/head/insert', [section_two_serwis::class, 'section_two_serwis_insert'])->name('section_two_serwis_insert');
    Route::get('/section/two/serwis/text', [section_two_serwis::class, 'section_two_serwis_text'])->name('section_two_serwis_text');
    Route::post('/section/two/serwis/text/insert', [section_two_serwis::class, 'section_two_serwis_text_insert'])->name('section_two_serwis_text_insert');
    Route::get('/section/two/serwis/text/all', [section_two_serwis::class, 'section_two_serwis_text_all'])->name('section_two_serwis_text_all');
    Route::get('/section/two/serwis/text/edit/{id}', [section_two_serwis::class, 'section_two_serwis_text_edit'])->name('section_two_serwis_text_edit');
    Route::post('/section/two/serwis/text/edit/update', [section_two_serwis::class, 'section_two_serwis_text_edit_update'])->name('section_two_serwis_text_edit_update');
    Route::get('/section/two/serwis/text/edit/delete/{id}', [section_two_serwis::class, 'section_two_serwis_text_delete'])->name('section_two_serwis_text_delete');



    //section tre serwis
    Route::get('/section/tre/serwis/show', [section_tre_serwis::class, 'section_tre_serwis_show_head'])->name('section_tre_serwis_show_head');
    Route::post('/section/tre/serwis/head/insert', [section_tre_serwis::class, 'section_tre_serwis_insert'])->name('section_tre_serwis_insert');
    Route::get('/section/tre/serwis/text', [section_tre_serwis::class, 'section_tre_serwis_text'])->name('section_tre_serwis_text');
    Route::post('/section/tre/serwis/text/insert', [section_tre_serwis::class, 'section_tre_serwis_text_insert'])->name('section_tre_serwis_text_insert');
    Route::get('/section/tre/serwis/text/all', [section_tre_serwis::class, 'section_tre_serwis_text_all'])->name('section_tre_serwis_text_all');
    Route::get('/section/tre/serwis/text/edit/{id}', [section_tre_serwis::class, 'section_tre_serwis_text_edit'])->name('section_tre_serwis_text_edit');
    Route::post('/section/tre/serwis/text/edit/update', [section_tre_serwis::class, 'section_tre_serwis_text_edit_update'])->name('section_tre_serwis_text_edit_update');
    Route::get('/section/tre/serwis/text/edit/delete/{id}', [section_tre_serwis::class, 'section_tre_serwis_text_delete'])->name('section_tre_serwis_text_delete');



    //section one klimatyzacja

    Route::get('/section/one/klimatyzacja/show/square', [section_one_klimatyzacja::class, 'section_one_klimatyzacja_square_one'])->name('section_one_klimatyzacja_square_one');
    Route::post('/section/one/klimatyzacja/square/insert', [section_one_klimatyzacja::class, 'section_one_klimatyzacja_square_one_insert'])->name('section_one_klimatyzacja_square_one_insert');
    Route::get('/section/one/klimatyzacja/square/show/all', [section_one_klimatyzacja::class, 'section_one_klimatyzacja_square_all_show'])->name('section_one_klimatyzacja_square_all_show');
    Route::get('/section/one/klimatyzacja/square/edit/{id}', [section_one_klimatyzacja::class, 'edit_square_one_klimatyzacja'])->name('edit_square_one_klimatyzacja');
    Route::post('/section/one/klimatyzacja/square/update', [section_one_klimatyzacja::class, 'update_square_one_klimatyzacja'])->name('update_square_one_klimatyzacja');
    Route::get('/section/one/klimatyzacja/square/delete/{id}', [section_one_klimatyzacja::class, 'delete_square_one_klimatyzacja'])->name('delete_square_one_klimatyzacja');

    //add product scienne
    Route::get('/scienne/two/text', [add_product_scienne::class, 'scienne_text'])->name('scienne_text');
    Route::post('/scienne/two/text/insert', [add_product_scienne::class, 'scienne_text_insert'])->name('scienne_text_insert');
    Route::get('/scienne/two/text/all', [add_product_scienne::class, 'product_text_all'])->name('product_text_all');
    Route::get('/scienne/two/text/edit/{id}', [add_product_scienne::class, 'product_text_edit'])->name('product_text_edit');
    Route::post('/scienne/two/text/edit/update', [add_product_scienne::class, 'product_text_edit_update'])->name('product_text_edit_update');
    Route::get('/scienne/two/text/edit/delete/{id}', [add_product_scienne::class, 'product_text_delete'])->name('product_text_delete');








    //section one klimatyzacja sciennno-sufitowa
    Route::get('/klimatyzacja_scienno_sufitowe/show', [section_one_klimatyzacja_scienno_sufitowe::class, 'klim_funkcja_1'])->name('klim_funkcja_1');
    Route::post('/klimatyzacja_scienno_sufitowe/insert', [section_one_klimatyzacja_scienno_sufitowe::class, 'klim_funkcja_2'])->name('klim_funkcja_2');
    Route::get('/klimatyzacja_scienno_sufitowe/show/all', [section_one_klimatyzacja_scienno_sufitowe::class, 'klim_edit_show'])->name('klim_edit_show');
    Route::get('/klimatyzacja_scienno_sufitowe/edit/{id}', [section_one_klimatyzacja_scienno_sufitowe::class, 'klim_edit'])->name('klim_edit');
    Route::post('/klimatyzacja_scienno_sufitowe/update', [section_one_klimatyzacja_scienno_sufitowe::class, 'klim_update'])->name('klim_update');
    Route::get('/klimatyzacja_scienno_sufitowe/delete/{id}', [section_one_klimatyzacja_scienno_sufitowe::class, 'klim_delete'])->name('klim_delete');

    //baza danych do klimatyzacji scienno-sufitowej
    Route::get('/scienne/sufitowe/text', [add_product_scienno_sufitowe::class, 'scienno_sufitowe_text'])->name('scienno_sufitowe_text');
    Route::post('/scienne/sufitowe/text/insert', [add_product_scienno_sufitowe::class, 'scienno_sufitowe_insert'])->name('scienno_sufitowe_insert');
    Route::get('/scienne/sufitowe/text/all', [add_product_scienno_sufitowe::class, 'scienno_sufitowe_text_all'])->name('scienno_sufitowe_text_all');
    Route::get('/scienne/sufitowe/text/edit/{id}', [add_product_scienno_sufitowe::class, 'scienno_sufitowe_text_edit'])->name('scienno_sufitowe_text_edit');
    Route::post('/scienne/sufitowe/text/edit/update', [add_product_scienno_sufitowe::class, 'scienno_sufitowe_text_edit_update'])->name('scienno_sufitowe_text_edit_update');
    Route::get('/scienne/sufitowe/text/edit/delete/{id}', [add_product_scienno_sufitowe::class, 'scienno_sufitowe_text_delete'])->name('scienno_sufitowe_text_delete');



    //section one klimatyzacja kasetonowa
    Route::get('/klimatyzacja_kasetonowa/show', [section_one_klimatyzacja_kasetonowa::class, 'kasetonowa_funkcja_1'])->name('kasetonowa_funkcja_1');
    Route::post('/klimatyzacja_kasetonowa/insert', [section_one_klimatyzacja_kasetonowa::class, 'kasetonowa_funkcja_2'])->name('kasetonowa_funkcja_2');
    Route::get('/klimatyzacja_kasetonowa/show/all', [section_one_klimatyzacja_kasetonowa::class, 'kasetonowa_edit_show'])->name('kasetonowa_edit_show');
    Route::get('/klimatyzacja_kasetonowa/edit/{id}', [section_one_klimatyzacja_kasetonowa::class, 'kasetonowa_edit'])->name('kasetonowa_edit');
    Route::post('/klimatyzacja_kasetonowa/update', [section_one_klimatyzacja_kasetonowa::class, 'kasetonowa_update'])->name('kasetonowa_update');
    Route::get('/klimatyzacja_kasetonowa/delete/{id}', [section_one_klimatyzacja_kasetonowa::class, 'kasetonowa_delete'])->name('kasetonowa_delete');

    //baza danych do klimatyzacji kasetonowa
    Route::get('/kasetonowe/text', [add_product_klimatyzacja_kasetonowa::class, 'kasetonowe_text'])->name('kasetonowe_text');
    Route::post('/kasetonowe/text/insert', [add_product_klimatyzacja_kasetonowa::class, 'kasetonowe_insert'])->name('kasetonowe_insert');
    Route::get('/kasetonowe/text/all', [add_product_klimatyzacja_kasetonowa::class, 'kasetonowe_text_all'])->name('kasetonowe_text_all');
    Route::get('/kasetonowe/text/edit/{id}', [add_product_klimatyzacja_kasetonowa::class, 'kasetonowe_text_edit'])->name('kasetonowe_text_edit');
    Route::post('/kasetonowe/text/edit/update', [add_product_klimatyzacja_kasetonowa::class, 'kasetonowe_text_edit_update'])->name('kasetonowe_text_edit_update');
    Route::get('/kasetonowe/text/edit/delete/{id}', [add_product_klimatyzacja_kasetonowa::class, 'kasetonowe_text_delete'])->name('kasetonowe_text_delete');




    // section one klimatyzacja kanalowa
    Route::get('/klimatyzacja_kanalowa/show', [section_one_klimatyzacja_kanalowa::class, 'kanalowa_funkcja_1'])->name('kanalowa_funkcja_1');
    Route::post('/klimatyzacja_kanalowa/insert', [section_one_klimatyzacja_kanalowa::class, 'kanalowa_funkcja_2'])->name('kanalowa_funkcja_2');
    Route::get('/klimatyzacja_kanalowa/show/all', [section_one_klimatyzacja_kanalowa::class, 'kanalowa_edit_show'])->name('kanalowa_edit_show');
    Route::get('/klimatyzacja_kanalowa/edit/{id}', [section_one_klimatyzacja_kanalowa::class, 'kanalowa_edit'])->name('kanalowa_edit');
    Route::post('/klimatyzacja_kanalowa/update', [section_one_klimatyzacja_kanalowa::class, 'kanalowa_update'])->name('kanalowa_update');
    Route::get('/klimatyzacja_kanalowa/delete/{id}', [section_one_klimatyzacja_kanalowa::class, 'kanalowa_delete'])->name('kanalowa_delete');

    //baza danych do klimatyzacji kanalowa
    Route::get('/kanalowe/text', [add_product_klimatyzacja_kanalowa::class, 'kanalowe_text'])->name('kanalowe_text');
    Route::post('/kanalowe/text/insert', [add_product_klimatyzacja_kanalowa::class, 'kanalowe_insert'])->name('kanalowe_insert');
    Route::get('/kanalowe/text/all', [add_product_klimatyzacja_kanalowa::class, 'kanalowe_text_all'])->name('kanalowe_text_all');
    Route::get('/kanalowe/text/edit/{id}', [add_product_klimatyzacja_kanalowa::class, 'kanalowe_text_edit'])->name('kanalowe_text_edit');
    Route::post('/kanalowe/text/edit/update', [add_product_klimatyzacja_kanalowa::class, 'kanalowe_text_edit_update'])->name('kanalowe_text_edit_update');
    Route::get('/kanalowe/text/edit/delete/{id}', [add_product_klimatyzacja_kanalowa::class, 'kanalowe_text_delete'])->name('kanalowe_text_delete');





    // section one klimatyzacja multisplit
    Route::get('/klimatyzacja_multisplit/show', [section_one_klimatyzacja_multisplit::class, 'multisplit_funkcja_1'])->name('multisplit_funkcja_1');
    Route::post('/klimatyzacja_multisplit/insert', [section_one_klimatyzacja_multisplit::class, 'multisplit_funkcja_2'])->name('multisplit_funkcja_2');
    Route::get('/klimatyzacja_multisplit/show/all', [section_one_klimatyzacja_multisplit::class, 'multisplit_edit_show'])->name('multisplit_edit_show');
    Route::get('/klimatyzacja_multisplit/edit/{id}', [section_one_klimatyzacja_multisplit::class, 'multisplit_edit'])->name('multisplit_edit');
    Route::post('/klimatyzacja_multisplit/update', [section_one_klimatyzacja_multisplit::class, 'multisplit_update'])->name('multisplit_update');
    Route::get('/klimatyzacja_multisplit/delete/{id}', [section_one_klimatyzacja_multisplit::class, 'multisplit_delete'])->name('multisplit_delete');

    //baza danych do klimatyzacji multisplit
    Route::get('/multisplit/text', [add_product_klimatyzacja_multisplit::class, 'multisplit_text'])->name('multisplit_text');
    Route::post('/multisplit/text/insert', [add_product_klimatyzacja_multisplit::class, 'multisplit_insert'])->name('multisplit_insert');
    Route::get('/multisplit/text/all', [add_product_klimatyzacja_multisplit::class, 'multisplit_text_all'])->name('multisplit_text_all');
    Route::get('/multisplit/text/edit/{id}', [add_product_klimatyzacja_multisplit::class, 'multisplit_text_edit'])->name('multisplit_text_edit');
    Route::post('/multisplit/text/edit/update', [add_product_klimatyzacja_multisplit::class, 'multisplit_text_edit_update'])->name('multisplit_text_edit_update');
    Route::get('/multisplit/text/edit/delete/{id}', [add_product_klimatyzacja_multisplit::class, 'multisplit_text_delete'])->name('multisplit_text_delete');






    // klimatyzacja pliki

    Route::get('/klimatyzacja_pliki/show/square', [klimatyzacja_pliki::class, 'klimatyzacja_pliki_square_one'])->name('klimatyzacja_pliki_square_one');
    Route::post('/klimatyzacja_pliki/square/insert', [klimatyzacja_pliki::class, 'klimatyzacja_pliki_square_one_insert'])->name('klimatyzacja_pliki_square_one_insert');
    Route::get('/klimatyzacja_pliki/square/show/all', [klimatyzacja_pliki::class, 'klimatyzacja_pliki_square_all_show'])->name('klimatyzacja_pliki_square_all_show');
    // Route::get('/klimatyzacja_pliki/square/edit/{id}', [klimatyzacja_pliki::class, 'klimatyzacja_pliki_edit_square_one'])->name('klimatyzacja_pliki_edit_square_one');
    // Route::post('/klimatyzacja_pliki/square/update', [klimatyzacja_pliki::class, 'klimatyzacja_pliki_update_square_one'])->name('klimatyzacja_pliki_update_square_one');
    Route::get('/klimatyzacja_pliki/square/delete/{id}', [klimatyzacja_pliki::class, 'klimatyzacja_pliki_delete_square_one'])->name('klimatyzacja_pliki_delete_square_one');







    // wazne info


    Route::get('/wazne_info/text', [wazne_info::class, 'wazne_info_text'])->name('wazne_info_text');
    Route::post('/wazne_info/text/insert', [wazne_info::class, 'wazne_info_text_insert'])->name('wazne_info_text_insert');
    Route::get('/wazne_info/text/all', [wazne_info::class, 'wazne_info_text_all'])->name('wazne_info_text_all');
    Route::get('/wazne_info/text/edit/{id}', [wazne_info::class, 'wazne_info_text_edit'])->name('wazne_info_text_edit');
    Route::post('/wazne_info/text/edit/update', [wazne_info::class, 'wazne_info_text_edit_update'])->name('wazne_info_text_edit_update');
    Route::get('/wazne_info/text/edit/delete/{id}', [wazne_info::class, 'wazne_info_text_delete'])->name('wazne_info_text_delete');




























});

require __DIR__ . '/auth.php';
