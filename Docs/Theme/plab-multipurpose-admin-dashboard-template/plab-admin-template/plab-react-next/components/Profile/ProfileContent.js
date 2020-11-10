import React, { Component } from 'react';
import Link from 'next/link';
import * as Icon from 'react-feather';

class ProfileContent extends Component {
    render() {
        return (
            <div className="row">
                <div className="col-lg-12">
                    <div className="profile-header mb-30">
                        <img src={require("../../images/user/1.jpg")} alt="Profle" className="rounded-circle" />
    
                        <h3 className="name mt-3">Aaron Rossi</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <div className="profile-stats">
                            <Link href="#">
                                <a>
                                    <strong>587</strong> Posts
                                </a>
                            </Link>
                            <Link href="#">
                                <a>
                                    <strong>963</strong> Following
                                </a>
                            </Link>
                            <Link href="#">
                                <a>
                                    <strong>576</strong> Followers
                                </a>
                            </Link>
                        </div>
                    </div>
                </div>

                <div className="col-lg-3">
                    <div className="profile-left-content">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Info</h5>
                                </div>

                                <ul className="info">
                                    <li>
                                        <Icon.MapPin className="icon" /> 
                                        Location: Canada
                                    </li>
                                    <li>
                                        <Icon.Edit className="icon" /> 
                                        Language: English
                                    </li>
                                    <li>
                                        <Icon.Calendar className="icon" /> 
                                        Joined: Joined March 2019
                                    </li>
                                    <li>
                                        <Icon.Calendar className="icon" /> 
                                        Birthday: Born March 2, 1995
                                    </li>
                                    <li>
                                        <Icon.Phone className="icon" /> 
                                        Phone: +0 (123) 456 7892
                                    </li>
                                    <li>
                                        <Icon.Mail className="icon" /> 
                                        Email: example@gmail.com
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-6">
                    <div className="profile-middle-content mb-30">
                        <div className="post-card">
                            <div className="media">
                                <img src={require("../../images/user/1.jpg")} alt="User" className="mr-3 rounded-circle" width="50" height="50" />
                                <div className="media-body">
                                    <h5>
                                        <Link href="#">
                                            <a>There are many variations of passages of Lorem Ipsum</a>
                                        </Link>
                                    </h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/post/post-img.jpg")} alt="Post Image" />
                                        </a>
                                    </Link>

                                    <div className="feed-back mt-3">
                                        <Link href="#">
                                            <a>
                                                <Icon.MessageSquare className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a>
                                                <Icon.ThumbsUp className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a>
                                                <Icon.Share2 className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="post-card">
                            <div className="media">
                                <img src={require("../../images/user/2.jpg")} alt="User" className="mr-3 rounded-circle" width="50" height="50" />
                                <div className="media-body">
                                    <h5>
                                        <Link href="#">
                                            <a>There are many variations of passages of Lorem Ipsum</a>
                                        </Link>
                                    </h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/post/post-img2.jpg")} alt="Post Image" />
                                        </a>
                                    </Link>

                                    <div className="feed-back mt-3">
                                        <Link href="#">
                                            <a>
                                                <Icon.MessageSquare className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a>
                                                <Icon.ThumbsUp className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a>
                                                <Icon.Share2 className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="post-card">
                            <div className="media">
                                <img src={require("../../images/user/3.jpg")} alt="User" className="mr-3 rounded-circle" width="50" height="50" />
                                <div className="media-body">
                                    <h5>
                                        <Link href="#">
                                            <a>There are many variations of passages of Lorem Ipsum</a>
                                        </Link>
                                    </h5>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>

                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/post/post-img3.jpg")} alt="Post Image" />
                                        </a>
                                    </Link>

                                    <div className="feed-back mt-3">
                                        <Link href="#">
                                            <a>
                                                <Icon.MessageSquare className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a>
                                                <Icon.ThumbsUp className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                        <Link href="#">
                                            <a>
                                                <Icon.Share2 className="icon" /> 
                                                897
                                            </a>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div className="col-lg-3">
                    <div className="profile-right-content">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Connect</h5>
                                </div>

                                <div className="connecting-list">
                                    <div className="media">
                                        <Link href="#">
                                            <a>
                                                <img src={require("../../images/user/1.jpg")} alt="User" className="mr-2 rounded-circle" width="35" height="35" />
                                            </a>
                                        </Link>
                                        <div className="media-body">
                                            <h5>
                                                <Link href="#">
                                                    <a>Amber Gibs</a>
                                                </Link>
                                            </h5>
                                            <button type="button" className="btn btn-outline-primary rounded">Follow</button>
                                        </div>
                                    </div>

                                    <div className="media">
                                        <Link href="#">
                                            <a>
                                                <img src={require("../../images/user/2.jpg")} alt="User" className="mr-2 rounded-circle" width="35" height="35" />
                                            </a>
                                        </Link>
                                        <div className="media-body">
                                            <h5>
                                                <Link href="#">
                                                    <a>Carl Roland</a>
                                                </Link>
                                            </h5>
                                            <button type="button" className="btn btn-outline-primary rounded">Follow</button>
                                        </div>
                                    </div>

                                    <div className="media">
                                        <Link href="#">
                                            <a>
                                                <img src={require("../../images/user/3.jpg")} alt="User" className="mr-2 rounded-circle" width="35" height="35" />
                                            </a>
                                        </Link>
                                        <div className="media-body">
                                            <h5>
                                                <Link href="#">
                                                    <a>Paul Wilson</a>
                                                </Link>
                                            </h5>
                                            <button type="button" className="btn btn-outline-primary rounded">Follow</button>
                                        </div>
                                    </div>

                                    <div className="media">
                                        <Link href="#">
                                            <a>
                                                <img src={require("../../images/user/4.jpg")} alt="User" className="mr-2 rounded-circle" width="35" height="35" />
                                            </a>
                                        </Link>
                                        <div className="media-body">
                                            <h5>
                                                <Link href="#">
                                                    <a>Alice Jenkins</a>
                                                </Link>
                                            </h5>
                                            <button type="button" className="btn btn-outline-primary rounded">Follow</button>
                                        </div>
                                    </div>
                                    
                                    <div className="media">
                                        <Link href="#">
                                            <a>
                                                <img src={require("../../images/user/5.jpg")} alt="User" className="mr-2 rounded-circle" width="35" height="35" />
                                            </a>
                                        </Link>
                                        <div className="media-body">
                                            <h5>
                                                <Link href="#">
                                                    <a>Lauren Cox</a>
                                                </Link>
                                            </h5>
                                            <button type="button" className="btn btn-outline-primary rounded">Follow</button>
                                        </div>
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

export default ProfileContent;