import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class MixedLineColumnChart extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                stroke: {
                    width: [0, 2]
                },
                title: {
                    text: 'Traffic Sources'
                },
                labels: [
                    '01 Jan 2018', '02 Jan 2018', '03 Jan 2018', '04 Jan 2018', '05 Jan 2018', '06 Jan 2018', '07 Jan 2018', '08 Jan 2018', '09 Jan 2018', '10 Jan 2018', '11 Jan 2018', '12 Jan 2018', '13 Jan 2018', '14 Jan 2018', '15 Jan 2018'
                ],
                xaxis: {
                    type: 'datetime'
                },
                yaxis: [{
                    title: {
                        text: 'Website Blog',
                    },
                }, {
                opposite: true,
                    title: {
                        text: 'Social Media'
                    }
                }],
                grid: {
                    borderColor: '#f6f6f7',
                },
                legend: {
                    offsetY: -10,
                }
            },
            series: [{
                name: 'Website Blog',
                type: 'column',
                data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 270, 160, 280, 160]
            }, {
                name: 'Social Media',
                type: 'line',
                data: [23, 42, 35, 27, 43, 22, 17, 31, 22, 22, 12, 16, 20, 25, 16]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Mixed Line Column Chart</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="line" 
                        height={370} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default MixedLineColumnChart;