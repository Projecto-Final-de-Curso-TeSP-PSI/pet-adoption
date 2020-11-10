import React, { Component } from 'react';
import {Button, Modal} from 'react-bootstrap';

class BasicModal extends Component {

    state = {
        show: false
    };

    handleClose = () => {
        this.setState({ show: false });
    }
    handleShow = () => {
        this.setState({ show: true });
    }

    render() {
        return (
            <React.Fragment>
                <div className="card mb-30">
                    <div className="card-body">
                        <div className="card-header">
                            <h5 className="card-title">Basic Modal</h5>
                        </div>

                        <Button variant="primary" onClick={this.handleShow}>
                            Basic Modal
                        </Button>

                        <Modal show={this.state.show} onHide={this.handleClose}>
                            <Modal.Header closeButton>
                                <Modal.Title>Modal heading</Modal.Title>
                            </Modal.Header>

                            <Modal.Body>Woohoo, you're reading this text in a modal!</Modal.Body>

                            <Modal.Footer>
                                <Button variant="danger" onClick={this.handleClose}>
                                    Close
                                </Button>
                                <Button variant="primary" onClick={this.handleClose}>
                                    Save Changes
                                </Button>
                            </Modal.Footer>
                        </Modal>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default BasicModal;