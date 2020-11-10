import React, { Component } from 'react';
import { ProgressBar } from 'react-bootstrap';

class StatsCard extends Component {
    render() {
        return (
            <React.Fragment>
                <div className="row">
                    <div className="col-lg-3 col-sm-6">
                        <div className="stats-card-one mb-30">
                            <div className="d-flex justify-content-between align-items-center">
                                <div>
                                    <p className="mb-10 line-height-1">Sales</p>
                                    <h3 className="mb-0 fs-25">$5000k</h3>
                                </div>
                                <span className="badge badge-cyan fs-12">
                                    <i className="icofont-swoosh-up mr-1"></i>
                                    <span className="fw-600 m-l-5">8.70%</span>
                                </span>
                            </div>

                            <div className="mt-15">
                                <div className="d-flex justify-content-between">
                                    <div className="d-flex align-items-center">
                                        <span>Monthly Goal</span>
                                    </div>
                                    <span className="fw-600">70%</span>
                                </div>

                                <div className="pgh-4 mt-1">
                                    <ProgressBar variant="progress-bar bg-primary" now={70} />
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div className="col-lg-3 col-sm-6">
                        <div className="stats-card-one mb-30">
                            <div className="d-flex justify-content-between align-items-center">
                                <div>
                                    <p className="mb-10 line-height-1">Revenue</p>
                                    <h3 className="mb-0 fs-25">$800k</h3>
                                </div>
                                <span className="badge badge-cyan font-size-12">
                                    <i className="icofont-swoosh-up mr-1"></i>
                                    <span className="fw-600 m-l-5">8.80%</span>
                                </span>
                            </div>

                            <div className="mt-15">
                                <div className="d-flex justify-content-between">
                                    <div className="d-flex align-items-center">
                                        <span>Monthly Goal</span>
                                    </div>
                                    <span className="fw-600">75%</span>
                                </div>

                                <div className="pgh-4 mt-1">
                                    <ProgressBar variant="progress-bar bg-success" now={75} />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-3 col-sm-6">
                        <div className="stats-card-one mb-30">
                            <div className="d-flex justify-content-between align-items-center">
                                <div>
                                    <p className="mb-10 line-height-1">Product Sold</p>
                                    <h3 className="mb-0 fs-25">2000k</h3>
                                </div>
                                <span className="badge badge-red font-size-12">
                                    <i className="icofont-swoosh-down mr-1"></i>
                                    <span className="fw-600 m-l-5">6.10%</span>
                                </span>
                            </div>

                            <div className="mt-15">
                                <div className="d-flex justify-content-between">
                                    <div className="d-flex align-items-center">
                                        <span>Monthly Goal</span>
                                    </div>
                                    <span className="fw-600">60%</span>
                                </div>

                                <div className="pgh-4 mt-1">
                                    <ProgressBar variant="progress-bar bg-warning" now={60} />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-3 col-sm-6">
                        <div className="stats-card-one mb-30">
                            <div className="d-flex justify-content-between align-items-center">
                                <div>
                                    <p className="mb-10 line-height-1">New Customers</p>
                                    <h3 className="mb-0 fs-25">950</h3>
                                </div>
                                <span className="badge badge-red font-size-12">
                                    <i className="icofont-swoosh-down mr-1"></i>
                                    <span className="fw-600 m-l-5">5.70%</span>
                                </span>
                            </div>

                            <div className="mt-15">
                                <div className="d-flex justify-content-between">
                                    <div className="d-flex align-items-center">
                                        <span>Monthly Goal</span>
                                    </div>
                                    <span className="fw-600">50%</span>
                                </div>

                                <div className="pgh-4 mt-1">
                                    <ProgressBar variant="progress-bar bg-purple" now={50} />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default StatsCard;