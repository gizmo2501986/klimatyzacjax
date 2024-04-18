@extends('frontend.admin_master')


@section('srodek')
    <div role="main" class="main">












        @php

            use App\Models\sekcja_jeden;
            $section_one = sekcja_jeden::find(1);

        @endphp



        <section class=" bg-light m-0 p-0">

            <div class="container-xl my-5 p-0">
                <div class="row m-0 p-0 ">

                    <div class="col-sm-6 col-md-12 col-lg-6 d-flex flex-column justify-content-center  p-2 ">



                        <h3 class="font-weight-bold text-8  line-height-2 text-transform-none mb-3  mt-5 ">
                            {{ !empty($section_one->text_1) ? $section_one->text_1 : '' }}
                        </h3>

                        <p class=" line-height-7 text-justify">

                            {{ !empty($section_one->text_2) ? $section_one->text_2 : '' }}

                        </p>



                        <p class=" line-height-7 text-justify">
                            {{ !empty($section_one->text_3) ? $section_one->text_3 : '' }}
                        </p>

                        <p class=" line-height-7 text-justify">
                            {{ !empty($section_one->text_4) ? $section_one->text_4 : '' }}
                        </p>

                        <p class=" line-height-7 text-justify">
                            {{ !empty($section_one->text_5) ? $section_one->text_5 : '' }}
                        </p>

                        <a href="{{ route('oferta') }}"
                            class="col-sm-5 btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-5 my-2 ">OFERTA<i
                                class="fas fa-arrow-right ms-2 "></i></a>

                    </div>


                    @php
                        use App\Models\sekcja_kwadrat;
                        $section_one_square = sekcja_kwadrat::limit(4)->latest()->get();
                    @endphp






                    <div class="col-sm-6 col-md-12 col-lg-6 d-flex justify-content-around flex-wrap m-0 p-0">


                        @foreach ($section_one_square as $square)
                            <div class="col-sm-6  szerokosc">

                                <div class=" mx-2 my-3 ">
                                    <div class="card-body p-relative zindex-1"
                                        style="background-image: url({{ $square->image }}); border-radius: 20px;
                                        background-position: center ; background-size: cover; overflow: hidden">

                                        <div class="m-0 p-0 text-center d-flex flex-column justify-content-center "
                                            style="min-height: 180px">

                                            <h4 class=" text-light cien">{{ $square->text_1 }}</h4>
                                            <p class=" text-light cien">{{ Str::limit($square->text_2, 50) }}</p>
                                            <a href="{{ route('r32', $square->id) }}"
                                                class="read-more text-color-primary font-weight-semibold  text-2">Czytaj
                                                więcej
                                                <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

        </section>


        @php
            use App\Models\db_section_two_head;
            use App\Models\db_section_two_text;
            $section_two_head = db_section_two_head::find(1);
            $section_two_text = db_section_two_text::latest()->get();
        @endphp


        <section class="bg-color-grey-scale-1">
            <div class="container-xl">
                <div class="row  justify-content-center ">
                    <div class="col-sm-6 d-flex justify-content-center my-5">
                        <div class="div">
                            <h2 class=" font-weight-bold ">
                                {{ !empty($section_two_head->text_head) ? $section_two_head->text_head : '' }}</h2>

                        </div>
                    </div>
                </div>


                <div class="row">


                    @foreach ($section_two_text as $text)
                        <div class="col-sm-4 mb-5">
                            <h4 class="mb-0 ">
                                {{ !empty($text->text_1) ? $text->text_1 : '' }} </h4>
                            <div class="divider divider-primary divider-small mt-2 mb-4 ">
                                <hr class="my-0 me-auto">
                            </div>
                            <div class="">
                                <p class="mt-4 mb-0">{{ !empty($text->text_2) ? $text->text_2 : '' }}</p>

                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>


        @php
            use App\Models\db_section_tre_head;
            use App\Models\db_section_tre_text;
            $section_tre_head = db_section_tre_head::find(1);
            $section_tre_text = db_section_tre_text::latest()->get();

            $liczba = 1;
        @endphp


        <section class="bg-color-grey-scale-1">
            <div class="container-xl">

                <div class="row justify-content-center ">
                    <div class="col-sm-6 d-flex justify-content-center mt-5">
                        <div class="div">
                            <h2 class="mb-0 font-weight-bold ">
                                {{ !empty($section_tre_head->text_head) ? $section_tre_head->text_head : '' }} </h2>

                        </div>
                    </div>
                </div>


                <div class="row mt-5">



                    @foreach ($section_tre_text as $tree)
                        <div class="col-sm-3 p-0 m-0">
                            <div class="process process-shapes process-shapes-always-animate my-5">
                                <div class="process-step  mb-5 ">
                                    <div class="process-step-circle">
                                        <strong class="process-step-circle-content">{{ $liczba++ }}</strong>
                                    </div>
                                    <div class="process-step-content">
                                        <h4 class="mb-1 text-5 font-weight-bold">
                                            {{ !empty($tree->text_1) ? $tree->text_1 : '' }}</h4>
                                        <p class="mb-0 mx-2" style="text-align: left">

                                            {{ !empty($tree->text_2) ? $tree->text_2 : '' }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach





                </div>
            </div>
        </section>












        @php
            use App\Models\sekcja_kwadrat_dwa;

            $section_five_square = sekcja_kwadrat_dwa::latest()->get();

        @endphp





        <section class="bg-light m-0 p-0 ">
            <div class="container-xl  p-0 ">


                <div class="row p-0 m-0 ">


                    <div class="col-sm-12 d-flex justify-content-around flex-wrap  my-5 ">


                        @foreach ($section_five_square as $five)
                            <div class="col-sm-6 ">

                                <div class=" p-0 d-flex flex-column my-2 mx-2"
                                    style="background-image: url({{ $five->image }}); border-radius: 20px; background-position: center;
                                    background-size: cover; box-sizing: border-box; height: 250px">

                                    <div class="row  d-flex justify-content-start p-0 m-0">
                                        <div class="col-sm-12  mt-5">
                                            <h1 class="font-weight-bold text-8  text-light m-0 cien">{{ Str::limit($five->text_1, 60) }}
                                            </h1>

                                        </div>
                                    </div>

                                    <div class="row p-0 m-0">
                                        <div class="col-sm-8 ">
                                            <p class="text-light cien">
                                                {{ $five->text_2 }}
                                            </p>
                                        </div>
                                    </div>

                                    <div class="row p-0 m-0 h-100 ">
                                        <div class="col-sm-4 col-md-6  d-flex align-items-end ">
                                            <a href="{{ route('kwadraty_bottom', $five->id) }}"
                                                class="btn btn-primary btn-modern font-weight-bold text-2 py-3 btn-px-5 mb-5">CZYTAJ
                                                <i class="fas fa-arrow-right ms-2"></i></a>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        @endforeach



                    </div>













                </div>

            </div>

        </section>








        @php
            use App\Models\db_section_four_head;
            use App\Models\db_section_four_text;
            $section_four_head = db_section_four_head::find(1);
            $section_four_text = db_section_four_text::latest()->get();

            $liczba = 1;
        @endphp




        <section class="bg-color-grey-scale-1 ">
            <div class="container-xl">
                <div class="row  justify-content-center ">
                    <div class="col-sm-12 d-flex justify-content-center my-5">
                        <div class="div">
                            <h2 class=" font-weight-bold ">
                                {{ !empty($section_four_head->text_head) ? $section_four_head->text_head : '' }}</h2>

                        </div>
                    </div>
                </div>


                <div class="row">


                    @foreach ($section_four_text as $text_four)
                        <div class="col-sm-4 mb-5">
                            <h4 class="mb-0 ">
                                {{ $text_four->text_1 }} </h4>
                            <div class="divider divider-primary divider-small mt-2 mb-4 ">
                                <hr class="my-0 me-auto">
                            </div>
                            <div class="">
                                <p class="mt-4 mb-0">{{ $text_four->text_2 }}</p>

                            </div>
                        </div>
                    @endforeach



                </div>
            </div>
        </section>







        @php
            use App\Models\db_section_six_head;
            use App\Models\db_section_six_text;
            $section_six_head = db_section_six_head::find(1);
            $section_six_text = db_section_six_text::latest()->get();

        @endphp


        <section class="">
            <div class="container-xl ">

                <div class="row mb-5">
                    <div class="col-sm-6">
                        <div class="row ">

                            <div class="col-sm-12 my-5 ">
                                <h2 class="mb-0 font-weight-bold  ">
                                    {{ !empty($section_six_head->text_head) ? $section_six_head->text_head : '' }}</h2>

                            </div>

                        </div>

                        @foreach ($section_six_text as $six)
                            <div class="row">
                                <div class="col-sm-12 mb-2">

                                    <p class="mb-0 " data-="blurIn" data--delay="400"><i class="fas fa-check text-primary "
                                            style="margin-right: 5px"></i>
                                        {{ $six->text_1 }}</p>
                                </div>
                            </div>
                        @endforeach





                    </div>


                    @php

                        use App\Models\db_section_seven_photos;

                        $section_seven_photo = db_section_seven_photos::limit(6)->latest()->get();

                    @endphp





                    <div class="col-sm-6 ">


                        <div class="row d-flex justify-content-around mt-5">


                            @foreach ($section_seven_photo as $seven)
                                <div class="col-sm-5  d-flex align-items-center  mb-2 p-0">
                                    <a href="{{ asset(!empty($seven->image) ? $seven->image : '') }}">
                                        <img src="{{ asset(!empty($seven->image) ? $seven->image : '') }}"
                                            class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0"
                                            alt="" />
                                    </a>
                                </div>
                            @endforeach




                        </div>
                    </div>
                </div>
        </section>





    </div>
@endsection
