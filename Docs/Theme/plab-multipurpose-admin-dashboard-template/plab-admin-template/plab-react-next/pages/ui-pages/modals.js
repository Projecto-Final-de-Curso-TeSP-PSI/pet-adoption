import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import BasicModal from '../../components/Modals/BasicModal';
import VerticallyCenteredModal from '../../components/Modals/VerticallyCenteredModal';
import ModalWithGrid from '../../components/Modals/ModalWithGrid';
import ExtraLargeAndSmallModal from '../../components/Modals/ExtraLargeAndSmallModal';
import ScrollAbleModal from '../../components/Modals/ScrollAbleModal';
import Footer from '../../components/Layouts/Footer';

class Modals extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Modals" home="Dashboard" page="Modals" />

                    <div className="row">
                        <div className="col-lg-6">
                            <BasicModal />
                        </div>

                        <div className="col-lg-6">
                            <VerticallyCenteredModal />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-6">
                            <ModalWithGrid />
                        </div>
                        
                        <div className="col-lg-6">
                            <ExtraLargeAndSmallModal />
                        </div>

                        <div className="col-lg-12">
                            <ScrollAbleModal />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default Modals;