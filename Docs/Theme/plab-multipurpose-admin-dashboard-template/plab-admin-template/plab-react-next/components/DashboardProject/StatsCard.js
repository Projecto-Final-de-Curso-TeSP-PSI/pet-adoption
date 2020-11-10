import React, { Component } from 'react';
import { ProgressBar } from 'react-bootstrap';
import * as Icon from 'react-feather';

class StatsCard extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">Projects</p>
                                <h3 className="mb-0 fs-25">8,467</h3>
                            </div>
                            <div className="avatar avatar-blue radius-0">
                                <Icon.Grid className="icon" /> 
                            </div>
                        </div>

                        <div className="mt-15">
                            <div className="d-flex justify-content-between">
                                <div className="d-flex align-items-center">
                                    <span>Monthly Goal</span>
                                </div>
                                <span className="fw-600">70%</span>
                            </div>

                            <div className="pgh-4 mt-2">
                                <ProgressBar variant="progress-bar bg-primary" now={70} />
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">Tasks</p>
                                <h3 className="mb-0 fs-25">15,435</h3>
                            </div>
                            <div className="avatar avatar-cyan radius-0">
                                <Icon.FileText className="icon" /> 
                            </div>
                        </div>

                        <div className="mt-15">
                            <div className="d-flex justify-content-between">
                                <div className="d-flex align-items-center">
                                    <span>Monthly Goal</span>
                                </div>
                                <span className="fw-600">60%</span>
                            </div>

                            <div className="pgh-4 mt-2">
                                <ProgressBar variant="progress-bar bg-success" now={60} />
                            </div>
                        </div>
                    </div>
                </div>
                 
                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">New Client</p>
                                <h3 className="mb-0 fs-25">10,000</h3>
                            </div>
                            <div className="avatar avatar-gold radius-0">
                                <Icon.User className="icon" /> 
                            </div>
                        </div>

                        <div className="mt-15">
                            <div className="d-flex justify-content-between">
                                <div className="d-flex align-items-center">
                                    <span>Monthly Goal</span>
                                </div>
                                <span className="fw-600">50%</span>
                            </div>

                            <div className="pgh-4 mt-2">
                                <ProgressBar variant="progress-bar bg-warning" now={50} />
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">Members</p>
                                <h3 className="mb-0 fs-25">5,523</h3>
                            </div>
                            <div className="avatar avatar-purple radius-0">
                                <Icon.Users className="icon" /> 
                            </div>
                        </div>

                        <div className="mt-15">
                            <div className="d-flex justify-content-between">
                                <div className="d-flex align-items-center">
                                    <span>Monthly Goal</span>
                                </div>
                                <span className="fw-600">45%</span>
                            </div>

                            <div className="pgh-4 mt-2">
                                <ProgressBar variant="progress-bar bg-purple" now={45} />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default StatsCard;