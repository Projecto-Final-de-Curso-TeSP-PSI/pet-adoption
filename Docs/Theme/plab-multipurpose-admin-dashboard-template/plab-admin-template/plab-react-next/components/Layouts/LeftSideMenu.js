import React, { Component } from 'react';
import Link from '../../utils/ActiveLink';
import * as Icon from 'react-feather';
import {
    Navbar, 
    Nav, 
    NavDropdown
} from 'react-bootstrap';

class LeftSideMenu extends Component {
    render() {
        return (
            <React.Fragment>
                <div className={`sidemenu-area sidemenu-light ${this.props.sideMenu ? 'sidemenu-toggle' : ''}`}>
                    <Navbar className={`sidemenu ${this.props.sideMenu ? 'hide-nav-title' : ''}`} >
                        <Navbar.Collapse>
                            <Nav>
                                <NavDropdown title={
                                    <div className="dropdown-title">
                                        <Icon.Grid className="icon" /> 
                                        <span className="title">
                                            Dashboard 
                                            <Icon.ChevronRight className="icon fr" /> 
                                        </span>
                                    </div>
                                } 
                                id="basic-nav-dropdown">
                                    <Link href="/dashboard-sales" activeClassName="active">
                                        <a className="dropdown-item">
                                            Sales
                                        </a>
                                    </Link>

                                    <Link href="/dashboard-e-commerce" activeClassName="active">
                                        <a className="dropdown-item">
                                            eCommerce
                                        </a>
                                    </Link>

                                    <Link href="/dashboard-analytics" activeClassName="active">
                                        <a className="dropdown-item">
                                            Analytics
                                        </a>
                                    </Link>

                                    <Link href="/dashboard-crm" activeClassName="active">
                                        <a className="dropdown-item">
                                            CRM
                                        </a>
                                    </Link>

                                    <Link href="/dashboard-project" activeClassName="active">
                                        <a className="dropdown-item">
                                            Project
                                        </a>
                                    </Link>
                                </NavDropdown>

                                <Link href="/inbox" activeClassName="active">
                                    <a className="nav-link">
                                        <Icon.Inbox className="icon" /> 
                                        <span className="title">Inbox</span>
                                    </a>
                                </Link>
                                
                                <Link href="/chat" activeClassName="active">
                                    <a className="nav-link">
                                        <Icon.MessageSquare className="icon" /> 
                                        <span className="title">Chat</span>
                                    </a>
                                </Link>

                                <Link href="/todos" activeClassName="active">
                                    <a className="nav-link">
                                        <Icon.CheckSquare className="icon" /> 
                                        <span className="title">Todo List</span>
                                    </a>
                                </Link>
                                
                                <Link href="/notes" activeClassName="active">
                                    <a className="nav-link">
                                        <Icon.FileText className="icon" />
                                        <span className="title">Notes</span>
                                    </a>
                                </Link>

                                <Link href="/calendar" activeClassName="active">
                                    <a className="nav-link">
                                        <Icon.Calendar className="icon" />
                                        <span className="title">Calendar</span>
                                    </a>
                                </Link>

                                <Link href="/search" activeClassName="active">
                                    <a className="nav-link">
                                        <Icon.Search className="icon" />
                                        <span className="title">Search</span>
                                    </a>
                                </Link>
 
                                <NavDropdown title={
                                    <div className="dropdown-title">
                                        <Icon.Filter 
                                            className="icon"
                                        />
                                        <span className="title">
                                            UI Components
                                            <Icon.ChevronRight className="icon fr" />
                                        </span>
                                    </div>
                                } 
                                id="basic-nav-dropdown">
                                    <Link href="/ui-pages/alerts" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.Bell className="icon" />
                                            Alerts
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/badges" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.Award className="icon" /> 
                                            Badges
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/buttons" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ArrowRightCircle className="icon" />
                                            Buttons
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/cards" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.Layers className="icon" />
                                            Cards
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/dropdowns" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ArrowDownCircle className="icon" /> 
                                            Dropdowns
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/forms" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.FileText className="icon" /> 
                                            Forms
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/list-groups" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.List className="icon" />
                                            List Groups
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/modals" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.Airplay className="icon" /> 
                                            Modals
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/progress-bars" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.TrendingUp className="icon" />
                                            Progress Bars
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/tables" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.Database className="icon" /> 
                                            Tables
                                        </a>
                                    </Link>

                                    <Link href="/ui-pages/tabs" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.Triangle className="icon" /> 
                                            Tabs
                                        </a>
                                    </Link>
                                </NavDropdown>

                                <NavDropdown title={
                                    <div className="dropdown-title">
                                        <Icon.User className="icon" /> 
                                        <span className="title">
                                            User 
                                            <Icon.ChevronRight className="icon fr" /> 
                                        </span>
                                    </div>
                                } 
                                id="basic-nav-dropdown">
                                    <Link href="/sign-up" activeClassName="active">
                                        <a className="dropdown-item" target="_blank">
                                            <Icon.UserPlus className="icon" /> 
                                            Sign Up
                                        </a>
                                    </Link>

                                    <Link href="/login" activeClassName="active">
                                        <a className="dropdown-item" target="_blank">
                                            <Icon.UserCheck className="icon" /> 
                                            Login
                                        </a>
                                    </Link>

                                    <Link href="/forgot-password" activeClassName="active">
                                        <a className="dropdown-item" target="_blank">
                                            <Icon.Unlock className="icon" /> 
                                            Forgot Password
                                        </a>
                                    </Link>
                                </NavDropdown>

                                <NavDropdown title={
                                    <div className="dropdown-title">
                                        <Icon.BarChart2 
                                            className="icon"
                                        /> 
                                        <span className="title">
                                            Charts 
                                            <Icon.ChevronRight className="icon fr" /> 
                                        </span>
                                    </div>
                                } 
                                id="basic-nav-dropdown">
                                    <Link href="/charts/line-chart" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Line Charts
                                        </a>
                                    </Link>

                                    <Link href="/charts/area-chart" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Area Charts
                                        </a>
                                    </Link>

                                    <Link href="/charts/column-chart" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Column Charts
                                        </a>
                                    </Link>

                                    <Link href="/charts/bar-chart" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Bar Charts
                                        </a>
                                    </Link>

                                    <Link href="/charts/mixed-chart" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Mixed Charts
                                        </a>
                                    </Link>

                                    <Link href="/charts/pie-donuts-chart" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Pie and Donuts Charts
                                        </a>
                                    </Link>
                                </NavDropdown>

                                <NavDropdown title={
                                    <div className="dropdown-title">
                                        <Icon.Heart className="icon" /> 
                                        <span className="title">
                                            Icons 
                                            <Icon.ChevronRight className="icon fr" /> 
                                        </span>
                                    </div>
                                } 
                                id="basic-nav-dropdown">
                                    <Link href="/feather-icons" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Feather Icons
                                        </a>
                                    </Link>

                                    <Link href="/icofont-icons" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Icofont Icons
                                        </a>
                                    </Link>

                                    <Link href="/line-icons" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Line Icons 
                                        </a>
                                    </Link>
                                </NavDropdown>

                                <NavDropdown title={
                                    <div className="dropdown-title">
                                        <Icon.FileText className="icon" /> 
                                        <span className="title">
                                            Pages 
                                            <Icon.ChevronRight className="icon fr" /> 
                                        </span>
                                    </div>
                                } 
                                id="basic-nav-dropdown">
                                    <Link href="/invoice" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Invoice
                                        </a>
                                    </Link>

                                    <Link href="/users-card" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Users Card
                                        </a>
                                    </Link>

                                    <Link href="/notifications" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            <span className="title">Notifications</span>
                                        </a>
                                    </Link>

                                    <Link href="/time-line" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Time line
                                        </a>
                                    </Link>

                                    <Link href="/gallery" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Gallery
                                        </a>
                                    </Link>

                                    <Link href="/faq" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            FAQ
                                        </a>
                                    </Link>

                                    <Link href="/pricing" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Pricing
                                        </a>
                                    </Link>

                                    <Link href="/profile" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Profile
                                        </a>
                                    </Link>

                                    <Link href="/profile-settings" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Profile Settings
                                        </a>
                                    </Link>

                                    <Link href="/error-404" activeClassName="active">
                                        <a className="dropdown-item">
                                            <Icon.ChevronRight className="icon" /> 
                                            Error 404 
                                        </a>
                                    </Link>
                                </NavDropdown>
                            </Nav>
                        </Navbar.Collapse>
                    </Navbar>
                </div>
            </React.Fragment>
        );
    }
}

export default LeftSideMenu;