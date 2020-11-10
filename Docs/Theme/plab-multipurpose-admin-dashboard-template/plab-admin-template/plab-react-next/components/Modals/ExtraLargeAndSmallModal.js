import React, { Component } from 'react';
import {ButtonToolbar, Button, Modal} from 'react-bootstrap';

class ExtraLargeAndSmallModal extends Component {

    state = {
        xlShow: false,
        lgShow: false,
        smShow: false,
    };
  
    render() {
        let xlClose = () => this.setState({ xlShow: false });
        let lgClose = () => this.setState({ lgShow: false });
        let smClose = () => this.setState({ smShow: false });
        
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Extra Large, Large, Small Modal</h5>
                    </div>

                    <ButtonToolbar>
                        <Button onClick={() => this.setState({ xlShow: true })} className="mr-3">
                            Extra Large Modal
                        </Button>

                        <Button onClick={() => this.setState({ lgShow: true })} className="mr-3">
                            Large Modal
                        </Button>

                        <Button onClick={() => this.setState({ smShow: true })}>
                            Small Modal
                        </Button>
                        
                        <Modal
                            size="xl"
                            show={this.state.xlShow}
                            onHide={xlClose}
                            aria-labelledby="example-modal-sizes-title-lg"
                        >
                            <Modal.Header closeButton>
                                <Modal.Title id="example-modal-sizes-title-lg">
                                    Large Modal
                                </Modal.Title>
                            </Modal.Header>

                            <Modal.Body>
                                Woohoo, you're reading this text in a modal!
                            </Modal.Body>
                        </Modal>

                        <Modal
                            size="lg"
                            show={this.state.lgShow}
                            onHide={lgClose}
                            aria-labelledby="example-modal-sizes-title-lg"
                        >
                            <Modal.Header closeButton>
                                <Modal.Title id="example-modal-sizes-title-lg">
                                    Large Modal
                                </Modal.Title>
                            </Modal.Header>

                            <Modal.Body>
                                Woohoo, you're reading this text in a modal!
                            </Modal.Body>
                        </Modal>

                        <Modal
                            size="sm"
                            show={this.state.smShow}
                            onHide={smClose}
                            aria-labelledby="example-modal-sizes-title-sm"
                        >
                            <Modal.Header closeButton>
                                <Modal.Title id="example-modal-sizes-title-sm">
                                    Small Modal
                                </Modal.Title>
                            </Modal.Header>

                            <Modal.Body>
                                Woohoo, you're reading this text in a modal!
                            </Modal.Body>
                        </Modal>
                    </ButtonToolbar>
                </div>
            </div>
        );
    }
}

export default ExtraLargeAndSmallModal;