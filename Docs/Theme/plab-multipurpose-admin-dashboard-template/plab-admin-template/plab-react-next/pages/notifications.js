import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import NotificationsContent from '../components/Notifications/NotificationsContent';
import Footer from '../components/Layouts/Footer';

class Notifications extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Notifications" home="Dashboard" page="Notifications" />

                    {/* Notifications Content */}
                    <NotificationsContent />

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default Notifications;