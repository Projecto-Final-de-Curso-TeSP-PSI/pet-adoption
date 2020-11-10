import React, { Component } from 'react';
import Link from 'next/link';

class ProjectsTable extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Projects List</h5>
                    </div>

                    <div className="table-responsive">
                        <table className="table table-hover text-vertical-middle mb-0">
                            <thead className="bort-none borpt-0">
                                <tr>
                                    <th>Project</th>
                                    <th>Tasks</th>
                                    <th>Members</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/projects/1.jpg")} alt="Image" className="wh-30 mr-2" />
                                            <strong>Admin App Design</strong>
                                        </div>
                                    </td>
                                    <td>UI/UX Design</td>
                                    <td>
                                        <span className="badge badge-cyan">Ready</span>
                                    </td>
                                    <td>10 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-cyan">
                                            <span className="fw-600">100%</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/projects/2.jpg")} alt="Image" className="wh-30 mr-2" />
                                            <strong>Laravel Admin Template</strong>
                                        </div>
                                    </td>
                                    <td>Backend Development</td>
                                    <td>
                                        <span className="badge badge-cyan">Ready</span>
                                    </td>
                                    <td>15 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-cyan">
                                            <span className="fw-600">100%</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/projects/3.jpg")} alt="Image" className="wh-30 mr-2" />
                                            <strong>Adani App Studio</strong>
                                        </div>
                                    </td>
                                    <td>Development</td>
                                    <td>
                                        <span className="badge badge_warning">In Progress</span>
                                    </td>
                                    <td>10 Nov 2019</td>
                                    <td>
                                        <span className="badge badge_warning">
                                            <span className="fw-600">70%</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/projects/4.jpg")} alt="Image" className="wh-30 mr-2" />
                                            <strong>IT Company</strong>
                                        </div>
                                    </td>
                                    <td>Web Design</td>
                                    <td>
                                        <span className="badge badge_warning">In Progress</span>
                                    </td>
                                    <td>20 Nov 2019</td>
                                    <td>
                                        <span className="badge badge_warning">
                                            <span className="fw-600">60%</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/projects/5.jpg")} alt="Image" className="wh-30 mr-2" />
                                            <strong>Admin Master</strong>
                                        </div>
                                    </td>
                                    <td>UI/UX Design</td>
                                    <td>
                                        <span className="badge badge-cyan">Ready</span>
                                    </td>
                                    <td>25 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-cyan">
                                            <span className="fw-600">100%</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/projects/6.jpg")} alt="Image" className="wh-30 mr-2" />
                                            <strong>React Admin</strong>
                                        </div>
                                    </td>
                                    <td>Development</td>
                                    <td>
                                        <span className="badge badge-red">Declined</span>
                                    </td>
                                    <td>26 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-red">
                                            <span className="fw-600">0%</span>
                                            <i className="icofont-close-line-circled ml-1"></i>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default ProjectsTable;