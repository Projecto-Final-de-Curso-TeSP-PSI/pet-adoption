import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class MonthlyRevenueChart extends Component {
    constructor(props) {
        super(props);
        this.state = {
            options: {
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: '35%',
                        endingShape: 'rounded'	
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 1,
                    colors: ['transparent']
                },
                colors: ['#6a4ffc', '#2962ff', '#a64edd'],
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                    labels: {
                        style: {
                            colors: '#686c71',
                            fontSize: '12px',
                        },
                    },
                },
                yaxis: {
                    labels: {
                        style: {
                            color: '#686c71',
                            fontSize: '12px',
                        },
                    },
                    axisBorder: {
                        show: false,
                        color: '#f6f6f7',
                    },
                },
                fill: {
                    opacity: 1
                },
                tooltip: {
                    y: {
                        formatter: function (val) {
                            return "$ " + val + " Thousands"
                        }
                    }
                },
                legend: {
                    offsetY: -10,
                },
                grid: {
                    show: true,
                    borderColor: '#f6f6f7',
                },
            },
            series: [{
                name: 'Net Profit',
                data: [44, 55, 57, 56, 61, 58, 63, 60, 66, 70, 75, 80]
            }, {
                name: 'Revenue',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94, 100, 110, 96]
            }, {
                name: 'Free Cash Flow',
                data: [35, 41, 36, 26, 45, 48, 52, 53, 41, 55, 45, 60]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Monthly Revenue</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="bar" 
                        height={320} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default MonthlyRevenueChart;