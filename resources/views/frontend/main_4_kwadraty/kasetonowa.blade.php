@extends('frontend.admin_master')


@section('srodek')
    <div role="main" class="main">





        @php



            use App\Models\db_product_kasetonowe;
            $kaseta = db_product_kasetonowe::latest()->get();

            $numer = 1;

        @endphp





        <section>
            <div class="container">
                <div class="row mt-5 justify-content-center ">
                    <div class="col-sm-6 d-flex justify-content-center ">
                        <div class="div">
                            <h2 class="mb-0 font-weight-bold ">{{ $text->text_1 }}</h2>

                        </div>
                    </div>
                </div>


                <div class="row d-flex justify-content-center ">
                    <div class="col-sm-12 my-5  " style="min-height: 50vh">

                   




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

                                @foreach ($kaseta as $k)
                                    <tr>
                                        <td>{{ $numer++ }}</td>
                                        <td>{{ $k->producent }}</td>
                                        <td>{{ $k->model }}</td>
                                        <td>{{ $k->chlodzenie }}</td>
                                        <td>{{ $k->grzanie }}</td>
                                        <td>{{ $k->m2 }}</td>
                                        <td>{{ $k->cena }}</td>

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
