import React, { Component } from 'react';
import Link from 'next/link';
import * as Icon from 'react-feather';

class AssignedTasks extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Assigned Tasks</h5>
                    </div>

                    <div className="table-responsive">
                        <table className="table table-hover text-vertical-middle mb-0">
                            <thead className="bort-none borpt-0">
                                <tr>
                                    <th>Member Name</th>
                                    <th>Tasks</th>
                                    <th>Project Due Date</th>
                                    <th>Status</th>
                                    <th className="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/1.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Colin Firth</strong>
                                        </div>
                                    </td>
                                    <td>UI/UX Design</td>
                                    <td>10 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-cyan">
                                            <span className="fw-600">Completed</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-13 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/2.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Michael Sheen</strong>
                                        </div>
                                    </td>
                                    <td>Backend Development</td>
                                    <td>15 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-cyan">
                                            <span className="fw-600">Completed</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-13 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/3.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Tom Hardy</strong>
                                        </div>
                                    </td>
                                    <td>Development</td>
                                    <td>20 Nov 2019</td>
                                    <td>
                                        <span className="badge badge_warning">
                                            <span className="fw-600">70% Completed</span>
                                        </span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-13 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/4.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Daniel Craig</strong>
                                        </div>
                                    </td>
                                    <td>Web Design</td>
                                    <td>22 Nov 2019</td>
                                    <td>
                                        <span className="badge badge_warning">
                                            <span className="fw-600">60% Completed</span>
                                        </span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-13 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/6.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Ralph Fiennes</strong>
                                        </div>
                                    </td>
                                    <td>UI/UX Design</td>
                                    <td>20 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-cyan">
                                            <span className="fw-600">Completed</span>
                                            <i className="icofont-check-circled ml-1"></i>
                                        </span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-13 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/5.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Jude Law</strong>
                                        </div>
                                    </td>
                                    <td>Development</td>
                                    <td>20 Nov 2019</td>
                                    <td>
                                        <span className="badge badge-red">
                                            <span className="fw-600">Declined</span>
                                        </span>
                                    </td>
                                    <td className="text-center">
                                        <Link href="#">
                                            <a className="text-success mr-2" title="Edit">
                                                <Icon.Edit2 className="icon wh-13 mt-minus-3" /> 
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a className="text-danger mr-2" title="Delete">
                                                <Icon.X className="icon wh-15 mt-minus-3" /> 
                                            </a>
                                        </Link>
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

export default AssignedTasks;