import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import RecentOrders from '../../components/Tables/RecentOrders';
import ProductsOfTheMonth from '../../components/Tables/ProductsOfTheMonth';
import BasicTable from '../../components/Tables/BasicTable';
import DataTable from '../../components/Tables/DataTable';
import DarkTable from '../../components/Tables/DarkTable';
import DarkAndLightTableHeadOptions from '../../components/Tables/DarkAndLightTableHeadOptions';
import StripedRowsTable from '../../components/Tables/StripedRowsTable';
import StripedDarkRowsTable from '../../components/Tables/StripedDarkRowsTable';
import BorderedTable from '../../components/Tables/BorderedTable';
import BorderedDarkTable from '../../components/Tables/BorderedDarkTable';
import Footer from '../../components/Layouts/Footer';

class Tables extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Tables" home="Dashboard" page="Tables" />

                    <div className="row">
                        {/* Recent Orders Table */}
                        <div className="col-lg-12">
                            <RecentOrders />
                        </div>

                        {/* Products Of TheMonth Table */}
                        <div className="col-lg-12">
                            <ProductsOfTheMonth />
                        </div>

                        {/* Basic Table */}
                        <div className="col-lg-12">
                            <BasicTable />
                        </div>

                        {/* Data Table */}
                        <div className="col-lg-12">
                            <DataTable />
                        </div>

                        {/* Dark Table */}
                        <div className="col-lg-12">
                            <DarkTable />
                        </div>

                        {/* Dark And Light Table Head Options */}
                        <div className="col-lg-12">
                            <DarkAndLightTableHeadOptions />
                        </div>

                        {/* Striped Rows Table */}
                        <div className="col-lg-12">
                            <StripedRowsTable />
                        </div>

                        {/* Striped Dark Rows Table */}
                        <div className="col-lg-12">
                            <StripedDarkRowsTable />
                        </div>

                        {/* Bordered Table */}
                        <div className="col-lg-12">
                            <BorderedTable />
                        </div>

                        {/* Bordered Dark Table */}
                        <div className="col-lg-12">
                            <BorderedDarkTable />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default Tables;