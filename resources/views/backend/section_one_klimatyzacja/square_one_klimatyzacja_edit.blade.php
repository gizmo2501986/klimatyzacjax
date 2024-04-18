@extends('backend.admin')



@section('srodek')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>






    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="card-title ">Edycja </h4>

                                <form method="post" action=" {{ route('update_square_one_klimatyzacja') }}   "
                                    enctype="multipart/form-data">
                                    @csrf



                                    <input type="hidden" name="id" value="{{ $section_one_edit->id }}">


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">text 1</label>
                                        <div class="col-sm-10">
                                            <input name="text_1" class="form-control" type="text"
                                                value=" {{ $section_one_edit->text_1 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">text 2</label>
                                        <div class="col-sm-10">
                                            <input name="text_2" class="form-control" type="text"
                                                value=" {{ $section_one_edit->text_2 }}  " id="example-text-input">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image
                                        </label>
                                        <div class="col-sm-10">
                                            <input name="image" class="form-control" type="file" id="image">
                                        </div>
                                    </div>


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                        <div class="col-sm-10">
                                            <img id="showImage" class="rounded avatar-lg"
                                                src="{{ asset($section_one_edit->image) }}" alt="Card image cap">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 1</label>
                                        <div class="col-sm-10">
                                            <input name="model_1" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_1 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 2</label>
                                        <div class="col-sm-10">
                                            <input name="model_2" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_2 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 3</label>
                                        <div class="col-sm-10">
                                            <input name="model_3" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_3 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 4</label>
                                        <div class="col-sm-10">
                                            <input name="model_4" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_4 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 5</label>
                                        <div class="col-sm-10">
                                            <input name="model_5" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_5 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 6</label>
                                        <div class="col-sm-10">
                                            <input name="model_6" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_6 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 7</label>
                                        <div class="col-sm-10">
                                            <input name="model_7" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_7 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 8</label>
                                        <div class="col-sm-10">
                                            <input name="model_8" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_8 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 9</label>
                                        <div class="col-sm-10">
                                            <input name="model_9" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_9 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 10</label>
                                        <div class="col-sm-10">
                                            <input name="model_10" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_10 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 11</label>
                                        <div class="col-sm-10">
                                            <input name="model_11" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_11 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 12</label>
                                        <div class="col-sm-10">
                                            <input name="model_12" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_12 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 13</label>
                                        <div class="col-sm-10">
                                            <input name="model_13" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_13 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 14</label>
                                        <div class="col-sm-10">
                                            <input name="model_14" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_14 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 15</label>
                                        <div class="col-sm-10">
                                            <input name="model_15" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_15 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 16</label>
                                        <div class="col-sm-10">
                                            <input name="model_16" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_16 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 17</label>
                                        <div class="col-sm-10">
                                            <input name="model_17" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_17 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 18</label>
                                        <div class="col-sm-10">
                                            <input name="model_18" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_18 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 19</label>
                                        <div class="col-sm-10">
                                            <input name="model_19" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_19 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 20</label>
                                        <div class="col-sm-10">
                                            <input name="model_20" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_20 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">model 21</label>
                                        <div class="col-sm-10">
                                            <input name="model_21" class="form-control" type="text"
                                                value=" {{ $section_one_edit->model_21 }}  " id="example-text-input">
                                        </div>
                                    </div>






























































                                    <input type="submit" class="btn btn-info waves-effect waves-light"
                                        value="Wyślij">
                                </form>



                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>


            </div>
        </div>
    </div>





    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
