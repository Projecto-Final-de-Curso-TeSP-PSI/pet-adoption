import React, { Component } from 'react';
import Link from 'next/link';

class Activity extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Activity</h5>
                    </div>

                    <div className="height-260">
                        <div className="timeline">
                            <div className="timeline-list">
                                <i className="icofont-check timeline-icon primary-color"></i>
                                <h6 className="mb-1 fs-15">Colin Firth</h6>
                                <p>Finished the project. Lorem ipsum dolor sit amet.</p>

                                <span className="fs-13 mt-2">
                                    <i className="icofont-wall-clock"></i>
                                    <span className="m-l-5">9:00 AM</span>
                                </span>
                            </div>

                            <div className="timeline-list">
                                <i className="icofont-check timeline-icon primary-color"></i>
                                <h6 className="mb-1 fs-15">Michael Sheen</h6>
                                <p>Great work!. Lorem ipsum dolor sit amet.</p>

                                <span className="fs-13 mt-2">
                                    <i className="icofont-wall-clock"></i>
                                    <span className="m-l-5">9:10 AM</span>
                                </span>
                            </div>
                            
                            <div className="timeline-list">
                                <i className="icofont-check timeline-icon primary-color"></i>
                                <h6 className="mb-1 fs-15">Tom Hardy</h6>
                                <p>Hello Jems, Lorem ipsum dolor sit amet.</p>

                                <span className="fs-13 mt-2">
                                    <i className="icofont-wall-clock"></i>
                                    <span className="m-l-5">9:30 AM</span>
                                </span>
                            </div>

                            <div className="timeline-list">
                                <i className="icofont-check timeline-icon primary-color"></i>
                                <h6 className="mb-1 fs-15">Daniel Craig</h6>
                                <p>Finished the project, Lorem ipsum dolor sit amet.</p>

                                <span className="fs-13 mt-2">
                                    <i className="icofont-wall-clock"></i>
                                    <span className="m-l-5">10:30 AM</span>
                                </span>
                            </div>

                            <div className="timeline-list">
                                <i className="icofont-check timeline-icon primary-color"></i>
                                <h6 className="mb-1 fs-15">Michael Sheen</h6>
                                <p>Great work!. Lorem ipsum dolor sit amet.</p>

                                <span className="fs-13 mt-2">
                                    <i className="icofont-wall-clock"></i>
                                    <span className="m-l-5">9:10 AM</span>
                                </span>
                            </div>

                            <div className="timeline-list">
                                <i className="icofont-check timeline-icon primary-color"></i>
                                <h6 className="mb-1 fs-15">Colin Firth</h6>
                                <p>Finished the project. Lorem ipsum dolor sit amet.</p>

                                <span className="fs-13 mt-2">
                                    <i className="icofont-wall-clock"></i>
                                    <span className="m-l-5">9:00 AM</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Activity;