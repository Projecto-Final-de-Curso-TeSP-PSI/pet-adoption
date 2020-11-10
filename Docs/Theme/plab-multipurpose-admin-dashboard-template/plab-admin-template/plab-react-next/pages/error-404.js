import React, { Component } from 'react';

class Error404 extends Component {
    render() {
        return (
            <React.Fragment>
                <div className="page-wrapper">
                    <div className="error-content">
                        <div className="d-table">
                            <div className="d-tablecell">
                                <i data-feather="frown" className="icon"></i>
                                <h1>404</h1>
                                <h4>Page not found</h4>
                                <p>The page you are looking for was moved, removed, renamed or might never exist!</p>
                                <a className="back-link" href="/">Back to Home Page</a>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

export default Error404;