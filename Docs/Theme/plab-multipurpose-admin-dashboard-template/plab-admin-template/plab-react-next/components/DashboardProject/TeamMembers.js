import React, { Component } from 'react';
import Link from 'next/link';

class TeamMembers extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Team Members</h5>
                    </div>

                    <div className="table-responsive">
                        <table className="table table-hover text-vertical-middle mb-0">
                            <thead className="bort-none borpt-0">
                                <tr>
                                    <th>Name</th>
                                    <th>Designation</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/7.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Colin Firth</strong>
                                        </div>
                                    </td>
                                    <td>UI/UX Designer</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/6.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Michael Sheen</strong>
                                        </div>
                                    </td>
                                    <td>Backend Developer</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/5.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Tom Hardy</strong>
                                        </div>
                                    </td>
                                    <td>Web Developer</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/4.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Daniel Craig</strong>
                                        </div>
                                    </td>
                                    <td>SQA Engineer</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/3.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Ralph Fiennes</strong>
                                        </div>
                                    </td>
                                    <td>Full Stack Developer</td>
                                </tr>

                                <tr>
                                    <td>
                                        <div className="media align-items-center">
                                            <img src={require("../../images/user/2.jpg")} alt="Image" className="rounded wh-30 mr-2" />
                                            <strong>Henry Cavill</strong>
                                        </div>
                                    </td>
                                    <td>Mobile Developer</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default TeamMembers;