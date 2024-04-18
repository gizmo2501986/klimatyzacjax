@extends('backend.admin')





@section('srodek')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Admin Panel</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <form  action=" {{ route('section_one_klienci_insert') }} " method="post" >

                                @csrf

                                <input type="hidden" name="id" value="{{ (!empty($section_one->id)? $section_one->id: '') }}">

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Text 1</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="text_1" value="{{ (!empty($section_one->text_1)? $section_one->text_1: '')   }}" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-md-2 col-form-label">Text 2</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="text_2" value="{{ (!empty($section_one->text_2)? $section_one->text_2: '') }}" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Text 3</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="text_3" value="{{ (!empty($section_one->text_3)? $section_one->text_3: '') }}" id="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Text 4</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="text_4" value="{{ (!empty($section_one->text_4)? $section_one->text_4: '') }}" id="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-email-input" class="col-md-2 col-form-label">Text 5</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="text_5" value="{{ (!empty($section_one->text_5)? $section_one->text_5: '') }}" id="">
                                    </div>
                                </div>



                                <input class="btn btn-primary waves-effect waves-light my-4" type="submit" value="Wyślij" >

                            </form>


                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>




</div>


@endsection
