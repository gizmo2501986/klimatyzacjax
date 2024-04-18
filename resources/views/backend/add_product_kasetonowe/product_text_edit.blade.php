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

                                <form method="post" action=" {{ route('kasetonowe_text_edit_update')  }}  "
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="id" value="{{ $section_two_edit->id }}">


                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Producent</label>
                                        <div class="col-sm-10">
                                            <input name="producent" class="form-control" type="text"
                                                value=" {{ $section_two_edit->producent }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Model</label>
                                        <div class="col-sm-10">
                                            <input name="model" class="form-control" type="text"
                                                value=" {{ $section_two_edit->model }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Chłodzenie</label>
                                        <div class="col-sm-10">
                                            <input name="chlodzenie" class="form-control" type="text"
                                                value=" {{ $section_two_edit->chlodzenie }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Grzanie</label>
                                        <div class="col-sm-10">
                                            <input name="grzanie" class="form-control" type="text"
                                                value=" {{ $section_two_edit->grzanie }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">m2</label>
                                        <div class="col-sm-10">
                                            <input name="m2" class="form-control" type="text"
                                                value=" {{ $section_two_edit->m2 }}  " id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="example-text-input" class="col-sm-2 col-form-label">Cena</label>
                                        <div class="col-sm-10">
                                            <input name="cena" class="form-control" type="text"
                                                value=" {{ $section_two_edit->cena }}  " id="example-text-input">
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
