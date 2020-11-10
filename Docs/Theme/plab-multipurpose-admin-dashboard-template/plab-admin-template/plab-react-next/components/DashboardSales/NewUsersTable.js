import React, { Component } from 'react';
import * as Icon from 'react-feather';
import { Dropdown } from 'react-bootstrap';

class NewUsersTable extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header d-flex">
                        <h5 className="card-title w-50 float-left">New Users</h5>

                        <Dropdown className="card-dropdown text-right w-50 float-right">
                            <Dropdown.Toggle variant="primary" className="">
                                <Icon.Settings 
                                    className="icon"
                                /> 
                            </Dropdown.Toggle>

                            <Dropdown.Menu>
                                <Dropdown.Item href="#">Add new user</Dropdown.Item>
                                <Dropdown.Item href="#">View all users</Dropdown.Item>
                            </Dropdown.Menu>
                        </Dropdown>
                    </div>

                    <div className="height-310">
                        <div className="table-responsive">
                            <table className="table m-0 text-vertical-middle">
                                <thead className="bort-none borpt-0">
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th className="text-center">Status</th>
                                        <th className="text-center">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/1.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                            Aaron Rossi
                                        </td>
                                        <td>aron@GrammarList.com</td>
                                        <td className="text-center">
                                            <span className="badge badge_warning">Pending</span>
                                        </td>
                                        <td className="text-center">
                                            <a className="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i data-feather="edit-2" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                            <a className="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i data-feather="x" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/2.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                            Brad Joe
                                        </td>
                                        <td>brad.joe@gmail.com</td>
                                        <td className="text-center">
                                            <span className="badge badge_success">Active</span>
                                        </td>
                                        <td className="text-center">
                                            <a className="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i data-feather="edit-2" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                            <a className="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i data-feather="x" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/3.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                            Mitch Petty
                                        </td>
                                        <td>mitch.petty@gmail.com</td>
                                        <td className="text-center">
                                            <span className="badge badge_warning">Not Active</span>
                                        </td>
                                        <td className="text-center">
                                            <a className="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i data-feather="edit-2" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                            <a className="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i data-feather="x" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/4.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                            Petty Rossi
                                        </td>
                                        <td>petty.rossi@gmail.com</td>
                                        <td className="text-center"><span className="badge badge_warning">Pending</span></td>
                                        <td className="text-center">
                                            <a className="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i data-feather="edit-2" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                            <a className="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i data-feather="x" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/5.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                            Philip
                                        </td>
                                        <td>phili@gmail.com</td>
                                        <td className="text-center">
                                            <span className="badge badge_success">Active</span>
                                        </td>
                                        <td className="text-center">
                                            <a className="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i data-feather="edit-2" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                            <a className="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i data-feather="x" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/6.jpg")} alt="Image" className="wh-30 mr-2 rounded" /> 
                                            Nelms
                                        </td>
                                        <td>nelms@gmail.com</td>
                                        <td className="text-center">
                                            <span className="badge badge_success">Active</span>
                                        </td>
                                        <td className="text-center">
                                            <a className="text-success mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <i data-feather="edit-2" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                            <a className="text-danger mr-2" href="#" data-toggle="tooltip" data-placement="top" title="Delete">
                                                <i data-feather="x" className="icon wh-15 mt-minus-3"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default NewUsersTable;