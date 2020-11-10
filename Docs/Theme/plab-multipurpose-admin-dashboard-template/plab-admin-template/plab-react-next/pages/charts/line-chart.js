import React, { Component } from 'react';
import TopNavbar from '../../components/Layouts/TopNavbar';
import LeftSideMenu from '../../components/Layouts/LeftSideMenu';
import Breadcrumb from '../../components/Shared/Breadcrumb';
import LineChartContent from '../../components/Charts/LineChart/LineChartContent';
import LineWithDataLabels from '../../components/Charts/LineChart/LineWithDataLabels';
import LineWithAnnotations from '../../components/Charts/LineChart/LineWithAnnotations';
import GradientChart from '../../components/Charts/LineChart/GradientChart';
import DashedChart from '../../components/Charts/LineChart/DashedChart';
import Footer from '../../components/Layouts/Footer';

class LineChart extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Line chart" home="Dashboard" page="Line chart" />

                    {/* Line Chart Content */}
                    <LineChartContent />

                    {/* Line With Data Labels */}
                    <LineWithDataLabels />

                    {/* Line With Annotations */}
                    <LineWithAnnotations />

                    {/* Gradient Chart */}
                    <GradientChart />

                    {/* Dashed Chart */}
                    <DashedChart />

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default LineChart;