import React, { Component } from 'react';
import Link from 'next/link';
import * as Icon from 'react-feather';

class Login extends Component {
    render() {
        return (
            <div className="auth-main-content auth-bg-image">
                <div className="d-table">
                    <div className="d-tablecell">
                        <div className="auth-box">
                            <div className="row align-items-center">
                                <div className="col-md-6">
                                    <div className="form-left-content">
                                        <div className="auth-logo">
                                            <Link href="/">
                                                <a>
                                                    <img src={require("../images/large-logo.png")} alt="Logo" />
                                                </a>
                                            </Link>
                                        </div>

                                        <div className="login-links">
                                            <Link href="#">
                                                <a className="fb">
                                                    <Icon.Facebook className="icon" /> 
                                                    Sign Up with Facebook
                                                </a>
                                            </Link>
                                            <Link href="#">
                                                <a className="twi">
                                                    <Icon.Twitter className="icon" /> 
                                                    Sign Up with Twitter
                                                </a>
                                            </Link>
                                            <Link href="#">
                                                <a className="ema">
                                                    <Icon.Mail className="icon" /> 
                                                    Sign Up with Email
                                                </a>
                                            </Link>
                                            <Link href="#">
                                                <a className="linkd">
                                                    <Icon.Linkedin className="icon" /> 
                                                    Sign Up with Linkedin
                                                </a>
                                            </Link>
                                        </div>
                                    </div>
                                </div>
                                
                                <div className="col-md-6">
                                    <div className="form-content">
                                        <h1 className="heading">Log In</h1>
                                        <form className="">
                                            <div className="form-group">
                                                <label className="form-label">Email address</label>
                                                <input type="email" className="form-control" id="email" />
                                            </div>
                                            <div className="form-group">
                                                <label className="form-label">Password</label>
                                                <input type="password" className="form-control" id="password" />
                                            </div>
                                            <div className="text-center">
                                                <button type="submit" className="btn btn-primary">Log In</button>
                                                <a className="fp-link" href="/forgot-password">Forgot Password?</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Login;