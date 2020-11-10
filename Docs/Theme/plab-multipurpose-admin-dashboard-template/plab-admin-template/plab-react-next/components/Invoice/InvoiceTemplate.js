import React, { Component } from 'react';
import * as Icon from 'react-feather';

class InvoiceTemplate extends Component {
    render() {
        return (
            <div className="invoice-template mb-30">
                <div className="invoice-header mb-4">
                    <h3>Invoice</h3>
                    <p>#9587457</p>
                </div>

                <div className="row">
                    <div className="col-sm-6">
                        <div className="text-left">
                            <h3 className="fs-18">Plab Admin</h3>
                            <p className="mb-2">
                                M/2750, <br /> 
                                Quadra Street, <br /> 
                                Victoria, <br /> 
                                Canada.
                            </p>
                            <p>
                                <span className="fw-500">Email:</span> Plabadmin@gmail.com <br />
                                <span className="fw-500">Phone:</span> 123-555-567
                            </p>
                        </div>
                    </div>

                    <div className="col-sm-6">
                        <div className="text-right xs-text-left">
                            <h3 className="fs-18">To Client</h3>
                            <p className="mb-2">
                                E/3456, <br /> 
                                Quadra Street, <br /> 
                                Victoria, <br /> 
                                Canada.
                            </p>
                            <p>
                                <span className="fw-500">Invoice Date:</span> 15 Mar 2019 <br />
                                <span className="fw-500">Due Date:</span> 20 Mar 2019
                            </p>
                        </div>
                    </div>
                </div>

                <div className="table-responsive">
                    <table className="table m-0 table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>DESCRIPTION</th>
                                <th className="text-center">Quantity</th>
                                <th className="text-center">Unit Price</th>
                                <th className="text-right">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Apple iPhone XR (64GB)</td>
                                <td className="text-center">2</td>
                                <td className="text-center">$2000</td>
                                <td className="text-right">$2400</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Apple iPhone XR Black</td>
                                <td className="text-center">3</td>
                                <td className="text-center">$1000</td>
                                <td className="text-right">$3000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>HeadPhone</td>
                                <td className="text-center">2</td>
                                <td className="text-center">$1500</td>
                                <td className="text-right">$3000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Shoes</td>
                                <td className="text-center">3</td>
                                <td className="text-center">$1200</td>
                                <td className="text-right">$3600</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Macbook pro</td>
                                <td className="text-center">1</td>
                                <td className="text-center">$1,299</td>
                                <td className="text-right">$1,299</td>
                            </tr>
                            <tr className="active">
                                <td colSpan="3"></td>
                                <td className="text-center black-text"><b>Subtotal:</b></td>
                                <td className="text-right black-text"><b>$13,299</b></td>
                            </tr>
                            <tr className="active">
                                <td colSpan="3"></td>
                                <td className="text-center black-text"><b>Vat Rate:</b></td>
                                <td className="text-right black-text"><b>20%</b></td>
                            </tr>
                            <tr className="active">
                                <td colSpan="3"></td>
                                <td className="text-center black-text"><b>Vat Due:</b></td>
                                <td className="text-right black-text"><b>5%</b></td>
                            </tr>
                            <tr className="active">
                                <td colSpan="3"></td>
                                <td className="text-center fs-18 black-text"><b>Total:</b></td>
                                <td className="text-right fs-18 black-text"><b>$10,299</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div className="text-right mt-3">
                    <button type="button" className="btn btn-secondary mr-2">
                        <Icon.Printer className="icon wh-13 mr-1" /> 
                        Print
                    </button>
                    <button type="button" className="btn btn-primary">Send Invoice</button>
                </div>
            </div>
        );
    }
}

export default InvoiceTemplate;