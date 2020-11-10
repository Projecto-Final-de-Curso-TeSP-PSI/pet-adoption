import '../assets/css/bootstrap.min.css';
import '../assets/css/icofont.min.css';
import '../assets/css/LineIcons.css';
import '../assets/css/styles.css';
import '../assets/css/responsive.css';
 
import App from 'next/app';
import { DefaultSeo } from 'next-seo';
import Loader from '../components/Shared/Loader';
import GoTop from '../components/Shared/GoTop';

export default class MyApp extends App {
    static async getInitialProps ({ Component, ctx }) {
        return {
            pageProps: Component.getInitialProps
            ? await Component.getInitialProps(ctx)
            : {}
        }
    }

    // Preloader
    state = {
        loading: true
    };
    componentDidMount() {
        this.timerHandle = setTimeout(() => this.setState({ loading: false }), 2000); 
    }
    componentWillUnmount() {
        if (this.timerHandle) {
            clearTimeout(this.timerHandle);
            this.timerHandle = 0;
        }
    }
    
    render () {
        const { Component, pageProps } = this.props

        return (
            <React.Fragment>
                <DefaultSeo
                    title="Plab - React Next Admin Dashboard Template"
                    description="Plab - React Next Admin Dashboard Template. This has been built with React, Next.js, Express.js, and ES6+"
                    openGraph={{
                        type: 'website',
                        locale: 'en_IE',
                        url: '#',
                        site_name: 'Plab - React Next Admin Dashboard Template',
                    }}
                />

                <Component {...pageProps} />
                
                {/* Preloader */}
                <Loader loading={this.state.loading} />

                {/* Go Top Button */}
                <GoTop scrollStepInPx="50" delayInMs="16.66" />
            </React.Fragment>
        );
    }
}