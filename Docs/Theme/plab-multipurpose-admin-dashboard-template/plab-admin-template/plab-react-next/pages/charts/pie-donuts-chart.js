import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import SimplePieChart from '../../components/Charts/PieDonutsChart/SimplePieChart';
import SimpleDonutChart from '../../components/Charts/PieDonutsChart/SimpleDonutChart';
import MonochromePieChart from '../../components/Charts/PieDonutsChart/MonochromePieChart';
import GradientDonutChart from '../../components/Charts/PieDonutsChart/GradientDonutChart';
import Footer from '../../components/Layouts/Footer';

class PieDonutsChart extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Pie donuts chart" home="Dashboard" page="Pie donuts chart" />

                    <div className="row">
                        <div className="col-lg-6">
                            <SimplePieChart />
                        </div>

                        <div className="col-lg-6">
                            <SimpleDonutChart />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-6">
                            <MonochromePieChart />
                        </div>

                        <div className="col-lg-6">
                            <GradientDonutChart />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default PieDonutsChart;