import React, { Component } from 'react';
import { ProgressBar } from 'react-bootstrap';

class DailyStatsCard extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-4">
                    <div className="card mb-30">
                        <div className="card-body">
                            <div className="d-flex justify-content-between">
                                <div className="d-flex align-items-center">
                                    <span>Today Sales</span>
                                </div>
                                <span className="fw-600">55.5k</span>
                            </div>
 
                            <div className="pgh-4 mt-2">
                                <ProgressBar variant="progress-bar bg-primary" now={70} />
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-4">
                    <div className="card mb-30">
                        <div className="card-body">
                            <div className="d-flex justify-content-between">
                                <div className="d-flex align-items-center">
                                    <span>Today Orders</span>
                                </div>
                                <span className="fw-600">50.2k</span>
                            </div>

                            <div className="pgh-4 mt-2">
                                <ProgressBar variant="progress-bar bg-success" now={50} />
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-4">
                    <div className="card mb-30">
                        <div className="card-body">
                            <div className="d-flex justify-content-between">
                                <div className="d-flex align-items-center">
                                    <span>Today new Customers</span>
                                </div>
                                <span className="fw-600">45.5k</span>
                            </div>

                            <div className="pgh-4 mt-2">
                                <ProgressBar variant="progress-bar bg-danger" now={45} />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default DailyStatsCard;