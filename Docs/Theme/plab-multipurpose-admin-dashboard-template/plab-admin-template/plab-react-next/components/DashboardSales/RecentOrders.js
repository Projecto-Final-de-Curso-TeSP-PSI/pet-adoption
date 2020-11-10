import React, { Component } from 'react';
import Link from 'next/link';

class RecentOrders extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">Export</a>
                        </Link>
                        <h5 className="card-title">Recent Orders</h5>
                    </div>
                    
                    <div className="height-365">
                        <div className="table-responsive">
                            <table className="table table-hover mb-0">
                                <thead className="bort-none borpt-0">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>#6791</strong></td>
                                        <td>Macbook Pro</td>
                                        <td>Colin Firth</td>
                                        <td>$289.50</td>
                                        <td><span className="badge badge_warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6792</strong></td>
                                        <td>iPhone 11 pro</td>
                                        <td>Michael Sheen</td>
                                        <td>$389.50</td>
                                        <td><span className="badge badge_success">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6793</strong></td>
                                        <td>HeadPhone</td>
                                        <td>Tom Hardy</td>
                                        <td>$250.50</td>
                                        <td><span className="badge badge_danger">Declined</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6794</strong></td>
                                        <td>Adidas shoes</td>
                                        <td>Daniel Craig</td>
                                        <td>$500.50</td>
                                        <td><span className="badge badge_success">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6795</strong></td>
                                        <td>Adidas shirts</td>
                                        <td>Jude Law</td>
                                        <td>$279.50</td>
                                        <td><span className="badge badge_success">Declined</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6796</strong></td>
                                        <td>Nike shirts</td>
                                        <td>Idris Elba</td>
                                        <td>$259.50</td>
                                        <td><span className="badge badge_danger">Declined</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6797</strong></td>
                                        <td>Nike caps</td>
                                        <td>Henry Cavill</td>
                                        <td>$249.50</td>
                                        <td><span className="badge badge_success">Declined</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    </div>
                </div>
            </div>
        );
    }
}

export default RecentOrders;