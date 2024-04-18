
@php
    $id = Auth::user()->id;
    $adminData = App\Models\User::find($id);
@endphp





<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm-dark.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-dark.png" alt="" height="20">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm-light.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-light.png" alt="" height="20">
                    </span>
                </a>
            </div>


        </div>

        <div class="d-flex">


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class=" header-profile-user" src=" {{ (!empty($adminData->profile_image))? url('upload/admin_images/'.$adminData->profile_image):url('upload/no_image.jpg') }}  "
                        alt="Header Avatar">
                    <span class="d-none d-sm-inline-block ml-1"></span>
                    <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href=" {{ route('admin_profile')  }}  "><i class="mdi mdi-face-profile font-size-16 align-middle mr-1"></i> Profile</a>
                    <a class="dropdown-item" href=" {{ route('change_password') }} "><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i>Change password</a>
                    <a class="dropdown-item" href=" {{ route('rozwal') }} "><i class="mdi mdi-logout font-size-16 align-middle mr-1"></i> Logout</a>
                </div>
            </div>

        </div>
    </div>
</header>
