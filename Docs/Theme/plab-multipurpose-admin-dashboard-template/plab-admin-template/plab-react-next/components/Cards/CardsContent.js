import React, { Component } from 'react';
import Link from 'next/link';

class CardsContent extends Component {
    render() {
        return (
            <React.Fragment>
                {/* Basic Cards */}
                <h6 className="mb-3">Basic Cards</h6>
                <div className="row">
                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card mb-30">
                            <img className="card-img radius-0" src={require("../../images/cards/1.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <div className="card-title h5">Card Heading</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" className="btn btn-primary">Go somewhere</button>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Heading</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" className="btn btn-primary">Button</button>
                            </div>
                            <img className="card-img radius-0" src={require("../../images/cards/2.jpg")} alt="Card Image" />
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card mb-30">
                            <img className="card-img radius-0" src={require("../../images/cards/3.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <div className="card-title h5">Card Heading</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <button type="button" className="btn btn-primary">Go somewhere</button>
                            </div>
                        </div>
                    </div>
                </div>
                {/* End Basic Cards */}

                <h6 className="mb-3">Cards Content Types</h6>
                <div className="row">
                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="m-0 card-title h5">Card Heading</div>
                            </div>
                            <img className="card-img radius-0" src={require("../../images/cards/4.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="m-0 card-title h5">Card Heading</div>
                            </div>
                            <img className="card-img radius-0" src={require("../../images/cards/5.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="m-0 card-title h5">Card Heading</div>
                            </div>
                            <img className="card-img radius-0" src={require("../../images/cards/6.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 className="mb-3">Cards Without Image</h6>
                <div className="row">
                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <div className="mb-2 text-muted fs-12 card-subtitle h6">Card Subtitle</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <div className="mb-2 text-muted fs-12 card-subtitle h6">Card Subtitle</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <div className="mb-2 text-muted fs-12 card-subtitle h6">Card Subtitle</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 className="mb-3">Cards with Image Caption</h6>
                <div className="row">
                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card mb-30">
                            <img className="card-img radius-0" src={require("../../images/cards/7.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <div className="card-title h5">Card Heading</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p className="card-text">
                                    <small className="text-muted">Last updated 5 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Heading</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p className="card-text">
                                    <small className="text-muted">Last updated 2 mins ago</small>
                                </p>
                            </div>
                            <img className="card-img radius-0" src={require("../../images/cards/8.jpg")} alt="Card Image" />
                        </div>
                    </div>
                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card mb-30">
                            <img className="card-img radius-0" src={require("../../images/cards/9.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <div className="card-title h5">Card Heading</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <p className="card-text">
                                    <small className="text-muted">Last updated 10 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 className="mb-3">Cards Text alignment</h6>
                <div className="row">
                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card text-left mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <div className="mb-2 text-muted fs-12 card-subtitle h6">Card Subtitle</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card text-center mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <div className="mb-2 text-muted fs-12 card-subtitle h6">Card Subtitle</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card text-right mb-30">
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <div className="mb-2 text-muted fs-12 card-subtitle h6">Card Subtitle</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 className="mb-3">Cards Kitchen Sink</h6>
                <div className="row">
                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card mb-30">
                            <img className="card-img radius-0" src={require("../../images/cards/10.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div className="list-group-flush list-group">
                                <div className="list-group-item">Cras justo odio</div>
                                <div className="list-group-item">Dapibus ac facilisis in</div>
                                <div className="list-group-item">Vestibulum at eros</div>
                            </div>
                            <div className="card-body">
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-6">
                        <div className="card text-center mb-30">
                            <img className="card-img radius-0" src={require("../../images/cards/11.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div className="list-group-flush list-group">
                                <div className="list-group-item">Cras justo odio</div>
                                <div className="list-group-item">Dapibus ac facilisis in</div>
                                <div className="list-group-item">Vestibulum at eros</div>
                            </div>
                            <div className="card-body">
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>

                    <div className="col-xl-4 col-lg-4 col-sm-12">
                        <div className="card text-right mb-30">
                            <img className="card-img radius-0" src={require("../../images/cards/12.jpg")} alt="Card Image" />
                            <div className="card-body">
                                <div className="card-title h5">Card Title</div>
                                <p className="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                            <div className="list-group-flush list-group">
                                <div className="list-group-item">Cras justo odio</div>
                                <div className="list-group-item">Dapibus ac facilisis in</div>
                                <div className="list-group-item">Vestibulum at eros</div>
                            </div>
                            <div className="card-body">
                                <Link href="#">
                                    <a className="card-link">Card Link</a>
                                </Link>

                                <Link href="#">
                                    <a className="card-link">Another Link</a>
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>

                <h6 className="mb-3">Cards Header and Footer</h6>
                <div className="row">
                    <div className="col-lg-6">
                        <div className="card text-center mb-30">
                            <div className="header card-header">Featured</div>
                            <div className="card-body">
                                <div className="card-title h5">Special title treatment</div>
                                <p className="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <button type="button" className="btn btn-primary">Go somewhere</button>
                            </div>
                            <div className="text-muted card-footer">2 days ago</div>
                        </div>
                    </div>

                    <div className="col-lg-6">
                        <div className="card text-center mb-30">
                            <div className="header card-header">Featured</div>
                            <div className="card-body">
                                <div className="card-title h5">Special title treatment</div>
                                <p className="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <button type="button" className="btn btn-primary">Go somewhere</button>
                            </div>
                            <div className="text-muted card-footer">2 days ago</div>
                        </div>
                    </div>
                </div>

                <h6 className="mb-3">Image Overlays</h6>
                <div className="row">
                    <div className="col-lg-6">
                        <div className="card bg-dark text-white mb-30">
                            <img className="card-img" src={require("../../images/cards/overlay-thumb-bg.jpg")} alt="Card image" />
                            <div className="card-img-overlay">
                                <div className="card-title h5">Card title</div>
                                <p className="white-color card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p className="white-color card-text">Last updated 3 mins ago</p>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6">
                        <div className="card bg-dark text-white mb-30">
                            <img className="card-img" src={require("../../images/cards/overlay-thumb-bg.jpg")} alt="Card image" />
                            <div className="card-img-overlay">
                                <div className="card-title h5">Card title</div>
                                <p className="white-color card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                <p className="white-color card-text">Last updated 5 mins ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default CardsContent;