import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import StatsCard from '../components/DashboardProject/StatsCard';
import ProjectsTable from '../components/DashboardProject/ProjectsTable';
import MonthlyHoursTarget from '../components/DashboardProject/MonthlyHoursTarget';
import TeamMembers from '../components/DashboardProject/TeamMembers';
import AssignedTasks from '../components/DashboardProject/AssignedTasks';
import UpcomingMeeting from '../components/DashboardProject/UpcomingMeeting';
import Activity from '../components/DashboardProject/Activity';
import ProjectIssues from '../components/DashboardProject/ProjectIssues';
import Footer from '../components/Layouts/Footer';

class DashboardProject extends Component {

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
                    <Breadcrumb url="/dashboard-project" mainPage="Project" home="Dashboard" page="Project" />

                    {/* Stats Card */}
                    <StatsCard />

                    <div className="row">
                        <div className="col-lg-12 col-xl-8">
                            <ProjectsTable />
                        </div>
                        <div className="col-lg-12 col-xl-4">
                            <MonthlyHoursTarget />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-12 col-xl-4">
                            <TeamMembers />
                        </div>
                        <div className="col-lg-12 col-xl-8">
                            <AssignedTasks />
                        </div>
                    </div>

                    <div className="row">
                        <div className="col-lg-4">
                            <UpcomingMeeting />
                        </div>
                        <div className="col-lg-4">
                            <Activity />
                        </div>
                        <div className="col-lg-4">
                            <ProjectIssues />
                        </div>
                    </div>

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default DashboardProject;