import React, { Component } from 'react';
import Link from '../../utils/ActiveLink';
import * as Icon from 'react-feather';
import {
    Navbar, 
    Nav, 
    NavDropdown, 
    Container, 
    Row, 
    Col, 
    Form, 
    Button
} from 'react-bootstrap';

class TopNavbar extends Component {

    state = {
        sideMenu: false,
    };

    _toggleClass = () => {
        const currentSideMenu = this.state.sideMenu;
        this.setState({sideMenu: !currentSideMenu});
        this.props.onClick(this.state.sideMenu);
    }

    render() {
        return (
            <React.Fragment>
                <Navbar fixed="top" className="top-menu">
                    <Navbar.Brand href="/" className={`navbar-brand`}>
                        <img src={require("../../images/large-logo.png")} alt="Logo" className="large-logo" />
                    </Navbar.Brand>

                    <Navbar.Toggle aria-controls="basic-navbar-nav" />

                    {/* Burger menu */}
                    <div className={`burger-menu ${this.state.sideMenu ? 'toggle-menu' : ''}`} onClick={this._toggleClass}>
                        <span className="top-bar"></span>
                        <span className="middle-bar"></span>
                        <span className="bottom-bar"></span> 
                    </div>
                    {/* End Burger menu */}

                    <Navbar.Collapse id="basic-navbar-nav">
                        <Nav className="left-nav d-none d-md-block">
                            {/* Mega Menu  */}
                            <NavDropdown title={
                                <div className="mega-menu-btn">
                                    Mega Menu 
                                    <Icon.ChevronDown className="icon" />
                                </div>
                            } 
                            id="basic-nav-dropdown" className="mega-menu">
                                <Container>
                                    <Row>
                                        <Col md={6} lg={3}>
                                            <h5 className="title">Components</h5>
                                            <Link href="/ui-pages/alerts" activeClassName="active">
                                                <a className="dropdown-item">Alerts</a>
                                            </Link>
                                            <Link href="/ui-pages/badges" activeClassName="active">
                                                <a className="dropdown-item">Badges</a>
                                            </Link>
                                            <Link href="/ui-pages/buttons" activeClassName="active">
                                                <a className="dropdown-item">Buttons</a>
                                            </Link>
                                        </Col>

                                        <Col md={6} lg={3}>
                                            <h5 className="title">Components</h5>
                                            <Link href="/ui-pages/cards" activeClassName="active">
                                                <a className="dropdown-item">Cards</a>
                                            </Link>
                                            <Link href="/ui-pages/dropdowns" activeClassName="active">
                                                <a className="dropdown-item">Dropdowns</a>
                                            </Link>
                                            <Link href="/ui-pages/forms" activeClassName="active">
                                                <a className="dropdown-item">Forms</a>
                                            </Link>
                                        </Col>

                                        <Col md={6} lg={3}>
                                            <h5 className="title">Components</h5>
                                            <Link href="/ui-pages/list-groups" activeClassName="active">
                                                <a className="dropdown-item">List Groups</a>
                                            </Link>
                                            <Link href="/ui-pages/modals" activeClassName="active">
                                                <a className="dropdown-item">Modals</a>
                                            </Link>
                                            <Link href="/ui-pages/progress-bars" activeClassName="active">
                                                <a className="dropdown-item">Progress Bars</a>
                                            </Link>
                                        </Col>

                                        <Col md={6} lg={3}>
                                            <h5 className="title">Components</h5>
                                            <Link href="/ui-pages/tables" activeClassName="active">
                                                <a className="dropdown-item">Tables</a>
                                            </Link>
                                            <Link href="/ui-pages/tabs" activeClassName="active">
                                                <a className="dropdown-item">Tabs</a>
                                            </Link>
                                            <Link href="/signup" activeClassName="active">
                                                <a className="dropdown-item">Signup</a>
                                            </Link>
                                        </Col>
                                    </Row>
                                </Container>
                            </NavDropdown>
                        </Nav>

                        {/* Search Form */}
                        <Form className="nav-search-form d-none d-sm-block">
                            <Form.Control type="text" placeholder="Search..." />
                            <Button className="search-success" type="submit">
                                <Icon.Search className="icon" />
                            </Button>
                        </Form>

                        <Nav className="ml-auto right-nav">
                            {/* Email notification  */}
                            <NavDropdown title={
                                <div className="count-info">
                                    <Icon.Mail className="icon" />
                                    <span className="ci-number theme-bg">
                                        <span className="ripple theme-bg"></span>
                                        <span className="ripple theme-bg"></span>
                                        <span className="ripple theme-bg"></span>
                                    </span>
                                </div>
                            } 
                            id="basic-nav-dropdown" className="message-box d-none d-sm-block">
                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        <div className="message-item">
                                            <span className="user-pic">
                                                <img src={require("../../images/user/1.jpg")} alt="User Image" className="rounded" />
                                                <span className="profile-status online"></span>
                                            </span>
                                        
                                            <span className="chat-content">
                                                <h5 className="message-title">Aaron Rossi</h5> 
                                                <span className="mail-desc">Just sent a new comment!</span>
                                            </span>
                                            <span className="time">0 seconds ago</span>
                                        </div>
                                    </a>
                                </Link>

                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        <div className="message-item">
                                            <span className="user-pic">
                                                <img src={require("../../images/user/2.jpg")} alt="User Image" className="rounded" /> 
                                                <span className="profile-status ofline"></span>
                                            </span>
                                        
                                            <span className="chat-content">
                                                <h5 className="message-title">Marco Gomez</h5> 
                                                <span className="mail-desc">Just sent a new comment!</span>
                                            </span>
                                            <span className="time">5 minutes ago</span>
                                        </div>
                                    </a>
                                </Link>

                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        <div className="message-item">
                                            <span className="user-pic">
                                                <img src={require("../../images/user/3.jpg")} alt="User Image" className="rounded" /> 
                                                <span className="profile-status away"></span>
                                            </span>
                                        
                                            <span className="chat-content">
                                                <h5 className="message-title">Mitch Petty</h5> 
                                                <span className="mail-desc">Just sent a new comment!</span>
                                            </span>
                                            <span className="time">9:00 AM</span>
                                        </div>
                                    </a>
                                </Link>

                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        See all e-mails 
                                        <Icon.ChevronRight className="icon" />
                                    </a>
                                </Link>
                            </NavDropdown>

                            {/* Notification  */}
                            <NavDropdown title={
                                <div className="count-info">
                                    <Icon.Bell 
                                        className="icon"
                                    />
                                    <span className="ci-number">
                                        <span className="ripple"></span>
                                        <span className="ripple"></span>
                                        <span className="ripple"></span>
                                    </span>
                                </div>
                            } 
                            id="basic-nav-dropdown" className="message-box">
                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        <div className="message-item">
                                            <span className="user-pic">
                                                <img src={require("../../images/user/1.jpg")} alt="User Image" className="rounded" />
                                                <span className="profile-status online"></span>
                                            </span>
                                        
                                            <span className="chat-content">
                                                <h5 className="message-title">Aaron Rossi</h5> 
                                                <span className="mail-desc">Just sent a new comment!</span>
                                            </span>
                                            <span className="time">0 seconds ago</span>
                                        </div>
                                    </a>
                                </Link>

                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        <div className="message-item">
                                            <span className="user-pic">
                                                <img src={require("../../images/user/2.jpg")} alt="User Image" className="rounded" /> 
                                                <span className="profile-status ofline"></span>
                                            </span>
                                        
                                            <span className="chat-content">
                                                <h5 className="message-title">Marco Gomez</h5> 
                                                <span className="mail-desc">Just sent a new comment!</span>
                                            </span>
                                            <span className="time">5 minutes ago</span>
                                        </div>
                                    </a>
                                </Link>

                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        <div className="message-item">
                                            <span className="user-pic">
                                                <img src={require("../../images/user/3.jpg")} alt="User Image" className="rounded" /> 
                                                <span className="profile-status away"></span>
                                            </span>
                                        
                                            <span className="chat-content">
                                                <h5 className="message-title">Mitch Petty</h5> 
                                                <span className="mail-desc">Just sent a new comment!</span>
                                            </span>
                                            <span className="time">9:00 AM</span>
                                        </div>
                                    </a>
                                </Link>

                                <Link href="#" activeClassName="active">
                                    <a className="dropdown-item">
                                        Check all notifications 
                                        <Icon.ChevronRight className="icon" />
                                    </a>
                                </Link>
                            </NavDropdown>

                            {/* Profile Dropdown  */}
                            <NavDropdown title={
                                <div className="count-info">
                                    <div className="menu-profile">
                                        <span className="name">Aaron Rossi</span> 
                                        <img src={require("../../images/profile.jpg")} alt="Profile Image" className="rounded" />
                                    </div>
                                </div>
                            } 
                            id="basic-nav-dropdown" className="profile-nav-item">
                                <Link href="/profile" activeClassName="active">
                                    <a className="dropdown-item">
                                        <Icon.User className="icon" /> 
                                        Profile
                                    </a>
                                </Link>
                                <Link href="/inbox" activeClassName="active">
                                    <a className="dropdown-item">
                                        <Icon.Inbox className="icon" /> 
                                        Mailbox
                                    </a>
                                </Link>
                                <Link href="/chat" activeClassName="active">
                                    <a className="dropdown-item">
                                        <Icon.HelpCircle className="icon" /> 
                                        Support
                                    </a>
                                </Link>
                                <Link href="/profile-settings" activeClassName="active">
                                    <a className="dropdown-item">
                                        <Icon.Settings className="icon" /> 
                                        Settings
                                    </a>
                                </Link>
                                <Link href="/login" activeClassName="active">
                                    <a className="dropdown-item">
                                        <Icon.LogOut className="icon" /> 
                                        Logout
                                    </a>
                                </Link>
                            </NavDropdown>
                        </Nav>
                    </Navbar.Collapse>
                </Navbar>
            </React.Fragment>
        );
    }
}

export default TopNavbar;