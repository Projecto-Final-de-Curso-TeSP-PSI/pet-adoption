import React, { Component } from 'react';
import Link from 'next/link';

class ProductCategories extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Product Categories</h5>
                    </div>

                    <div className="d-flex flex-row product-cat-content height-365">
                        <div className="w-50">
                            <ul className="product-categories">
                                <li><Link href="#"><a>Arts &amp; Crafts</a></Link></li>
                                <li><Link href="#"><a>Automotive</a></Link></li>
                                <li><Link href="#"><a>Baby</a></Link></li>
                                <li><Link href="#"><a>Beauty &amp; Personal Care</a></Link></li>
                                <li><Link href="#"><a>Books</a></Link></li>
                                <li><Link href="#"><a>Computers</a></Link></li>
                                <li><Link href="#"><a>Digital Music</a></Link></li>
                                <li><Link href="#"><a>Electronics</a></Link></li>
                                <li><Link href="#"><a>Kindle Store</a></Link></li>
                                <li><Link href="#"><a>Prime Video</a></Link></li>
                                <li><Link href="#"><a>Women's Fashion</a></Link></li>
                                <li><Link href="#"><a>Men's Fashion</a></Link></li>
                                <li><Link href="#"><a>Girls' Fashion</a></Link></li>
                                <li><Link href="#"><a>Deals</a></Link></li>
                                <li><Link href="#"><a>Health &amp; Household</a></Link></li>
                                <li><Link href="#"><a>Home &amp; Kitchen</a></Link></li>
                                <li><Link href="#"><a>Industrial &amp; Scientific</a></Link></li>
                                <li><Link href="#"><a>Boys' Fashion</a></Link></li>
                                <li><Link href="#"><a>Luggage</a></Link></li>
                                <li><Link href="#"><a>Movies &amp; TV</a></Link></li>
                                <li><Link href="#"><a>Music, CDs &amp; Vinyl</a></Link></li>
                                <li><Link href="#"><a>Pet Supplies</a></Link></li>
                                <li><Link href="#"><a>Software</a></Link></li>
                                <li><Link href="#"><a>Sports &amp; Outdoors</a></Link></li>
                                <li><Link href="#"><a>Tools &amp; Home Improvements</a></Link></li>
                                <li><Link href="#"><a>Toys &amp; Games</a></Link></li>
                                <li><Link href="#"><a>Video Games</a></Link></li>
                            </ul>
                        </div>
                        <div className="w-50">
                            <ul className="product-categories">
                                <li><Link href="#"><a>Arts &amp; Crafts</a></Link></li>
                                <li><Link href="#"><a>Automotive</a></Link></li>
                                <li><Link href="#"><a>Baby</a></Link></li>
                                <li><Link href="#"><a>Beauty &amp; Personal Care</a></Link></li>
                                <li><Link href="#"><a>Books</a></Link></li>
                                <li><Link href="#"><a>Computers</a></Link></li>
                                <li><Link href="#"><a>Digital Music</a></Link></li>
                                <li><Link href="#"><a>Electronics</a></Link></li>
                                <li><Link href="#"><a>Kindle Store</a></Link></li>
                                <li><Link href="#"><a>Prime Video</a></Link></li>
                                <li><Link href="#"><a>Women's Fashion</a></Link></li>
                                <li><Link href="#"><a>Men's Fashion</a></Link></li>
                                <li><Link href="#"><a>Girls' Fashion</a></Link></li>
                                <li><Link href="#"><a>Deals</a></Link></li>
                                <li><Link href="#"><a>Health &amp; Household</a></Link></li>
                                <li><Link href="#"><a>Home &amp; Kitchen</a></Link></li>
                                <li><Link href="#"><a>Industrial &amp; Scientific</a></Link></li>
                                <li><Link href="#"><a>Boys' Fashion</a></Link></li>
                                <li><Link href="#"><a>Luggage</a></Link></li>
                                <li><Link href="#"><a>Movies &amp; TV</a></Link></li>
                                <li><Link href="#"><a>Music, CDs &amp; Vinyl</a></Link></li>
                                <li><Link href="#"><a>Pet Supplies</a></Link></li>
                                <li><Link href="#"><a>Software</a></Link></li>
                                <li><Link href="#"><a>Sports &amp; Outdoors</a></Link></li>
                                <li><Link href="#"><a>Tools &amp; Home Improvements</a></Link></li>
                                <li><Link href="#"><a>Toys &amp; Games</a></Link></li>
                                <li><Link href="#"><a>Video Games</a></Link></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ProductCategories;