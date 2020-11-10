import React, { Component } from 'react';
import Link from 'next/link';

class ProjectIssues extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Project issues</h5>
                    </div>

                    <div className="d-flex mb-20">
                        <div className="text-center">
                            <div className="avatar avatar-blue wh-50 rounded">
                                <span className="fw-600 pt-3">20</span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-1 mt-1 fs-15">Errors</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                    <div className="d-flex mb-20">
                        <div className="text-center">
                            <div className="avatar avatar-cyan wh-50 rounded">
                                <span className="fw-600 pt-3">25</span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-1 mt-1 fs-15">Design Issue</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                    <div className="d-flex mb-20">
                        <div className="text-center">
                            <div className="avatar avatar-gold wh-50 rounded">
                                <span className="fw-600 pt-3">5</span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-1 mt-1 fs-15">Development Issue</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                    <div className="d-flex">
                        <div className="text-center">
                            <div className="avatar avatar-red wh-50 rounded">
                                <span className="fw-600 pt-3">25</span>
                            </div>
                        </div>

                        <div className="ml-3">
                            <h6 className="mb-0 mt-2 fs-15">Coding Issue</h6>
                            <p className="mb-0">Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ProjectIssues;