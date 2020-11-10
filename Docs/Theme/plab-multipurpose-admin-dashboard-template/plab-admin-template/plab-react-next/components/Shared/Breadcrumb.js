import React, { Component } from 'react';
import Link from 'next/link';

class Breadcrumb extends Component {
    render() {
        let { url, mainPage, home, page } = this.props;
        return (
            <div className="main-content-header">
                <h1>{mainPage}</h1>
                <ol className="breadcrumb">
                    <li className="breadcrumb-item">
                        <Link href={url}>
                            <a>{home}</a>
                        </Link>
                    </li>
                    <li className="breadcrumb-item active">
                        <span className="active">{page}</span>
                    </li>
                </ol>
            </div>
        );
    }
}

export default Breadcrumb;