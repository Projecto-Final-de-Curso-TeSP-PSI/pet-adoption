import React, { Component } from 'react';
import {ProgressBar} from 'react-bootstrap';

class DefaultProgressBar extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Default Progress Bar</h5>
                    </div>

                    <ProgressBar 
                        variant="primary" 
                        now={50} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        variant="secondary" 
                        now={55} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        variant="success" 
                        now={60} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        variant="warning" 
                        now={65} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        variant="danger" 
                        now={70} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        variant="info" 
                        now={75} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        variant="dark" 
                        now={80} 
                        className="mt-3 radius-0"
                    />
                </div>
            </div>
        );
    }
}

export default DefaultProgressBar;