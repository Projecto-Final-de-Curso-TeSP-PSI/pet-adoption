import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});

class MonthlyHoursTarget extends Component {

    constructor(props) {
        super(props);
        this.state = {
            options: {
                plotOptions: {
                    colors:['#2962ff'],

                    radialBar: {
                        hollow: {
                            size: '80%',
                        },
                        dataLabels: {
                            name: {
                                show: true,
                                fontSize: '30px',
                            },
                            value: {
                                show: true,
                            }
                        },
                    },
                },
                labels: ['12,000']
            },
            series: [70],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Weekly Target</h5>
                    </div>

                    <Chart 
                        options={this.state.options} 
                        series={this.state.series} 
                        type="radialBar" 
                        height={392} 
                        className="mh-100" 
                    />
                    <p className="m-0 text-center fw-600">85% of Your Goal</p>
                </div>
            </div>
        );
    }
}

export default MonthlyHoursTarget;