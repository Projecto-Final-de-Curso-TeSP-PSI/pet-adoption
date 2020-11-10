import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class DashedChart extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                chart: {
                    zoom: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: [5, 7, 5],
                    curve: 'straight',
                    dashArray: [0, 8, 5]
                },
                title: {
                    text: 'Page Statistics',
                    align: 'left'
                },
                markers: {
                    size: 0,
                    hover: {
                        sizeOffset: 6
                    }
                },
                xaxis: {
                    categories: [
                        '01 Jan', '02 Jan', '03 Jan', '04 Jan', '05 Jan', '06 Jan', '07 Jan', '08 Jan', '09 Jan', '10 Jan', '11 Jan', '12 Jan'
                    ],
                },
                tooltip: {
                    y: [{
                        title: {
                            formatter: function (val) {
                            return val + " (mins)"
                            }
                        }
                    }, {
                    title: {
                        formatter: function (val) {
                            return val + " per session"
                        }
                    }
                    }, {
                        title: {
                            formatter: function (val) {
                                return val;
                            }
                        }
                    }]
                },
                grid: {
                    borderColor: '#f6f6f7',
                },
                legend: {
                    offsetY: -10,
                }
            },
            series: [{
                name: "Session Duration",
                data: [45, 52, 38, 24, 33, 26, 21, 20, 6, 8, 15, 10]
            },
            {
                name: "Page Views",
                data: [35, 41, 62, 42, 13, 18, 29, 37, 36, 51, 32, 35]
            },
            {
                name: 'Total Visits',
                data: [87, 57, 74, 99, 75, 38, 62, 47, 82, 56, 45, 47]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Dashed Chart</h5>
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

export default DashedChart;