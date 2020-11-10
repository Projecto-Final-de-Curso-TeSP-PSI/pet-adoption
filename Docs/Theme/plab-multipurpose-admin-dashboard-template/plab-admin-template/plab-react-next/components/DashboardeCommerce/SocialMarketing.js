import React, { Component } from 'react';
import Link from 'next/link';
import * as Icon from 'react-feather';

class SocialMarketing extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Social Marketing </h5>
                    </div>

                    <div className="marketing-content">
                        <div className="list">
                            <Icon.Facebook 
                                className="icon fb"
                            /> 
                            <h3>
                                <Link href="#">
                                    <a>Facebook Ads</a>
                                </Link>
                            </h3>
                            <p>1.5k Like - 598 Shares</p>
                            <div className="stats">
                                <i data-feather="trending-up" className="icon text-success"></i>
                                50%
                            </div>
                        </div>

                        <div className="list">
                            <Icon.Instagram 
                                className="icon ins"
                            />
                            <h3>
                            <Link href="#">
                                <a>Instagram Ads</a>
                            </Link>
                            </h3>
                            <p>2.5k Follows - 598 Shares</p>
                            <div className="stats">
                                <i data-feather="trending-up" className="icon text-success"></i>
                                45%
                            </div>
                        </div>

                        <div className="list">
                            <Icon.Twitter 
                                className="icon twi"
                            />
                            <h3>
                            <Link href="#">
                                <a>Twitter Ads</a>
                            </Link>
                            </h3>
                            <p>1.1k Like - 598 Shares</p>
                            <div className="stats">
                                <i data-feather="trending-up" className="icon text-danger"></i>
                                25%
                            </div>
                        </div>

                        <div className="list">
                            <Icon.Linkedin 
                                className="icon lin"
                            />
                            <h3>
                            <Link href="#">
                                <a>Linkedin Ads</a>
                            </Link>
                            </h3>
                            <p>1.6k Like - 463 Shares</p>
                            <div className="stats">
                                <i data-feather="trending-up" className="icon text-success"></i> 
                                55%
                            </div>
                        </div>

                        <div className="list">
                            <Icon.Youtube 
                                className="icon ytb"
                            />
                            <h3>
                                <Link href="#">
                                    <a>Youtube Ads</a>
                                </Link>
                            </h3>
                            <p>1.5m Subscribe - 598 Shares</p>
                            <div className="stats">
                                <i data-feather="trending-up" className="icon text-success"></i>
                                75%
                            </div>
                        </div>

                        <div className="list">
                            <Icon.GitHub 
                                className="icon gh"
                            />
                            <h3>
                                <Link href="#">
                                    <a>Youtube Ads</a>
                                </Link>
                            </h3>
                            <p>1.5m Subscribe - 598 Shares</p>
                            <div className="stats">
                                <i data-feather="trending-up" className="icon text-success"></i>
                                75%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default SocialMarketing;