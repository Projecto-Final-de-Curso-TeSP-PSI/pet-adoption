import React, { Component } from 'react';
import Link from 'next/link';
import * as Icon from 'react-feather';

class MarketingCampaigns extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Marketing Campaigns</h5>
                    </div>

                    <div className="table-responsive">
                        <table className="table table-hover text-vertical-middle mb-0">
                            <thead className="bort-none borpt-0">
                                <tr>
                                    <th>Campaigns Name</th>
                                    <th>Growth</th>
                                    <th>Charges</th>
                                    <th>Status</th>
                                    <th className="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <img src={require("../../images/product/product1.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Macbook Pro
                                    </td>
                                    <td>
                                        <span className="badge badge-cyan fs-12">
                                            <i className="icofont-swoosh-up"></i>
                                            <span className="fw-600">50.70%</span>
                                        </span>
                                    </td>
                                    <td>$50.99</td>
                                    <td>
                                        <span className="badge badge_success">Active</span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src={require("../../images/product/product2.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        iPhone 11 pro
                                    </td>
                                    <td>
                                        <span className="badge badge-cyan fs-12">
                                            <i className="icofont-swoosh-up"></i>
                                            <span className="fw-600">50.70%</span>
                                        </span>
                                    </td>
                                    <td>$299.99</td>
                                    <td>
                                        <span className="badge badge_danger">Closed</span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src={require("../../images/product/product3.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        HeadPhone
                                    </td>
                                    <td>
                                        <span className="badge badge-red fs-12">
                                            <i className="icofont-swoosh-down"></i>
                                            <span className="fw-600">30.70%</span>
                                        </span>
                                    </td>
                                    <td>$120.99</td>
                                    <td>
                                        <span className="badge badge_success">Active</span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src={require("../../images/product/product4.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Adidas shoes
                                    </td>
                                    <td>
                                        <span className="badge badge-cyan fs-12">
                                            <i className="icofont-swoosh-up"></i>
                                            <span className="fw-600">50.70%</span>
                                        </span>
                                    </td>
                                    <td>$250.99</td>
                                    <td>
                                        <span className="badge badge_success">Active</span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src={require("../../images/product/product5.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Adidas shirts
                                    </td>
                                    <td>
                                        <span className="badge badge-cyan fs-12">
                                            <i className="icofont-swoosh-up"></i>
                                            <span className="fw-600">50.70%</span>
                                        </span>
                                    </td>
                                    <td>$350.99</td>
                                    <td>
                                        <span className="badge badge_danger">Closed</span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <img src={require("../../images/product/product6.jpg")} alt="Image" className="wh-30 mr-2 rounded" />
                                        Nike shirts
                                    </td>
                                    <td>
                                        <span className="badge badge-red fs-12">
                                            <i className="icofont-swoosh-down"></i>
                                            <span className="fw-600">40.70%</span>
                                        </span>
                                    </td>
                                    <td>$140.99</td>
                                    <td>
                                        <span className="badge badge_success">Active</span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" />
                                            </a>
                                        </Link>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default MarketingCampaigns;