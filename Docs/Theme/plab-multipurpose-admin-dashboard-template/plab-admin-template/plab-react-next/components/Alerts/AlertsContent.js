import React, { Component } from 'react';
import Link from 'next/link';
import {Row, Col, Breadcrumb, Alert} from 'react-bootstrap';

class AlertsContent extends Component {
    render() {
        return (
            <React.Fragment>
                <div className="row">
                    {/* Rounded Alerts */}
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Rounded Alerts</h5>
                                </div>

                                <div className="alert alert-primary rounded">
                                    This is a primary alert—check it out!
                                </div>
                                <div className="alert alert-secondary rounded">
                                    This is a secondary alert—check it out!
                                </div>
                                <div className="alert alert-success rounded">
                                    This is a success alert—check it out!
                                </div>
                                <div className="alert alert-danger rounded">
                                    This is a danger alert—check it out!
                                </div>
                                <div  className="alert alert-warning rounded">
                                    This is a warning alert—check it out!
                                </div>
                                <div className="alert alert-info rounded">
                                    This is a info alert—check it out!
                                </div>
                                <div  className="alert alert-light rounded">
                                    This is a light alert—check it out!
                                </div>
                                <div className="alert alert-dark rounded">
                                    This is a dark alert—check it out!
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* End Rounded Alerts */}
    
                    {/* Default Alerts */}
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Default Alerts</h5>
                                </div>

                                <div className="alert alert-primary">
                                    This is a primary alert—check it out!
                                </div>
                                <div className="alert alert-secondary">
                                    This is a secondary alert—check it out!
                                </div>
                                <div className="alert alert-success">
                                    This is a success alert—check it out!
                                </div>
                                <div className="alert alert-danger">
                                    This is a danger alert—check it out!
                                </div>
                                <div  className="alert alert-warning">
                                    This is a warning alert—check it out!
                                </div>
                                <div className="alert alert-info">
                                    This is a info alert—check it out!
                                </div>
                                <div  className="alert alert-light">
                                    This is a light alert—check it out!
                                </div>
                                <div className="alert alert-dark">
                                    This is a dark alert—check it out!
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* End Default Alerts */}
                </div>

                <div className="row">
                    {/* Link Alerts */}
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Link Alerts</h5>
                                </div>

                                <div className="alert alert-primary" role="alert">
                                    A simple primary alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                                <div className="alert alert-secondary" role="alert">
                                    A simple secondary alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                                <div className="alert alert-success" role="alert">
                                    A simple success alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                                <div className="alert alert-danger" role="alert">
                                    A simple danger alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                                <div className="alert alert-warning" role="alert">
                                    A simple warning alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                                <div className="alert alert-info" role="alert">
                                    A simple info alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                                <div className="alert alert-light" role="alert">
                                    A simple light alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                                <div className="alert alert-dark" role="alert">
                                    A simple dark alert with <Link href="#"><a className="alert-link">an example link</a></Link>. Give it a click if you like.
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* End Default Alerts */}

                    {/* Dismissing Alerts */}
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Dismissing Alerts</h5>
                                </div>
                                
                                <div className="alert alert-primary alert-dismissible rounded">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    I am an alert and I can be dismissed!
                                </div>

                                <div className="alert alert-secondary alert-dismissible rounded">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    I am an alert and I can be dismissed!
                                </div>

                                <div className="alert alert-success alert-dismissible rounded">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    I am an alert and I can be dismissed!
                                </div>

                                <div className="alert alert-danger alert-dismissible rounded">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    I am an alert and I can be dismissed!
                                </div>

                                <div className="alert alert-warning alert-dismissible">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    I am an alert and I can be dismissed!
                                </div>

                                <div className="alert alert-info alert-dismissible">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    I am an alert and I can be dismissed!
                                </div>

                                <div className="alert alert-light alert-dismissible">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button> 
                                    I am an alert and I can be dismissed!
                                </div>

                                <div className="alert alert-dark alert-dismissible">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    I am an alert and I can be dismissed!
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* End Dismissing Alerts */}
            
                    {/* Additional content Alerts */}
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Additional content Alerts</h5>
                                </div>

                                <div className="alert alert-success" role="alert">
                                    <h4 className="alert-heading">Well done!</h4>
                                    <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                                    <hr />
                                    <p className="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    {/* End Default Alerts */}

                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Large Alerts</h5>
                                </div>
                                <div className="alert alert-danger alert-dismissible">
                                    <button type="button" className="close">
                                        <span aria-hidden="true">×</span>
                                        <span className="sr-only">Close alert</span>
                                    </button>
                                    <div className="alert-heading h5 line-height-1-4">Oh snap! You got an error! Change this and that and try again. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default AlertsContent;