import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class SimplePieChart extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                labels: ['UK', 'USA', 'Canada', 'Australia', 'Italy'],
                responsive: [{
                    breakpoint: 320,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            },
            series: [44, 55, 13, 43, 22],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Simple Pie Chart</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="pie" 
                        height={420} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default SimplePieChart;