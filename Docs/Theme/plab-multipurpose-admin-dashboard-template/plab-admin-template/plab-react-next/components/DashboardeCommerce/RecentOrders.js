import React, { Component } from 'react';
import Link from 'next/link';

class RecentOrders extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">
                            Recent Orders
                        </h5>
                    </div>
                    
                    <div className="table-responsive">
                        <table className="table table-hover text-vertical-middle mb-0">
                            <thead className="bort-none borpt-0">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Customer</th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><strong>#6791</strong></td>
                                    <td>
                                        <img src={require("../../images/user/1.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Colin Firth
                                    </td>
                                    <td>
                                        <img src={require("../../images/product/product1.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Macbook Pro
                                    </td>
                                    <td>1 Jun 2019</td>
                                    <td>$289.50</td>
                                    <td><span className="badge badge_warning">Pending</span></td>
                                </tr>
                                <tr>
                                    <td><strong>#6792</strong></td>
                                    <td>
                                        <img src={require("../../images/user/2.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Michael Sheen
                                    </td>
                                    <td>
                                        <img src={require("../../images/product/product2.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                        iPhone 11 pro
                                    </td>
                                    <td>2 Jun 2019</td>
                                    <td>$389.50</td>
                                    <td><span className="badge badge_success">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td><strong>#6793</strong></td>
                                    <td>
                                        <img src={require("../../images/user/3.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                        Tom Hardy
                                    </td>
                                    <td>
                                        <img src={require("../../images/product/product3.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        HeadPhone
                                    </td>
                                    <td>3 Jun 2019</td>
                                    <td>$250.50</td>
                                    <td><span className="badge badge_danger">Declined</span></td>
                                </tr>
                                <tr>
                                    <td><strong>#6794</strong></td>
                                    <td>
                                        <img src={require("../../images/user/4.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                        Daniel Craig
                                    </td>
                                    <td>
                                        <img src={require("../../images/product/product4.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Adidas shoes
                                    </td>
                                    <td>4 Jun 2019</td>
                                    <td>$500.50</td>
                                    <td><span className="badge badge_success">Delivered</span></td>
                                </tr>
                                <tr>
                                    <td><strong>#6795</strong></td>
                                    <td>
                                        <img src={require("../../images/user/5.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                        Jude Law
                                    </td>
                                    <td>
                                        <img src={require("../../images/product/product5.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Adidas shirts
                                    </td>
                                    <td>4 Jun 2019</td>
                                    <td>$279.50</td>
                                    <td><span className="badge badge_success">Declined</span></td>
                                </tr>
                                <tr>
                                    <td><strong>#6796</strong></td>
                                    <td>
                                        <img src={require("../../images/user/6.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                        Idris Elba
                                    </td>
                                    <td>
                                        <img src={require("../../images/product/product6.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Nike shirts
                                    </td>
                                    <td>5 Jun 2019</td>
                                    <td>$259.50</td>
                                    <td><span className="badge badge_danger">Declined</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default RecentOrders;