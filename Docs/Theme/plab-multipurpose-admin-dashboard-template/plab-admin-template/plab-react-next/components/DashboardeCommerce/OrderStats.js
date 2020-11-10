import React, { Component } from 'react';
import { ProgressBar } from 'react-bootstrap';

class OrderStats extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Order Stats</h5>
                    </div>
                    <p className="mb-0">Overview of orders. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>

                    <div className="order-stats-card mt-4">
                        <h3 className="mb-1">Success</h3>
                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <span>Monthly Goal</span>
                            </div>
                            <span className="fw-600">80%</span>
                        </div>

                        <div className="pgh-4 mt-1">
                            <ProgressBar variant="progress-bar bg-primary" now={80} />
                        </div>
                    </div>

                    <div className="order-stats-card mt-4">
                        <h3 className="mb-1">Pending</h3>
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

                    <div className="order-stats-card mt-4">
                        <h3 className="mb-1">Failed</h3>
                        <div className="d-flex justify-content-between">
                            <div className="d-flex align-items-center">
                                <span>Monthly Goal</span>
                            </div>
                            <span className="fw-600">30%</span>
                        </div>

                        <div className="pgh-4 mt-1">
                            <ProgressBar variant="progress-bar bg-danger" now={30} />
                        </div>
                    </div>

                    <div className="order-stats-card mt-4">
                        <h3 className="mb-1">New Order</h3>
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

                    <div className="row">
                        <div className="col-sm-4">
                            <div className="order-number-stats mt-4">
                                <span className="number text-primary fw-600">79885</span>
                                <p>Success</p>
                            </div>
                        </div>
                        <div className="col-sm-4">
                            <div className="order-number-stats mt-4">
                                <span className="number text-warning fw-600">356</span>
                                <p>Pending</p>
                            </div>
                        </div>
                        <div className="col-sm-4">
                            <div className="order-number-stats mt-4">
                                <span className="number text-danger fw-600">265</span>
                                <p>Failed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default OrderStats;