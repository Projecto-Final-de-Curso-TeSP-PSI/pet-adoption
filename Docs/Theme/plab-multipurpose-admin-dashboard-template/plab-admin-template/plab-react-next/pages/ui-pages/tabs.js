import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import TabStyleOne from '../../components/Tabs/TabStyleOne';
import TabStyleTwo from '../../components/Tabs/TabStyleTwo';
import TabStyleThree from '../../components/Tabs/TabStyleThree';
import PillTab from '../../components/Tabs/PillTab';
import VerticalPillsTab from '../../components/Tabs/VerticalPillsTab';
import Footer from '../../components/Layouts/Footer';

class Tabs extends Component {
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
                    <Breadcrumb url="/dashboard-sales" mainPage="Tabs" home="Dashboard" page="Tabs" />

                    <div className="row">
                        <div className="col-lg-6">
                            <TabStyleOne />
                        </div>

                        <div className="col-lg-6">
                            <TabStyleTwo />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-6">
                            <TabStyleThree />
                        </div>

                        <div className="col-lg-6">
                            <PillTab />
                        </div>

                        <div className="col-lg-12">
                            <VerticalPillsTab />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default Tabs;