import React, { Component } from 'react';
import Link from 'next/link';

class SearchContent extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-12">
                    <div className="card mb-4">
                        <div className="card-body p-30">
                            <div className="card-header">
                                <h5 className="card-title"> 
                                    Search: 
                                    <span className="fs-14 theme-color pl-1 fw-400">Apple iPhone XR</span>
                                </h5>
                            </div>

                            <ul className="top-rated-products search-result">
                                <li className="single-product">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/product/product1.jpg")} alt="Apple iPhone XR" />
                                        </a>
                                    </Link>

                                    <Link href="#">
                                        <a className="product-title">Apple iPhone XR</a>
                                    </Link>

                                    <p>There are many variations of passages...</p>
                                    <div className="price mr-2">$599</div>
                                    
                                    <div className="rating">
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                    </div>

                                    <Link href="#">
                                        <a className="view-link" title="View Details">
                                            <span className="lni-angle-double-right"></span>
                                        </a>
                                    </Link>
                                </li>

                                <li className="single-product">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/product/product2.jpg")} alt="Apple iPhone XR Black" />
                                        </a>
                                    </Link>

                                    <Link href="#">
                                        <a className="product-title">Apple iPhone XR Black</a>
                                    </Link>

                                    <p>There are many variations of passages...</p>
                                    <div className="price mr-2">$599</div>

                                    <div className="rating">
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                    </div>
                                    
                                    <Link href="#">
                                        <a className="view-link" title="View Details">
                                            <span className="lni-angle-double-right"></span>
                                        </a>
                                    </Link>
                                </li>

                                <li className="single-product">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/product/product3.jpg")} alt="HeadPhone" />
                                        </a>
                                    </Link>

                                    <Link href="#">
                                        <a className="product-title">HeadPhone</a>
                                    </Link>

                                    <p>There are many variations of passages...</p>
                                    <div className="price mr-2">
                                        $499
                                    </div>

                                    <div className="rating">
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                    </div>
                                    
                                    <Link href="#">
                                        <a className="view-link" title="View Details">
                                            <span className="lni-angle-double-right"></span>
                                        </a>
                                    </Link>
                                </li>
    
                                <li className="single-product">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/product/product4.jpg")} alt="Shoes" />
                                        </a>
                                    </Link>

                                    <Link href="#">
                                        <a className="product-title">Shoes Run</a>
                                    </Link>

                                    <p>There are many variations of passages...</p>
                                    <div className="price mr-2">
                                        <del>$499</del>
                                        $399
                                    </div>

                                    <div className="rating">
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                    </div>
                                    
                                    <Link href="#">
                                        <a className="view-link" title="View Details">
                                            <span className="lni-angle-double-right"></span>
                                        </a>
                                    </Link>
                                </li>

                                <li className="single-product">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/product/product5.jpg")} alt="HeadPhone" />
                                        </a>
                                    </Link>

                                    <Link href="#">
                                        <a className="product-title">HeadPhone</a>
                                    </Link>

                                    <p>There are many variations of passages...</p>
                                    <div className="price mr-2">
                                        <del>$399</del>
                                        $299
                                    </div>

                                    <div className="rating">
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                    </div>
                                    
                                    <Link href="#">
                                        <a className="view-link" title="View Details">
                                            <span className="lni-angle-double-right"></span>
                                        </a>
                                    </Link>
                                </li>

                                <li className="single-product">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/product/product2.jpg")} alt="Apple iPhone XR 2" />
                                        </a>
                                    </Link>

                                    <Link href="#">
                                        <a className="product-title">Apple iPhone XR</a>
                                    </Link>

                                    <p>There are many variations of passages...</p>
                                    <div className="price mr-2">$599</div>

                                    <div className="rating">
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                    </div>
                                    
                                    <Link href="#">
                                        <a className="view-link" title="View Details">
                                            <span className="lni-angle-double-right"></span>
                                        </a>
                                    </Link>
                                </li>

                                <li className="single-product">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/product/product4.jpg")} alt="Shoes" />
                                        </a>
                                    </Link>

                                    <Link href="#">
                                        <a className="product-title">Shoes XL</a>
                                    </Link>

                                    <p>There are many variations of passages...</p>
                                    <div className="price mr-2">
                                        <del>$499</del>
                                        $399
                                    </div>

                                    <div className="rating">
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                        <span className="lni lni-star-filled"></span>
                                    </div>
                                    
                                    <Link href="#">
                                        <a className="view-link" title="View Details">
                                            <span className="lni-angle-double-right"></span>
                                        </a>
                                    </Link>
                                </li>
                            </ul>

                            {/* Pagination */}
                            <div className="text-center">
                                <ul className="d-inline-flex border-radius-fl-item mt-4 mb-0 pagination">
                                    <li className="page-item">
                                        <a className="page-link" role="button" href="#">
                                            <span aria-hidden="true">«</span>
                                            <span className="sr-only">First</span>
                                        </a>
                                    </li>
                                    <li className="page-item">
                                        <a className="page-link" role="button" href="#">1</a>
                                    </li>
                                    <li className="page-item active">
                                        <span className="page-link">2</span>
                                    </li>
                                    <li className="page-item">
                                        <a className="page-link" role="button" href="#">3</a>
                                    </li>
                                    <li className="page-item">
                                        <a className="page-link" role="button" href="#">
                                            <span aria-hidden="true">»</span>
                                            <span className="sr-only">Last</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default SearchContent;