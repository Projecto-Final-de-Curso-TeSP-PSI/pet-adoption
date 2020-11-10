import React, { Component } from 'react';
import Link from 'next/link';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class OrderSummary extends Component {
    constructor(props) {
        super(props);

        this.state = {
            options: {
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 3,
                },
                xaxis: {
                    type: 'date',
                    categories: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"], 
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
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
                legend: {
                    offsetY: -10,
                },
                grid: {
                    show: true,
                    borderColor: '#f6f6f7',
                },
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
                }
            },
            series: [{
                name: 'Monthly Sales',
                data: [60, 80, 50, 90, 60, 120, 90, 150, 100, 130]
            }, {
                name: 'Weekly Sales',
                data: [50, 60, 40, 80, 50, 110, 80, 140, 90, 120]
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <Link href="#">
                            <a className="btn btn-primary float-right">View all</a>
                        </Link>
                        <h5 className="card-title">Order Summary</h5>
                    </div>

                    <div className="m-t-30">
                        <div className="d-md-flex">
                            <div className="pr-4 mt-2 border-right border-hide-sm">
                                <p className="mb-0 fs-13">Net Revenue</p>
                                <h5 className="mb-0">
                                    <span>$50,525</span>
                                    <span className="primary-text ml-1 fs-13">+8.71%</span>
                                </h5>
                            </div>

                            <div className="px-md-4 mt-2 border-right border-hide-md">
                                <p className="mb-0 fs-13">Selling</p>
                                <h5 className="mb-0">
                                    <span>$20,520</span>
                                    <span className="danger-text ml-1 fs-13">+2.82%</span>
                                </h5>
                            </div>

                            <div className="px-md-4 mt-2">
                                <p className="mb-0 fs-13">Cost</p>
                                <h5 className="mb-0">
                                    <span>$7,317</span>
                                    <span className="primary-text ml-1 fs-13">+10.2%</span>
                                </h5>
                            </div>
                        </div>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="area" 
                        height={345} 
                        className="mh-100" 
                    />
                </div>
            </div>
        );
    }
}

export default OrderSummary;