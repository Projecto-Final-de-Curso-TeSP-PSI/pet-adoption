@extends('layout.mainlayout')

@section('content-wrapper')
    <!-- Main Content Header -->
    <div class="main-content-header">
        <h1>Search Page</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">
                <span class="active">Search Page</span>
            </li>
        </ol>
    </div>
    <!-- End Main Content Header -->

    <!-- Search Result -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-body p-30">
                    <div class="card-header">
                        <h5 class="card-title">
                            Search:
                            <span class="fs-14 theme-color pl-1 fw-400">Apple iPhone XR</span>
                        </h5>
                    </div>

                    <ul class="top-rated-products search-result">
                        <li class="single-product">
                            <a href="#">
                                <img src="{{ asset('assets/images/product/product1.jpg') }}" alt="Apple iPhone XR">
                            </a>
                            <a class="product-title" href="#">Apple iPhone XR</a>
                            <p>There are many variations of passages...</p>
                            <div class="price mr-2">$599</div>
                            <div class="rating">
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                            </div>
                            <a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
                                <span class="lni-angle-double-right"></span>
                            </a>
                        </li>

                        <li class="single-product">
                            <a href="#">
                                <img src="{{ asset('assets/images/product/product2.jpg') }}" alt="Apple iPhone XR Black">
                            </a>
                            <a class="product-title" href="#">Apple iPhone XR Black</a>
                            <p>There are many variations of passages...</p>
                            <div class="price mr-2">$599</div>
                            <div class="rating">
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                            </div>
                            <a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
                                <span class="lni-angle-double-right"></span>
                            </a>
                        </li>

                        <li class="single-product">
                            <a href="#">
                                <img src="{{ asset('assets/images/product/product3.jpg') }}" alt="HeadPhone">
                            </a>
                            <a class="product-title" href="#">HeadPhone</a>
                            <p>There are many variations of passages...</p>
                            <div class="price mr-2">
                                $499
                            </div>
                            <div class="rating">
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                            </div>
                            <a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
                                <span class="lni-angle-double-right"></span>
                            </a>
                        </li>

                        <li class="single-product">
                            <a href="#">
                                <img src="{{ asset('assets/images/product/product5.jpg') }}" alt="Shoes">
                            </a>
                            <a class="product-title" href="#">Shoes Run</a>
                            <p>There are many variations of passages...</p>
                            <div class="price mr-2">
                                <del>$499</del>
                                $399
                            </div>
                            <div class="rating">
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                            </div>
                            <a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
                                <span class="lni-angle-double-right"></span>
                            </a>
                        </li>

                        <li class="single-product">
                            <a href="#">
                                <img src="{{ asset('assets/images/product/product4.jpg') }}" alt="HeadPhone">
                            </a>
                            <a class="product-title" href="#">HeadPhone</a>
                            <p>There are many variations of passages...</p>
                            <div class="price mr-2">
                                <del>$399</del>
                                $299
                            </div>
                            <div class="rating">
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                            </div>
                            <a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
                                <span class="lni-angle-double-right"></span>
                            </a>
                        </li>

                        <li class="single-product">
                            <a href="#">
                                <img src="{{ asset('assets/images/product/product1.jpg') }}" alt="Apple iPhone XR 2">
                            </a>
                            <a class="product-title" href="#">Apple iPhone XR</a>
                            <p>There are many variations of passages...</p>
                            <div class="price mr-2">$599</div>
                            <div class="rating">
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                            </div>
                            <a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
                                <span class="lni-angle-double-right"></span>
                            </a>
                        </li>

                        <li class="single-product">
                            <a href="#">
                                <img src="{{ asset('assets/images/product/product5.jpg') }}" alt="Shoes">
                            </a>
                            <a class="product-title" href="#">Shoes XL</a>
                            <p>There are many variations of passages...</p>
                            <div class="price mr-2">
                                <del>$499</del>
                                $399
                            </div>
                            <div class="rating">
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                                <span class="lni lni-star-filled"></span>
                            </div>
                            <a class="view-link" href="#" data-toggle="tooltip" data-placement="top" title="View Details">
                                <span class="lni-angle-double-right"></span>
                            </a>
                        </li>
                    </ul>

                    <div class="text-center">
                        <ul class="d-inline-flex border-radius-fl-item mt-4 mb-0 pagination">
                            <li class="page-item">
                                <a class="page-link" role="button" href="#">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">First</span>
                                </a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" role="button" href="#">1</a>
                            </li>
                            <li class="page-item active">
                                <span class="page-link">2</span>
                            </span>
                            </li>
                            <li class="page-item">
                                <a class="page-link" role="button" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" role="button" href="#">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Last</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Result -->
@endsection
