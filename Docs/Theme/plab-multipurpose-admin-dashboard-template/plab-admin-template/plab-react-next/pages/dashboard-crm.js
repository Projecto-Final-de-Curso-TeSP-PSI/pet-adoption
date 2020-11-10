import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import StatsCard from '../components/DashboardCrm/StatsCard';
import TotalSales from '../components/DashboardCrm/TotalSales';
import WeeklyTarget from '../components/DashboardCrm/WeeklyTarget';
import MarketingCampaigns from '../components/DashboardCrm/MarketingCampaigns';
import SocialMarketing from '../components/DashboardCrm/SocialMarketing';
import FinanceSales from '../components/DashboardCrm/FinanceSales';
import LatestTransactions from '../components/DashboardCrm/LatestTransactions';
import Footer from '../components/Layouts/Footer';

class DashboardCRM extends Component {

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
                    <Breadcrumb url="/dashboard-crm" mainPage="CRM" home="Dashboard" page="CRM" />

                    {/* Stats Card */}
                    <StatsCard />

                    {/* Total Sales & Weekly Target */}
                    <div className="row">
                        <div className="col-lg-12 col-xl-8">
                            <TotalSales />
                        </div>
                        <div className="col-lg-12 col-xl-4">
                            <WeeklyTarget />
                        </div>
                    </div>

                    {/* Campaigns & Social Marketing */}
                    <div className="row">
                        <div className="col-lg-12 col-xl-8">
                            <MarketingCampaigns />
                        </div>
                        <div className="col-lg-12 col-xl-4">
                            <SocialMarketing />
                        </div>
                    </div>

                    {/* Finance Sales & Latest Transactions */}
                    <div className="row">
                        <div className="col-lg-12 col-xl-4">
                            <FinanceSales />
                        </div>
                        <div className="col-lg-12 col-xl-8">
                            <LatestTransactions />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default DashboardCRM;