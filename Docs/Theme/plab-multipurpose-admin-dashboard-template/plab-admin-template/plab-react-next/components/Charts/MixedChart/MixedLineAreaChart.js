import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class MixedLineAreaChart extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                stroke: {
                    curve: 'smooth'
                },
                fill: {
                    type: 'solid',
                    opacity: [0.35, 1],
                },
                labels: [
                    'Dec 01', 'Dec 02', 'Dec 03', 'Dec 04', 'Dec 05', 'Dec 06', 'Dec 07', 'Dec 08', 'Dec 09 ', 'Dec 10', 'Dec 11'
                ],
                markers: {
                    size: 0
                },
                yaxis: [
                    {
                        title: {
                            text: 'Series A',
                        },
                    },
                    {
                        opposite: true,
                        title: {
                            text: 'Series B',
                        },
                    },
                ],
                tooltip: {
                    shared: true,
                    intersect: false,
                    y: {
                        formatter: function (y) {
                            if (typeof y !== "undefined") {
                                return y.toFixed(0) + " points";
                            }
                            return y;
                        }
                    }
                },
                grid: {
                    borderColor: '#f6f6f7',
                },
                legend: {
                    offsetY: -10,
                },
            },
            series: [{
                name: 'TEAM A',
                type: 'area',
                data: [44, 55, 31, 47, 31, 43, 26, 41, 31, 47, 33]
            }, {
                name: 'TEAM B',
                type: 'line',
                data: [55, 69, 45, 61, 43, 54, 37, 52, 44, 61, 43]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Mixed Line & Area Charts</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="line" 
                        height={400} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default MixedLineAreaChart;