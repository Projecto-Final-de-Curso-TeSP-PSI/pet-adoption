import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import DefaultProgressBar from '../../components/ProgressBars/DefaultProgressBar';
import ProgressBarWithLabel from '../../components/ProgressBars/ProgressBarWithLabel';
import StripedProgressBar from '../../components/ProgressBars/StripedProgressBar';
import AnimatedProgressBar from '../../components/ProgressBars/AnimatedProgressBar';
import StackedProgressBar from '../../components/ProgressBars/StackedProgressBar';
import Footer from '../../components/Layouts/Footer';

class ProgressBars extends Component {

    state = {
        sideMenu: true,
        loading: true
    };

    // Toggle side bar menu
    _onSideMenu = (active) => {
        this.setState({sideMenu: active});
    }

    render() {
        return (
            <React.Fragment>
                {/* Top Navbar */}
                <TopNavbar onClick={this._onSideMenu} />
                
                {/* Left Side Menu */}
                <LeftSideMenu sideMenu={this.state.sideMenu} />

                {/* Main Content Wrapper */}
                <div className={`main-content d-flex flex-column ${this.state.sideMenu ? 'hide-sidemenu' : ''}`}>
                    {/* Breadcrumb */}
                    <Breadcrumb url="/dashboard-sales" mainPage="Progress bars" home="Dashboard" page="Progress bars" />

                    <div className="row">
                        <div className="col-lg-6">
                            <DefaultProgressBar />
                        </div>

                        <div className="col-lg-6">
                            <ProgressBarWithLabel />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-6">
                            <StripedProgressBar />
                        </div>

                        <div className="col-lg-6">
                            <AnimatedProgressBar />
                        </div>

                        <div className="col-lg-12">
                            <StackedProgressBar />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default ProgressBars;