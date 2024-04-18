@extends('frontend.admin_master')


@section('srodek')
    <div role="main" class="main">





        @php

            use App\Models\db_product_scienne;
            $scienne = db_product_scienne::latest()->get();

            $numer = 1;

        @endphp





        <section>
            <div class="container">
                <div class="row mt-5 justify-content-center ">
                    <div class="col-sm-6 d-flex justify-content-center ">
                        <div class="div">
                            <h2 class="mb-0 font-weight-bold ">{{ $klimatyzacja_info->text_1 }}</h2>

                        </div>
                    </div>
                </div>


                <div class="row d-flex justify-content-center ">
                    <div class="col-sm-12 my-5  " style="min-height: 50vh">

                        {{-- <li style="list-style: none">
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_1) ? $klimatyzacja_info->model_1 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_2) ? $klimatyzacja_info->model_2 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_3) ? $klimatyzacja_info->model_3 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_4) ? $klimatyzacja_info->model_4 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_5) ? $klimatyzacja_info->model_5 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_6) ? $klimatyzacja_info->model_6 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_7) ? $klimatyzacja_info->model_7 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_8) ? $klimatyzacja_info->model_8 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_9) ? $klimatyzacja_info->model_9 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_10) ? $klimatyzacja_info->model_10 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_11) ? $klimatyzacja_info->model_11 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_12) ? $klimatyzacja_info->model_12 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_13) ? $klimatyzacja_info->model_13 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_14) ? $klimatyzacja_info->model_14 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_15) ? $klimatyzacja_info->model_15 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_16) ? $klimatyzacja_info->model_16 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_17) ? $klimatyzacja_info->model_17 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_18) ? $klimatyzacja_info->model_18 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_19) ? $klimatyzacja_info->model_19 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_20) ? $klimatyzacja_info->model_20 : '' }} </ul>
                            <ul class="mt-4 mb-0" style="text-align: justify">
                                {{ !empty($klimatyzacja_info->model_21) ? $klimatyzacja_info->model_21 : '' }} </ul>


                        </li> --}}





                        <table class="table " id="table_klima">
                            <thead class="text-light bg-dark">
                                <tr>
                                    <th scope="col">numer</th>
                                    <th scope="col">Producent</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Chłodzenie kW</th>
                                    <th scope="col">Grzanie kW</th>
                                    <th scope="col">m2</th>
                                    <th scope="col">Cena zł</th>
                                </tr>
                            </thead>


                            <tbody>

                                @foreach ($scienne as $sc)
                                    <tr>
                                        <td>{{ $numer++ }}</td>
                                        <td>{{ $sc->producent }}</td>
                                        <td>{{ $sc->model }}</td>
                                        <td>{{ $sc->chlodzenie }}</td>
                                        <td>{{ $sc->grzanie }}</td>
                                        <td>{{ $sc->m2 }}</td>
                                        <td>{{ $sc->cena }}</td>

                                    </tr>
                                @endforeach



                            </tbody>
                        </table>


                    </div>


                </div>
            </div>
        </section>

    </div>



    
 
@endsection
