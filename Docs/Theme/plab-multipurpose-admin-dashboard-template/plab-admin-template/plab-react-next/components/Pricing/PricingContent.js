import React, { Component } from 'react';

class PricingContent extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-4 col-md-6">
                    <div className="pricing-table mb-30">
                        <div className="relative">
                            <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                    <path fill="#7266ba" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061 c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243 s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48 L0.732,193.75z"></path>
                                </g>
                            </svg>
                            <h2 className="price">$100 <span>Par month</span></h2>
                        </div>

                        <div className="pricing-content">
                            <h3 className="title purple-text">Standard</h3>
                            <ul>
                                <li><b>50GB</b> Disk Space</li>
                                <li><b>50</b> Email Accounts</li>
                                <li><b>50GB</b> Bandwidth</li>
                                <li><b>10</b> Subdomains</li>
                                <li><b>15</b> Domains</li>
                            </ul>
                            <a className="signup purple-bg" href="#">Signup Now</a>
                        </div>
                    </div>
                </div>

                <div className="col-lg-4 col-md-6">
                    <div className="pricing-table mb-4">
                        <div className="relative">
                            <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                    <path fill="#2962ff" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061 c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243 s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48 L0.732,193.75z"></path>
                                </g>
                            </svg>
                            <h2 className="price">$120 <span>Par month</span></h2>
                        </div>

                        <div className="pricing-content">
                            <h3 className="title primary-text">BUSINESS</h3>
                            <ul>
                                <li><b>60GB</b> Disk Space</li>
                                <li><b>60</b> Email Accounts</li>
                                <li><b>60GB</b> Bandwidth</li>
                                <li><b>20</b> Subdomains</li>
                                <li><b>25</b> Domains</li>
                            </ul>
                            <a className="signup primary-bg" href="#">Signup Now</a>
                        </div>
                    </div>
                </div>

                <div className="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div className="pricing-table mb-4">
                        <div className="relative">
                            <svg x="0" y="0" viewBox="0 0 360 220">
                                <g>
                                    <path fill="#f75d81" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061 c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243 s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48 L0.732,193.75z"></path>
                                </g>
                            </svg>
                            <h2 className="price">$150<span>Par month</span></h2>
                        </div>

                        <div className="pricing-content">
                            <h3 className="title danger-text">PREMIUM</h3>
                            <ul>
                                <li><b>70GB</b> Disk Space</li>
                                <li><b>70</b> Email Accounts</li>
                                <li><b>70GB</b> Bandwidth</li>
                                <li><b>30</b> Subdomains</li>
                                <li><b>35</b> Domains</li>
                            </ul>
                            <a className="signup danger-bg" href="#">Signup Now</a>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default PricingContent;