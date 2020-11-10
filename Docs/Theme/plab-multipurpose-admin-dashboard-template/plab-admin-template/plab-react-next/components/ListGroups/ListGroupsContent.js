import React, { Component } from 'react';
import Link from 'next/link';

class ListGroupsContent extends Component {
    render() {
        return (
            <React.Fragment>
                {/* Basic List Groups */}
                <div className="row">
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Basic List Groups</h5>
                                </div>
                                
                                <ul className="list-group">
                                    <li className="list-group-item">Cras justo odio</li>
                                    <li className="list-group-item">Dapibus ac facilisis in</li>
                                    <li className="list-group-item">Morbi leo risus</li>
                                    <li className="list-group-item">Porta ac consectetur ac</li>
                                    <li className="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Active Items List</h5>
                                </div>
                                
                                <ul className="list-group">
                                    <li className="list-group-item active">Cras justo odio</li>
                                    <li className="list-group-item">Dapibus ac facilisis in</li>
                                    <li className="list-group-item">Morbi leo risus</li>
                                    <li className="list-group-item">Porta ac consectetur ac</li>
                                    <li className="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {/* End Basic List Groups */}

                {/* Links and buttons */}
                <div className="row">
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Links and buttons</h5>
                                </div>
        
                                <div className="list-group">
                                    <a href="#" className="list-group-item list-group-item-action active">
                                        Cras justo odio
                                    </a>

                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action">Morbi leo risus</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action disabled" tabIndex="-1" aria-disabled="true">Vestibulum at eros</a>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Flush</h5>
                                </div>

                                <ul className="list-group list-group-flush">
                                    <li className="list-group-item">Cras justo odio</li>
                                    <li className="list-group-item">Dapibus ac facilisis in</li>
                                    <li className="list-group-item">Morbi leo risus</li>
                                    <li className="list-group-item">Porta ac consectetur ac</li>
                                    <li className="list-group-item">Vestibulum at eros</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                {/* End Links and buttons */}

                {/* Contextual classNamees */}
                <div className="row">
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Contextual classNamees</h5>
                                </div>
                                
                                <ul className="list-group">
                                    <li className="list-group-item">Dapibus ac facilisis in</li>
                                    <li className="list-group-item list-group-item-primary">A simple primary list group item</li>
                                    <li className="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                                    <li className="list-group-item list-group-item-success">A simple success list group item</li>
                                    <li className="list-group-item list-group-item-danger">A simple danger list group item</li>
                                    <li className="list-group-item list-group-item-warning">A simple warning list group item</li>
                                    <li className="list-group-item list-group-item-info">A simple info list group item</li>
                                    <li className="list-group-item list-group-item-light">A simple light list group item</li>
                                    <li className="list-group-item list-group-item-dark">A simple dark list group item</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Actions List</h5>
                                </div>
        
                                <div className="list-group">
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-primary">A simple primary list group item</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-secondary">A simple secondary list group item</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-success">A simple success list group item</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-danger">A simple danger list group item</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-warning">A simple warning list group item</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-info">A simple info list group item</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-light">A simple light list group item</a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action list-group-item-dark">A simple dark list group item</a>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/* End Contextual classNamees */}

                {/* With badges */}
                <div className="row">
                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">With badges</h5>
                                </div>
        
                                <ul className="list-group">
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span className="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span className="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span className="badge badge-primary badge-pill">1</span>
                                    </li>
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span className="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span className="badge badge-primary badge-pill">2</span>
                                    </li>
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Morbi leo risus
                                        <span className="badge badge-primary badge-pill">1</span>
                                    </li>
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Cras justo odio
                                        <span className="badge badge-primary badge-pill">14</span>
                                    </li>
                                    <li className="list-group-item d-flex justify-content-between align-items-center">
                                        Dapibus ac facilisis in
                                        <span className="badge badge-primary badge-pill">2</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Custom content</h5>
                                </div>
        
                                <div className="list-group">
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action py-4 active">
                                            <div className="d-flex w-100 justify-content-between">
                                                <h5 className="mb-1">List group item heading</h5>
                                                <small>3 days ago</small>
                                            </div>
                                            <p className="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                            <small>Donec id elit non mi porta.</small>
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action py-4">
                                            <div className="d-flex w-100 justify-content-between">
                                                <h5 className="mb-1">List group item heading</h5>
                                                <small className="text-muted">3 days ago</small>
                                            </div>
                                            <p className="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                            <small className="text-muted">Donec id elit non mi porta.</small>
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a className="list-group-item list-group-item-action py-4">
                                            <div className="d-flex w-100 justify-content-between">
                                                <h5 className="mb-1">List group item heading</h5>
                                                <small className="text-muted">3 days ago</small>
                                            </div>
                                            <p className="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                                            <small className="text-muted">Donec id elit non mi porta.</small>
                                        </a>
                                    </Link>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                {/* End With badges */}
            </React.Fragment>
        );
    }
}

export default ListGroupsContent;