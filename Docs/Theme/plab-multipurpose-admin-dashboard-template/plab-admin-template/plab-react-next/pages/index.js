import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import StatsCard from '../components/DashboardSales/StatsCard';
import MonthlyRevenueChart from '../components/DashboardSales/MonthlyRevenueChart';
import Overview from '../components/DashboardSales/Overview';
import SalesByCountries from '../components/DashboardSales/SalesByCountries';
import RecentOrders from '../components/DashboardSales/RecentOrders';
import DailyStatsCard from '../components/DashboardSales/DailyStatsCard';
import TopRatedProducts from '../components/DashboardSales/TopRatedProducts';
import BestSellersProducts from '../components/DashboardSales/BestSellersProducts';
import UserActivitiesTable from '../components/DashboardSales/UserActivitiesTable';
import NewUsersTable from '../components/DashboardSales/NewUsersTable';
import TopUsersConversion from '../components/DashboardSales/TopUsersConversion';
import ProductCategories from '../components/DashboardSales/ProductCategories';
import Footer from '../components/Layouts/Footer';

class Index extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Sales" home="Dashboard" page="Sales" />
                    
                    {/* Stats Card */}
                    <StatsCard />
                    
                    {/* Monthly Revenue & Overview */}
                    <div className="row">
                        <div className="col-lg-8">
                            <MonthlyRevenueChart />
                        </div>
                        <div className="col-lg-4">
                            <Overview />
                        </div>
                    </div>

                    {/* Sales By Countries & Recent Orders */}
                    <div className="row">
                        <div className="col-lg-12 col-xl-5">
                            <SalesByCountries />
                        </div>
                        <div className="col-lg-12 col-xl-7">
                            <RecentOrders />
                        </div>
                    </div>

                    {/* Daily Stats Card */}
                    <DailyStatsCard />

                    {/* Top Rated Products & Best Sellers Products */}
                    <div className="row">
                        <div className="col-lg-12 col-xl-6">
                            <TopRatedProducts />
                        </div>
                        <div className="col-lg-12 col-xl-6">
                            <BestSellersProducts />
                        </div>
                    </div>

                    {/* User Activities Table & New Users Table */}
                    <div className="row">
                        <div className="col-lg-12 col-xl-6">
                            <UserActivitiesTable />
                        </div>
                        <div className="col-lg-12 col-xl-6">
                            <NewUsersTable />
                        </div>
                    </div>

                    {/* Top Users Conversion & Product Categories */}
                    <div className="row">
                        <div className="col-lg-6">
                            <TopUsersConversion />
                        </div>
                        <div className="col-lg-6">
                            <ProductCategories />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default Index;