@extends('backend.admin')





@section('srodek')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Edit</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">


                            <form  action=" {{ route('section_one_serwis_insert') }} " method="post" >

                                @csrf

                                <input type="hidden" name="id" value="{{ (!empty($section_two->id)? $section_two->id: '') }}">

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-md-2 col-form-label">Text head</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="text_head" value="{{ (!empty($section_two->text_head)? $section_two->text_head: '')   }}" id="">
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
