import React, { Component } from 'react';
import {Modal, Button, ButtonToolbar } from 'react-bootstrap';

class DefaultModal extends Component {
    render() {
        return (
            <Modal
                {...this.props}
                size="lg"
                aria-labelledby="contained-modal-title-vcenter"
                centered
            >
                <Modal.Header closeButton>
                    <Modal.Title id="contained-modal-title-vcenter">
                        Modal heading
                    </Modal.Title>
                </Modal.Header>

                <Modal.Body>
                    <h5>Centered Modal</h5>
                    <p>
                        Cras mattis consectetur purus sit amet fermentum. Cras justo odio,
                        dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta
                        ac consectetur ac, vestibulum at eros.
                    </p>
                </Modal.Body>

                <Modal.Footer>
                    <Button onClick={this.props.onHide}>Close</Button>
                </Modal.Footer>
            </Modal>
        );
    }
}
  
class VerticallyCenteredModal extends React.Component {
    
    state = { 
        modalShow: false 
    };
  
    render() {
        let modalClose = () => this.setState({ modalShow: false });

        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Vertically Centered Modal</h5>
                    </div>

                    <ButtonToolbar>
                        <Button
                            variant="primary"
                            onClick={() => this.setState({ modalShow: true })}
                        >
                            Vertically Centered Modal
                        </Button>

                        <DefaultModal
                            show={this.state.modalShow}
                            onHide={modalClose}
                        />
                    </ButtonToolbar>
                </div>
            </div>
        );
    }
}

export default VerticallyCenteredModal;