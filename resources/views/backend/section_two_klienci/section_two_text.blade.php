@extends('backend.admin')
@section('srodek')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div class="page-content">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Sekcja 2 text </h4>

                            <form method="post" action=" {{ route('section_two_klienci_text_insert')  }} " enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="{{ (!empty($section_two_text->id)? $section_two_text->id: '')   }}">

                               <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Text 1</label>
                                    <div class="col-sm-10">
                                        <input name="text_1" class="form-control" type="text"
                                            id="example-text-input">
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="header-title">Text 2</h4>


                                                <textarea class="form-control"  name="text_2" id="exampleFormControlTextarea1">   </textarea>



                                        </div>
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
