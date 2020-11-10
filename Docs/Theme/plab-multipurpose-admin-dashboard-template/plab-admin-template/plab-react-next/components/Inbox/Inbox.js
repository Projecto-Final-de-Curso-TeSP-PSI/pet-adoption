import React, { Component } from 'react';
import {Row, Col, Tab, Nav, Image, Button} from 'react-bootstrap';
import * as Icon from 'react-feather';
import ComposeModal from './ComposeModal';
import ReplayModal from './ReplayModal';

class Inbox extends Component {
    render() {
        return (
            <React.Fragment>
                {/* Inbox */}
                <Tab.Container id="left-tabs-example" defaultActiveKey="inbox">
                    <Row className="mb-4">
                        <Col xl={2}>
                            {/* Inbox main sidebar */}
                            <div className="inbox-main-sidebar">
                                <div className="compose">
                                    {/* components/inbox/ComposeModal.js */}
                                    <ComposeModal />
                                </div>

                                <Nav variant="pills" className="flex-column">
                                    <Nav.Item>
                                        <Nav.Link eventKey="inbox">
                                            <Icon.Inbox 
                                                className="icon wh-15 mt-minus-3 mr-2" 
                                            />
                                            Inbox 
                                            <span className="fr">(5)</span>
                                        </Nav.Link>
                                    </Nav.Item>
                                    
                                    <Nav.Item>
                                        <Nav.Link eventKey="sent">
                                            <Icon.Send 
                                                className="icon wh-15 mt-minus-3 mr-2" 
                                            />
                                            Sent 
                                            <span className="fr">(3)</span>
                                        </Nav.Link>
                                    </Nav.Item>

                                    <Nav.Item>
                                        <Nav.Link eventKey="drafts">
                                            <Icon.FileText 
                                                className="icon wh-15 mt-minus-3 mr-2" 
                                            /> 
                                            Drafts 
                                            <span className="fr">(2)</span>
                                        </Nav.Link>
                                    </Nav.Item>

                                    <Nav.Item>
                                        <Nav.Link eventKey="starred">
                                            <Icon.Star 
                                                className="icon wh-15 mt-minus-3 mr-2" 
                                            /> 
                                            Starred 
                                            <span className="fr">(2)</span>
                                        </Nav.Link>
                                    </Nav.Item>

                                    <Nav.Item>
                                        <Nav.Link eventKey="spam">
                                            <Icon.AlertOctagon 
                                                className="icon wh-15 mt-minus-3 mr-2" 
                                            />
                                            Spam 
                                            <span className="fr">(2)</span>
                                        </Nav.Link>
                                    </Nav.Item>

                                    <Nav.Item>
                                        <Nav.Link eventKey="trash">
                                            <Icon.Trash2 
                                                className="icon wh-15 mt-minus-3 mr-2" 
                                            />
                                            Trash 
                                            <span className="fr">(2)</span>
                                        </Nav.Link>
                                    </Nav.Item>
                                </Nav>
                            </div>
                            {/* End Inbox main sidebar */}
                        </Col>

                        <Col xl={10}>
                            <Tab.Content className="inbox-content-wrap">
                                {/* Inbox Email */}
                                <Tab.Pane eventKey="inbox">
                                    <Tab.Container id="left-tabs-example" defaultActiveKey="EmailOne">
                                        <Row>
                                            <Col md={4}>
                                                {/* Mail item nav */}
                                                <div className="mail-item-nav">
                                                    <Nav variant="pills" className="flex-column">
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="EmailOne">
                                                                <Image className="wh-30" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Aaron Rossi</div>
                                                                    <p>Welcome to React World</p>
                                                                    <span className="date">Mar 1, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                        
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="EmailTwo">
                                                                <Image className="wh-30" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Marco Gomez</div>
                                                                    <p>Lorem Ipsum is simply dummy...</p>
                                                                    <span className="date">Mar 2, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>

                                                        <Nav.Item>
                                                            <Nav.Link eventKey="EmailThree">
                                                                <Image className="wh-30" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Brad Joe</div>
                                                                    <p>New order informations</p>
                                                                    <span className="date">Mar 3, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>

                                                        <Nav.Item>
                                                            <Nav.Link eventKey="EmailFour">
                                                                <Image className="wh-30" src={require("../../images/user/4.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Mitch Petty</div>
                                                                    <p>Lorem Ipsum is simply dummy...</p>
                                                                    <span className="date">Mar 4, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>

                                                        <Nav.Item>
                                                            <Nav.Link eventKey="EmailFive">
                                                                <Image className="wh-30" src={require("../../images/user/5.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">George Petty</div>
                                                                    <p>Lorem Ipsum is simply dummy...</p>
                                                                    <span className="date">Mar 5, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                    </Nav>
                                                </div>
                                                {/* End Mail item nav */}
                                            </Col>

                                            <Col md={8}>
                                                <Tab.Content>
                                                    {/* Email One */}
                                                    <Tab.Pane eventKey="EmailOne">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Aaron Rossi</div>
                                                                    <p className="fs-11 m-0">Mar 1, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Welcome to React World</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End Email One */}

                                                    {/* EmailTwo */}
                                                    <Tab.Pane eventKey="EmailTwo">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Marco Gomez</div>
                                                                    <p className="fs-11 m-0">Mar 2, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End EmailTwo */}

                                                    {/* EmailThree */}
                                                    <Tab.Pane eventKey="EmailThree">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Brad Joe</div>
                                                                    <p className="fs-11 m-0">Mar 3, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">New order informations</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal /> 
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End EmailThree */}

                                                    {/* EmailFour */}
                                                    <Tab.Pane eventKey="EmailFour">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/4.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Mitch Petty</div>
                                                                    <p className="fs-11 m-0">Mar 4, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End EmailFour */}

                                                    {/* EmailFive */}
                                                    <Tab.Pane eventKey="EmailFive">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/5.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">George Petty</div>
                                                                    <p className="fs-11 m-0">Mar 5, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End EmailFive */}
                                                </Tab.Content>
                                            </Col>
                                        </Row>
                                    </Tab.Container>
                                </Tab.Pane>
                                {/* End Inbox Email */}

                                {/* Sent Email */}
                                <Tab.Pane eventKey="sent">
                                    <Tab.Container id="left-tabs-example" defaultActiveKey="SentEmailOne">
                                        <Row>
                                            <Col md={4}>
                                                {/* Mail item nav */}
                                                <div className="mail-item-nav">
                                                    <Nav variant="pills" className="flex-column">
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="SentEmailOne">
                                                                <Image className="wh-30" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Aaron Rossi</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 1, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                        
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="SentEmailTwo">
                                                                <Image className="wh-30" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Anis Mashku</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 2, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>

                                                        <Nav.Item>
                                                            <Nav.Link eventKey="SentEmailThree">
                                                                <Image className="wh-30" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Aris Mamo</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 3, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                    </Nav>
                                                </div>
                                                {/* End Mail item nav */}
                                            </Col>

                                            <Col md={8}>
                                                <Tab.Content>
                                                    {/* SentEmailOne */}
                                                    <Tab.Pane eventKey="SentEmailOne">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Mitch Rossi</div>
                                                                    <p className="fs-11 m-0">Mar 1, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End SentEmailOne */}

                                                    {/* SentEmailTwo */}
                                                    <Tab.Pane eventKey="SentEmailTwo">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Anis Mashku</div>
                                                                    <p className="fs-11 m-0">Mar 2, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End SentEmailTwo */}

                                                    {/* SentEmailThree */}
                                                    <Tab.Pane eventKey="SentEmailThree">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/3.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Aris Mamo</div>
                                                                    <p className="fs-11 m-0">Mar 3, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End SentEmailThree */}
                                                </Tab.Content>
                                            </Col>
                                        </Row>
                                    </Tab.Container>
                                </Tab.Pane>
                                {/* End Sent Email */}

                                {/* Drafts Email */}
                                <Tab.Pane eventKey="drafts">
                                    <Tab.Container id="left-tabs-example" defaultActiveKey="DraftEmailOne">
                                        <Row>
                                            <Col md={4}>
                                                {/* Mail item nav */}
                                                <div className="mail-item-nav">
                                                    <Nav variant="pills" className="flex-column">
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="DraftEmailOne">
                                                                <Image className="wh-30" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Aaron Rossi</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 1, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                        
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="DraftEmailTwo">
                                                                <Image className="wh-30" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Anis Mashku</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 2, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                    </Nav>
                                                </div>
                                                {/* End Mail item nav */}
                                            </Col>

                                            <Col md={8}>
                                                <Tab.Content>
                                                    {/* DraftEmailOne */}
                                                    <Tab.Pane eventKey="DraftEmailOne">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Mitch Rossi</div>
                                                                    <p className="fs-11 m-0">Mar 1, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End DraftEmailOne */}

                                                    {/* DraftEmailTwo */}
                                                    <Tab.Pane eventKey="DraftEmailTwo">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Anis Mashku</div>
                                                                    <p className="fs-11 m-0">Mar 2, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End DraftEmailTwo */}
                                                </Tab.Content>
                                            </Col>
                                        </Row>
                                    </Tab.Container>
                                </Tab.Pane>
                                {/* End Drafts Email */}

                                {/* Starred Email */}
                                <Tab.Pane eventKey="starred">
                                    <Tab.Container id="left-tabs-example" defaultActiveKey="StarredEmailOne">
                                        <Row>
                                            <Col md={4}>
                                                {/* Mail item nav */}
                                                <div className="mail-item-nav">
                                                    <Nav variant="pills" className="flex-column">
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="StarredEmailOne">
                                                                <Image className="wh-30" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Aaron Rossi</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 1, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                        
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="StarredEmailTwo">
                                                                <Image className="wh-30" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Anis Mashku</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 2, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                    </Nav>
                                                </div>
                                                {/* End Mail item nav */}
                                            </Col>

                                            <Col md={8}>
                                                <Tab.Content>
                                                    {/* StarredEmailOne */}
                                                    <Tab.Pane eventKey="StarredEmailOne">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Mitch Rossi</div>
                                                                    <p className="fs-11 m-0">Mar 1, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End StarredEmailOne */}

                                                    {/* StarredEmailTwo */}
                                                    <Tab.Pane eventKey="StarredEmailTwo">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Anis Mashku</div>
                                                                    <p className="fs-11 m-0">Mar 2, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                {/* components/inbox/ReplayModal.js */}
                                                                <ReplayModal />
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End StarredEmailTwo */}
                                                </Tab.Content>
                                            </Col>
                                        </Row>
                                    </Tab.Container>
                                </Tab.Pane>
                                {/* End Starred Email */}

                                {/* Spam Email */}
                                <Tab.Pane eventKey="spam">
                                    <Tab.Container id="left-tabs-example" defaultActiveKey="SpamEmailOne">
                                        <Row>
                                            <Col md={4}>
                                                {/* Mail item nav */}
                                                <div className="mail-item-nav">
                                                    <Nav variant="pills" className="flex-column">
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="SpamEmailOne">
                                                                <Image className="wh-30" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Aaron Rossi</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 1, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                        
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="SpamEmailTwo">
                                                                <Image className="wh-30" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Anis Mashku</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 2, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                    </Nav>
                                                </div>
                                                {/* End Mail item nav */}
                                            </Col>

                                            <Col md={8}>
                                                <Tab.Content>
                                                    {/* SpamEmailOne */}
                                                    <Tab.Pane eventKey="SpamEmailOne">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Mitch Rossi</div>
                                                                    <p className="fs-11 m-0">Mar 1, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End DraftEmailOne */}

                                                    {/* SpamEmailTwo */}
                                                    <Tab.Pane eventKey="SpamEmailTwo">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Anis Mashku</div>
                                                                    <p className="fs-11 m-0">Mar 2, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End SpamEmailTwo */}
                                                </Tab.Content>
                                            </Col>
                                        </Row>
                                    </Tab.Container>
                                </Tab.Pane>
                                {/* End Spam Email */}

                                {/* Trash Email */}
                                <Tab.Pane eventKey="trash">
                                    <Tab.Container id="left-tabs-example" defaultActiveKey="TrashEmailOne">
                                        <Row>
                                            <Col md={4}>
                                                {/* Mail item nav */}
                                                <div className="mail-item-nav">
                                                    <Nav variant="pills" className="flex-column">
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="TrashEmailOne">
                                                                <Image className="wh-30" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Aaron Rossi</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 1, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                        
                                                        <Nav.Item>
                                                            <Nav.Link eventKey="TrashEmailTwo">
                                                                <Image className="wh-30" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name">Anis Mashku</div>
                                                                    <p>Lorem Ipsum is simply...</p>
                                                                    <span className="date">Mar 2, 2019</span>
                                                                </div>
                                                            </Nav.Link>
                                                        </Nav.Item>
                                                    </Nav>
                                                </div>
                                                {/* End Mail item nav */}
                                            </Col>

                                            <Col md={8}>
                                                <Tab.Content>
                                                    {/* TrashEmailOne */}
                                                    <Tab.Pane eventKey="TrashEmailOne">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/1.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Mitch Rossi</div>
                                                                    <p className="fs-11 m-0">Mar 1, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End TrashEmailOne */}

                                                    {/* TrashEmailTwo */}
                                                    <Tab.Pane eventKey="TrashEmailTwo">
                                                        <div className="email-details-warp">
                                                            <div className="d-flex">
                                                                <Image className="wh-30 mr-2" src={require("../../images/user/2.jpg")} alt="User" roundedCircle />
                                                                <div className="info">
                                                                    <div className="name line-height-1">Anis Mashku</div>
                                                                    <p className="fs-11 m-0">Mar 2, 2019</p>
                                                                </div>
                                                            </div>

                                                            <h6 className="mt-3 fw-400">Lorem Ipsum is simply dummy</h6>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p> 
                                                            <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                                                            <br />

                                                            <p>Thanks! <br /> <b>Marco Gomez</b></p>

                                                            <div className="inbox-topbar">
                                                                <Button variant="outline-danger">Delete</Button>
                                                            </div>
                                                        </div>
                                                    </Tab.Pane>
                                                    {/* End TrashEmailTwo */}
                                                </Tab.Content>
                                            </Col>
                                        </Row>
                                    </Tab.Container>
                                </Tab.Pane>
                                {/* End Trash Email */}
                            </Tab.Content>
                        </Col>
                    </Row>
                </Tab.Container>
            </React.Fragment>
        );
    }
}

export default Inbox;