import React, { Component } from 'react';
import Link from 'next/link';

class NewCustomers extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">
                            New Customers
                        </h5>
                    </div>
                    
                    <div className="new-customer">
                        <Link href="#">
                            <a className="profile mr-3">
                                <img src={require("../../images/user/1.jpg")} alt="User" className="rounded-circle" />
                                <span className="status online right-3 bottom"></span>
                            </a>
                        </Link>
                        <h5 className="fs-13 m-0">
                            <Link href="#">
                                <a className="global-color">
                                    Amber Gibs
                                </a>
                            </Link>
                        </h5>
                        <span className="gray-color fs-11">2 Minutes ago</span>
                        <span className="price">$2,000</span>
                    </div>

                    <div className="new-customer">
                        <Link href="#">
                            <a className="profile mr-3">
                                <img src={require("../../images/user/2.jpg")} alt="User" className="rounded-circle" />
                                <span className="status online right-3 bottom"></span>
                            </a>
                        </Link>
                        <h5 className="fs-13 m-0">
                            <Link href="#">
                                <a className="global-color">Carl Roland</a>
                            </Link>
                        </h5>
                        <span className="gray-color fs-11">3 Minutes ago</span>
                        <span className="price">$3,000</span>
                    </div>

                    <div className="new-customer">
                        <Link href="#">
                            <a className="profile mr-3">
                                <img src={require("../../images/user/3.jpg")} alt="User" className="rounded-circle" />
                                <span className="status online right-3 bottom"></span>
                            </a>
                        </Link>
                        <h5 className="fs-13 m-0">
                            <Link href="#">
                                <a className="global-color">Paul Wilson</a>
                            </Link>
                        </h5>
                        <span className="gray-color fs-11">4 Minutes ago</span>
                        <span className="price">$4,000</span>
                    </div>

                    <div className="new-customer">
                        <Link href="#">
                            <a className="profile mr-3">
                                <img src={require("../../images/user/4.jpg")} alt="User" className="rounded-circle" />
                                <span className="status online right-3 bottom"></span>
                            </a>
                        </Link>
                        <h5 className="fs-13 m-0">
                            <Link href="#">
                                <a className="global-color">Alice Jenkins</a>
                            </Link>
                        </h5>
                        <span className="gray-color fs-11">5 Minutes ago</span>
                        <span className="price">$5,000</span>
                    </div>

                    <div className="new-customer">
                        <Link href="#">
                            <a className="profile mr-3">
                                <img src={require("../../images/user/5.jpg")} alt="User" className="rounded-circle" />
                                <span className="status away right-3 bottom"></span>
                            </a>
                        </Link>
                        <h5 className="fs-13 m-0">
                            <Link href="#">
                                <a className="global-color">Lauren Cox</a>
                            </Link>
                        </h5>
                        <span className="gray-color fs-11">5 Minutes ago</span>
                        <span className="price">$6,000</span>
                    </div>

                    <div className="new-customer">
                        <Link href="#">
                            <a className="profile mr-3">
                                <img src={require("../../images/user/6.jpg")} alt="User" className="rounded-circle" />
                                <span className="status ofline right-3 bottom"></span>
                            </a>
                        </Link>
                        <h5 className="fs-13 m-0">
                            <Link href="#">
                                <a className="global-color">Jessie Barnett</a>
                            </Link>
                        </h5>
                        <span className="gray-color fs-11">5 Minutes ago</span>
                        <span className="price">$10,000</span>
                    </div>
                </div>
            </div>
        );
    }
}

export default NewCustomers;