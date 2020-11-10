import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class RevenueByCountry extends Component {
    constructor(props) {
        super(props);
        this.state = {
            options: {
                labels: ['UK', 'USA', 'Canada', 'Australia', 'Italy'],
                colors: ['#2962ff', '#2458e5', '#204ecc', '#1c44b2', '#183a99'],
                responsive: [{
                    breakpoint: 300,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                legend: {
                    horizontalAlign: 'right',
                }
            },
            series: [500, 800, 500, 300, 250],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Revenue By Country</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="pie" 
                        height={391} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default RevenueByCountry;