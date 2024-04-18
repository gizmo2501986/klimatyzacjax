@extends('backend.admin')


@section('srodek')


<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mb-4">Kwadraty</h4>

                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">




                                    <thead>
                                        <tr>
                                            <th scope="col"> id</th>

                                            <th scope="col">text 1</th>
                                            <th scope="col">text 2</th>

                                            <th scope="col">opcje</th>

                                        </tr>
                                    </thead>

                                    @foreach ( $section_two_all as $item )
                                    <tbody>


                                        <tr>

                                            <td> {{ $item->id }}  </td>
                                            <td> {{ $item->text_1   }} </td>
                                            <td> {{ $item->text_2   }} </td>


                                            <td>
                                                <a href=" {{ route('section_one_serwis_text_edit', $item->id)  }}  " type="button"  class="btn btn-outline-success btn-sm">Edycja</a>
                                                <a href="  {{ route('section_one_serwis_text_delete', $item->id)  }}   " type="button" class="btn btn-outline-danger btn-sm">Usuń</a>
                                            </td>
                                        </tr>

                                    </tbody>

                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        </div>
    </div>
</div>







@endsection
