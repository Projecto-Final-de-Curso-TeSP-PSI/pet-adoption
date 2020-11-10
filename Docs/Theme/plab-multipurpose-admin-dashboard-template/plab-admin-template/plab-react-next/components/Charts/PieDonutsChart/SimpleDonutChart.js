import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class SimpleDonutChart extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
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
            series: [44, 55, 41, 17, 15]
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Simple Donut Chart</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="donut" 
                        height={420} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default SimpleDonutChart;