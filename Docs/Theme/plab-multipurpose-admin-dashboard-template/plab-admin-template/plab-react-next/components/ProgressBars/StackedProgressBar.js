import React, { Component } from 'react';
import { ProgressBar } from 'react-bootstrap';

class StackedProgressBar extends Component {
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Stacked Progress Bar</h5>
                    </div>

                    <ProgressBar className="mt-3 radius-0">
                        <ProgressBar 
                            striped 
                            variant="primary" 
                            now={25} key={1} 
                        />
                        <ProgressBar 
                            variant="secondary" 
                            now={15} 
                            key={2} 
                        />
                        <ProgressBar 
                            striped 
                            variant="success" 
                            now={10} 
                            key={3} 
                        />
                    </ProgressBar>

                    <ProgressBar className="mt-3 radius-0">
                        <ProgressBar 
                            striped 
                            variant="success" 
                            now={30} key={1} 
                        />
                        <ProgressBar 
                            variant="warning" 
                            now={20} 
                            key={2} 
                        />
                        <ProgressBar 
                            striped 
                            variant="danger" 
                            now={15} 
                            key={3} 
                        />
                    </ProgressBar>

                    <ProgressBar className="mt-3 radius-0">
                        <ProgressBar 
                            striped 
                            variant="secondary" 
                            now={35} key={1} 
                        />
                        <ProgressBar 
                            variant="success" 
                            now={25} 
                            key={2} 
                        />
                        <ProgressBar 
                            striped 
                            variant="warning" 
                            now={15} 
                            key={3} 
                        />
                    </ProgressBar>

                    <ProgressBar className="mt-3 radius-0">
                        <ProgressBar 
                            striped 
                            variant="success" 
                            now={40} key={1} 
                        />
                        <ProgressBar 
                            variant="warning" 
                            now={30} 
                            key={2} 
                        />
                        <ProgressBar 
                            striped 
                            variant="danger" 
                            now={20} 
                            key={3} 
                        />
                    </ProgressBar>

                    <ProgressBar className="mt-3 radius-0">
                        <ProgressBar 
                            striped 
                            variant="warning" 
                            now={40} key={1} 
                        />
                        <ProgressBar 
                            variant="danger" 
                            now={35} 
                            key={2} 
                        />
                        <ProgressBar 
                            striped 
                            variant="info" 
                            now={25} 
                            key={3} 
                        />
                    </ProgressBar>
                </div>
            </div>
        );
    }
}

export default StackedProgressBar;