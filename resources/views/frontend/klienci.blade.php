@extends('frontend.admin_master')


@section('srodek')
    @php
        use App\Models\db_section_one_klienci_text;
        $section_one = db_section_one_klienci_text::find(1);
    @endphp




    <section class="section bg-light border-0 position-relative py-0 m-0">
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-6 p-0">

                    <div class="px-3 py-5">
                        <h2 class="font-weight-bold text-color-dark text-9 mb-4 ">
                            {{ $section_one->text_1 }}</h2>
                        <p class="text-4-5 line-height-7 ">
                            {{ $section_one->text_2 }}
                        </p>

                        <p class="text-4-5 line-height-7 ">
                            {{ $section_one->text_3 }}</p>

                        <p class="text-4-5 line-height-7 ">
                            {{ $section_one->text_4 }}
                        </p>
                        <p class="text-4-5 line-height-7 ">
                            {{ $section_one->text_5 }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    @php
        use App\Models\db_section_two_klienci_head;
        $klienci_head = db_section_two_klienci_head::find(1);

        use App\Models\db_section_two_klienci_text;
        $klienci_text = db_section_two_klienci_text::latest()->get();
    @endphp



    <section class="bg-color-grey-scale-1">
        <div class="container-xl">
            <div class="row  justify-content-center ">
                <div class="col-sm-6 d-flex justify-content-center my-5">
                    <div class="div">
                        <h2 class=" font-weight-bold ">
                            {{ !empty($klienci_head->text_head) ? $klienci_head->text_head : '' }}</h2>

                    </div>
                </div>
            </div>


            <div class="row">


                @foreach ($klienci_text as $text)
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






    <section>
        <div class="container p-0">
            <div class="row  d-flex justify-content-center p-0">
                <div class="col-sm-8 mt-5 d-flex justify-content-center  p-0">
                    <h1 class="p-0 m-0 font-weight-bold">Gwarancja sukcesu</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center p-0 m-0">
                <div class="col-sm-6 d-flex justify-content-center mt-4 p-0 ">
                    <p class="mx-2 text-justify">Nasze dotychczasowe osiągnięcia potwierdzają nasze możliwości. Uważamy, że najlepszą
                        formą reklamy są referencje od naszych zadowolonych klientów. Jeśli chcieliby Państwo uzyskać więcej
                        informacji na temat naszej oferty, referencji oraz osiągnięć, zapraszamy do kontaktu z naszym
                        Działem Handlowym.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 my-5 d-flex justify-content-center">

                    <img src="{{ asset('frontend/image/logo1.jpg') }}" class="img-fluid"
                        style="height: 200px; width: 200px">

                </div>

                <div class="col-sm-4 my-5 d-flex justify-content-center">

                    <img src="{{ asset('frontend/image/logo9.jpg') }}" class="img-fluid"
                        style="height: 200px; width: 200px">

                </div>

                <div class="col-sm-4 my-5 d-flex justify-content-center">

                    <img src="{{ asset('frontend/image/logo4.jpg') }}" class="img-fluid"
                        style="height: 200px; width: 200px">

                </div>

                <div class="col-sm-4 my-5 d-flex justify-content-center">

                    <img src="{{ asset('frontend/image/logo7.png') }}" class="img-fluid"
                        style="height: 200px; width: 200px">

                </div>

                <div class="col-sm-4 my-5 d-flex justify-content-center">

                    <img src="{{ asset('frontend/image/logo8.png') }}" class="img-fluid" style="height: 200px; width: 200px">

                </div>

                <div class="col-sm-4 my-5 d-flex justify-content-center">

                    <img src="{{ asset('frontend/image/logo10.png') }}" class="img-fluid"
                        style="height: 200px; width: 200px">

                </div>


            </div>
        </div>
    </section>
@endsection
