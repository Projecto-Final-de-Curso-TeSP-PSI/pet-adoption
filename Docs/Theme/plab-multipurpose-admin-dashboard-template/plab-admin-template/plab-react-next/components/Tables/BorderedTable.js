import React, { Component } from 'react';

class BorderedTable extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Bordered Table</h5>
                    </div>

                    <div className="table-responsive">
                        <table className="table m-0 text-center table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th className="text-center">Pages / Visit</th>
                                    <th className="text-center">New user</th>
                                    <th className="text-center">Last week</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>02.01.2019</td>
                                    <td className="text-center">5000</td>
                                    <td className="text-center">1000</td>
                                    <td className="text-center">4500</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>02.02.2019</td>
                                    <td className="text-center">5400</td>
                                    <td className="text-center">1400</td>
                                    <td className="text-center">4700</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>02.03.2019</td>
                                    <td className="text-center">5500</td>
                                    <td className="text-center">1400</td>
                                    <td className="text-center">7600</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>02.04.2019</td>
                                    <td className="text-center">7400</td>
                                    <td className="text-center">4500</td>
                                    <td className="text-center">8700</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>02.05.2019</td>
                                    <td className="text-center">7600</td>
                                    <td className="text-center">2300</td>
                                    <td className="text-center">5400</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default BorderedTable;