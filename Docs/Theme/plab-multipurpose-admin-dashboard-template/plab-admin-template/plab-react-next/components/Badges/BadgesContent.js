import React, { Component } from 'react';
import {Row, Col, Badge, Button} from 'react-bootstrap';

class BadgesContent extends Component {
    render() {
        return (
            <React.Fragment>
                {/* Heading size Badge */}
                <Row>
                    <Col lg={12}>
                        <div className="card mb-4">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Heading size</h5>
                                </div>

                                <h1>
                                    Example heading <Badge variant="primary">New</Badge>
                                </h1>
                                <h2>
                                    Example heading <Badge variant="primary">New</Badge>
                                </h2>
                                <h3>
                                    Example heading <Badge variant="primary">New</Badge>
                                </h3>
                                <h4>
                                    Example heading <Badge variant="primary">New</Badge>
                                </h4>
                                <h5>
                                    Example heading <Badge variant="primary">New</Badge>
                                </h5>
                                <h6>
                                    Example heading <Badge variant="primary">New</Badge>
                                </h6>
                            </div>
                        </div>
                    </Col>
                </Row>
                {/* End Heading size Badge */}

                {/* Counter Badge */}
                <Row>
                    <Col lg={12}>
                        <div className="card mb-4">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Counter Badges</h5>
                                </div>

                                <Button variant="outline-primary" className="mt-2 mr-3">
                                    Notifications <Badge variant="primary">9</Badge>
                                    <span className="sr-only">unread messages</span>
                                </Button>

                                <Button variant="outline-secondary" className="mt-2 mr-3">
                                    Notifications <Badge variant="secondary">9</Badge>
                                    <span className="sr-only">unread messages</span>
                                </Button>

                                <Button variant="outline-success" className="mt-2 mr-3">
                                    Notifications <Badge variant="success">9</Badge>
                                    <span className="sr-only">unread messages</span>
                                </Button>

                                <Button variant="outline-danger" className="mt-2 mr-3">
                                    Notifications <Badge variant="danger">9</Badge>
                                    <span className="sr-only">unread messages</span>
                                </Button>

                                <Button variant="outline-warning" className="mt-2 mr-3">
                                    Notifications <Badge variant="warning">9</Badge>
                                    <span className="sr-only">unread messages</span>
                                </Button>

                                <Button variant="outline-info" className="mt-2 mr-3">
                                    Notifications <Badge variant="info">9</Badge>
                                    <span className="sr-only">unread messages</span>
                                </Button>

                                <Button variant="outline-dark" className="mt-2 mr-3">
                                    Notifications <Badge variant="dark">9</Badge>
                                    <span className="sr-only">unread messages</span>
                                </Button>
                            </div>
                        </div>
                    </Col>
                </Row>
                {/* End Counter Badge */}

                {/* Badges with Pills */}
                <Row>
                    <Col lg={12}>
                        <div className="card mb-4">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Badges with Pills</h5>
                                </div>

                                <Badge pill variant="primary" className="mt-2 mr-3">
                                    Primary
                                </Badge>

                                <Badge pill variant="secondary" className="mt-2 mr-3">
                                    Secondary
                                </Badge>

                                <Badge pill variant="success" className="mt-2 mr-3">
                                    Success
                                </Badge>

                                <Badge pill variant="danger" className="mt-2 mr-3">
                                    Danger
                                </Badge>

                                <Badge pill variant="warning" className="mt-2 mr-3">
                                    Warning
                                </Badge>

                                <Badge pill variant="info" className="mt-2 mr-3">
                                    Info
                                </Badge>

                                <Badge pill variant="light" className="mt-2 mr-3">
                                    Light
                                </Badge>

                                <Badge pill variant="dark" className="mt-2 mr-3">
                                    Dark
                                </Badge>
                            </div>
                        </div>
                    </Col>
                </Row>
                {/* End Badges with Pills */}

                {/* Default Badges */}
                <Row>
                    <Col lg={12}>
                        <div className="card mb-4">
                            <div className="card-body">
                                <div className="card-header">
                                    <h5 className="card-title">Default Badges</h5>
                                </div>
                                <Badge variant="primary" className="mt-2 mr-3">Primary</Badge>
                                <Badge variant="secondary" className="mt-2 mr-3">Secondary</Badge>
                                <Badge variant="success" className="mt-2 mr-3">Success</Badge>
                                <Badge variant="danger" className="mt-2 mr-3">Danger</Badge>
                                <Badge variant="warning" className="mt-2 mr-3">Warning</Badge>
                                <Badge variant="info" className="mt-2 mr-3">Info</Badge>
                                <Badge variant="light" className="mt-2 mr-3">Light</Badge>
                                <Badge variant="dark" className="mt-2 mr-23">Dark</Badge>
                            </div>
                        </div>
                    </Col>
                </Row>
                {/* End Default Badges */}
            </React.Fragment>
        );
    }
}

export default BadgesContent;