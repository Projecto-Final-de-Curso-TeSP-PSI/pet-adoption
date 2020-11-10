import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import BasicBarChart from '../../components/Charts/BarCart/BasicBarChart';
import GroupedBarChart from '../../components/Charts/BarCart/GroupedBarChart';
import StackedBarChart from '../../components/Charts/BarCart/StackedBarChart';
import StackedBarsFull from '../../components/Charts/BarCart/StackedBarsFull';
import CustomDataLabelsBar from '../../components/Charts/BarCart/CustomDataLabelsBar';
import Footer from '../../components/Layouts/Footer';

class BarCart extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Bar cart" home="Dashboard" page="Bar cart" />

                    {/* Basic Bar Chart */}
                    <BasicBarChart />

                    {/* Grouped Bar Chart */}
                    <GroupedBarChart />

                    {/* Stacked Bar Chart */}
                    <StackedBarChart />

                    {/* Stacked Bars Full */}
                    <StackedBarsFull />

                    {/* Custom Data Labels Bar */}
                    <CustomDataLabelsBar />

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default BarCart;