import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class TotalSales extends Component {
    constructor(props) {
        super(props);
        this.state = {
            options: {
                chart: {
                    toolbar: {
                        show: false,
                    },
                },
                colors:['#2962ff', '#886cff'],
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 3,
                    curve: 'smooth',
                    lineCap: 'round'
                },
                legend: {
                    position: 'top',
                },
                grid: {
                    show: true,
                    borderColor: '#f6f6f7',
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', "Oct", "Nov", "Dec"],
                    labels: {
                        style: {
                            colors: '#686c71',
                            fontSize: '12px',
                        },
                    },
                    axisBorder: {
                        show: true,
                        color: '#f6f6f7',
                        height: 1,
                        width: '100%',
                        offsetX: 0,
                        offsetY: 0
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
                        show: true,
                        color: '#f6f6f7',
                    },
                }
            },
            series: [{
                name: 'Online',
                data: [45, 52, 38, 45, 45, 52, 38, 45, 45, 52, 38, 45]
            }, {
                name: 'Ofline',
                data: [12, 42, 68, 33, 12, 42, 68, 33, 12, 42, 68, 33,]
            }],
        }
    }
    
    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Total Sales</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="line" 
                        height={380} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default TotalSales;