import React, { Component } from 'react';
import Link from 'next/link';

class TopRatedProducts extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Top Rated Products</h5>
                    </div>
                        
                    <ul className="top-rated-products height-408">
                        <li className="single-product">
                            <Link href="#">
                                <a>
                                    <img src={require("../../images/product/product1.jpg")} alt="Image" />
                                </a>
                            </Link>

                            <Link href="#">
                                <a className="product-title">Macbook Pro</a>
                            </Link>

                            <p>There are many variations of passages...</p>
                            <div className="price mr-2">$1999</div>
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
                                    <img src={require("../../images/product/product2.jpg")} alt="Image" />
                                </a>
                            </Link>

                            <Link href="#">
                                <a className="product-title">iPhone 11 pro</a>
                            </Link>

                            <p>There are many variations of passages...</p>
                            <div className="price mr-2">$999</div>
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
                                    <img src={require("../../images/product/product3.jpg")} alt="Image" />
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
                                    <img src={require("../../images/product/product4.jpg")} alt="Image" />
                                </a>
                            </Link>

                            <Link href="#">
                                <a className="product-title">Superstar shoes</a>
                            </Link>

                            <p>There are many variations of passages...</p>
                            <div className="price mr-2">
                                <del>$90</del>
                                $80
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
                                    <img src={require("../../images/product/product5.jpg")} alt="Image" />
                                </a>
                            </Link>

                            <Link href="#">
                                <a className="product-title">Badge of sport tee</a>
                            </Link>

                            <p>There are many variations of passages...</p>
                            <div className="price mr-2">
                                $99
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
                                    <img src={require("../../images/product/product6.jpg")} alt="Image" />
                                </a>
                            </Link>
                            
                            <Link href="#">
                                <a className="product-title">Nike shirts</a>
                            </Link>

                            <p>There are many variations of passages...</p>
                            <div className="price mr-2">$99</div>
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
                                    <img src={require("../../images/product/product7.jpg")} alt="Image" />
                                </a>
                            </Link>

                            <Link href="#">
                                <a className="product-title">Nike caps</a>
                            </Link>

                            <p>There are many variations of passages...</p>
                            <div className="price mr-2">
                                $50
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
                </div>
            </div>
        );
    }
}

export default TopRatedProducts;