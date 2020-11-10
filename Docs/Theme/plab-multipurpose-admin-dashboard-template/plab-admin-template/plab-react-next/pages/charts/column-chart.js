import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import BasicChart from '../../components/Charts/ColumnChart/BasicChart';
import ColumnWithDataLabels from '../../components/Charts/ColumnChart/ColumnWithDataLabels';
import StackedColumns from '../../components/Charts/ColumnChart/StackedColumns';
import StackedColumnsFull from '../../components/Charts/ColumnChart/StackedColumnsFull';
import ColumnWithNegativeValues from '../../components/Charts/ColumnChart/ColumnWithNegativeValues';
import Footer from '../../components/Layouts/Footer';

class ColumnChart extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Column chart" home="Dashboard" page="Column chart" />

                    {/* Basic Chart */}
                    <BasicChart />

                    {/* Column With Data Labels */}
                    <ColumnWithDataLabels />

                    {/* Stacked Columns */}
                    <StackedColumns />

                    {/* Stacked Columns Full */}
                    <StackedColumnsFull />

                    {/* Column With Negative Values */}
                    <ColumnWithNegativeValues />

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default ColumnChart;