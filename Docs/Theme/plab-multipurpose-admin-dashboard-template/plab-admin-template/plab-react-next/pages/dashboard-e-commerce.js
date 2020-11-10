import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import StatsCard from '../components/DashboardeCommerce/StatsCard';
import OrderSummary from '../components/DashboardeCommerce/OrderSummary';
import OrderStats from '../components/DashboardeCommerce/OrderStats';
import RecentOrders from '../components/DashboardeCommerce/RecentOrders';
import NewCustomers from '../components/DashboardeCommerce/NewCustomers';
import PriceMovements from '../components/DashboardeCommerce/PriceMovements';
import ProductsOfTheMonth from '../components/DashboardeCommerce/ProductsOfTheMonth';
import SocialMarketing from '../components/DashboardeCommerce/SocialMarketing';
import Footer from '../components/Layouts/Footer';

class DashboardeCommerce extends Component {

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
                    <Breadcrumb url="/dashboard-e-commerce" mainPage="eCommerce" home="Dashboard" page="eCommerce" />

                    {/* Stats Card */}
                    <StatsCard />

                    {/* Order Summary & Order Stats */}
                    <div className="row">
                        <div className="col-lg-8">
                            <OrderSummary />
                        </div>
                        <div className="col-lg-4">
                            <OrderStats />
                        </div>
                    </div>

                    {/* Recent Orders Table */}
                    <RecentOrders />

                    {/* New Customers & Price Movements */}
                    <div className="row">
                        <div className="col-lg-4">
                            <NewCustomers />
                        </div>
                        <div className="col-lg-8">
                            <PriceMovements />
                        </div>
                    </div>

                    {/* Products of the Month & Social Marketing */}
                    <div className="row">
                        <div className="col-lg-12 col-xl-8">
                            <ProductsOfTheMonth />
                        </div>
                        <div className="col-lg-12 col-xl-4">
                            <SocialMarketing />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default DashboardeCommerce;