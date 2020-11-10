import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import WebsiteAnalytics from '../components/DashboardAnalytics/WebsiteAnalytics';
import VisitorsOverview from '../components/DashboardAnalytics/VisitorsOverview';
import Activity from '../components/DashboardAnalytics/Activity';
import ProductsOfTheMonth from '../components/DashboardAnalytics/ProductsOfTheMonth';
import RevenueByCountry from '../components/DashboardAnalytics/RevenueByCountry';
import LeadsStats from '../components/DashboardAnalytics/LeadsStats';
import Footer from '../components/Layouts/Footer';

class DashboardAnalytics extends Component {

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
                    <Breadcrumb url="/dashboard-analytics" mainPage="Analytics" home="Dashboard" page="Analytics" />

                    <div className="row">
                        <div className="col-lg-8">
                            <WebsiteAnalytics />
                        </div>
                        <div className="col-lg-4">
                            <VisitorsOverview />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-12 col-xl-4">
                            <Activity />
                        </div>
                        <div className="col-lg-12 col-xl-8">
                            <ProductsOfTheMonth />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-6">
                            <RevenueByCountry />
                        </div>
                        <div className="col-lg-6">
                            <LeadsStats />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default DashboardAnalytics;