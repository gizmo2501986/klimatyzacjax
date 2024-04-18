@extends('frontend.admin_master')


@section('srodek')
    <div role="main" class="main">





        <section>
            <div class="container">
                <div class="row mt-5 justify-content-center ">
                    <div class="col-sm-8 d-flex justify-content-center ">
                        <div class="div">
                            <h2 class="mb-0 font-weight-bold ">{{ $kwadraty_bottom->text_1 }}</h2>

                        </div>
                    </div>
                </div>


                <div class="row d-flex justify-content-center ">
                    <div class="col-sm-8 my-5 d-flex justify-content-centerd-flex justify-content-center" style="min-height: 50vh">

                        <div class="">
                            <p class="mt-4 mb-0" style="text-align: justify">

                                {{ $kwadraty_bottom->opis }}
                            </p>
                        </div>
                    </div>


                </div>
            </div>
        </section>



    </div>
@endsection
