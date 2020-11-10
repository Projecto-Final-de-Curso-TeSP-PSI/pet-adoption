import React, { Component } from 'react';
import Link from 'next/link';
import * as Icon from 'react-feather';

class UsersCardContent extends Component {
    render() {
        return (
            <React.Fragment>
                {/* Circle Image Style */}
                <h5 className="mb-3 fs-18 sm-center">Circle Image Style</h5>
                <div className="row">
                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/1.png")} alt="User Image" className="rounded-circle" />

                                <h4 className="mb-0 mt-4">Frank Martin</h4>
                                <p>Managing Director</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>

                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span>984</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span>685</span>
                                </li>
                                <li>
                                    Followers 
                                    <span>434</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/2.png")} alt="User Image" className="rounded-circle" />

                                <h4 className="mb-0 mt-4">Christopher Di</h4>
                                <p>Web Developer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span>954</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span>655</span>
                                </li>
                                <li>
                                    Followers 
                                    <span>454</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/3.png")} alt="User Image" className="rounded-circle" />

                                <h4 className="mb-0 mt-4">Nancy Doe</h4>
                                <p>Designer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span>974</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span>675</span>
                                </li>
                                <li>
                                    Followers 
                                    <span>474</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/* End Circle Image Style */}

                {/* Octagon Image Style */}
                <h5 className="mb-3 fs-18 sm-center">Octagon Image Style</h5>
                <div className="row">
                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/4.png")} alt="User Image" className="octagon-style" />

                                <h4 className="mb-0 mt-4">Frank Martin</h4>
                                <p>Managing Director</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>

                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">984</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">685K</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">434K</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/5.png")} alt="User Image" className="octagon-style" />

                                <h4 className="mb-0 mt-4">Christopher Di</h4>
                                <p>Web Developer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">954</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">655K</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">454K</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/6.png")} alt="User Image" className="octagon-style" />

                                <h4 className="mb-0 mt-4">Nancy Doe</h4>
                                <p>Designer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">974</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">675K</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">474K</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/* End Octagon Image Style */}

                {/* Nonagon Image Style */}
                <h5 className="mb-3 fs-18 sm-center">Nonagon Image Style</h5>
                <div className="row">
                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/1.png")} alt="User Image" className="nonagon-style" />

                                <h4 className="mb-0 mt-4">Frank Martin</h4>
                                <p>Managing Director</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">984</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">685</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">434</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/2.png")} alt="User Image" className="nonagon-style" />

                                <h4 className="mb-0 mt-4">Christopher Di</h4>
                                <p>Web Developer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">954</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">655</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">454</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/3.png")} alt="User Image" className="nonagon-style" />

                                <h4 className="mb-0 mt-4">Nancy Doe</h4>
                                <p>Designer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">974</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">675</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">474</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/* End Nonagon Image Style */}

                {/* Bevel Image Style */}
                <h5 className="mb-3 fs-18 sm-center">Bevel Image Style</h5>
                <div className="row">
                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/4.png")} alt="User Image" className="bevel-style" />

                                <h4 className="mb-0 mt-4">Frank Martin</h4>
                                <p>Managing Director</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">84M</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">65M</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">43M</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/5.png")} alt="User Image" className="bevel-style" />

                                <h4 className="mb-0 mt-4">Christopher Di</h4>
                                <p>Web Developer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">95M</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">55M</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">44M</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div className="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                        <div className="single-user-card hover-card mb-30">
                            <div className="p-30">
                                <img src={require("../../images/user/big/6.png")} alt="User Image" className="bevel-style" />

                                <h4 className="mb-0 mt-4">Nancy Doe</h4>
                                <p>Designer</p>

                                <div className="social-links">
                                    <Link href="#">
                                        <a>
                                            <Icon.Linkedin className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Twitter className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Facebook className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.Instagram className="icon" /> 
                                        </a>
                                    </Link>
                                    <Link href="#">
                                        <a>
                                            <Icon.GitHub className="icon" /> 
                                        </a>
                                    </Link>
                                </div>
                            </div>
                            <ul className="user-card-foot">
                                <li>
                                    Total Post 
                                    <span className="purple-text">97M</span>
                                </li>
                                <li className="bor-lr">
                                    Following 
                                    <span className="primary-text">67M</span>
                                </li>
                                <li>
                                    Followers 
                                    <span className="success-text">44M</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {/* End Bevel Image Style */}
            </React.Fragment>
        );
    }
}

export default UsersCardContent;