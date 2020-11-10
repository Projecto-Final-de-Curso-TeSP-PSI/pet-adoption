import React, { Component } from 'react';
import Link from 'next/link';

class UpcomingMeeting extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Upcoming Meeting</h5>
                    </div>

                    <div className="d-flex mb-20">
                        <div className="text-center">
                            <div className="avatar avatar-blue wh-50 rounded">
                                <span className="line-height-1 pt-12">
                                    17 <br /> <span className="fs-11">May</span>
                                </span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-1 mt-1 fs-15">Project Meeting</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                    <div className="d-flex mb-20">
                        <div className="text-center">
                            <div className="avatar avatar-cyan wh-50 rounded">
                                <span className="line-height-1 pt-12">
                                    20 <br /> <span className="fs-11">May</span>
                                </span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-1 mt-1 fs-15">Designer Discussion</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                    <div className="d-flex mb-20">
                        <div className="text-center">
                            <div className="avatar avatar-gold wh-50 rounded">
                                <span className="line-height-1 pt-12">
                                    22 <br /> <span className="fs-11">May</span>
                                </span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-1 mt-1 fs-15">Development Discussion</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                    <div className="d-flex">
                        <div className="text-center">
                            <div className="avatar avatar-red wh-50 rounded">
                                <span className="line-height-1 pt-12">
                                    25 <br /> <span className="fs-11">May</span>
                                </span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-0 mt-2 fs-15">Development Plan Discussion</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default UpcomingMeeting;