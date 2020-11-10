import React, { Component } from 'react';

class Colors extends Component {

    colorChange = (colorClass) => {
        document.getElementsByTagName('body')[0].className = colorClass;
    }

    render() {
        return (
            <div className="color-content">
                <h5>Left SideMenu Color</h5>
                <p className="mb-2">Change SideMenu background color</p>
                <ul className="customize-sidemenu">
                    <li
                        className="bg_primary"
                        onClick={()=>{this.colorChange('sidemenu-bg-primary')}}
                    ></li>
                    <li
                        className="purple_indigo"
                        onClick={()=>{this.colorChange('sidemenu-bg-purple-indigo')}}
                    ></li>
                    <li
                        className="bg_pink"
                        onClick={()=>{this.colorChange('sidemenu-bg-pink')}}
                    ></li>
                    <li
                        className="bg_night_blue"
                        onClick={()=>{this.colorChange('sidemenu-bg-nightblue')}}
                    ></li>
                    <li
                        className="bg_indigo"
                        onClick={()=>{this.colorChange('sidemenu-bg-indigo')}}
                    ></li>
                    <li
                        className="bg_success"
                        onClick={()=>{this.colorChange('sidemenu-bg-success')}}
                    ></li>
                    <li
                        className="bg_secondary"
                        onClick={()=>{this.colorChange('sidemenu-bg-secondary')}}
                    ></li>
                    <li
                        className="bg_purple"
                        onClick={()=>{this.colorChange('sidemenu-bg-purple')}}
                    ></li>
                    <li
                        className="bg_gray"
                        onClick={()=>{this.colorChange('sidemenu-bg-gray')}}
                    ></li>
                    <li
                        className="bg_danger"
                        onClick={()=>{this.colorChange('sidemenu-bg-danger')}}
                    ></li>
                    <li
                        className="bg_gray_blue"
                        onClick={()=>{this.colorChange('sidemenu-bg-gray-blue')}}
                    ></li>
                    <li
                        className="bg_green"
                        onClick={()=>{this.colorChange('sidemenu-bg-green')}}
                    ></li>
                    <li
                        className="bg_warning"
                        onClick={()=>{this.colorChange('sidemenu-bg-warning')}}
                    ></li>
                    <li
                        className="bg_deep_purple"
                        onClick={()=>{this.colorChange('sidemenu-bg-deep-purple')}}
                    ></li>
                </ul>
            </div>
        );
    }
}

export default Colors;