import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class SplineChart extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00", "2018-09-19T01:30:00", "2018-09-19T02:30:00",
                        "2018-09-19T03:30:00", "2018-09-19T04:30:00", "2018-09-19T05:30:00",
                        "2018-09-19T06:30:00"
                    ],
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
                grid: {
                    borderColor: '#f6f6f7',
                },
                legend: {
                    offsetY: -10,
                },
            },
            series: [{
                name: 'Series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'Series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Spline Area Chart</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="area" 
                        height={370} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default SplineChart;