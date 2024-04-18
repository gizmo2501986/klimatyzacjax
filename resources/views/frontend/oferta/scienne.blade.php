{{--
@extends('frontend.admin_master')


@section('srodek')
    <div role="main" class="main">


        <section class="">
            <div class="container">

                <div class="row d-flex justify-content-center ">
                    <div class="col-sm-6 mt-5 ">
                        <h2 class="mb-0 font-weight-bold appear-animation text-center" data-appear-animation="blurIn"
                            data-appear-animation-delay="100">Oferta urządzeń klimatyzacyjnych</h2>
                    </div>
                </div>

                <div class="row  d-flex justify-content-center">


                    <div class="col-sm-5 mt-5 ">
                        <div class="card h-100 ">

                            <div class="row  m-0 p-0">
                                <img class="card-img-top" src="{{ asset('frontend/image/oferta/01.jpg') }}" alt="Card Image">
                            </div>

                            <div class="row m-0 p-0 d-flex justify-content-center ">
                                    <img class=" col-sm-3 img-fluid mb-3 mt-2" src="{{ asset('frontend/image/haier.png') }}" alt="Card Image" style="height: ; width: 100px;">
                            </div>

                            <div class="card-body mx-2 p-0  d-flex flex-column ">
                                <div class="row m-0 p-0 ">
                                    <p class="my-2 d-flex justify-content-center">AS09ZS2ERA - 2,6 kW/ 3,0 kW, cena 2 960 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS12ZS2ERA - 3,5 kW/ 4,0 kW, cena 3 300 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>

                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>

                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>

                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>


                                <div class="row p-0 m-0 my-4 flex-grow-1 align-items-end" >
                                    <div class="col d-flex justify-content-center">
                                        <a href=" " class="read-more text-color-primary font-weight-semibold text-2">Pobierz ulotkę PDF
                                            <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-5 mt-5 ">
                        <div class="card h-100  ">

                            <div class="row  m-0 p-0">
                                <img class="card-img-top" src="{{ asset('frontend/image/oferta/02.png') }}" alt="Card Image">
                            </div>

                            <div class="row m-0 p-0 d-flex justify-content-center ">
                                    <img class=" col-sm-3 img-fluid mb-3 mt-2" src="{{ asset('frontend/image/samsung.png') }}" alt="Card Image" style="height: ; width: 100px;">
                            </div>

                            <div class="card-body mx-2 p-0  d-flex flex-column ">
                                <div class="row m-0 p-0 ">
                                    <p class="my-2 d-flex justify-content-center">AS09ZS2ERA - 2,6 kW/ 3,0 kW, cena 2 960 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS12ZS2ERA - 3,5 kW/ 4,0 kW, cena 3 300 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>


                                <div class="row p-0 m-0 my-4 flex-grow-1 align-items-end">
                                    <div class="col d-flex justify-content-center" >
                                        <a href=" " class="read-more text-color-primary font-weight-semibold text-2">Pobierz ulotkę PDF
                                            <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-5 mt-5 ">
                        <div class="card h-100  ">

                            <div class="row  m-0 p-0">
                                <img class="card-img-top" src="{{ asset('frontend/image/oferta/02.png') }}" alt="Card Image">
                            </div>

                            <div class="row m-0 p-0 d-flex justify-content-center ">
                                    <img class=" col-sm-3 img-fluid mb-3 mt-2" src="{{ asset('frontend/image/samsung.png') }}" alt="Card Image" style="height: ; width: 100px;">
                            </div>

                            <div class="card-body mx-2 p-0  d-flex flex-column ">
                                <div class="row m-0 p-0 ">
                                    <p class="my-2 d-flex justify-content-center">AS09ZS2ERA - 2,6 kW/ 3,0 kW, cena 2 960 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS12ZS2ERA - 3,5 kW/ 4,0 kW, cena 3 300 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>


                                <div class="row p-0 m-0 my-4 flex-grow-1 align-items-end">
                                    <div class="col d-flex justify-content-center" >
                                        <a href=" " class="read-more text-color-primary font-weight-semibold text-2">Pobierz ulotkę PDF
                                            <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-5 mt-5 ">
                        <div class="card h-100  ">

                            <div class="row  m-0 p-0">
                                <img class="card-img-top" src="{{ asset('frontend/image/oferta/04.png') }}" alt="Card Image">
                            </div>

                            <div class="row m-0 p-0 d-flex justify-content-center ">
                                    <img class=" col-sm-3 img-fluid mb-3 mt-2" src="{{ asset('frontend/image/samsung.png') }}" alt="Card Image" style="height: ; width: 100px;">
                            </div>

                            <div class="card-body mx-2 p-0  d-flex flex-column ">
                                <div class="row m-0 p-0 ">
                                    <p class="my-2 d-flex justify-content-center">AS09ZS2ERA - 2,6 kW/ 3,0 kW, cena 2 960 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS12ZS2ERA - 3,5 kW/ 4,0 kW, cena 3 300 zł </p>
                                </div>
                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>

                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>

                                <div class="row m-0 p-0">
                                    <p class="my-2 d-flex justify-content-center">AS18ZS2ERA - 5,2 kW/ 5,6 kW, cena 4 520 zł</p>
                                </div>


                                <div class="row p-0 m-0 my-4 flex-grow-1 align-items-end">
                                    <div class="col d-flex justify-content-center" >
                                        <a href=" " class="read-more text-color-primary font-weight-semibold text-2">Pobierz ulotkę PDF
                                            <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>














































    </div>
@endsection --}}
