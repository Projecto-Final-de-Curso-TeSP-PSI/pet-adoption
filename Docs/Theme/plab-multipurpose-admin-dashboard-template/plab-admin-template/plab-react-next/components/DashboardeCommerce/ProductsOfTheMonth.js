import React, { Component } from 'react';
import Link from 'next/link';

class ProductsOfTheMonth extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Products of the Month</h5>
                    </div>
                    
                    <div className="table-responsive">
                        <table className="table table-hover text-vertical-middle mb-0">
                            <thead className="bort-none borpt-0">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Invoice</th>
                                    <th scope="col">Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>#6791</strong></td>
                                    <td>
                                        <img src={require("../../images/product/product1.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Macbook Pro
                                    </td>
                                    <td>Colin Firth</td>
                                    <td><span className="badge badge_success">Active</span></td>
                                    <td>40</td>
                                    <td>$289.50</td>
                                </tr>
                                <tr>
                                    <td><strong>#6792</strong></td>
                                    <td>
                                        <img src={require("../../images/product/product2.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                        iPhone 11 pro
                                    </td>
                                    <td>Michael Sheen</td>
                                    <td><span className="badge badge_success">Active</span></td>
                                    <td>45</td>
                                    <td>$389.50</td>
                                </tr>
                                <tr>
                                    <td><strong>#6793</strong></td>
                                    <td>
                                        <img src={require("../../images/product/product3.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        HeadPhone
                                    </td>
                                    <td>Tom Hardy</td>
                                    <td><span className="badge badge_success">Active</span></td>
                                    <td>50</td>
                                    <td>$250.50</td>
                                </tr>
                                <tr>
                                    <td><strong>#6794</strong></td>
                                    <td>
                                        <img src={require("../../images/product/product4.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Adidas shoes
                                    </td>
                                    <td>Daniel Craig</td>
                                    <td><span className="badge badge_warning">Pending</span></td>
                                    <td>55</td>
                                    <td>$500.50</td>
                                </tr>
                                <tr>
                                    <td><strong>#6795</strong></td>
                                    <td>
                                        <img src={require("../../images/product/product5.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Adidas shirts
                                    </td>
                                    <td>Jude Law</td>
                                    <td><span className="badge badge_success">Active</span></td>
                                    <td>60</td>
                                    <td>$279.50</td>
                                </tr>
                                <tr>
                                    <td><strong>#6796</strong></td>
                                    <td>
                                        <img src={require("../../images/product/product6.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Nike shirts
                                    </td>
                                    <td>Idris Elba</td>
                                    <td><span className="badge badge_danger">Declined</span></td>
                                    <td>65</td>
                                    <td>$259.50</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default ProductsOfTheMonth;