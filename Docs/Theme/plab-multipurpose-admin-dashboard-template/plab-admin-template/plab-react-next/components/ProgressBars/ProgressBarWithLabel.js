import React, { Component } from 'react';
import {ProgressBar} from 'react-bootstrap';

class ProgressBarWithLabel extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Progress Bar With Label</h5>
                    </div>

                    <ProgressBar 
                        label={`${50}%`} 
                        variant="primary" 
                        now={50} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        label={`${55}%`} 
                        variant="secondary" 
                        now={55} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        label={`${60}%`} 
                        variant="success" 
                        now={60} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        label={`${65}%`} 
                        variant="warning" 
                        now={65} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        label={`${70}%`} 
                        variant="danger" 
                        now={70} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        label={`${75}%`} 
                        variant="info" 
                        now={75} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        label={`${80}%`} 
                        variant="dark" 
                        now={80} 
                        className="mt-3 radius-0"
                    />
                </div>
            </div>
        );
    }
}

export default ProgressBarWithLabel;