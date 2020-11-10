import React, { Component } from 'react';
import ThemeCustomizerModal from '../ThemeCustomizer/ThemeCustomizerModal';

class Footer extends Component {
    render() {
        return (
            <React.Fragment>
                <div className="flex-grow-1"></div>
                <footer className="footer mt-1">
                    <p>Copyright © 2019 Plab. All rights reserved</p>
                </footer>

                {/* Theme Customizer Modal */}
                <ThemeCustomizerModal />
            </React.Fragment>
        );
    }
}

export default Footer;