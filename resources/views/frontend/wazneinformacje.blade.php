@extends('frontend.admin_master')


@section('srodek')
    <section class="m-0 p-0">
        <div class="container mb-5" style="min-height: 90vh">


            <div class="row  justify-content-center ">
                <div class="col-sm-6 d-flex justify-content-center ">
                    <div class="div my-5">
                        <h2 class="mb-0 font-weight-bold  ">Ważne informacje</h2>


                    </div>

                </div>
            </div>


            @php

                use App\Models\db_wazne_info;
                $info = db_wazne_info::latest()->get();


            @endphp


            <div class="row">
                <div class="col mb-4 mb-lg-0">



                    @foreach ($info as $i)
                        <div class="accordion accordion-modern-status accordion-modern-status-primary my-3" id="accordion100">
                            <div class="card card-default">
                                <div class="card-header" id="collapse100HeadingOne">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark  collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#problem{{$i->id}}" aria-expanded="false"
                                            aria-controls="collapse100One">
                                            {{$i->text_1}}
                                        </a>
                                    </h4>
                                </div>
                                <div id="problem{{$i->id}}" class="collapse" aria-labelledby="collapse100HeadingOne"
                                    data-bs-parent="#accordion100">
                                    <div class="card-body">
                                        <p class="mb-0" style="text-align: justify">{{$i->text_2}}</p>
                                    </div>
                                </div>
                            </div>
                    @endforeach









                </div>
            </div>
        </div>
        </div>
    </section>


@endsection
