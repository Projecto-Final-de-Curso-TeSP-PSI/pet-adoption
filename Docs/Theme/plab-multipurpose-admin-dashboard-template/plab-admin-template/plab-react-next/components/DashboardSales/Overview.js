import React, { Component } from 'react';
import * as Icon from 'react-feather';

class Overview extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Overview</h5>
                    </div>
                    
                    <div className="media pt-2 pb-3 border-bottom">
                        <div className="media-body">
                            <h4 className="mt-0 mb-1 font-size-22 font-weight-normal">150,000</h4>
                            <span className="text-muted">Total Visitors</span>
                        </div>

                        <Icon.Users 
                            className="icon align-self-center theme-color"
                        />
                    </div>

                    <div className="media py-3 border-bottom">
                        <div className="media-body">
                            <h4 className="mt-0 mb-1 font-size-22 font-weight-normal">$ 25,000</h4>
                            <span className="text-muted">Monthly Profit</span>
                        </div>
                        <Icon.DollarSign 
                            className="icon align-self-center theme-color"
                        />
                    </div>

                    <div className="media py-3 border-bottom">
                        <div className="media-body">
                            <h4 className="mt-0 mb-1 font-size-22 font-weight-normal">29,000</h4>
                            <span className="text-muted">Monthly Orders</span>
                        </div>
                        <Icon.CheckCircle 
                            className="icon align-self-center theme-color"
                        />
                    </div>

                    <div className="media pt-3">
                        <div className="media-body">
                            <h4 className="mt-0 mb-1 font-size-22 font-weight-normal">15,55</h4>
                            <span className="text-muted">New Visitors</span>
                        </div>
                        <Icon.BarChart 
                            className="icon align-self-center theme-color"
                        />
                    </div>
                </div>
            </div>
        );
    }
}

export default Overview;