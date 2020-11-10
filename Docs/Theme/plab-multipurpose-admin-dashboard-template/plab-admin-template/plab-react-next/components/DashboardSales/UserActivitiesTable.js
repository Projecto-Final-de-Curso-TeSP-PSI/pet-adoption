import React, { Component } from 'react';

class UserActivitiesTable extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <div className="btn btn-warning float-right">
                            Daily Updates
                        </div>

                        <h5 className="card-title">User Activities</h5>
                    </div>

                    <div className="height-310">
                        <div className="table-responsive">
                            <table className="table m-0 text-center">
                                <thead className="bort-none borpt-0">
                                    <tr>
                                        <th className="text-left">Date</th>
                                        <th>Pages / Visit</th>
                                        <th>New user</th>
                                        <th>Last week</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td className="text-left">01 Jun 2019</td>
                                        <td>50,000</td>
                                        <td>10,000</td>
                                        <td>80,000</td>
                                    </tr>
                                    <tr>
                                        <td className="text-left">02 Jun 2019</td>
                                        <td>45,000</td>
                                        <td>8,000</td>
                                        <td>70,000</td>
                                    </tr>
                                    <tr>
                                        <td className="text-left">03 Jun 2019</td>
                                        <td>42,000</td>
                                        <td>7,000</td>
                                        <td>65,000</td>
                                    </tr>
                                    <tr>
                                        <td className="text-left">04 Jun 2019</td>
                                        <td>40,000</td>
                                        <td>7,000</td>
                                        <td>70,000</td>
                                    </tr>
                                    <tr>
                                        <td className="text-left">05 Jun 2019</td>
                                        <td>56,000</td>
                                        <td>12,000</td>
                                        <td>90,000</td>
                                    </tr>
                                    <tr>
                                        <td className="text-left">06 Jun 2019</td>
                                        <td>55,000</td>
                                        <td>11,000</td>
                                        <td>95,000</td>
                                    </tr>
                                    <tr>
                                        <td className="text-left">07 Jun 2019</td>
                                        <td>44,000</td>
                                        <td>7,000</td>
                                        <td>60,000</td>
                                    </tr>
                                    <tr>
                                        <td className="text-left">08 Jun 2019</td>
                                        <td>34,000</td>
                                        <td>9,000</td>
                                        <td>56,000</td>
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

export default UserActivitiesTable;