import React, { Component } from 'react';
import * as Icon from 'react-feather';

class StatsCard extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">Sales</p>
                                <h3 className="mb-0 fs-25">$25,890</h3>
                            </div>
                            <div className="avatar avatar-blue">
                                <Icon.DollarSign 
                                    className="icon"
                                /> 
                            </div>
                        </div>
                    </div>
                </div>
                
                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">Net Profit</p>
                                <h3 className="mb-0 fs-25">$20,467</h3>
                            </div>
                            <div className="avatar avatar-cyan">
                                <Icon.Briefcase 
                                    className="icon"
                                /> 
                            </div>
                        </div>
                    </div>
                </div>
                
                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">New Products</p>
                                <h3 className="mb-0 fs-25">10,000</h3>
                            </div>
                            <div className="avatar avatar-gold">
                                <Icon.ShoppingBag 
                                    className="icon"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-3 col-sm-6">
                    <div className="stats-card-two mb-30">
                        <div className="media align-items-center justify-content-between">
                            <div className="ml-0">
                                <p className="mb-10 line-height-1">New Users</p>
                                <h3 className="mb-0 fs-25">$23,523</h3>
                            </div>
                            <div className="avatar avatar-purple">
                                <Icon.Users 
                                    className="icon"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default StatsCard;