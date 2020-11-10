import React, { Component } from 'react';
import * as Icon from 'react-feather';

class DataTable extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Data Table</h5>
                    </div>

                    <div className="table-responsive">
                        <table className="table m-0 table-hover">
                            <thead className="bort-none borpt-0">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th className="text-center">Status</th>
                                    <th className="text-center">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Aaron Rossi</td>
                                    <td>aaron@GrammarList.com</td>
                                    <td>02.01.2019</td>
                                    <td className="text-center">
                                        <span className="badge badge_warning">Pending</span>
                                    </td>
                                    <td className="text-center">
                                        <button type="button" className="btn btn-link text-success p-0 mr-2">
                                            <Icon.Edit2 className="icon wh-15" /> 
                                        </button>
                                        <button type="button" className="btn btn-link text-danger p-0">
                                            <Icon.X className="icon wh-15" />
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Brad Joe</td>
                                    <td>brad.joe@gmail.com</td>
                                    <td>02.02.2019</td>
                                    <td className="text-center">
                                        <span className="badge badge_success">Active</span>
                                    </td>
                                    <td className="text-center">
                                        <button type="button" className="btn btn-link text-success p-0 mr-2">
                                            <Icon.Edit2 className="icon wh-15" /> 
                                        </button>
                                        <button type="button" className="btn btn-link text-danger p-0">
                                            <Icon.X className="icon wh-15" />
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Mitch Petty</td>
                                    <td>mitch.petty@gmail.com</td>
                                    <td>02.03.2019</td>
                                    <td className="text-center">
                                        <span className="badge badge_danger">Not Active</span>
                                    </td>
                                    <td className="text-center">
                                        <button type="button" className="btn btn-link text-success p-0 mr-2">
                                            <Icon.Edit2 className="icon wh-15" /> 
                                        </button>
                                        <button type="button" className="btn btn-link text-danger p-0">
                                            <Icon.X className="icon wh-15" />
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Philip</td>
                                    <td>philip@gmail.com</td>
                                    <td>02.04.2019</td>
                                    <td className="text-center">
                                        <span className="badge badge_success">Active</span>
                                    </td>
                                    <td className="text-center">
                                        <button type="button" className="btn btn-link text-success p-0 mr-2">
                                            <Icon.Edit2 className="icon wh-15" /> 
                                        </button>
                                        <button type="button" className="btn btn-link text-danger p-0">
                                            <Icon.X className="icon wh-15" />
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Nelms</td>
                                    <td>nelms@gmail.com</td>
                                    <td>02.05.2019</td>
                                    <td className="text-center">
                                        <span className="badge badge_success">Active</span>
                                    </td>
                                    <td className="text-center">
                                        <button type="button" className="btn btn-link text-success p-0 mr-2">
                                            <Icon.Edit2 className="icon wh-15" /> 
                                        </button>
                                        <button type="button" className="btn btn-link text-danger p-0">
                                            <Icon.X className="icon wh-15" />
                                        </button>
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

export default DataTable;