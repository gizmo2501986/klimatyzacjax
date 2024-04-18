@extends('frontend.admin_master')


@section('srodek')
    <section>
        <div class="container-xl">

            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 mt-5 d-flex justify-content-center">
                    <h2 class="mb-0 font-weight-bold text-center">Oferta urządzeń klimatyzacyjnych</h2>
                </div>
            </div>


            @php

                use App\Models\db_section_one_klimatyzacja;
                $klima = db_section_one_klimatyzacja::latest()->get();

                use App\Models\db_section_one_scienno_sufitowe;
                $sufitowa = db_section_one_scienno_sufitowe::latest()->get();

                use App\Models\db_section_one_kasetonowa;
                $kaseta = db_section_one_kasetonowa::latest()->get();

                use App\Models\db_section_one_kanalowa;
                $kanalowa = db_section_one_kanalowa::latest()->get();

                use App\Models\db_section_one_multisplit;
                $multi = db_section_one_multisplit::latest()->get();

            @endphp


            <div class="row">

                @foreach ($klima as $item)
                    <div class="col-sm-4 mt-5 ">
                        <div class="card h-100 ">
                            <img class="card-img-top" src="{{ asset($item->image) }}" alt="Card Image">
                            <div class=" card-body d-flex flex-column ">

                                <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">{{ $item->text_1 }}</h4>

                                <p class="  card-text  m-0 p-0 ">
                                    {{ $item->text_2 }}
                                </p>

                                <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                    <a href="{{ route('klimatyzacja_info', $item->id) }}"
                                        class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                        oferte
                                        <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach



                @foreach ($sufitowa as $suf)
                    <div class="col-sm-4 mt-5 ">
                        <div class="card h-100 ">
                            <img class="card-img-top" src="{{ asset($suf->image) }}" alt="Card Image">
                            <div class=" card-body d-flex flex-column ">

                                <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">{{ $suf->text_1 }}</h4>

                                <p class="  card-text  m-0 p-0">
                                    {{ $suf->text_2 }}
                                </p>

                                <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                    <a href="{{ route('klimatyzacja_scienno_sufitowa', $suf->id) }}"
                                        class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                        oferte
                                        <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach






                @foreach ($kaseta as $kas)
                    <div class="col-sm-4 mt-5 ">
                        <div class="card h-100 ">
                            <img class="card-img-top" src="{{ asset($kas->image) }}" alt="Card Image">
                            <div class=" card-body d-flex flex-column ">

                                <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">{{ $kas->text_1 }}</h4>

                                <p class="  card-text  m-0 p-0">
                                    {{ $kas->text_2 }}
                                </p>

                                <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                    <a href="{{ route('klimatyzacja_kasetonowa', $kas->id) }}"
                                        class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                        oferte
                                        <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach




                @foreach ($kanalowa as $kaa)
                    <div class="col-sm-4 mt-5 ">
                        <div class="card h-100 ">
                            <img class="card-img-top" src="{{ asset($kaa->image) }}" alt="Card Image">
                            <div class=" card-body d-flex flex-column ">

                                <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">{{ $kaa->text_1 }}</h4>

                                <p class="  card-text  m-0 p-0">
                                    {{ $kaa->text_2 }}
                                </p>

                                <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                    <a href="{{ route('klimatyzacja_kanalowa', $kaa->id) }}"
                                        class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                        oferte
                                        <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach









                @foreach ($multi as $mu)
                    <div class="col-sm-4 mt-5 ">
                        <div class="card h-100 ">
                            <img class="card-img-top" src="{{ asset($mu->image) }}" alt="Card Image">
                            <div class=" card-body d-flex flex-column ">

                                <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">{{ $mu->text_1 }}</h4>

                                <p class="  card-text  m-0 p-0">
                                    {{ $mu->text_2 }}
                                </p>

                                <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                    <a href="{{ route('klimatyzacja_multisplit', $mu->id) }}"
                                        class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                        oferte
                                        <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>








    {{-- <section>
        <div class="container-xl">

            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 mt-5 d-flex justify-content-center">
                    <h2 class="mb-0 font-weight-bold text-center">Oferta urządzeń klimatyzacyjnych</h2>
                </div>
            </div>

            <div class="row">


                <div class="col-sm-4 mt-5 ">
                    <div class="card h-100 ">
                        <img class="card-img-top" src="{{ asset('frontend/image/klima.jpg') }}" alt="Card Image">
                        <div class=" card-body d-flex flex-column ">

                            <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">Ścienne</h4>

                            <p class="  card-text  m-0 p-0">Montaż na ścianie. Jest to najczęściej spotykany typ
                                klimatyzacji. Typoszereg dostępnych modeli między 7000 a 24000 Btu. Szeroka gama urządzeń
                                zapewni satysfkację nawet najbardzie wymagającym klientom.
                            </p>

                            <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                <a href="{{ route('scienne') }}"
                                    class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                    oferte
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>





                <div class="col-sm-4 mt-5 ">
                    <div class="card h-100 ">
                        <img class="card-img-top" src="{{ asset('frontend/image/klima.jpg') }}" alt="Card Image">
                        <div class=" card-body d-flex flex-column ">

                            <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">Ścienno-Sufitowe</h4>

                            <p class="  card-text  m-0 p-0">Podobne z wyglądu do ściennych, lecz ze względu na
                                budowę mogą być montowane przy samym suficie. Najczęściej spotykane w pomieszczeniach o
                                wysokiej zabudowie meblowej, np. w sklepach.
                            </p>

                            <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                <a href="/"
                                    class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                    oferte
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>






                <div class="col-sm-4 mt-5 ">
                    <div class="card h-100 ">
                        <img class="card-img-top" src="{{ asset('frontend/image/klima.jpg') }}" alt="Card Image">
                        <div class=" card-body d-flex flex-column ">

                            <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">Kasetonowe</h4>

                            <p class="  card-text  m-0 p-0">Modele tego typu montowane są na suficie w dużych
                                powierzchniowo pomieszczeniach, np. salach konferencyjnych. Czterokierunkowy nawiew zapewnia
                                dystrybucję chłodu w każdym kierunku.
                            </p>

                            <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                <a href="/"
                                    class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                    oferte
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>






                <div class="col-sm-4 mt-5 ">
                    <div class="card h-100 ">
                        <img class="card-img-top" src="{{ asset('frontend/image/klima.jpg') }}" alt="Card Image">
                        <div class=" card-body d-flex flex-column ">

                            <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">Kanałowe</h4>
                            <p class="  card-text  m-0 p-0">Typ klimatyzatora stosowany w pomieszczeniach z
                                sufitem podwieszanym. Dystrybucję powietrza realizuje się poprzez nawiewniki połączone z
                                urządzeniem rurami elastycznymi.
                            </p>
                            <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                <a href="/"
                                    class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                    oferte
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-4 mt-5 ">
                    <div class="card h-100 ">
                        <img class="card-img-top" src="{{ asset('frontend/image/klima.jpg') }}" alt="Card Image">
                        <div class=" card-body d-flex flex-column ">

                            <h4 class=" card-title  text-4 font-weight-bold m-0 p-0">Multisplit</h4>

                            <p class="  card-text  m-0 p-0">System klimatyzacji polegający na podłączeniu kilku
                                jednostek
                                wewnętrznych (do 5 szt.) do jednej jednostki zewnęntrzenej. Można stosować wszystkie rodzaje
                                parowników.
                            </p>

                            <div class=" d-flex align-items-end flex-grow-1 p-0 mt-4">
                                <a href="/"
                                    class=" m-0 p-0  read-more text-color-primary font-weight-semibold text-2">Zobacz
                                    oferte
                                    <i class="fas fa-angle-right position-relative top-1 ms-1"></i></a>
                            </div>


                        </div>
                    </div>
                </div>




            </div>
        </div>
    </section> --}}












    @php
        use App\Models\db_klimatyzacja_pliki;
        $pliki = db_klimatyzacja_pliki::latest()->get();

    @endphp



    <section class="">
        <div class="container-xl  pb-5">

            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 d-flex justify-content-center mt-5">
                    <h2 class="mb-0 font-weight-bold  " data-="blurIn" data--delay="100">Zapoznaj się z pełną ofertą</h2>
                </div>
            </div>

            <div class="row justify-content-center">



                @foreach ($pliki as $plik)

                    <div class="col-sm-3 mt-5 d-flex align-items-stretch justify-content-center">
                        <div class=" mb-lg-0  d-flex align-items-stretch" data-="fadeInUpShorter" data--delay="400">
                            <div
                                class=" card card-border card-border-bottom card-border-hover bg-color-light box-shadow-6 box-shadow-hover ">
                                <div class="card-body">
                                    <div class="col srodek ">
                                        <img class="male_logo p-0 mb-2 img-fluid "
                                            src="{{ asset($plik->image) }}">
                                    </div>
                                    <h4 class="card-title mb-1 text-4 font-weight-bold"></h4>

                                    <p class="card-text mt-4"><a href="{{ $plik->plik_1  }}" > Pobierz katalog</a> </p>

                                    <p class="card-text mt-2"><a href="{{ $plik->plik_2  }}">Pobierz cennik</a></p>


                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach




                {{-- <div class="col-sm-3 mt-5 d-flex align-items-stretch justify-content-center">
                    <div class=" mb-lg-0  d-flex align-items-stretch" data-="fadeInUpShorter" data--delay="400">
                        <div
                            class=" card card-border card-border-bottom card-border-hover bg-color-light box-shadow-6 box-shadow-hover ">
                            <div class="card-body">
                                <div class="col srodek ">
                                    <img class="male_logo p-0 mb-2 img-fluid "
                                        src="{{ asset('frontend/image/haier.png') }}">
                                </div>
                                <h4 class="card-title mb-1 text-4 font-weight-bold"></h4>

                                <p class="card-text mt-4"><a href=""> Pobierz katalog</a> </p>

                                <p class="card-text mt-2"><a href="">Pobierz cennik</a></p>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 mt-5 d-flex align-items-stretch justify-content-center justify-content-center">
                    <div class=" mb-lg-0  d-flex align-items-stretch" data-="fadeInUpShorter" data--delay="400">
                        <div
                            class=" card card-border card-border-bottom card-border-hover bg-color-light box-shadow-6 box-shadow-hover ">
                            <div class="card-body">
                                <div class="col srodek ">
                                    <img class="male_logo p-0 mb-2 img-fluid"
                                        src="{{ asset('frontend/image/toshiba2.png') }}">
                                </div>
                                <h4 class="card-title mb-1 text-4 font-weight-bold"></h4>

                                <p class="card-text mt-4"><a href=""> Pobierz katalog</a> </p>

                                <p class="card-text mt-2"><a href="">Pobierz cennik</a></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 mt-5 d-flex align-items-stretch justify-content-center">
                    <div class=" mb-lg-0  d-flex align-items-stretch" data-="fadeInUpShorter" data--delay="400">
                        <div
                            class=" card card-border card-border-bottom card-border-hover bg-color-light box-shadow-6 box-shadow-hover ">
                            <div class="card-body">
                                <div class="col srodek">
                                    <img class="male_logo p-0 mb-2 img-fluid"
                                        src="{{ asset('frontend/image/samsung.png') }}">
                                </div>
                                <h4 class="card-title mb-1 text-4 font-weight-bold"></h4>

                                <p class="card-text mt-3"><a href=""> Pobierz katalog</a> </p>

                                <p class="card-text mt-2"><a href="">Pobierz cennik</a></p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 mt-5 d-flex align-items-stretch justify-content-center">
                    <div class=" mb-lg-0  d-flex align-items-stretch" data-="fadeInUpShorter" data--delay="400">
                        <div
                            class=" card card-border card-border-bottom card-border-hover bg-color-light box-shadow-6 box-shadow-hover ">
                            <div class="card-body">
                                <div class="col srodek">
                                    <img class="male_logo p-0 mb-2 img-fluid"
                                        src="{{ asset('frontend/image/fuji.png') }}">
                                </div>
                                <h4 class="card-title mb-1 text-4 font-weight-bold"></h4>

                                <p class="card-text mt-4"><a href=""> Pobierz katalog</a> </p>

                                <p class="card-text mt-2"><a href="">Pobierz cennik</a></p>

                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>








    {{-- <section class="bg-color-grey mt-5">
        <div class="container-xl bg-color-grey">
            <div class="row  justify-content-center ">
                <div class="col-sm-6 d-flex justify-content-center ">
                    <div class="div mt-5">
                        <h2 class="mb-0 font-weight-bold  " data-="blurIn"
                            data--delay="100">Czym się zajmujemy?</h2>

                    </div>

                </div>
            </div>


            <div class="row mt-5">

                <div class="col-sm-4 mb-5">
                    <h4 class="mb-0 " data-="blurIn" data--delay="400">
                        Prace budowlane</h4>
                    <div class="divider divider-primary divider-small mt-2 mb-4 "
                        data-="fadeIn" data--delay="500">
                        <hr class="my-0 me-auto">
                    </div>
                    <div class="" data-="fadeIn" data--delay="500">
                        <p class="mt-4 mb-0" style="text-align: justify">Budujemy i readaptujemy lokale usługowe kilku-kilkuset metrowe w centrach
                            handlowych, pasażach oraz wolnostojące. Zajmujemy się całością prac wnętrzarskich również w
                            mieszkaniach i lokalach specjalistycznych, które muszą spełniać odpowiednie wymogi
                            sanitarne.
                        </p>

                    </div>
                </div>

                <div class="col-sm-4 mb-5">
                    <h4 class="mb-0 " data-="blurIn" data--delay="400">
                        Instalacje elektryczne</h4>
                    <div class="divider divider-primary divider-small mt-2 mb-4 "
                        data-="fadeIn" data--delay="500">
                        <hr class="my-0 me-auto">
                    </div>
                    <div class="" data-="fadeIn" data--delay="500">
                        <p class="mt-4 mb-0" style="text-align: justify">Projektujemy, wykonujemy i modernizujemy instalacje elektryczne i
                            niskoprądowe, systemy CCTV i alarmowe.</p>

                    </div>
                </div>

                <div class="col-sm-4 mb-5">
                    <h4 class="mb-0 " data-="blurIn" data--delay="400">
                        Instalacje
                        HVAC i wod-kan </h4>
                    <div class="divider divider-primary divider-small mt-2 mb-4 "
                        data-="fadeIn" data--delay="500">
                        <hr class="my-0 me-auto">
                    </div>
                    <div class="" data-="fadeIn" data--delay="500">
                        <p class="mt-4 mb-0" style="text-align: justify">Projektujemy, wykonujemy i modernizujemy instalacje wentylacji,
                            klimatyzacji,
                            wod-kan., CO, CT i gazowej.</p>

                    </div>
                </div>

                <div class="col-sm-4 mb-5">
                    <h4 class="mb-0 " data-="blurIn" data--delay="400">
                        Salon klimatyzacji</h4>
                    <div class="divider divider-primary divider-small mt-2 mb-4 "
                        data-="fadeIn" data--delay="500">
                        <hr class="my-0 me-auto">
                    </div>
                    <div class="" data-="fadeIn" data--delay="500">
                        <p class="mt-4 mb-0" style="text-align: justify">Już niebawem zapraszamy do salonu klimatyzacji znajdującego się przy
                            naszym
                            biurze. Przedstawimy w nim ofertę urządzeń klimatyzacji i wentylacji oraz umięjętności
                            budowlanych.</p>

                    </div>
                </div>



            </div>
        </div>
    </section>


    <section class="">
        <div class="container-xl ">

            <div class="row mb-5">
                <div class="col-sm-6">
                    <div class="row ">

                        <div class="col-sm-6 my-5 ">
                            <h2 class="mb-0 font-weight-bold  " data-="blurIn"
                                data--delay="100">Co zapewniamy?</h2>

                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-2">

                            <p class="mb-0 " data-="blurIn"
                                data--delay="400"><i class="fas fa-check text-primary "
                                    style="margin-right: 5px"></i>
                                Bogate doświadczenie</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-2">

                            <p class="mb-0 " data-="blurIn"
                                data--delay="400"><i class="fas fa-check text-primary "
                                    style="margin-right: 5px"></i>
                                Umiejętność pracy pod presją czasu</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <p class="mb-0 " data-="blurIn"
                                data--delay="400"><i class="fas fa-check text-primary "
                                    style="margin-right: 5px"></i>
                                Wysoki poziom organizacji wykonywanych zadań</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <p class="mb-0 " data-="blurIn"
                                data--delay="400"><i class="fas fa-check text-primary "
                                    style="margin-right: 5px"></i>
                                Wysoką jakość wykonywanych prac</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <p class="mb-0 " data-="blurIn"
                                data--delay="400"><i class="fas fa-check text-primary "
                                    style="margin-right: 5px"></i>
                                Ciągłe poszukiwanie nowych, lepszych rozwiązań</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-2">
                            <p class="mb-0 " data-="blurIn"
                                data--delay="400"><i class="fas fa-check text-primary "
                                    style="margin-right: 5px"></i>
                                Umiejętność przystosowania się do zmian koniecznych do wykonania projektu</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mb-5 ">
                            <p class="mb-0 " data-="blurIn"
                                data--delay="400"><i class="fas fa-check text-primary "
                                    style="margin-right: 5px"></i>
                                Dostosowanie oferty do możliwości klienta</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 ">
                    <div class="row  ">
                        <div class="col-sm-12  d-flex justify-content-center mb-5">
                            <div class="div mt-5 ">
                                <h2 class="mb-0 font-weight-bold  " data-="blurIn"
                                    data--delay="100">Przykładowe realizacje</h2>

                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-around">

                        <div class="col-sm-5  d-flex align-items-center mb-2 p-0">
                            <a href="{{ asset('frontend/image/sklep1.jpg') }}">
                                <img src="{{ asset('frontend/image/sklep1.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <div class="col-sm-5  d-flex align-items-center mb-2 p-0">
                            <a href="{{ asset('frontend/image/sklep2.jpg') }}">
                                <img src="{{ asset('frontend/image/sklep2.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <div class="col-sm-5  d-flex align-items-center mb-2 p-0">
                            <a href="blog-post.html">
                                <img src="{{ asset('frontend/image/sklep3.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <div class="col-sm-5  d-flex align-items-center mb-2 p-0">
                            <a href="blog-post.html">
                                <img src="{{ asset('frontend/image/sklep4.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <div class="col-sm-5  d-flex align-items-center mb-2 p-0">
                            <a href="blog-post.html">
                                <img src="{{ asset('frontend/image/sklep5.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>

                        <div class="col-sm-5  d-flex align-items-center mb-2 p-0">
                            <a href="blog-post.html">
                                <img src="{{ asset('frontend/image/sklep6.jpg') }}"
                                    class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                            </a>
                        </div>


                    </div>
                </div>
            </div>
    </section> --}}
@endsection
