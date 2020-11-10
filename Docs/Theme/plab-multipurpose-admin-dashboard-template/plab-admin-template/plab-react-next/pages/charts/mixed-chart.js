import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import MixedLineColumnChart from '../../components/Charts/MixedChart/MixedLineColumnChart';
import MixedMultipleChart from '../../components/Charts/MixedChart/MixedMultipleChart';
import MixedLineAreaChart from '../../components/Charts/MixedChart/MixedLineAreaChart';
import MixedLineColumnAreaChart from '../../components/Charts/MixedChart/MixedLineColumnAreaChart';
import Footer from '../../components/Layouts/Footer';

class MixedChart extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Mixed chart" home="Dashboard" page="Mixed chart" />
                    
                    {/* Mixed Line Column Chart */}
                    <MixedLineColumnChart />

                    {/* Mixed Multiple Chart */}
                    <MixedMultipleChart />

                    {/* Mixed Line Area Chart */}
                    <MixedLineAreaChart />

                    {/* Mixed Line Column Area Chart */}
                    <MixedLineColumnAreaChart />

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default MixedChart;