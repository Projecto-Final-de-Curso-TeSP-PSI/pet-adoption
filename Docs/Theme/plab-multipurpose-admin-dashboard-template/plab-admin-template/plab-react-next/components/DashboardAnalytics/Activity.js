import React, { Component } from 'react';
import { ProgressBar } from 'react-bootstrap';
import * as Icon from 'react-feather';

class Activity extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Activity</h5>
                    </div>

                    <div className="analytics-activity-card">
                        <div className="avatar avatar-blue">
                            <Icon.Activity 
                                className="icon"
                            />
                        </div>

                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <span>Total Sales</span>
                            </div>
                            <span className="fw-600">$50,365</span>
                        </div>

                        <div className="pgh-4 mt-2">
                            <ProgressBar variant="progress-bar bg-primary" now={70} />
                        </div>
                    </div>

                    <div className="analytics-activity-card">
                        <div className="avatar avatar-cyan">
                            <Icon.DollarSign 
                                className="icon"
                            />
                        </div>

                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <span>Net Profit</span>
                            </div>
                            <span className="fw-600">$40,365</span>
                        </div>

                        <div className="pgh-4 mt-2">
                            <ProgressBar variant="progress-bar bg-success" now={70} />
                        </div>
                    </div>

                    <div className="analytics-activity-card">
                        <div className="avatar avatar-gold">
                            <Icon.Users 
                                className="icon"
                            />
                        </div>

                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <span>Total Visitors</span>
                            </div>
                            <span className="fw-600">$50,365</span>
                        </div>

                        <div className="pgh-4 mt-2">
                            <ProgressBar variant="progress-bar bg-warning" now={70} />
                        </div>
                    </div>

                    <div className="analytics-activity-card">
                        <div className="avatar avatar-purple">
                            <Icon.Eye 
                                className="icon"
                            />
                        </div>

                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <span>New Visitors</span>
                            </div>
                            <span className="fw-600">$15,365</span>
                        </div>

                        <div className="pgh-4 mt-2">
                            <ProgressBar variant="progress-bar bg-purple" now={70} />
                        </div>
                    </div>

                    <div className="analytics-activity-card">
                        <div className="avatar avatar-red">
                            <Icon.ShoppingBag 
                                className="icon"
                            />
                        </div>

                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <span>New Orders</span>
                            </div>
                            <span className="fw-600">$5,365</span>
                        </div>

                        <div className="pgh-4 mt-2">
                            <ProgressBar variant="progress-bar bg-danger" now={70} />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Activity;