@extends('layout.mainlayout')

@section('content-wrapper')
<!-- Main Content Header -->
<div class="main-content-header">
    <h1>Users Card</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">
            <span class="active">Users Card</span>
        </li>
    </ol>
</div>
<!-- End Main Content Header -->

<!-- Circle Image Style -->
<h5 class="mb-3 fs-18 sm-center">Circle Image Style</h5>
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/1.png') }}" alt="User Image" class="rounded-circle">
                <h4 class="mb-0 mt-4">Frank Martin</h4>
                <p>Managing Director</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span>984</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span>685</span>
                </li>
                <li>
                    Followers
                    <span>434</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/2.png') }}" alt="User Image" class="rounded-circle">
                <h4 class="mb-0 mt-4">Christopher Di</h4>
                <p>Web Developer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span>954</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span>655</span>
                </li>
                <li>
                    Followers
                    <span>454</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/3.png') }}" alt="User Image" class="rounded-circle">
                <h4 class="mb-0 mt-4">Nancy Doe</h4>
                <p>Designer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span>974</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span>675</span>
                </li>
                <li>
                    Followers
                    <span>474</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Circle Image Style -->

<!-- Octagon Image Style -->
<h5 class="mb-3 fs-18 sm-center">Octagon Image Style</h5>
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/4.png') }}" alt="User Image" class="octagon-style">
                <h4 class="mb-0 mt-4">Frank Martin</h4>
                <p>Managing Director</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">984</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">685K</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">434K</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/5.png') }}" alt="User Image" class="octagon-style">
                <h4 class="mb-0 mt-4">Christopher Di</h4>
                <p>Web Developer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">954</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">655K</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">454K</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/6.png') }}" alt="User Image" class="octagon-style">
                <h4 class="mb-0 mt-4">Nancy Doe</h4>
                <p>Designer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">974</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">675K</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">474K</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Octagon Image Style -->

<!-- Nonagon Image Style -->
<h5 class="mb-3 fs-18 sm-center">Nonagon Image Style</h5>
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/1.png') }}" alt="User Image" class="nonagon-style">
                <h4 class="mb-0 mt-4">Frank Martin</h4>
                <p>Managing Director</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">984</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">685</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">434</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/2.png') }}" alt="User Image" class="nonagon-style">
                <h4 class="mb-0 mt-4">Christopher Di</h4>
                <p>Web Developer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">954</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">655</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">454</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/3.png') }}" alt="User Image" class="nonagon-style">
                <h4 class="mb-0 mt-4">Nancy Doe</h4>
                <p>Designer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">974</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">675</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">474</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Nonagon Image Style -->

<!-- Bevel Image Style -->
<h5 class="mb-3 fs-18 sm-center">Bevel Image Style</h5>
<div class="row">
    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/4.png') }}" alt="User Image" class="bevel-style">
                <h4 class="mb-0 mt-4">Frank Martin</h4>
                <p>Managing Director</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">84M</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">65M</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">43M</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/5.png') }}" alt="User Image" class="bevel-style">
                <h4 class="mb-0 mt-4">Christopher Di</h4>
                <p>Web Developer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">95M</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">55M</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">44M</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
        <div class="single-user-card hover-card mb-30">
            <div class="p-30">
                <img src="{{ asset('assets/images/user/big/6.png') }}" alt="User Image" class="bevel-style">
                <h4 class="mb-0 mt-4">Nancy Doe</h4>
                <p>Designer</p>
                <div class="social-links">
                    <a href="#">
                        <i data-feather="linkedin" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="twitter" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="facebook" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="instagram" class="icon"></i>
                    </a>
                    <a href="#">
                        <i data-feather="github" class="icon"></i>
                    </a>
                </div>
            </div>
            <ul class="user-card-foot">
                <li>
                    Total Post
                    <span class="purple-text">97M</span>
                </li>
                <li class="bor-lr">
                    Following
                    <span class="primary-text">67M</span>
                </li>
                <li>
                    Followers
                    <span class="success-text">44M</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Bevel Image Style -->
@endsection
