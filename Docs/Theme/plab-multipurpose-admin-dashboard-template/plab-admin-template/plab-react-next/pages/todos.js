import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import TodosStyleOne from '../components/Todos/TodosStyleOne';
import TodosStyleTwo from '../components/Todos/TodosStyleTwo';
import Footer from '../components/Layouts/Footer';

class Todos extends Component {
    
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
                    <Breadcrumb url="/dashboard-sales" mainPage="Todos" home="Dashboard" page="Todos" />

                    <TodosStyleOne />

                    <TodosStyleTwo />

                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default Todos;