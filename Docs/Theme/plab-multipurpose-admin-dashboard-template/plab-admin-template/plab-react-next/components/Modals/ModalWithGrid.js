import React, { Component } from 'react';
import { Modal, Container, Row, Col, ButtonToolbar, Button} from 'react-bootstrap';

class DefaultModal extends Component {
    render() {
        return (
            <Modal {...this.props} size="lg" aria-labelledby="contained-modal-title-vcenter">
                <Modal.Header closeButton>
                    <Modal.Title id="contained-modal-title-vcenter">
                        Using Grid in Modal
                    </Modal.Title>
                </Modal.Header>

                <Modal.Body>
                    <Container>
                        <Row className="show-grid">
                            <Col xs={12} md={8}>
                                <code>.col-xs-12 .col-md-8</code>
                            </Col>
                            <Col xs={6} md={4}>
                                <code>.col-xs-6 .col-md-4</code>
                            </Col>
                        </Row>

                        <Row className="show-grid">
                            <Col xs={6} md={4}>
                                <code>.col-xs-6 .col-md-4</code>
                            </Col>
                            <Col xs={6} md={4}>
                                <code>.col-xs-6 .col-md-4</code>
                            </Col>
                            <Col xs={6} md={4}>
                                <code>.col-xs-6 .col-md-4</code>
                            </Col>
                        </Row>
                    </Container>
                </Modal.Body>

                <Modal.Footer>
                    <Button onClick={this.props.onHide}>Close</Button>
                </Modal.Footer>
            </Modal>
        );
    }
}

class ModalWithGrid extends React.Component {

    state = { 
        modalShow: false,
    };

    render() {
        let modalClose = () => this.setState({ modalShow: false });
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Modal With Grid</h5>
                    </div>

                    <ButtonToolbar>
                        <Button
                            variant="primary"
                            onClick={() => this.setState({ modalShow: true })}
                        >
                            Launch Modal With Grid
                        </Button>
                        <DefaultModal show={this.state.modalShow} onHide={modalClose} />
                    </ButtonToolbar>
                </div>
            </div>
        );
    }
}

export default ModalWithGrid;