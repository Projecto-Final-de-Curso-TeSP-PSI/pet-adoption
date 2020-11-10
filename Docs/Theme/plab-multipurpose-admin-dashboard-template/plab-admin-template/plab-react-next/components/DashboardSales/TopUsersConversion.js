import React, { Component } from 'react';

class TopUsersConversion extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Top Users Conversion Rate</h5>
                    </div>

                    <div className="height-365">
                        <div className="table-responsive">
                            <table className="table m-0 text-vertical-middle">
                                <tbody>
                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/1.jpg")} alt="avatar" className="wh-40 mr-1 rounded" />
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">Colin Firth</h6>
                                            <span className="fs-13">Sales Manager</span>
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">85%</h6>
                                            <span className="fs-13">Conversion Rate</span> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/2.jpg")} alt="avatar" className="wh-40 mr-1 rounded" />
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">Michael Sheen</h6>
                                            <span className="fs-13">Marketing manager</span>
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">80%</h6>
                                            <span className="fs-13">Conversion Rate</span> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/3.jpg")} alt="avatar" className="wh-40 mr-1 rounded" />
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">Tom Hardy</h6>
                                            <span className="fs-13">Shop manager</span>
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">75%</h6>
                                            <span className="fs-13">Conversion Rate</span> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/4.jpg")} alt="avatar" className="wh-40 mr-1 rounded" />
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">Daniel Craigy</h6>
                                            <span className="fs-13">Sales Manager</span>
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">70%</h6>
                                            <span className="fs-13">Conversion Rate</span> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/5.jpg")} alt="avatar" className="wh-40 mr-1 rounded" />
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">Ralph Fiennes</h6>
                                            <span className="fs-13">Marketing manager</span>
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">65%</h6>
                                            <span className="fs-13">Conversion Rate</span> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/6.jpg")} alt="avatar" className="wh-40 mr-1 rounded" />
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">Jude Law</h6>
                                            <span className="fs-13">Shop manager</span>
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">50%</h6>
                                            <small className="fs-13">Conversion Rate</small> 
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <img src={require("../../images/user/7.jpg")} alt="avatar" className="wh-40 mr-1 rounded" />
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">Henry Cavill</h6>
                                            <span className="fs-13">Sales Manager</span>
                                        </td>
                                        <td>
                                            <h6 className="mb-0 fs-15">50%</h6>
                                            <span className="fs-13">Conversion Rate</span> 
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

export default TopUsersConversion;