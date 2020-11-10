import React, { Component } from 'react';
import Link from 'next/link';
import * as Icon from 'react-feather';

class NotificationsContent extends Component {
    render() {
        return (
            <React.Fragment>
                <div className="row">
                    <div className="col-lg-6">
                        <div className="notifications-card mb-30">
                            <h5 className="noti-card-title">Notifications</h5>
                            <div className="list-group">
                                <div className="list-group-item">
                                    <Icon.CloudLightning className="icon" /> 
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a className="mr-1">Aaron Rossi</a>
                                        </Link> 
                                        went traveling
                                        <div className="time">1 min ago</div>
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.Sun className="icon" /> 
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a className="mr-1">Brad Joe</a>
                                        </Link> 
                                        played destiny
                                        <div className="time">15 min ago</div>
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.User className="icon" /> 
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a>Mitch</a> 
                                        </Link>
                                        <Link href="#">
                                            <a className="mr-1">2 others</a> 
                                        </Link>
                                        followed you.
                                        <div className="time">30 min ago</div>
                                    </div>
                                    <div className="content pt-0">
                                        <ul>
                                            <li><img src={require("../../images/user/1.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                            <li><img src={require("../../images/user/2.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                            <li><img src={require("../../images/user/3.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                        </ul>
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.Camera className="icon" /> 
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a className="mr-1">George Petty</a> 
                                        </Link>
                                        uploaded a photo
                                        <div className="time">2 min ago</div>
                                    </div>
                                    <div className="content">
                                        <img src={require("../../images/post-image.png")} alt="Picture" />
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.Flag className="icon" /> 
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a className="mr-1">Marco Gomez</a> 
                                        </Link>
                                        flagged your post
                                        <div className="time">2 min ago</div>
                                    </div>
                                    <div className="content media mt-2">
                                        <img src={require("../../images/user/1.jpg")} alt="User" className="wh-40 mr-3 rounded-circle" />
                                        <div className="media-body">
                                            <h5 className="fs-14 mb-1">George Petty</h5>
                                            <p className="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                        </div>
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.ThumbsUp className="icon" /> 
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a>Mitch</a> 
                                        </Link>
                                        <Link href="#">
                                            <a className="mr-1">2 others</a>
                                        </Link> 
                                        Liked your post.
                                        <div className="time">3 min ago</div>
                                    </div>
                                    <div className="content pt-0">
                                        <ul>
                                            <li><img src={require("../../images/user/4.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                            <li><img src={require("../../images/user/5.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                            <li><img src={require("../../images/user/6.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                        </ul>
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.MessageSquare className="icon" />
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a>Mitch</a> 
                                        </Link>
                                        <Link href="#">
                                            <a className="mr-1">2 others</a> 
                                        </Link>
                                        commented on your post.
                                        <div className="time">1 min ago</div>
                                    </div>
                                    <div className="content pt-0">
                                        <ul>
                                            <li><img src={require("../../images/user/7.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                            <li><img src={require("../../images/user/8.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                            <li><img src={require("../../images/user/1.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                        </ul>
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.Settings className="icon" />
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a>Mitch</a> 
                                        </Link>
                                        <Link href="#">
                                            <a className="mr-1">2 others</a> 
                                        </Link>
                                        updated their settings.
                                        <div className="time">4 min ago</div>
                                    </div>
                                    <div className="content pt-0">
                                        <ul>
                                            <li><img src={require("../../images/user/1.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                            <li><img src={require("../../images/user/2.jpg")} alt="User" className="wh-20 rounded-circle" /></li>
                                        </ul>
                                    </div>
                                </div>

                                <div className="list-group-item">
                                    <Icon.File className="icon" />
                                    <div className="pr-70">
                                        <Link href="#">
                                            <a>Philip Satemburgo</a> 
                                        </Link>
                                        <Link href="#">
                                            <a className="mr-1">2 others</a> 
                                        </Link>
                                        quit his job.
                                        <div className="time">4 min ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-6">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one media">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/user/1.jpg")} alt="User" className="mr-3 img-thumbnail" width="60" height="60" />
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">Aaron Rossi</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">0 seconds ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/2.jpg")} alt="User" className="rounded-circle img-thumbnail" width="60" height="60" />
                                            <span className="status online right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">Marco Gomez</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">0 seconds ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/3.jpg")} alt="User" className="rounded-circle" width="60" height="60" />
                                            <span className="status online right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">Brad Joe</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">0 seconds ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one media">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/user/4.jpg")} alt="User" className="mr-3 img-thumbnail" width="60" height="60" />
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">Mitch Petty</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">0 seconds ago</span>
                                    </div>
                                </div>
                                <div className="notification-card-one mt-3 media">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/user/5.jpg")} alt="User" className="mr-3 img-thumbnail" width="60" height="60" />
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">George Petty</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">1 minutes ago</span>
                                    </div>
                                </div>
                                <div className="notification-card-one mt-3 media">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/user/6.jpg")} alt="User" className="mr-3 img-thumbnail" width="60" height="60" />
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">Petty Rossi</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">02.02.19 &nbsp; 08:00 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/7.jpg")} alt="User" className="rounded-circle img-thumbnail" width="60" height="60" />
                                            <span className="status online right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">Mitch Rossi</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">0 seconds ago</span>
                                    </div>
                                </div>

                                <div className="notification-card-one mt-3 media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/8.jpg")} alt="User" className="rounded-circle img-thumbnail" width="60" height="60" />
                                            <span className="status away right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">George Mitch</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">5 minutes ago</span>
                                    </div>
                                </div>

                                <div className="notification-card-one mt-3 media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/1.jpg")} alt="User" className="rounded-circle img-thumbnail" width="60" height="60" />
                                            <span className="status ofline right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">George Petty</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">02.02.19 &nbsp; 08:00 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/2.jpg")} alt="User" className="rounded-circle" width="60" height="60" />
                                            <span className="status online right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">George Mitch</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">0 seconds ago</span>
                                    </div>
                                </div>

                                <div className="notification-card-one mt-3 media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/3.jpg")} alt="User" className="rounded-circle" width="60" height="60" />
                                            <span className="status away right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">George Mitch</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">2 minutes ago</span>
                                    </div>
                                </div>

                                <div className="notification-card-one mt-3 media">
                                    <Link href="#">
                                        <a className="position-relative mr-3">
                                            <img src={require("../../images/user/4.jpg")} alt="User" className="rounded-circle" width="60" height="60" />
                                            <span className="status ofline right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <div className="media-body">
                                        <h5 className="fs-14 m-0">
                                            <Link href="#">
                                                <a className="global-color">George Mitch</a>
                                            </Link>
                                        </h5>
                                        <p className="mt-1 mb-1">Just sent a new comment!</p>
                                        <span className="gray-color">02.02.19 &nbsp; 08:00 AM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div className="row">
                    <div className="col-lg-4">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-two text-center">
                                    <Link href="#">
                                        <a>
                                            <img src={require("../../images/user/1.jpg")} alt="User" className="rounded-circle img-thumbnail" width="60" height="60" />
                                        </a>
                                    </Link>
                                    <h5 className="fs-14 mt-3 mb-0">
                                        <Link href="#">
                                            <a className="global-color">Aaron Rossi</a>
                                        </Link>
                                    </h5>
                                    <p className="mt-1 mb-1 mw-350">Just sent a new comment! Lorem Ipsum is simply dummy text of the.</p>
                                    <span className="gray-color fs-13">0 seconds ago</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-4">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one text-center">
                                    <Link href="#">
                                        <a className="position-relative d-inline-block">
                                            <img src={require("../../images/user/2.jpg")} alt="User" className="rounded-circle img-thumbnail" width="60" height="60" />
                                            <span className="status online right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <h5 className="fs-14 mt-3 mb-0">
                                        <Link href="#">
                                            <a className="global-color">Mitch Rossi</a>
                                        </Link>
                                    </h5>
                                    <p className="mt-1 mb-1 mw-350">Just sent a new comment! Lorem Ipsum is simply dummy text of the.</p>
                                    <span className="gray-color fs-13">5 minutes ago</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div className="col-lg-4">
                        <div className="card mb-30">
                            <div className="card-body">
                                <div className="notification-card-one text-center">
                                    <Link href="#">
                                        <a className="position-relative d-inline-block">
                                            <img src={require("../../images/user/3.jpg")} alt="User" className="rounded-circle img-thumbnail" width="60" height="60" />
                                            <span className="status ofline right-3 bottom-3"></span>
                                        </a>
                                    </Link>
                                    <h5 className="fs-14 mt-3 mb-0">
                                        <Link href="#">
                                            <a className="global-color">George Mitch</a>
                                        </Link>
                                    </h5>
                                    <p className="mt-1 mb-1 mw-350">Just sent a new comment! Lorem Ipsum is simply dummy text of the.</p>
                                    <span className="gray-color fs-13">03.03.19 &nbsp; 05:00 AM</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default NotificationsContent;