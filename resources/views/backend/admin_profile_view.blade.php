@extends('backend.admin')



@section('srodek')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">


            <div class="row">
                <div class="col-lg-6">
                    <div class="card"><br><br>

                            <img class=" avatar-xl m-3" src="{{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image): url('upload/01.jpg') }}"
                                alt="Card image cap">


                        <div class="card-body">
                            <h4 class="card-title">Name : {{ $adminData->name }} </h4>
                            <hr>
                            <h4 class="card-title">User Email : {{ $adminData->email }} </h4>
                            <hr>
                            <h4 class="card-title">User Name : {{ $adminData->username }} </h4>
                            <hr>
                            <a href=" {{ route('edit_profile') }}    " class="btn btn-info btn-rounded waves-effect waves-light"> Edit Profile</a>

                        </div>


                    </div>
                </div>


            </div>


        </div>
    </div>
</div>
@endsection
