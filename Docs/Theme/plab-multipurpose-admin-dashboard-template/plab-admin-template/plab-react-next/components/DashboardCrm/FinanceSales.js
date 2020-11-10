import React, { Component } from 'react';
import * as Icon from 'react-feather';

class FinanceSales extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Finance & Sales</h5>
                    </div>

                    <div className="stats-card-two analytics-card pt-2">
                        <div className="media align-items-center">
                            <div className="avatar avatar-blue">
                                <Icon.Briefcase className="icon" />
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Revenue</p>
                                <h4 className="mb-0 fs-20">$25,890</h4>
                            </div>
                            <span className="badge badge-cyan fs-12 position-right">
                                <i className="icofont-swoosh-up"></i>
                                <span className="fw-600 ml-1">8.70%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-cyan">
                                <Icon.Database className="icon" />
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Order</p>
                                <h4 className="mb-0 fs-20">3,569</h4>
                            </div>
                            <span className="badge badge-cyan fs-12 position-right">
                                <i className="icofont-swoosh-up"></i>
                                <span className="fw-600 ml-1">7.60%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-purple">
                                <Icon.FileText className="icon" />
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Total Leads</p>
                                <h4 className="mb-0 fs-20">4,890</h4>
                            </div>
                            <span className="badge badge-cyan fs-12 position-right">
                                <i className="icofont-swoosh-up"></i>
                                <span className="fw-600 ml-1">6.75%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-blue">
                                <Icon.Users className="icon" />
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Total Vendors</p>
                                <h4 className="mb-0 fs-20">42.7%</h4>
                            </div>
                            <span className="badge badge-red fs-12 position-right">
                                <i className="icofont-swoosh-down"></i>
                                <span className="fw-600 ml-1">4.70%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-gold">
                                <Icon.DollarSign className="icon" />
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Total Expense</p>
                                <h4 className="mb-0 fs-20">$5,678</h4>
                            </div>
                            <span className="badge badge-red fs-12 position-right">
                                <i className="icofont-swoosh-down"></i>
                                <span className="fw-600 ml-1">5.70%</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default FinanceSales;