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
                                            <th scope="col">Producent</th>
                                            <th scope="col">Model</th>
                                            <th scope="col">Chłodzenie</th>
                                            <th scope="col">Grzanie</th>
                                            <th scope="col">m2</th>
                                            <th scope="col">Cena</th>

                                        </tr>
                                    </thead>

                                    @foreach ( $section_two_all as $item )
                                    <tbody>


                                        <tr>

                                            <td> {{ $item->id }}  </td>
                                            <td> {{ $item->producent   }} </td>
                                            <td> {{ $item->model   }} </td>
                                            <td> {{ $item->chlodzenie   }} </td>
                                            <td> {{ $item->grzanie   }} </td>
                                            <td> {{ $item->m2   }} </td>
                                            <td> {{ $item->cena   }} </td>


                                            <td>
                                                <a href=" {{ route('scienno_sufitowe_text_edit', $item->id)  }}  " type="button"  class="btn btn-outline-success btn-sm">Edycja</a>
                                                <a href="  {{ route('scienno_sufitowe_text_delete', $item->id)  }}   " type="button" class="btn btn-outline-danger btn-sm">Usuń</a>
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
