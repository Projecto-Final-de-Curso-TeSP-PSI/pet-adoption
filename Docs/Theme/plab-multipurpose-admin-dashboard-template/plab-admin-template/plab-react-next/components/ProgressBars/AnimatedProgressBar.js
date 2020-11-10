import React, { Component } from 'react';
import { ProgressBar } from 'react-bootstrap';

class AnimatedProgressBar extends Component {
    render() {
        return (
            <div className="card mb-4">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Animated Progress Bar</h5>
                    </div>

                    <ProgressBar 
                        animated 
                        variant="primary" 
                        now={50} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        animated 
                        variant="secondary" 
                        now={55} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        animated 
                        variant="success" 
                        now={60} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        animated 
                        variant="warning" 
                        now={65} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        animated 
                        variant="danger" 
                        now={70} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        animated 
                        variant="info" 
                        now={75} 
                        className="mt-3 radius-0"
                    />
                    <ProgressBar 
                        animated 
                        variant="dark" 
                        now={80} 
                        className="mt-3 radius-0"
                    />
                </div>
            </div>
        );
    }
}

export default AnimatedProgressBar;