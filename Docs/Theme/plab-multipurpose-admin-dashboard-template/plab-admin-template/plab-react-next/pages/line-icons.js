import React, { Component } from 'react';
import TopNavbar from '../components/Layouts/TopNavbar';
import LeftSideMenu from '../components/Layouts/LeftSideMenu';
import Breadcrumb from '../components/Shared/Breadcrumb';
import Footer from '../components/Layouts/Footer';

class LineIcons extends Component {

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
                    <Breadcrumb url="/dashboard-sales" mainPage="Line Icons" home="Dashboard" page="Line Icons" />

                    <ul className="lineicons-list">
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-500px"></i>
                                <span>500px</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-add-file"></i>
                                <span>add-file</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-agenda"></i>
                                <span>agenda</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-alarm"></i>
                                <span>alarm</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-alarm-clock"></i>
                                <span>alarm-clock</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-amazon"></i>
                                <span>amazon</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-amazon-original"></i>
                                <span>amazon-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-ambulance"></i>
                                <span>ambulance</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-amex"></i>
                                <span>amex</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-anchor"></i>
                                <span>anchor</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-android"></i>
                                <span>android</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-android-original"></i>
                                <span>android-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-angle-double-down"></i>
                                <span>angle-double-down</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-angle-double-left"></i>
                                <span>angle-double-left</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-angle-double-right"></i>
                                <span>angle-double-right</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-angle-double-up"></i>
                                <span>angle-double-up</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-apartment"></i>
                                <span>apartment</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-apple"></i>
                                <span>apple</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-archive"></i>
                                <span>archive</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-down"></i>
                                <span>arrow-down</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-down-circle"></i>
                                <span>arrow-down-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-left"></i>
                                <span>arrow-left</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-left-circle"></i>
                                <span>arrow-left-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-right"></i>
                                <span>arrow-right</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-right-circle"></i>
                                <span>arrow-right-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-top-left"></i>
                                <span>arrow-top-left</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-top-right"></i>
                                <span>arrow-top-right</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-up"></i>
                                <span>arrow-up</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrow-up-circle"></i>
                                <span>arrow-up-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrows-horizontal"></i>
                                <span>arrows-horizontal</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-arrows-vertical"></i>
                                <span>arrows-vertical</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-backward"></i>
                                <span>backward</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-baloon"></i>
                                <span>baloon</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-ban"></i>
                                <span>ban</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bar-chart"></i>
                                <span>bar-chart</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-basketball"></i>
                                <span>basketball</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-behance"></i>
                                <span>behance</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-behance-original"></i>
                                <span>behance-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bi-cycle"></i>
                                <span>bi-cycle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bitbucket"></i>
                                <span>bitbucket</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bitcoin"></i>
                                <span>bitcoin</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-blackboard"></i>
                                <span>blackboard</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-blogger"></i>
                                <span>blogger</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bluetooth"></i>
                                <span>bluetooth</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bold"></i>
                                <span>bold</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bolt"></i>
                                <span>bolt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bolt-alt"></i>
                                <span>bolt-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-book"></i>
                                <span>book</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bookmark"></i>
                                <span>bookmark</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bookmark-alt"></i>
                                <span>bookmark-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bootstrap"></i>
                                <span>bootstrap</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-brick"></i>
                                <span>brick</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bridge"></i>
                                <span>bridge</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-briefcase"></i>
                                <span>briefcase</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-brush"></i>
                                <span>brush</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-brush-alt"></i>
                                <span>brush-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bubble"></i>
                                <span>bubble</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bug"></i>
                                <span>bug</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bulb"></i>
                                <span>bulb</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bullhorn"></i>
                                <span>bullhorn</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-burger"></i>
                                <span>burger</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-bus"></i>
                                <span>bus</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cake"></i>
                                <span>cake</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-calculator"></i>
                                <span>calculator</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-calendar"></i>
                                <span>calendar</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-camera"></i>
                                <span>camera</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-candy"></i>
                                <span>candy</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-candy-cane"></i>
                                <span>candy-cane</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-capsule"></i>
                                <span>capsule</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-car"></i>
                                <span>car</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-car-alt"></i>
                                <span>car-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-caravan"></i>
                                <span>caravan</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cart"></i>
                                <span>cart</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cart-full"></i>
                                <span>cart-full</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-certificate"></i>
                                <span>certificate</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-check-box"></i>
                                <span>check-box</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-check-mark-circle"></i>
                                <span>check-mark-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chef-hat"></i>
                                <span>chef-hat</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-down"></i>
                                <span>chevron-down</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-down-circle"></i>
                                <span>chevron-down-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-left"></i>
                                <span>chevron-left</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-left-circle"></i>
                                <span>chevron-left-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-right"></i>
                                <span>chevron-right</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-right-circle"></i>
                                <span>chevron-right-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-up"></i>
                                <span>chevron-up</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chevron-up-circle"></i>
                                <span>chevron-up-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-chrome"></i>
                                <span>chrome</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-circle-minus"></i>
                                <span>circle-minus</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-clipboard"></i>
                                <span>clipboard</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-close"></i>
                                <span>close</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cloud"></i>
                                <span>cloud</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cloud-check"></i>
                                <span>cloud-check</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cloud-download"></i>
                                <span>cloud-download</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cloud-sync"></i>
                                <span>cloud-sync</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cloud-upload"></i>
                                <span>cloud-upload</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cloudnetwork"></i>
                                <span>cloudnetwork</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cloudy-sun"></i>
                                <span>cloudy-sun</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-code"></i>
                                <span>code</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-code-alt"></i>
                                <span>code-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-coffee-cup"></i>
                                <span>coffee-cup</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cog"></i>
                                <span>cog</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-coin"></i>
                                <span>coin</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-color-pallet"></i>
                                <span>color-pallet</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-comment"></i>
                                <span>comment</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-comment-alt"></i>
                                <span>comment-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-comment-reply"></i>
                                <span>comment-reply</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-construction"></i>
                                <span>construction</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-construction-hammer"></i>
                                <span>construction hammer</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-control-panel"></i>
                                <span>control-panel</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-credit-cards"></i>
                                <span>credit-cards</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-crop"></i>
                                <span>crop</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cross-circle"></i>
                                <span>cross-circle</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-crown"></i>
                                <span>crown</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-css"></i>
                                <span>css</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cup"></i>
                                <span>cup</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-customer"></i>
                                <span>customer</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-cut"></i>
                                <span>cut</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-dashboard"></i>
                                <span>dashboard</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-database"></i>
                                <span>database</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-delivery"></i>
                                <span>delivery</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-diamond"></i>
                                <span>diamond</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-dinner"></i>
                                <span>dinner</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-direction"></i>
                                <span>direction</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-direction-alt"></i>
                                <span>direction-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-direction-ltr"></i>
                                <span>direction-ltr</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-direction-rtl"></i>
                                <span>direction-rtl</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-display"></i>
                                <span>display</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-display-alt"></i>
                                <span>display-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-dollar"></i>
                                <span>dollar</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-domain"></i>
                                <span>domain</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-download"></i>
                                <span>download</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-dribbble"></i>
                                <span>dribbble</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-drop"></i>
                                <span>drop</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-dropbox"></i>
                                <span>dropbox</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-dropbox-original"></i>
                                <span>dropbox-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-drupal"></i>
                                <span>drupal</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-drupal-original"></i>
                                <span>drupal-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-dumbbell"></i>
                                <span>dumbbell</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-cool"></i>
                                <span>emoji-cool</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-friendly"></i>
                                <span>emoji-friendly</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-happy"></i>
                                <span>emoji-happy</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-neutral"></i>
                                <span>emoji-neutral</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-sad"></i>
                                <span>emoji-sad</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-smile"></i>
                                <span>emoji-smile</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-suspect"></i>
                                <span>emoji-suspect</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-emoji-tounge"></i>
                                <span>emoji-tounge</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-empty-file"></i>
                                <span>empty-file</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-enter"></i>
                                <span>enter</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-envato"></i>
                                <span>envato</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-envelope"></i>
                                <span>envelope</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-eraser"></i>
                                <span>eraser</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-euro"></i>
                                <span>euro</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-exit"></i>
                                <span>exit</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-exit-down"></i>
                                <span>exit-down</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-exit-up"></i>
                                <span>exit-up</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-eye"></i>
                                <span>eye</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-facebook"></i>
                                <span>facebook</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-facebook-filled"></i>
                                <span>facebook-filled</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-facebook-messenger"></i>
                                <span>facebook-messenger</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-facebook-original"></i>
                                <span>facebook-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-files"></i>
                                <span>files</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-firefox"></i>
                                <span>firefox</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-fireworks"></i>
                                <span>fireworks</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-first-aid"></i>
                                <span>first-aid</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-flag"></i>
                                <span>flag</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-flags"></i>
                                <span>flags</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-flickr"></i>
                                <span>flickr</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-flower"></i>
                                <span>flower</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-folder"></i>
                                <span>folder</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-forward"></i>
                                <span>forward</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-frame-expand"></i>
                                <span>frame-expand</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-fresh-juice"></i>
                                <span>fresh-juice</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-full-screen"></i>
                                <span>full-screen</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-funnel"></i>
                                <span>funnel</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-gallery"></i>
                                <span>gallery</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-game"></i>
                                <span>game</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-gift"></i>
                                <span>gift</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-git"></i>
                                <span>git</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-github"></i>
                                <span>github</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-github-original"></i>
                                <span>github-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-google"></i>
                                <span>google</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-google-plus"></i>
                                <span>google-plus</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-graduation"></i>
                                <span>graduation</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-grid"></i>
                                <span>grid</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-grid-alt"></i>
                                <span>grid-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-grow"></i>
                                <span>grow</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-hammer"></i>
                                <span>hammer</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-hand"></i>
                                <span>hand</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-handshake"></i>
                                <span>handshake</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-harddrive"></i>
                                <span>harddrive</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-headphone"></i>
                                <span>headphone</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-headphone-alt"></i>
                                <span>headphone-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-heart"></i>
                                <span>heart</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-heart-filled"></i>
                                <span>heart-filled</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-heart-monitor"></i>
                                <span>heart-monitor</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-helicopter"></i>
                                <span>helicopter</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-helmet"></i>
                                <span>helmet</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-help"></i>
                                <span>help</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-highlight"></i>
                                <span>highlight</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-highlight-alt"></i>
                                <span>highlight-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-home"></i>
                                <span>home</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-hospital"></i>
                                <span>hospital</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-hourglass"></i>
                                <span>hourglass</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-html"></i>
                                <span>html</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-image"></i>
                                <span>image</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-inbox"></i>
                                <span>inbox</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-indent-decrease"></i>
                                <span>indent-decrease</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-indent-increase"></i>
                                <span>indent-increase</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-infinite"></i>
                                <span>infinite</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-information"></i>
                                <span>information</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-instagram"></i>
                                <span>instagram</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-instagram-filled"></i>
                                <span>instagram-filled</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-instagram-original"></i>
                                <span>instagram-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-invention"></i>
                                <span>invention</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-invest-monitor"></i>
                                <span>invest-monitor</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-investment"></i>
                                <span>investment</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-island"></i>
                                <span>island</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-italic"></i>
                                <span>italic</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-java"></i>
                                <span>java</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-joomla"></i>
                                <span>joomla</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-juice"></i>
                                <span>juice</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-key"></i>
                                <span>key</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-keyboard"></i>
                                <span>keyboard</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-keyword-research"></i>
                                <span>keyword-research</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-laptop"></i>
                                <span>laptop</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-laptop-phone"></i>
                                <span>laptop-phone</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-layers"></i>
                                <span>layers</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-layout"></i>
                                <span>layout</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-leaf"></i>
                                <span>leaf</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-library"></i>
                                <span>library</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-licencse"></i>
                                <span>licencse</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-line"></i>
                                <span>line</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-line-dashed"></i>
                                <span>line-dashed</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-line-dotted"></i>
                                <span>line-dotted</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-line-double"></i>
                                <span>line-double</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-line-spacing"></i>
                                <span>line-spacing</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-lineicons"></i>
                                <span>lineicons</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-lineicons-alt"></i>
                                <span>lineicons-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-link"></i>
                                <span>link</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-linkedin"></i>
                                <span>linkedin</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-linkedin-filled"></i>
                                <span>linkedin-filled</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-linkedin-original"></i>
                                <span>linkedin-original</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-list"></i>
                                <span>list</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-lock"></i>
                                <span>lock</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-magnet"></i>
                                <span>magnet</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-magnifier"></i>
                                <span>magnifier</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-map"></i>
                                <span>map</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-map-marker"></i>
                                <span>map-marker</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-mashroom"></i>
                                <span>mashroom</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-mastercard"></i>
                                <span>mastercard</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-medall"></i>
                                <span>medall</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-medall-alt"></i>
                                <span>medall-alt</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-medium"></i>
                                <span>medium</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-megento"></i>
                                <span>megento</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-menu"></i>
                                <span>menu</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-mic"></i>
                                <span>mic</span>
                            </div>
                        </li>
                        <li>
                            <div className="icon-box hover-card">
                                <i className="lni lni-microphone"></i>
                            <span>microphone</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-microscope"></i>
                            <span>microscope</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-microsoft"></i>
                            <span>microsoft</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-minus"></i>
                            <span>minus</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-mobile"></i>
                            <span>mobile</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-money-location"></i>
                            <span>money-location</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-money-protection"></i>
                            <span>money-protection</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-more"></i>
                            <span>more</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-more-alt"></i>
                            <span>more-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-mouse"></i>
                            <span>mouse</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-move"></i>
                            <span>move</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-music"></i>
                            <span>music</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-network"></i>
                            <span>network</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-night"></i>
                            <span>night</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-notepad"></i>
                            <span>notepad</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-offer"></i>
                            <span>offer</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-package"></i>
                            <span>package</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-page-break"></i>
                            <span>page-break</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pagination"></i>
                            <span>pagination</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-paint-bucket"></i>
                            <span>paint-bucket</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-paint-roller"></i>
                            <span>paint-roller</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-paperclip"></i>
                            <span>paperclip</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pause"></i>
                            <span>pause</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-paypal"></i>
                            <span>paypal</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-paypal-original"></i>
                            <span>paypal-original</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pencil"></i>
                            <span>pencil</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pencil-alt"></i>
                            <span>pencil-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-phone"></i>
                            <span>phone</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-phone-handset"></i>
                            <span>phone-handset</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pie-chart"></i>
                            <span>pie-chart</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pilcrow"></i>
                            <span>pilcrow</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pin"></i>
                            <span>pin</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pin-alt"></i>
                            <span>pin-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pinterest"></i>
                            <span>pinterest</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pizza"></i>
                            <span>pizza</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-plane"></i>
                            <span>plane</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-play"></i>
                            <span>play</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-playstore"></i>
                            <span>playstore</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-plug"></i>
                            <span>plug</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-plus"></i>
                            <span>plus</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pointer"></i>
                            <span>pointer</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pointer-down"></i>
                            <span>pointer-down</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pointer-left"></i>
                            <span>pointer-left</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pointer-right"></i>
                            <span>pointer-right</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pointer-up"></i>
                            <span>pointer-up</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-popup"></i>
                            <span>popup</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-postcard"></i>
                            <span>postcard</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pound"></i>
                            <span>pound</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-power-switch"></i>
                            <span>power-switch</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-printer"></i>
                            <span>printer</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-producthunt"></i>
                            <span>producthunt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-protection"></i>
                            <span>protection</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pulse"></i>
                            <span>pulse</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-pyramids"></i>
                            <span>pyramids</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-question-circle"></i>
                            <span>question-circle</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-quora"></i>
                            <span>quora</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-quotation"></i>
                            <span>quotation</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-radio-button"></i>
                            <span>radio-button</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-rain"></i>
                            <span>rain</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-reddit"></i>
                            <span>reddit</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-reload"></i>
                            <span>reload</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-remove-file"></i>
                            <span>remove-file</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-reply"></i>
                            <span>reply</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-restaurant"></i>
                            <span>restaurant</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-revenue"></i>
                            <span>revenue</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-road"></i>
                            <span>road</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-rocket"></i>
                            <span>rocket</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-rss-feed"></i>
                            <span>rss-feed</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ruler"></i>
                            <span>ruler</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ruler-alt"></i>
                            <span>ruler-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ruler-pencil"></i>
                            <span>ruler-pencil</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-rupee"></i>
                            <span>rupee</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-save"></i>
                            <span>save</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-school-bench"></i>
                            <span>school-bench</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-school-bench-alt"></i>
                            <span>school-bench-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-school-compass"></i>
                            <span>school-compass</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-scooter"></i>
                            <span>scooter</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-scroll-down"></i>
                            <span>scroll-down</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-search"></i>
                            <span>search</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-select"></i>
                            <span>select</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-seo"></i>
                            <span>seo</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-seo-consulting"></i>
                            <span>seo-consulting</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-seo-monitoring"></i>
                            <span>seo-monitoring</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-service"></i>
                            <span>service</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-share"></i>
                            <span>share</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-share-alt"></i>
                            <span>share-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shield"></i>
                            <span>shield</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shift-left"></i>
                            <span>shift-left</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shift-right"></i>
                            <span>shift-right</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ship"></i>
                            <span>ship</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shopify"></i>
                            <span>shopify</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shopping-basket"></i>
                            <span>shopping-basket</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shortcode"></i>
                            <span>shortcode</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shovel"></i>
                            <span>shovel</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-shuffle"></i>
                            <span>shuffle</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-signal"></i>
                            <span>signal</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-skipping-rope"></i>
                            <span>skipping-rope</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-skype"></i>
                            <span>skype</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-slack"></i>
                            <span>slack</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-slice"></i>
                            <span>slice</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-slideshare"></i>
                            <span>slideshare</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-slim"></i>
                            <span>slim</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-snapchat"></i>
                            <span>snapchat</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-sort-alpha-asc"></i>
                            <span>sort-alpha-asc</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-sort-amount-asc"></i>
                            <span>sort-amount-asc</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-souncloud-original"></i>
                            <span>souncloud-original</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-soundcloud"></i>
                            <span>soundcloud</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-spell-check"></i>
                            <span>spell-check</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-spinner"></i>
                            <span>spinner</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-spinner-arrow"></i>
                            <span>spinner-arrow</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-spinner-solid"></i>
                            <span>spinner-solid</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-spotify"></i>
                            <span>spotify</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-spotify-original"></i>
                            <span>spotify-original</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-spray"></i>
                            <span>spray</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-sprout"></i>
                            <span>sprout</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-stackoverflow"></i>
                            <span>stackoverflow</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-stamp"></i>
                            <span>stamp</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-star"></i>
                            <span>star</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-star-empty"></i>
                            <span>star-empty</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-star-filled"></i>
                            <span>star-filled</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-star-half"></i>
                            <span>star-half</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-stats-down"></i>
                            <span>stats-down</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-stats-up"></i>
                            <span>stats-up</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-steam"></i>
                            <span>steam</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-stethoscope"></i>
                            <span>stethoscope</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-stop"></i>
                            <span>stop</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-strikethrough"></i>
                            <span>strikethrough</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-stripe"></i>
                            <span>stripe</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-sun"></i>
                            <span>sun</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-support"></i>
                            <span>support</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-surfboard"></i>
                            <span>surfboard</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-syringe"></i>
                            <span>syringe</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-tab"></i>
                            <span>tab</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-tag"></i>
                            <span>tag</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-target"></i>
                            <span>target</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-target-audience"></i>
                            <span>target-audience</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-target-revenue"></i>
                            <span>target-revenue</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-taxi"></i>
                            <span>taxi</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-teabag"></i>
                            <span>teabag</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-telegram"></i>
                            <span>telegram</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-text-align-center"></i>
                            <span>text-align-center</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-text-align-justify"></i>
                            <span>text-align-justify</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-text-align-left"></i>
                            <span>text-align-left</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-text-align-right"></i>
                            <span>text-align-right</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-text-format"></i>
                            <span>text-format</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-text-format-remove"></i>
                            <span>text-format-remove</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-text-size"></i>
                            <span>text-size</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-thought"></i>
                            <span>thought</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-thumbs-down"></i>
                            <span>thumbs-down</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-thumbs-up"></i>
                            <span>thumbs-up</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-thunder"></i>
                            <span>thunder</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-thunder-alt"></i>
                            <span>thunder-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ticket"></i>
                            <span>ticket</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ticket-alt"></i>
                            <span>ticket-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-timer"></i>
                            <span>timer</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-train"></i>
                            <span>train</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-train-alt"></i>
                            <span>train-alt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-trash"></i>
                            <span>trash</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-travel"></i>
                            <span>travel</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-tree"></i>
                            <span>tree</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-trees"></i>
                            <span>trees</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-trowel"></i>
                            <span>trowel</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-tshirt"></i>
                            <span>tshirt</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-twitch"></i>
                            <span>twitch</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-twitter"></i>
                            <span>twitter</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-twitter-filled"></i>
                            <span>twitter-filled</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-twitter-original"></i>
                            <span>twitter-original</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-underline"></i>
                            <span>underline</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-unlink"></i>
                            <span>unlink</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-unlock"></i>
                            <span>unlock</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-upload"></i>
                            <span>upload</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-user"></i>
                            <span>user</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-users"></i>
                            <span>users</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ux"></i>
                            <span>ux</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-vector"></i>
                            <span>vector</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-video"></i>
                            <span>video</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-vimeo"></i>
                            <span>vimeo</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-visa"></i>
                            <span>visa</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-vk"></i>
                            <span>vk</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-volume"></i>
                            <span>volume</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-volume-high"></i>
                            <span>volume-high</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-volume-low"></i>
                            <span>volume-low</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-volume-medium"></i>
                            <span>volume-medium</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-volume-mute"></i>
                            <span>volume-mute</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-wallet"></i>
                            <span>wallet</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-warning"></i>
                            <span>warning</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-website"></i>
                            <span>website</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-wechat"></i>
                            <span>wechat</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-weight"></i>
                            <span>weight</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-whatsapp"></i>
                            <span>whatsapp</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-wheelbarrow"></i>
                            <span>wheelbarrow</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-wheelchair"></i>
                            <span>wheelchair</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-windows"></i>
                            <span>windows</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-wordpress"></i>
                            <span>wordpress</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-wordpress-filled"></i>
                            <span>wordpress-filled</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-world"></i>
                            <span>world</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-write"></i>
                            <span>write</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-yahoo"></i>
                            <span>yahoo</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-ycombinator"></i>
                            <span>ycombinator</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-yen"></i>
                            <span>yen</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-youtube"></i>
                            <span>youtube</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-zip"></i>
                            <span>zip</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-zoom-in"></i>
                            <span>zoom-in</span>
                        </div>
                    </li>
                    <li>
                        <div className="icon-box hover-card">
                            <i className="lni lni-zoom-out"></i>
                            <span>zoom-out</span>
                        </div>
                    </li>
                </ul>
                    
                    {/* Footer */}
                    <Footer />
                </div>
            </React.Fragment>
        );
    }
}

export default LineIcons;