import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class StackedColumns extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                chart: {
                    stacked: true,
                    toolbar: {
                        show: true
                    },
                    zoom: {
                        enabled: true
                    }
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
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '40%',
                    },
                },
                xaxis: {
                    type: 'datetime',
                    categories: [
                        '01/01/2018 GMT', '01/02/2018 GMT', '01/03/2018 GMT', '01/04/2018 GMT', '01/05/2018 GMT', '01/06/2018 GMT'
                    ],
                },
                legend: {
                    position: 'right',
                    offsetY: 40
                },
                fill: {
                    opacity: 1
                },
                grid: {
                    borderColor: '#f6f6f7',
                },
            },
            series: [{
                name: 'PRODUCT A',
                data: [44, 55, 41, 67, 22, 43]
            }, {
                name: 'PRODUCT B',
                data: [13, 23, 20, 8, 13, 27]
            }, {
                name: 'PRODUCT C',
                data: [11, 17, 15, 15, 21, 14]
            }, {
                name: 'PRODUCT D',
                data: [21, 7, 25, 13, 22, 8]
            }],
        }
    }
      
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Stacked Columns</h5>
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

export default StackedColumns;