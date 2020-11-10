import React, { Component } from 'react';

class Loader extends Component {
    render() {
        return (
            <div className={`preloader ${this.props.loading ? '' : 'preloader-deactivate'}`}>
                <div className="d-table">
                    <div className="d-tablecell">
                        <span className="loader">
                            <span className="loader-inner"></span>
                        </span>
                    </div>
                </div>
            </div>
        );
    }
}

export default Loader;