import React, { Component } from 'react';
import {Modal} from 'react-bootstrap';
import * as Icon from 'react-feather';
import Colors from './Colors';

class ThemeCustomizerModal extends Component {

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
                <div className="customizer-toggle" onClick={this.handleShow}>
                    <Icon.Settings className="spin icon mt-minus-2" /> 
                </div>

                <Modal className="right color-customizer-modal" show={this.state.show} onHide={this.handleClose}>
                    <Modal.Header closeButton>
                        <Modal.Title>
                            Theme Color Customizer
                        </Modal.Title>
                    </Modal.Header>

                    <Modal.Body>
                        {/* Left SideMenu Color Switcher */}
                        <Colors />
                    </Modal.Body>
                </Modal>
            </React.Fragment>
        );
    }
}

export default ThemeCustomizerModal;