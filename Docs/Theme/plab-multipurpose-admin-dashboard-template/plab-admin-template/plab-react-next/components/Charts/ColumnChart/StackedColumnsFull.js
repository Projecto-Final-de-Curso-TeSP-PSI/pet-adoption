import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class StackedColumnsFull extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                chart: {
                    stacked: true,
                    stackType: '100%'
                },
                responsive: [{
                    breakpoint: 320,
                    options: {
                        legend: {
                            position: 'bottom',
                            offsetX: -10,
                            offsetY: 0
                        }
                    }
                }],
                xaxis: {
                    categories: ['2018 Q1', '2018 Q2', '2018 Q3', '2018 Q4', '2018 Q1', '2018 Q2', '2018 Q3', '2018 Q4'],
                },
                fill: {
                    opacity: 1
                },
                legend: {
                    position: 'right',
                    offsetX: 0,
                    offsetY: 50
                },
                grid: {
                    borderColor: '#f6f6f7',
                },
            },
            series: [{
                name: 'PRODUCT A',
                data: [44, 55, 41, 67, 22, 43, 21, 49]
            }, {
                name: 'PRODUCT B',
                data: [13, 23, 20, 8, 13, 27, 33, 12]
            }, {
                name: 'PRODUCT C',
                data: [11, 17, 15, 15, 21, 14, 15, 13]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Stacked Columns 100%</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="bar" 
                        height={370} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default StackedColumnsFull;