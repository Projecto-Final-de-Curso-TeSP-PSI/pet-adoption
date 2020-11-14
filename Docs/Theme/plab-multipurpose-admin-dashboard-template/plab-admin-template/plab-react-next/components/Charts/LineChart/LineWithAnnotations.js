import React, { Component } from 'react';
// import Chart from 'react-apexcharts';
import dynamic from 'next/dynamic';
const Chart = dynamic(import('react-apexcharts'), {
    ssr: false,
});


const series = 
{
    "monthDataSeries1": {
        "prices": [
            8107.85,
            8128.0,
            8122.9,
            8165.5,
            8340.7,
            8423.7,
            8423.5,
            8514.3,
            8481.85,
            8487.7,
            8506.9,
            8626.2,
            8668.95,
            8602.3,
            8607.55,
            8512.9,
            8496.25,
            8600.65,
            8881.1,
            9340.85
        ],
        "dates": [
            "13 Nov 2018",
            "14 Nov 2018",
            "15 Nov 2018",
            "16 Nov 2018",
            "17 Nov 2018",
            "20 Nov 2018",
            "21 Nov 2018",
            "22 Nov 2018",
            "23 Nov 2018",
            "24 Nov 2018",
            "27 Nov 2018",
            "28 Nov 2018",
            "29 Nov 2018",
            "30 Nov 2018",
            "01 Dec 2018",
            "04 Dec 2018",
            "05 Dec 2018",
            "06 Dec 2018",
            "07 Dec 2018",
            "08 Dec 2018"
        ]
    },
    "monthDataSeries2": {
        "prices": [
            8423.7,
            8423.5,
            8514.3,
            8481.85,
            8487.7,
            8506.9,
            8626.2,
            8668.95,
            8602.3,
            8607.55,
            8512.9,
            8496.25,
            8600.65,
            8881.1,
            9040.85,
            8340.7,
            8165.5,
            8122.9,
            8107.85,
            8128.0
        ],
        "dates": [
            "13 Nov 2018",
            "14 Nov 2018",
            "15 Nov 2018",
            "16 Nov 2018",
            "17 Nov 2018",
            "20 Nov 2018",
            "21 Nov 2018",
            "22 Nov 2018",
            "23 Nov 2018",
            "24 Nov 2018",
            "27 Nov 2018",
            "28 Nov 2018",
            "29 Nov 2018",
            "30 Nov 2018",
            "01 Dec 2018",
            "04 Dec 2018",
            "05 Dec 2018",
            "06 Dec 2018",
            "07 Dec 2018",
            "08 Dec 2018"
        ]
    },
    "monthDataSeries3": {
        "prices": [
            7114.25,
            7126.6,
            7116.95,
            7203.7,
            7233.75,
            7451.0,
            7381.15,
            7348.95,
            7347.75,
            7311.25,
            7266.4,
            7253.25,
            7215.45,
            7266.35,
            7315.25,
            7237.2,
            7191.4,
            7238.95,
            7222.6,
            7217.9,
            7359.3,
            7371.55,
            7371.15,
            7469.2,
            7429.25,
            7434.65,
            7451.1,
            7475.25,
            7566.25,
            7556.8,
            7525.55,
            7555.45,
            7560.9,
            7490.7,
            7527.6,
            7551.9,
            7514.85,
            7577.95,
            7592.3,
            7621.95,
            7707.95,
            7859.1,
            7815.7,
            7739.0,
            7778.7,
            7839.45,
            7756.45,
            7669.2,
            7580.45,
            7452.85,
            7617.25,
            7701.6,
            7606.8,
            7620.05,
            7513.85,
            7498.45,
            7575.45,
            7601.95,
            7589.1,
            7525.85,
            7569.5,
            7702.5,
            7812.7,
            7803.75,
            7816.3,
            7851.15,
            7912.2,
            7972.8,
            8145.0,
            8161.1,
            8121.05,
            8071.25,
            8088.2,
            8154.45,
            8148.3,
            8122.05,
            8132.65,
            8074.55,
            7952.8,
            7885.55,
            7733.9,
            7897.15,
            7973.15,
            7888.5,
            7842.8,
            7838.4,
            7909.85,
            7892.75,
            7897.75,
            7820.05,
            7904.4,
            7872.2,
            7847.5,
            7849.55,
            7789.6,
            7736.35,
            7819.4,
            7875.35,
            7871.8,
            8076.5,
            8114.8,
            8193.55,
            8217.1,
            8235.05,
            8215.3,
            8216.4,
            8301.55,
            8235.25,
            8229.75,
            8201.95,
            8164.95,
            8107.85,
            8128.0,
            8122.9,
            8165.5,
            8340.7,
            8423.7,
            8423.5,
            8514.3,
            8481.85,
            8487.7,
            8506.9,
            8626.2
        ],
        "dates": [
            "02 Jun 2018",
            "05 Jun 2018",
            "06 Jun 2018",
            "07 Jun 2018",
            "08 Jun 2018",
            "09 Jun 2018",
            "12 Jun 2018",
            "13 Jun 2018",
            "14 Jun 2018",
            "15 Jun 2018",
            "16 Jun 2018",
            "19 Jun 2018",
            "20 Jun 2018",
            "21 Jun 2018",
            "22 Jun 2018",
            "23 Jun 2018",
            "27 Jun 2018",
            "28 Jun 2018",
            "29 Jun 2018",
            "30 Jun 2018",
            "03 Jul 2018",
            "04 Jul 2018",
            "05 Jul 2018",
            "06 Jul 2018",
            "07 Jul 2018",
            "10 Jul 2018",
            "11 Jul 2018",
            "12 Jul 2018",
            "13 Jul 2018",
            "14 Jul 2018",
            "17 Jul 2018",
            "18 Jul 2018",
            "19 Jul 2018",
            "20 Jul 2018",
            "21 Jul 2018",
            "24 Jul 2018",
            "25 Jul 2018",
            "26 Jul 2018",
            "27 Jul 2018",
            "28 Jul 2018",
            "31 Jul 2018",
            "01 Aug 2018",
            "02 Aug 2018",
            "03 Aug 2018",
            "04 Aug 2018",
            "07 Aug 2018",
            "08 Aug 2018",
            "09 Aug 2018",
            "10 Aug 2018",
            "11 Aug 2018",
            "14 Aug 2018",
            "16 Aug 2018",
            "17 Aug 2018",
            "18 Aug 2018",
            "21 Aug 2018",
            "22 Aug 2018",
            "23 Aug 2018",
            "24 Aug 2018",
            "28 Aug 2018",
            "29 Aug 2018",
            "30 Aug 2018",
            "31 Aug 2018",
            "01 Sep 2018",
            "04 Sep 2018",
            "05 Sep 2018",
            "06 Sep 2018",
            "07 Sep 2018",
            "08 Sep 2018",
            "11 Sep 2018",
            "12 Sep 2018",
            "13 Sep 2018",
            "14 Sep 2018",
            "15 Sep 2018",
            "18 Sep 2018",
            "19 Sep 2018",
            "20 Sep 2018",
            "21 Sep 2018",
            "22 Sep 2018",
            "25 Sep 2018",
            "26 Sep 2018",
            "27 Sep 2018",
            "28 Sep 2018",
            "29 Sep 2018",
            "03 Oct 2018",
            "04 Oct 2018",
            "05 Oct 2018",
            "06 Oct 2018",
            "09 Oct 2018",
            "10 Oct 2018",
            "11 Oct 2018",
            "12 Oct 2018",
            "13 Oct 2018",
            "16 Oct 2018",
            "17 Oct 2018",
            "18 Oct 2018",
            "19 Oct 2018",
            "23 Oct 2018",
            "24 Oct 2018",
            "25 Oct 2018",
            "26 Oct 2018",
            "27 Oct 2018",
            "30 Oct 2018",
            "31 Oct 2018",
            "01 Nov 2018",
            "02 Nov 2018",
            "03 Nov 2018",
            "06 Nov 2018",
            "07 Nov 2018",
            "08 Nov 2018",
            "09 Nov 2018",
            "10 Nov 2018",
            "13 Nov 2018",
            "14 Nov 2018",
            "15 Nov 2018",
            "16 Nov 2018",
            "17 Nov 2018",
            "20 Nov 2018",
            "21 Nov 2018",
            "22 Nov 2018",
            "23 Nov 2018",
            "24 Nov 2018",
            "27 Nov 2018",
            "28 Nov 2018"
        ]
    }
}

class LineWithAnnotations extends Component {

    constructor(props) {
        super(props);

        this.state = {
            options: {
                annotations: {
                    yaxis: [{
                        y: 8200,
                        borderColor: '#00E396',
                        label: {
                            borderColor: '#00E396',
                            style: {
                                color: '#fff',
                                background: '#00E396',
                            },
                            text: 'Support',
                        }
                    }, {
                        y: 8600,
                        y2: 9000,
                        borderColor: '#FEB019',
                        opacity: 0.1,
                        label: {
                            borderColor: '#333',
                            style: {
                                fontSize: '10px',
                                color: '#333',
                                background: '#FEB019',
                            },
                            text: 'Y-axis range',
                        }
                    }],
                    xaxis: [{
                        x: new Date('23 Nov 2018').getTime(),
                        strokeDashArray: 0,
                        borderColor: '#775DD0',
                        label: {
                            borderColor: '#775DD0',
                            style: {
                                color: '#fff',
                                background: '#775DD0',
                            },
                            text: 'Anno Test',
                        }
                    }, {
                        x: new Date('26 Nov 2018').getTime(),
                        x2: new Date('28 Nov 2018').getTime(),
                        borderColor: '#B3F7CA',
                        opacity: 0.5,
                        label: {
                            borderColor: '#B3F7CA',
                            style: {
                                fontSize: '10px',
                                color: '#fff',
                                background: '#00E396',
                            },
                            offsetY: -10,
                            text: 'X-axis range',
                        }
                    }],
                    points: [{
                        x: new Date('01 Dec 2018').getTime(),
                        y: 8607.55,
                        marker: {
                            size: 8,
                            fillColor: '#fff',
                            strokeColor: 'red',
                            radius: 2,
                            cssClass: 'apexcharts-custom-class'
                        },
                        label: {
                            borderColor: '#FF4560',
                            offsetY: 0,
                            style: {
                                color: '#fff',
                                background: '#FF4560',
                            },
                            text: 'Point Annotation',
                        }
                    }]
                },
                chart: {
                    height: 350,
                    type: 'line',
                    id: 'areachart-2'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                grid: {
                    borderColor: '#f6f6f7',
                    padding: {
                        right: 30,
                        left: 20
                    }
                },
                title: {
                    text: 'Line with Annotations',
                    align: 'left',
                    style: {
                        fontSize:  '13px',
                        color:  '#686c71'
                    },
                },
                labels: series.monthDataSeries1.dates,
                xaxis: {
                    type: 'datetime',
                }
            },
            series: [{
                data: series.monthDataSeries1.prices
            }],
        }
    }

    render() {
        return (
            <div className="card mb-30">
                <div className="card-body">
                    <div className="card-header">
                        <h5 className="card-title">Line with Annotations</h5>
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

export default LineWithAnnotations;