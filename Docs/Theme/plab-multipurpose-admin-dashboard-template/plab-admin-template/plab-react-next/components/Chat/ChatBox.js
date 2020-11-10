import React, { Component } from 'react';
import {Row, Col, Tab, Nav, Image, Form} from 'react-bootstrap';
import Link from 'next/link';
import * as Icon from 'react-feather';

class ChatBox extends Component {
    render() {
        return (
            <Tab.Container id="left-tabs-example" defaultActiveKey="chat">
                <Row className="mb-4">
                    <Col xl={12}>
                        <Tab.Content className="inbox-content-wrap">
                            <Tab.Pane eventKey="chat">
                                <Tab.Container id="left-tabs-example" defaultActiveKey="chatOne">
                                    <Row>
                                        <Col md={4}>
                                            {/* Chat item nav */}
                                            <div className="mail-item-nav">
                                                {/* Search form */}
                                                <Form className="search-contact">
                                                    <Form.Control type="text" placeholder="Search..." />
                                                </Form>
                                                {/* End search form */}

                                                <Nav variant="pills" className="flex-column">
                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatOne">
                                                            <Image className="wh-30" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <span className="status online"></span>

                                                            <div className="info">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Welcome to React World</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>
                                                    
                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatTwo">
                                                            <Image className="wh-30" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <span className="status online"></span>

                                                            <div className="info">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>Lorem Ipsum is simply dummy...</p>
                                                                <span className="date">Mar 2, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>

                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatThree">
                                                            <Image className="wh-30" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                            <span className="status online"></span>

                                                            <div className="info">
                                                                <div className="name">Brad Joe</div>
                                                                <p>New order informations</p>
                                                                <span className="date">Mar 3, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>

                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatFour">
                                                            <Image className="wh-30" src={require("../../images/user/4.jpg")} alt="User" roundedCircle />
                                                            <span className="status online"></span>

                                                            <div className="info">
                                                                <div className="name">Mitch Petty</div>
                                                                <p>Lorem Ipsum is simply dummy...</p>
                                                                <span className="date">Mar 4, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>

                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatFive">
                                                            <Image className="wh-30" src={require("../../images/user/5.jpg")} alt="User" roundedCircle />
                                                            <span className="status away"></span>

                                                            <div className="info">
                                                                <div className="name">George Petty</div>
                                                                <p>Lorem Ipsum is simply dummy...</p>
                                                                <span className="date">Mar 5, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>

                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatSix">
                                                            <Image className="wh-30" src={require("../../images/user/6.jpg")} alt="User" roundedCircle />
                                                            <span className="status away"></span>

                                                            <div className="info">
                                                                <div className="name">Petty Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy...</p>
                                                                <span className="date">Mar 6, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>

                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatSeven">
                                                            <Image className="wh-30" src={require("../../images/user/7.jpg")} alt="User" roundedCircle />
                                                            <span className="status ofline"></span>

                                                            <div className="info">
                                                                <div className="name">George Petty</div>
                                                                <p>Lorem Ipsum is simply dummy...</p>
                                                                <span className="date">Mar 7, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>
                                                    
                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatEight">
                                                            <Image className="wh-30" src={require("../../images/user/8.jpg")} alt="User" roundedCircle />
                                                            <span className="status ofline"></span>

                                                            <div className="info">
                                                                <div className="name">Mitch Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy...</p>
                                                                <span className="date">Mar 8, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>

                                                    <Nav.Item>
                                                        <Nav.Link eventKey="chatNine">
                                                            <Image className="wh-30" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                            <span className="status ofline"></span>

                                                            <div className="info">
                                                                <div className="name">Brad Joe</div>
                                                                <p>New order informations</p>
                                                                <span className="date">Mar 9, 2019</span>
                                                            </div>
                                                        </Nav.Link>
                                                    </Nav.Item>
                                                </Nav>
                                            </div>
                                            {/* End Chat item nav */}
                                        </Col>

                                        <Col md={8}>
                                            <Tab.Content>
                                                {/* chatOne */}
                                                <Tab.Pane eventKey="chatOne" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">Aaron Rossi</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}


                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatOne */}

                                                {/* chatTwo */}
                                                <Tab.Pane eventKey="chatTwo" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">Marco Gomez</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}


                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatTwo */}

                                                {/* chatThree */}
                                                <Tab.Pane eventKey="chatThree" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">Brad Joe</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}


                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatThree */}

                                                {/* chatFour */}
                                                <Tab.Pane eventKey="chatFour" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/4.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">Mitch Petty</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End EmailFour */}

                                                {/* chatFive */}
                                                <Tab.Pane eventKey="chatFive" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/5.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">George Petty</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatFive */}

                                                {/* chatSix */}
                                                <Tab.Pane eventKey="chatSix" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">Petty Rossi</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatSix */}

                                                {/* chatSeven */}
                                                <Tab.Pane eventKey="chatSeven" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">George Petty</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatSeven */}

                                                {/* chatEight */}
                                                <Tab.Pane eventKey="chatEight" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">Mitch Rossi</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatEight */}

                                                {/* chatNine */}
                                                <Tab.Pane eventKey="chatNine" className="relative">
                                                    <div className="email-details-warp chat-details-warp">
                                                        <div className="d-flex">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/5.jpg")} alt="User" roundedCircle />
                                                            <div className="info">
                                                                <div className="name mt-2 fs-15">Brad Joe</div>
                                                            </div>
                                                        </div>

                                                        <hr/>

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}

                                                        {/* Chat list right */}
                                                        <div className="chat-list-right">
                                                            <Image className="wh-40" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Aaron Rossi</div>
                                                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list right */}

                                                        {/* Chat list left */}
                                                        <div className="chat-list-left">
                                                            <Image className="wh-40 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                            <div className="chat-details">
                                                                <div className="name">Marco Gomez</div>
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                                <span className="date">Mar 1, 2019</span>
                                                            </div>
                                                        </div>
                                                        {/* End Chat list left */}
                                                    </div>

                                                    <div className="chat-box">
                                                        <Form>
                                                            <Form.Control as="textarea" rows="3" placeholder="Type a message here" />

                                                            <ul className="list-inline d-flex align-items-center mb-0">
                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray" data-toggle="tooltip" data-original-title="Emoji">
                                                                            <Icon.Smile className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li> 

                                                                <li className="list-inline-item mr-3">
                                                                    <Link href="#">
                                                                        <a className="text-gray font-size-20" data-toggle="tooltip"  data-original-title="Attachment">
                                                                            <Icon.Paperclip className="wh-20 primary-color"/> 
                                                                        </a>
                                                                    </Link>
                                                                </li>    

                                                                <li className="list-inline-item">
                                                                    <button className="btn btn-primary">
                                                                        <span className="mr-1">Send</span>
                                                                        <Icon.Send className="wh-15"/> 
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </Form>
                                                    </div>
                                                </Tab.Pane>
                                                {/* End chatNine */}
                                            </Tab.Content>
                                        </Col>
                                    </Row>
                                </Tab.Container>
                            </Tab.Pane>
                        </Tab.Content>
                    </Col>
                </Row>
            </Tab.Container>
        );
    }
}

export default ChatBox;