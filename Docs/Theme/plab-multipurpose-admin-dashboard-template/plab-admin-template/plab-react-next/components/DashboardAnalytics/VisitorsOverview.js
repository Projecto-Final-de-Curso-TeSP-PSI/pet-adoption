import React, { Component } from 'react';
import * as Icon from 'react-feather';

class VisitorsOverview extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-blue">
                                <Icon.Eye 
                                    className="icon"
                                /> 
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Visits</p>
                                <h4 className="mb-0 fs-20">530,890</h4>
                            </div>
                            <span className="badge badge-cyan fs-12 position-right">
                                <i className="icofont-swoosh-up"></i>
                                <span className="fw-600 m-l-5">8.70%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-cyan">
                                <Icon.Users 
                                    className="icon"
                                /> 
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">User</p>
                                <h4 className="mb-0 fs-20">25,890</h4>
                            </div>
                            <span className="badge badge-cyan fs-12 position-right">
                                <i className="icofont-swoosh-up"></i>
                                <span className="fw-600 m-l-5">7.60%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-purple">
                                <Icon.Activity 
                                    className="icon"
                                /> 
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Sessions</p>
                                <h4 className="mb-0 fs-20">50,890</h4>
                            </div>
                            <span className="badge badge-cyan fs-12 position-right">
                                <i className="icofont-swoosh-up"></i>
                                <span className="fw-600 m-l-5">6.75%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-blue">
                                <Icon.BarChart2 
                                    className="icon"
                                /> 
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Search Traffic</p>
                                <h4 className="mb-0 fs-20">42.7%</h4>
                            </div>
                            <span className="badge badge-red fs-12 position-right">
                                <i className="icofont-swoosh-down"></i>
                                <span className="fw-600 m-l-5">4.70%</span>
                            </span>
                        </div>
                    </div>

                    <div className="stats-card-two analytics-card">
                        <div className="media align-items-center">
                            <div className="avatar avatar-gold">
                                <Icon.Box 
                                    className="icon"
                                /> 
                            </div>
                            <div className="ml-15">
                                <p className="mb-7 line-height-1">Bounce Rate</p>
                                <h4 className="mb-0 fs-20">52.7%</h4>
                            </div>
                            <span className="badge badge-red fs-12 position-right">
                                <i className="icofont-swoosh-down"></i>
                                <span className="fw-600 m-l-5">5.70%</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default VisitorsOverview;