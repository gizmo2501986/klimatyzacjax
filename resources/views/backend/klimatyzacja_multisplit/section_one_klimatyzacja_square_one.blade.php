@extends('backend.admin')
@section('srodek')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Dodaj klimatyzacje multisplit </h4>

                            <form method="post" action=" {{ route('multisplit_funkcja_2')  }} " enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ (!empty($section_one_square_one->id)? $section_one_square_one->id: '')   }}">

                               <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Text 1</label>
                                    <div class="col-sm-10">
                                        <input name="text_1" class="form-control" type="text"
                                            id="example-text-input">
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Text 2</label>
                                    <div class="col-sm-10">
                                        <input name="text_2" class="form-control" type="text"
                                            id="example-text-input">
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Zdjęcie </label>
                                    <div class="col-sm-10">
                                        <input name="image" class="form-control" type="file" id="image">
                                    </div>
                                </div>



                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label"> </label>
                                    <div class="col-sm-10">
                                        <img id="showImage" class="rounded avatar-lg" src="{{ url('upload/no_image.jpg') }}"
                                            alt="Card image cap">
                                    </div>
                                </div>




                                <input type="submit" class="btn btn-info waves-effect waves-light"
                                    value="Wyślij">
                            </form>



                        </div>
                    </div>
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
