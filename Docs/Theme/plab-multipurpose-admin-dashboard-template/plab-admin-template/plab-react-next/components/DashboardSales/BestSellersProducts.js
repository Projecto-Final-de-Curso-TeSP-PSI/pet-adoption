import React, { Component } from 'react';

class BestSellersProducts extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Best Sellers Products</h5>
                    </div>

                    <div className="height-408">
                        <div className="table-responsive">
                            <table className="table m-0">
                                <thead className="bort-none borpt-0">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Sales</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>#6760</strong></td>
                                        <td>Macbook Pro</td>
                                        <td>50,000</td>
                                        <td>$1999</td>
                                        <td>Laptop</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6761</strong></td>
                                        <td>iPhone 11 pro</td>
                                        <td>45,000</td>
                                        <td>$999</td>
                                        <td>Phone</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6762</strong></td>
                                        <td>HeadPhone</td>
                                        <td>40,000</td>
                                        <td>$679</td>
                                        <td>Electonics</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6763</strong></td>
                                        <td>Superstar shoes</td>
                                        <td>35,000</td>
                                        <td>$90</td>
                                        <td>Shoes</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6764</strong></td>
                                        <td>Badge of sport tee</td>
                                        <td>30,000</td>
                                        <td>$100</td>
                                        <td>Books</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6765</strong></td>
                                        <td>Nike shirts</td>
                                        <td>25,000</td>
                                        <td>$99</td>
                                        <td>Shirts</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6766</strong></td>
                                        <td>Nike Heritage86</td>
                                        <td>20,000</td>
                                        <td>$50</td>
                                        <td>Caps</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6767</strong></td>
                                        <td>Pacer Next Trail Sneakers</td>
                                        <td>15,000</td>
                                        <td>$70</td>
                                        <td>Shoes</td>
                                    </tr>
                                    <tr>
                                        <td><strong>#6768</strong></td>
                                        <td>Luxe Men's Graphic Tee</td>
                                        <td>15,000</td>
                                        <td>$45</td>
                                        <td>Shirts</td>
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

export default BestSellersProducts;