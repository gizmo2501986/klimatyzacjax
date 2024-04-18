@extends('frontend.admin_master')


@section('srodek')
    @php

        use App\Models\db_section_one_serwis_text;
        use App\Models\db_section_one_serwis_head;

        $section_one_serwis_text = db_section_one_serwis_text::latest()->get();
        $section_one_serwis_head = db_section_one_serwis_head::find(1);

    @endphp


    <section class="bg-light">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-sm-6 d-flex justify-content-center mb-5">
                    <div class="div mt-5">
                        <h2 class="mb-0 font-weight-bold  text-center">
                            {{ !empty($section_one_serwis_head->text_head) ? $section_one_serwis_head->text_head : '' }}
                        </h2>

                    </div>

                </div>
            </div>


            <div class="row ">



                @foreach ($section_one_serwis_text as $oneserwis)
                    <div class="col-sm-4 mb-5">
                        <h4 class="mb-0 ">
                            {{ !empty($oneserwis->text_1) ? $oneserwis->text_1 : '' }}</h4>
                        <div class="divider divider-primary divider-small mt-2 mb-4 ">
                            <hr class="my-0 me-auto">
                        </div>
                        <div class="">
                            <p class="mt-4 mb-0">
                                {{ !empty($oneserwis->text_2) ? $oneserwis->text_2 : '' }}
                            </p>

                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>

















    @php

        use App\Models\db_section_two_serwis_text;
        use App\Models\db_section_two_serwis_head;

        $section_two_serwis_text = db_section_two_serwis_text::latest()->get();
        $section_two_serwis_head = db_section_two_serwis_head::find(1);

    @endphp





    <section class="bg-color-grey">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-sm-6 d-flex justify-content-center mb-5">
                    <div class="div mt-5">
                        <h2 class="mb-0 font-weight-bold  text-center">
                            {{ !empty($section_two_serwis_head->text_head) ? $section_two_serwis_head->text_head : '' }}
                        </h2>

                    </div>

                </div>
            </div>


            <div class="row ">


                @foreach ($section_two_serwis_text as $twoserwis)
                    <div class="col-sm-4 mb-5">
                        <h4 class="mb-0 ">
                            {{ !empty($twoserwis->text_1) ? $twoserwis->text_1 : '' }}</h4>
                        <div class="divider divider-primary divider-small mt-2 mb-4 ">
                            <hr class="my-0 me-auto">
                        </div>
                        <div class="">
                            <p class="mt-4 mb-0">
                                {{ !empty($twoserwis->text_2) ? $twoserwis->text_2 : '' }}
                            </p>

                        </div>
                    </div>
                @endforeach










            </div>
        </div>
    </section>






    @php

        use App\Models\db_section_tre_serwis_text;
        use App\Models\db_section_tre_serwis_head;

        $section_tre_serwis_text = db_section_tre_serwis_text::latest()->get();
        $section_tre_serwis_head = db_section_tre_serwis_head::find(1);

    @endphp


    <section class="bg-light">
        <div class="container ">
            <div class="row justify-content-center ">
                <div class="col-sm-6 d-flex justify-content-center mb-5">
                    <div class="div mt-5">
                        <h2 class="mb-0 font-weight-bold  text-center">
                            {{ !empty($section_tre_serwis_head->text_head) ? $section_tre_serwis_head->text_head : '' }}
                        </h2>

                    </div>

                </div>
            </div>


            <div class="row ">



                @foreach ($section_tre_serwis_text as $treserwis)
                    <div class="col-sm-4 mb-5">
                        <h4 class="mb-0 ">
                            {{ !empty($treserwis->text_1) ? $treserwis->text_1 : '' }}</h4>
                        <div class="divider divider-primary divider-small mt-2 mb-4 ">
                            <hr class="my-0 me-auto">
                        </div>
                        <div class="">
                            <p class="mt-4 mb-0">
                                {{ !empty($treserwis->text_2) ? $treserwis->text_2 : '' }}
                            </p>

                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
@endsection
