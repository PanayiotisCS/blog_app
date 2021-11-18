/*!
 *
 * Dasha - Bootstrap Admin Template
 *
 * Version: 1.4
 * Author: @themicon_co
 * Website: http://themicon.co
 * License: https://wrapbootstrap.com/help/licenses
 *
 */

// APP START
// -----------------------------------

(function() {
    'use strict';

    // Disable warning "Synchronous XMLHttpRequest on the main thread is deprecated.."
    $.ajaxPrefilter(function(options) {
        options.async = true;
    });

    // used for the preloader
    $(function() { document.body.style.opacity = 1; });

})();

(function() {
    'use strict';

    $(FlotCharts);

    function FlotCharts() {

        if (!$.fn.plot) return;

        // Dont run if charts page not loaded
        if (!$('#bar-flotchart').length) return;

        // BAR
        // -----------------------------------
        $.get('static/chart/bar.json', function(data) {

            var barData = data;
            var barOptions = {
                series: {
                    bars: {
                        align: 'center',
                        lineWidth: 0,
                        show: true,
                        barWidth: 0.6,
                        fill: true,
                        fillColor: { colors: [Colors.byName('blue-500'), Colors.byName('purple-500')] }
                    }
                },
                grid: {
                    borderColor: 'rgba(162,162,162,.26)',
                    borderWidth: 1,
                    hoverable: true,
                    backgroundColor: 'transparent'
                },
                tooltip: true,
                tooltipOpts: {
                    content: function(label, x, y) {
                        return x + ' : ' + y;
                    }
                },
                xaxis: {
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    },
                    mode: 'categories'
                },
                yaxis: {
                    // position: (isRTL ? 'right' : 'left'),
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    }
                },
                shadowSize: 0
            };

            $('#bar-flotchart').plot(barData, barOptions);
        });



        // BAR STACKED
        // -----------------------------------
        $.get('static/chart/barstacked.json', function(data) {

            var barStackeData = data;
            var barStackedOptions = {
                series: {
                    stack: true,
                    bars: {
                        align: 'center',
                        lineWidth: 0,
                        show: true,
                        barWidth: 0.6,
                        fill: 0.9
                    }
                },
                grid: {
                    borderColor: 'rgba(162,162,162,.26)',
                    borderWidth: 1,
                    hoverable: true,
                    backgroundColor: 'transparent'
                },
                tooltip: true,
                tooltipOpts: {
                    content: function(label, x, y) {
                        return x + ' : ' + y;
                    }
                },
                xaxis: {
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    },
                    mode: 'categories'
                },
                yaxis: {
                    min: 0,
                    max: 200, // optional: use it for a clear represetation
                    // position: (isRTL ? 'right' : 'left'),
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    }
                },
                shadowSize: 0
            };

            $('#barstacked-flotchart').plot(barStackeData, barStackedOptions);
        });

        // SPLINE
        // -----------------------------------
        $.get('static/chart/spline.json', function(data) {

            var splineData = data;
            var splineOptions = {
                series: {
                    lines: {
                        show: false
                    },
                    points: {
                        show: true,
                        radius: 2
                    },
                    splines: {
                        show: true,
                        tension: 0.4,
                        lineWidth: 1,
                        fill: 1
                    }
                },
                grid: {
                    borderColor: 'rgba(162,162,162,.26)',
                    borderWidth: 1,
                    hoverable: true,
                    backgroundColor: 'transparent'
                },
                tooltip: true,
                tooltipOpts: {
                    content: function(label, x, y) {
                        return x + ' : ' + y;
                    }
                },
                xaxis: {
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    },
                    mode: 'categories'
                },
                yaxis: {
                    min: 0,
                    max: 150, // optional: use it for a clear represetation
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    },
                    // position: (isRTL ? 'right' : 'left'),
                    tickFormatter: function(v) {
                        return v /* + ' visitors'*/ ;
                    }
                },
                shadowSize: 0
            };

            $('#spline-flotchart').plot(splineData, splineOptions);
        });

        // AREA
        // -----------------------------------
        $.get('static/chart/area.json', function(data) {
            var areaData = data;
            var areaOptions = {
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 0.5
                            }, {
                                opacity: 0.9
                            }]
                        }
                    },
                    points: {
                        show: false
                    }
                },
                grid: {
                    borderColor: 'rgba(162,162,162,.26)',
                    borderWidth: 1,
                    hoverable: true,
                    backgroundColor: 'transparent'
                },
                tooltip: true,
                tooltipOpts: {
                    content: function(label, x, y) {
                        return x + ' : ' + y;
                    }
                },
                xaxis: {
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    },
                    mode: 'categories'
                },
                yaxis: {
                    min: 0,
                    max: 150,
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    },
                    // position: (isRTL ? 'right' : 'left')
                },
                shadowSize: 0
            };

            $('#area-flotchart').plot(areaData, areaOptions);

        });

        // LINE
        // -----------------------------------
        $.get('static/chart/line.json', function(data) {

            var lineData = data;
            var lineOptions = {
                series: {
                    lines: {
                        show: true,
                        fill: 0.01
                    },
                    points: {
                        show: true,
                        radius: 4
                    }
                },
                grid: {
                    borderColor: 'rgba(162,162,162,.26)',
                    borderWidth: 1,
                    hoverable: true,
                    backgroundColor: 'transparent'
                },
                tooltip: true,
                tooltipOpts: {
                    content: function(label, x, y) {
                        return x + ' : ' + y;
                    }
                },
                xaxis: {
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    },
                    mode: 'categories'
                },
                yaxis: {
                    max: 300,
                    // position: (isRTL ? 'right' : 'left'),
                    tickColor: 'rgba(162,162,162,.26)',
                    font: {
                        color: Colors.byName('blueGrey-200')
                    }
                },
                shadowSize: 0
            };

            $('#line-flotchart').plot(lineData, lineOptions);
        });

        // PIE
        // -----------------------------------
        var pieData = [{
            'label': 'CSS',
            'color': '#009688',
            'data': 40
        }, {
            'label': 'LESS',
            'color': '#FFC107',
            'data': 90
        }, {
            'label': 'SASS',
            'color': '#FF7043',
            'data': 75
        }];
        var pieOptions = {
            series: {
                pie: {
                    show: true,
                    innerRadius: 0,
                    label: {
                        show: true,
                        radius: 0.8,
                        formatter: function(label, series) {
                            return '<div class="flot-pie-label">' +
                                //label + ' : ' +
                                Math.round(series.percent) +
                                '%</div>';
                        },
                        background: {
                            opacity: 0.8,
                            color: '#222'
                        }
                    }
                }
            }
        };

        $('#pie-flotchart').plot(pieData, pieOptions);

        // DONUT
        // -----------------------------------
        var donutData = [{
            'color': '#4CAF50',
            'data': 60,
            'label': 'Coffee'
        }, {
            'color': '#009688',
            'data': 90,
            'label': 'CSS'
        }, {
            'color': '#FFC107',
            'data': 50,
            'label': 'LESS'
        }, {
            'color': '#FF7043',
            'data': 80,
            'label': 'Pug'
        }, {
            'color': '#3949AB',
            'data': 116,
            'label': 'AngularJS'
        }];
        var donutOptions = {
            series: {
                pie: {
                    show: true,
                    innerRadius: 0.5 // This makes the donut shape
                }
            }
        };

        $('#donut-flotchart').plot(donutData, donutOptions);

        // REALTIME
        // -----------------------------------
        var realTimeOptions = {
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: {
                        colors: [Colors.byName('blue-500'), Colors.byName('blue-500')]
                    }
                },
                shadowSize: 0 // Drawing is faster without shadows
            },
            grid: {
                show: false,
                borderWidth: 0,
                minBorderMargin: 20,
                labelMargin: 10
            },
            xaxis: {
                tickFormatter: function() {
                    return '';
                }
            },
            yaxis: {
                min: 0,
                max: 110
            },
            legend: {
                show: true
            },
            colors: [Colors.byName('blue-500')]
        };

        // Generate random data for realtime demo
        var data = [],
            totalPoints = 300;

        var realTimeData = getRandomData();
        update();

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);
            // Do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50,
                    y = prev + Math.random() * 10 - 5;
                if (y < 0) {
                    y = 0;
                } else if (y > 100) {
                    y = 100;
                }
                data.push(y);
            }
            // Zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i) {
                res.push([i, data[i]]);
            }
            return [res];
        }

        function update() {
            realTimeData = getRandomData();
            $('#realtime-flotchart').plot(realTimeData, realTimeOptions);
            setTimeout(update, 30);
        }
        // end random data generation
    }

})();
(function() {
    'use strict';

    $(initPeity);

    function initPeity() {

        if (!$.fn.peity) return;

        $('.peity-pie').peity('pie', {
            radius: 25,
            fill: [Colors.byName('deepPurple-100'), Colors.byName('deepPurple-400'), Colors.byName('deepPurple-700')]
        });

        $('.peity-donut').peity('donut', {
            radius: 25,
            fill: [Colors.byName('pink-100'), Colors.byName('pink-400'), Colors.byName('pink-700')]
        });

        $('.peity-line').peity('line', {
            height: 40,
            width: 100,
            strokeWidth: 3,
            stroke: Colors.byName('teal-500'),
            fill: Colors.byName('teal-100')
        });

        $('.peity-bar').peity('bar', {
            height: 40,
            width: 100,
            fill: [Colors.byName('cyan-100'), Colors.byName('cyan-400'), Colors.byName('cyan-700')]
        });

        // Real time example

        var updatingChart = $('.realtime-peity-chart').peity('line', {
            fill: Colors.byName('green-200'),
            stroke: Colors.byName('green-500'),
            width: '100%',
            height: 60
        });

        setInterval(function() {
            var random = Math.round(Math.random() * 10);
            var values = updatingChart.text().split(',');
            values.shift();
            values.push(random);

            updatingChart
                .text(values.join(','))
                .change();
        }, 1000);

    }

})();
(function() {
    'use strict';

    $(RadialCharts);

    function RadialCharts() {

        if (!$.fn.knob || !$.fn.easyPieChart) return;

        // KNOB Charts

        var knobLoaderOptions1 = {
            width: '50%', // responsive
            displayInput: true,
            thickness: 0.1,
            fgColor: Colors.byName('cyan-500'),
            bgColor: 'rgba(162,162,162, .09)'
        };

        var knobLoaderOptions2 = {
            width: '50%', // responsive
            displayInput: true,
            thickness: 1,
            inputColor: '#fff',
            fgColor: Colors.byName('amber-500'),
            bgColor: Colors.byName('yellow-500'),
            readOnly: true
        };

        var knobLoaderOptions3 = {
            width: '50%', // responsive
            displayInput: true,
            fgColor: Colors.byName('red-500'),
            bgColor: 'rgba(162,162,162, .09)',
            displayPrevious: true,
            thickness: 0.1,
            lineCap: 'round'
        };

        var knobLoaderOptions4 = {
            width: '50%', // responsive
            displayInput: true,
            fgColor: Colors.byName('primary'),
            bgColor: 'rgba(162,162,162, .09)',
            angleOffset: -125,
            angleArc: 250
        };

        $('#knob-chart1').knob(knobLoaderOptions1);
        $('#knob-chart2').knob(knobLoaderOptions2);
        $('#knob-chart3').knob(knobLoaderOptions3);
        $('#knob-chart4').knob(knobLoaderOptions4);

        // Easy Pie Charts

        var pieOptions1 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: Colors.byName('info'),
            trackColor: false,
            scaleColor: false,
            lineWidth: 10,
            lineCap: 'circle'
        };

        var pieOptions2 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: Colors.byName('danger'),
            trackColor: false,
            scaleColor: false,
            lineWidth: 4,
            lineCap: 'circle'
        };

        var pieOptions3 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: Colors.byName('deepPurple-500'),
            trackColor: false,
            scaleColor: Colors.byName('gray'),
            lineWidth: 15,
            lineCap: 'circle'
        };

        var pieOptions4 = {
            animate: {
                duration: 800,
                enabled: true
            },
            barColor: Colors.byName('deepPurple-500'),
            trackColor: 'rgba(162,162,162, .09)',
            scaleColor: Colors.byName('gray-dark'),
            lineWidth: 15,
            lineCap: 'circle'
        };

        $('#easypiechart1').easyPieChart(pieOptions1);
        $('#easypiechart2').easyPieChart(pieOptions2);
        $('#easypiechart3').easyPieChart(pieOptions3);
        $('#easypiechart4').easyPieChart(pieOptions4);

    }
})();

(function() {
    'use strict';

    if( !document.querySelector('#rickshaw-chart1') ||
        !document.querySelector('#rickshaw-chart2') ||
        !document.querySelector('#rickshaw-chart3') )
        return;

    $(RickshawCharts);

    function RickshawCharts() {
        var seriesData = [
            [],
            [],
            []
        ];
        var random = new Rickshaw.Fixtures.RandomData(150);

        for (var i = 0; i < 150; i++) {
            random.addData(seriesData);
        }
        // Big area chart
        var graph1 = new Rickshaw.Graph({
            element: document.querySelector('#rickshaw-chart1'),
            renderer: 'area',
            series: [{
                color: Colors.byName('green-700'),
                data: seriesData[0],
                name: 'New York'
            }, {
                color: Colors.byName('success'),
                data: seriesData[1],
                name: 'London'
            }, {
                color: Colors.byName('lime-500'),
                data: seriesData[2],
                name: 'Tokyo'
            }]
        });
        graph1.render();

        // Bar chart
        var graph2 = new Rickshaw.Graph({
            element: document.querySelector('#rickshaw-chart2'),
            renderer: 'bar',
            series: [{
                color: Colors.byName('blue-700'),
                data: seriesData[0],
                name: 'New York'
            }, {
                color: Colors.byName('blue-500'),
                data: seriesData[1],
                name: 'London'
            }, {
                color: Colors.byName('blue-200'),
                data: seriesData[2],
                name: 'Tokyo'
            }]
        });
        graph2.render();

        // Scatterplot

        var seriesData2 = [
            [],
            [],
            []
        ];
        var random2 = new Rickshaw.Fixtures.RandomData(150);

        for (var j = 0; j < 200; j++) {
            random2.addData(seriesData2);
        }
        var graph3 = new Rickshaw.Graph({
            element: document.querySelector('#rickshaw-chart3'),
            width: '100%',
            renderer: 'scatterplot',
            legend: {
                toggle: true,
                highlight: true
            },
            series: [{
                color: Colors.byName('pink-700'),
                data: seriesData2[0],
                name: 'New York'
            }, {
                color: Colors.byName('pink-500'),
                data: seriesData2[1],
                name: 'London'
            }, {
                color: Colors.byName('pink-200'),
                data: seriesData2[2],
                name: 'Tokyo'
            }]
        });
        new Rickshaw.Graph.HoverDetail({
            graph: graph3,
            xFormatter: function(x) {
                return 't=' + x;
            },
            yFormatter: function(y) {
                return '$' + y;
            }
        });
        graph3.render();

        // Fluid charts
        // ---------------

        window.addEventListener('resize', function(){
            //- 1
            graph1.configure({
                width: $('#rickshaw-chart1').width(),
                height: $('#rickshaw-chart1').height()
            });
            graph1.render();
            //- 2
            graph2.configure({
                width: $('#rickshaw-chart2').width(),
                height: $('#rickshaw-chart2').height()
            });
            graph2.render();
            //- 3
            graph3.configure({
                width: $('#rickshaw-chart3').width(),
                height: $('#rickshaw-chart3').height()
            });
            graph3.render();

        });

    }

})();

(function(global) {
    'use strict';

    global.APP_COLORS = {
        'gray-darker':            '#263238',
        'gray-dark':              '#455A64',
        'gray':                   '#607D8B',
        'gray-light':             '#90A4AE',
        'gray-lighter':           '#ECEFF1',

        'primary':                '#448AFF',
        'success':                '#4CAF50',
        'info':                   '#03A9F4',
        'warning':                '#FFB300',
        'danger':                 '#F44336'
    };

})(window);

(function(global) {
    'use strict';

    global.Colors = new ColorsHandler();

    function ColorsHandler() {
        this.byName = byName;

        ////////////////

        function byName(name) {
            var color = APP_COLORS[name];
            if (!color && (typeof materialColors !== 'undefined')) {
                var c = name.split('-'); // red-500, blue-a100, deepPurple-500, etc
                if (c.length)
                    color = (materialColors[c[0]] || {})[c[1]];
            }
            return (color || '#fff');
        }
    }

})(window);
(function() {
    'use strict';

    $(initDashboard);

    function initDashboard() {

        if (!$.fn.plot || !$.fn.knob) return;

        var knobLoaderOptions1 = {
            width: '80%', // responsive
            displayInput: true,
            fgColor: Colors.byName('primary'),
            bgColor: 'rgba(162,162,162, .09)',
            angleOffset: -125,
            angleArc: 250,
            readOnly: true
        };

        $('#dash-chart1').knob(knobLoaderOptions1);

        // Simulate real time knob chart
        setInterval(function() {
            var endValue = Math.floor(Math.random() * 20) + 20;
            var dial = $('#dash-chart1');
            dial.animate({ value: endValue }, {
                duration: 1000,
                easing: 'swing',
                step: function(now, fx) {
                    fx.now = parseInt(now);
                    dial.val(Math.floor(this.value)).trigger('change');
                }
            });
        }, 2000);

        // Animate progress bars in real time
        var ram = $('#ram'),
            ramvalue = $('#ram-value'),
            io = $('#io'),
            iovalue = $('#io-value');
        setInterval(function() {
            var r = (Math.floor(Math.random() * 20) + 40) + '%';
            var i = (Math.floor(Math.random() * 10) + 20) + '%';
            ramvalue.text(r);
            iovalue.text(i);
            ram.css({ width: r });
            io.css({ width: i });
        }, 4000);

        // Animate counting of numbers
        $('[data-counter]').each(function() {
            var $this = $(this);
            $this.prop('counter', 0).animate({
                counter: $this.data('counter')
            }, {
                duration: 3000,
                easing: 'swing',
                step: function(now) {
                    $this.text(numberWithCommas(Math.ceil(now)));
                }
            });
        });

        function numberWithCommas(x) { // https://stackoverflow.com/a/2901298
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        }

        // Main Flot chart
        var splineData = [{
            'label': 'Unique',
            'color': Colors.byName('blue-400'),
            data: [
                ['5', 50],
                ['6', 70],

                ['7', 60],
                ['8', 120],
                ['9', 80],

                ['10', 150],
                ['11', 80],
                ['12', 90]
            ]
        }];
        var splineOptions = {
            series: {
                lines: {
                    show: true,
                    fill: true,
                    fillColor: { colors: [{ opacity: 0 }, { opacity: 1 }] }
                },
                points: {
                    show: true,
                    radius: 3
                }
            },
            grid: {
                borderColor: '#eee',
                borderWidth: 0,
                hoverable: true,
                backgroundColor: 'transparent'
            },
            tooltip: true,
            tooltipOpts: {
                content: function(label, x, y) {
                    return x + ' : ' + y;
                }
            },
            xaxis: {
                show: false,
                tickColor: 'transparent',
                mode: 'categories',
                font: {
                    color: Colors.byName('blueGrey-200')
                }
            },
            yaxis: {
                show: false,
                min: 0,
                max: 180, // optional: use it for a clear representation
                tickColor: 'transparent',
                font: {
                    color: Colors.byName('blueGrey-200')
                },
                //position: 'right' or 'left',
                tickFormatter: function(v) {
                    return v /* + ' visitors'*/ ;
                }
            },
            legend: false,
            shadowSize: 0
        };

        $('#flot-main-spline').each(function() {
            var $el = $(this);
            if ($el.data('height')) $el.height($el.data('height'));
            $el.plot(splineData, splineOptions);
        });


        // Bar chart stacked
        // ------------------------
        var stackedChartData = [{
            data: [
                ['1.2', 45],
                ['2.5', 47],
                ['3.0', 45],
                ['4.2', 42],
                ['4.5', 45],
                ['4.7', 42],
                ['5.0', 45]
            ]
        }, {
            data: [
                ['1.2', 30],
                ['2.5', 27],
                ['3.0', 35],
                ['4.2', 25],
                ['4.5', 35],
                ['4.7', 35],
                ['5.0', 17]
            ]
        }];

        var stackedChartOptions = {
            bars: {
                show: true,
                fill: true,
                barWidth: 0.3,
                lineWidth: 1,
                align: 'center',
                // order : 1,
                fillColor: {
                    colors: [{
                        opacity: 1
                    }, {
                        opacity: 1
                    }]
                }
            },
            colors: [Colors.byName('deepPurple-100'), Colors.byName('deepPurple-300')],
            series: {
                shadowSize: 3
            },
            xaxis: {
                show: true,
                position: 'bottom',
                mode: 'categories'
            },
            yaxis: {
                show: false,
                min: 0,
                max: 60
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderWidth: 0,
                color: 'rgba(120,120,120,0.5)'
            },
            tooltip: true,
            tooltipOpts: {
                content: 'Value %x.0 is %y.0',
                defaultTheme: false,
                shifts: {
                    x: 0,
                    y: -20
                }
            }
        };

        $('#flot-stacked-chart').each(function() {
            var $el = $(this);
            if ($el.data('height')) $el.height($el.data('height'));
            $el.plot(stackedChartData, stackedChartOptions);
        });


        // Flot bar chart
        // ------------------
        var barChartOptions = {
            series: {
                bars: {
                    show: true,
                    fill: 1,
                    barWidth: 0.2,
                    lineWidth: 0,
                    align: 'center'
                },
                highlightColor: 'rgba(255,255,255,0.2)'
            },
            grid: {
                hoverable: true,
                clickable: true,
                borderWidth: 0,
                color: '#8394a9'
            },
            tooltip: true,
            tooltipOpts: {
                content: function getTooltip(label, x, y) {
                    return 'Activity for ' + x + ': ' + (y * 1000);
                }
            },
            xaxis: {
                tickColor: 'transparent',
                mode: 'categories',
                font: {
                    color: Colors.byName('blueGrey-200')
                }
            },
            yaxis: {
                show: false,
                tickColor: 'transparent',
                font: {
                    color: Colors.byName('blueGrey-200')
                }
            },
            legend: {
                show: false
            },
            shadowSize: 0
        };

        var barChartData = [{
            'label': '2017',
            bars: {
                order: 0,
                fillColor: { colors: [Colors.byName('blue-100'), Colors.byName('purple-100')] }
            },
            data: [
                ['Jan', 30],
                ['Feb', 25],
                ['Mar', 30],
                ['Apr', 35],
                ['May', 5]
            ]
        }, {
            'label': '2016',
            bars: {
                order: 1,
                fillColor: { colors: [Colors.byName('blue-500'), Colors.byName('purple-400')] }
            },
            data: [
                ['Jan', 45],
                ['Feb', 35],
                ['Mar', 25],
                ['Apr', 50],
                ['May', 20]
            ]
        }];

        $('#flot-bar-chart').each(function() {
            var $el = $(this);
            if ($el.data('height')) $el.height($el.data('height'));
            $el.plot(barChartData, barChartOptions);
        });

        // Small flot chart
        // ---------------------
        var chartTaskData = [{
            'label': 'Total',
            color: Colors.byName('primary'),
            data: [
                ['Jan', 14],
                ['Feb', 14],
                ['Mar', 12],
                ['Apr', 16],
                ['May', 13],
                ['Jun', 14],
                ['Jul', 19]
                //4, 4, 3, 5, 3, 4, 6
            ]
        }];
        var chartTaskOptions = {
            series: {
                lines: {
                    show: false
                },
                points: {
                    show: false
                },
                splines: {
                    show: true,
                    tension: 0.4,
                    lineWidth: 3,
                    fill: 1
                },
            },
            legend: {
                show: false
            },
            grid: {
                show: false,
            },
            tooltip: true,
            tooltipOpts: {
                content: function(label, x, y) {
                    return x + ' : ' + y;
                }
            },
            xaxis: {
                tickColor: '#fcfcfc',
                mode: 'categories'
            },
            yaxis: {
                min: 0,
                max: 30, // optional: use it for a clear representation
                tickColor: '#eee',
                //position: 'right' or 'left',
                tickFormatter: function(v) {
                    return v /* + ' visitors'*/ ;
                }
            },
            shadowSize: 0
        };

        $('#flot-task-chart').each(function() {
            var $el = $(this);
            if ($el.data('height')) $el.height($el.data('height'));
            $el.plot(chartTaskData, chartTaskOptions);
        });

        // Donut chart
        // -----------------
        var donutData = [{
            'color': Colors.byName('blue-200'),
            'data': 60,
            'label': 'Users'
        }, {
            'color': Colors.byName('blue-300'),
            'data': 90,
            'label': 'System'
        }, {
            'color': Colors.byName('blue-400'),
            'data': 50,
            'label': 'Memory'
        }, {
            'color': Colors.byName('blue-500'),
            'data': 80,
            'label': 'Server'
        }, {
            'color': Colors.byName('blue-600'),
            'data': 116,
            'label': 'Database'
        }];
        var donutOptions = {
            series: {
                pie: {
                    stroke: {
                        width: 0,
                        color: '#a1a1a1'
                    },
                    show: true,
                    innerRadius: 0.5 // This makes the donut shape
                }
            },
            legend: {
                show: false
            }
        };

        $('#donut-dashboard').plot(donutData, donutOptions);


        // Sparklines
        // -----------------

        var sparkValue1 = [4, 2, 3, 5, 3, 2, 3, 4, 6];
        var sparkValue2 = [5, 3, 4, 6, 5, 3, 4, 3, 4];
        var sparkValue3 = [4, 3, 4, 5, 3, 2, 3, 4, 6];
        var sparkOpts = {
            chartRangeMin: 0,
            type: 'bar',
            height: 50,
            width: '90',
            lineWidth: 4,
            barSpacing: 8,
            valueSpots: {
                '0:': Colors.byName('blue-700'),
            },
            lineColor: Colors.byName('blue-700'),
            spotColor: Colors.byName('blue-700'),
            fillColor: 'transparent',
            highlightLineColor: Colors.byName('blue-700'),
            spotRadius: 0
        };

        initSparkline($('#sparkline1'), sparkValue1, sparkOpts);
        initSparkline($('#sparkline2'), sparkValue2, sparkOpts);
        initSparkline($('#sparkline3'), sparkValue3, sparkOpts);
        // call sparkline and mix options with data attributes
        function initSparkline(el, values, opts) {
            el.sparkline(values, $.extend(opts, el.data()));
        }

        if (document.getElementById('dashboard-map')) {
            var MapStyles = [{ featureType: 'water', stylers: [{ visibility: 'on' }, { color: '#bdd1f9' }] }, { featureType: 'all', elementType: 'labels.text.fill', stylers: [{ color: '#334165' }] }, { featureType: 'landscape', stylers: [{ color: '#e9ebf1' }] }, { featureType: 'road.highway', elementType: 'geometry', stylers: [{ color: '#c5c6c6' }] }, { featureType: 'road.arterial', elementType: 'geometry', stylers: [{ color: '#fff' }] }, { featureType: 'road.local', elementType: 'geometry', stylers: [{ color: '#fff' }] }, { featureType: 'transit', elementType: 'geometry', stylers: [{ color: '#d8dbe0' }] }, { featureType: 'poi', elementType: 'geometry', stylers: [{ color: '#cfd5e0' }] }, { featureType: 'administrative', stylers: [{ visibility: 'on' }, { lightness: 33 }] }, { featureType: 'poi.park', elementType: 'labels', stylers: [{ visibility: 'on' }, { lightness: 20 }] }, { featureType: 'road', stylers: [{ color: '#d8dbe0', lightness: 20 }] }];
            var map = new GMaps({
                div: '#dashboard-map',
                lat: 43.102416,
                lng: -76.144695,
                disableDefaultUI: true,
                scrollwheel: false,
                zoom: 12
            });
            map.addMarker({
                lat: 43.102416,
                lng: -76.144695,
                title: 'You',
                icon: 'img/marker.png',
                click: function() {}
            });
            map.addStyle({
                styledMapName: 'Styled Map',
                styles: MapStyles,
                mapTypeId: 'map_style'
            });
            map.setStyle('map_style');
            // Enable Google Maps Directions API to use Routes
            map.drawRoute({
                origin: [43.102416, -76.144695],
                destination: [43.103419, -76.060238],
                travelMode: 'walking',
                strokeColor: Colors.byName('green-500'),
                strokeOpacity: 1,
                strokeWeight: 6
            });
        }

    }
})();
(function() {
    'use strict';

    $(runBootstrap);

    function runBootstrap() {

        // POPOVER
        // -----------------------------------

        $('[data-toggle="popover"]').popover();

        // TOOLTIP
        // -----------------------------------

        $('[data-toggle="tooltip"]').tooltip({
            container: 'body',
            animation: false // https://github.com/twbs/bootstrap/issues/21607#issuecomment-287533209
        });

    }

})();


(function() {
    'use strict';

    $(initNestable);

    function initNestable() {
        var updateOutput = function(e) {
            var list = e.length ? e : $(e.target),
                output = list.data('output');
            if (window.JSON) {
                output.text(window.JSON.stringify(list.nestable('serialize'))); //, null, 2));
            } else {
                output.text('JSON browser support required for this demo.');
            }
        };

        // activate Nestable for list 1
        $('#nestable').each(function() {
            $(this).nestable({
                group: 1
            })
            .on('change', updateOutput);

            // output initial serialised data
            updateOutput($(this).data('output', $('#nestable-output')));
        });

        // activate Nestable for list 2
        $('#nestable2').each(function() {
            $(this).nestable({
                group: 1
            })
            .on('change', updateOutput);

            // output initial serialised data
            updateOutput($(this).data('output', $('#nestable-output2')));
        });

        $('.js-nestable-action').on('click', function(e) {
            var target = $(e.target),
                action = target.data('action');
            if (action === 'expand-all') {
                $('.dd').nestable('expandAll');
            }
            if (action === 'collapse-all') {
                $('.dd').nestable('collapseAll');
            }
        });
    }

})();

(function() {
    'use strict';

    $(runSweetAlert);

    function runSweetAlert() {

        $('#swal-demo1').on('click', function(e) {
            e.preventDefault();
            swal('Here\'s a message!');
        });

        $('#swal-demo2').on('click', function(e) {
            e.preventDefault();
            swal('Here\'s a message!', 'It\'s pretty, isn\'t it?');
        });

        $('#swal-demo3').on('click', function(e) {
            e.preventDefault();
            swal('Good job!', 'You clicked the button!', 'success');
        });

        $('#swal-demo4').on('click', function(e) {
            e.preventDefault();
            swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this imaginary file!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#DD6B55',
                    confirmButtonText: 'Yes, delete it!',
                    closeOnConfirm: false
                },
                function() {
                    swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
                });

        });

        $('#swal-demo5').on('click', function(e) {
            e.preventDefault();
            swal({
                title: 'Are you sure?',
                text: 'You will not be able to recover this imaginary file!',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#DD6B55',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel plx!',
                closeOnConfirm: false,
                closeOnCancel: false
            }, function(isConfirm) {
                if (isConfirm) {
                    swal('Deleted!', 'Your imaginary file has been deleted.', 'success');
                } else {
                    swal('Cancelled', 'Your imaginary file is safe :)', 'error');
                }
            });

        });
    }

})();
(function() {
    'use strict';

    $(runToaster);

    function runToaster() {

        $('#clear-toaster').click(function(){
            toastr.clear();
        });

        $('#top-right-info').click(showToaster('info', 'toast-top-right'));
        $('#top-left-info').click(showToaster('info', 'toast-top-left'));
        $('#bottom-right-info').click(showToaster('info', 'toast-bottom-right'));
        $('#bottom-left-info').click(showToaster('info', 'toast-bottom-left'));

        $('#top-right-success').click(showToaster('success', 'toast-top-right'));
        $('#top-left-success').click(showToaster('success', 'toast-top-left'));
        $('#bottom-right-success').click(showToaster('success', 'toast-bottom-right'));
        $('#bottom-left-success').click(showToaster('success', 'toast-bottom-left'));

        $('#top-right-warning').click(showToaster('warning', 'toast-top-right'));
        $('#top-left-warning').click(showToaster('warning', 'toast-top-left'));
        $('#bottom-right-warning').click(showToaster('warning', 'toast-bottom-right'));
        $('#bottom-left-warning').click(showToaster('warning', 'toast-bottom-left'));

        $('#top-right-error').click(showToaster('error', 'toast-top-right'));
        $('#top-left-error').click(showToaster('error', 'toast-top-left'));
        $('#bottom-right-error').click(showToaster('error', 'toast-bottom-right'));
        $('#bottom-left-error').click(showToaster('error', 'toast-bottom-left'));

        function showToaster(type, positionClass) {
            return function() {
                toastr.options.positionClass = positionClass;
                toastr[type]('My name is Inigo Montoya. You killed my father, prepare to die!');
            };
        }

    }
})();

(function() {
    'use strict';

    if (typeof Dropzone === 'undefined') return;

    // Prevent Dropzone from auto discovering
    // This is useful when you want to create the
    // Dropzone programmatically later
    Dropzone.autoDiscover = false;

    $(formUpload);

    function formUpload() {

        // Dropzone settings
        var dropzoneOptions = {
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 100,
            maxFiles: 100,
            dictDefaultMessage: '<em class="ion-upload color-blue-grey-100 icon-2x"></em><br>Drop files here to upload', // default messages before first drop
            paramName: 'file', // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                if (file.name === 'justinbieber.jpg') {
                    done('Naha, you dont. :)');
                } else {
                    done();
                }
            },
            init: function() {
                var dzHandler = this;

                this.element.querySelector('button[type=submit]').addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    dzHandler.processQueue();
                });
                this.on('addedfile', function(file) {
                    console.log('Added file: ' + file.name);
                });
                this.on('removedfile', function(file) {
                    console.log('Removed file: ' + file.name);
                });
                this.on('sendingmultiple', function() {

                });
                this.on('successmultiple', function( /*files, response*/ ) {

                });
                this.on('errormultiple', function( /*files, response*/ ) {

                });
            }

        };

        var dropzoneArea = new Dropzone('#dropzone-area', dropzoneOptions);

    }

})();
(function() {
    'use strict';

    $(formAdvanced);

    function formAdvanced() {

        if (!$.fn.select2 ||
            !$.fn.datepicker ||
            !$.fn.clockpicker ||
            !$.fn.colorpicker) return;

        // Select 2

        $('#select2-1').select2();
        $('#select2-2').select2();
        $('#select2-3').select2({
            placeholder: 'Select a state',
            allowClear: true
        });
        $('#select2-4').select2({
            data: [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }]
        });

        // Datepicker

        $('#example-datepicker-1').datepicker({ autoclose: true });
        $('#example-datepicker-2').datepicker({ autoclose: true });
        $('#example-datepicker-3').datepicker({ autoclose: true });
        $('#example-datepicker-4').on('show', fix_xeditable_conflict)
            .datepicker({
                autoclose: true,
                container: '#example-datepicker-container-4'
            });
        $('#example-datepicker-5').on('show', fix_xeditable_conflict)
            .datepicker({
                autoclose: true,
                container: '#example-datepicker-container-5'
            });

        function fix_xeditable_conflict() {
            $('.datepicker > div:first-of-type').css('display', 'initial');
        }

        // Clockpicker
        var cpInput = $('.clockpicker').clockpicker();
        // auto close picker on scroll
        $('main').scroll(function() {
            cpInput.clockpicker('hide');
        });

        // MultiSelect

        $('#multiselect1').multiSelect();
        $('#optgroup').multiSelect({ selectableOptgroup: true });
        // Public Methods
        var publicMethods = $('#public-methods').multiSelect();
        $('#select-all').click(function() {
            publicMethods.multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function() {
            publicMethods.multiSelect('deselect_all');
            return false;
        });
        var demoValues = ['elem_0', 'elem_1', 'elem_2', 'elem_3', 'elem_4', 'elem_5', 'elem_6', 'elem_7', 'elem_8', 'elem_9'];
        $('#select-100').click(function() {
            publicMethods.multiSelect('select', demoValues);
            return false;
        });
        $('#deselect-100').click(function() {
            publicMethods.multiSelect('deselect', demoValues);
            return false;
        });
        $('#refresh').on('click', function() {
            publicMethods.multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function() {
            publicMethods.multiSelect('addOption', { value: 42, text: 'test 42', index: 0 });
            return false;
        });
        // Custom header/footer
        $('#ms-custom').multiSelect({
            selectableHeader: '<div class="bg-primary text-sm py-1 px-2">Selectable items</div>',
            selectionHeader: '<div class="bg-primary text-sm py-1 px-2">Selection items</div>',
            selectableFooter: '<div class="bg-primary text-sm py-1 px-2">Selectable footer</div>',
            selectionFooter: '<div class="bg-primary text-sm py-1 px-2">Selection footer</div>'
        });

        // UI SLider (noUiSlider)

        $('.ui-slider').each(function() {

            noUiSlider.create(this, {
                start: $(this).data('start'),
                connect: true,
                range: {
                    'min': 0,
                    'max': 100,
                }
            });
        });

        // Range selectable
        $('.ui-slider-range').each(function() {
            noUiSlider.create(this, {
                start: [25, 75],
                range: {
                    'min': 0,
                    'max': 100
                },
                connect: true
            });

        });

        // Live Values
        $('.ui-slider-values').each(function() {
            var slider = this;

            noUiSlider.create(slider, {
                start: [35, 75],
                connect: true,
                // direction: 'rtl',
                behaviour: 'tap-drag',
                range: {
                    'min': 0,
                    'max': 100
                }
            });

            slider.noUiSlider.on('slide', updateValues);
            updateValues();

            function updateValues() {
                var values = slider.noUiSlider.get();
                // Connecto to live values
                $('#ui-slider-value-lower').html(values[0]);
                $('#ui-slider-value-upper').html(values[1]);
            }
        });

        // Colorpicker

        $('#cp-demo-basic').colorpicker({
            customClass: 'colorpicker-2x',
            sliders: {
                saturation: {
                    maxLeft: 200,
                    maxTop: 200
                },
                hue: {
                    maxTop: 200
                },
                alpha: {
                    maxTop: 200
                }
            }
        });
        $('#cp-demo-component').colorpicker();
        $('#cp-demo-hex').colorpicker();

        $('#cp-demo-bootstrap').colorpicker({
            colorSelectors: {
                'default': '#777777',
                'primary': '#337ab7',
                'success': '#5cb85c',
                'info': '#5bc0de',
                'warning': '#f0ad4e',
                'danger': '#d9534f'
            }
        });

    }

})();
(function() {
    'use strict';

    $(formEditor);

    function formEditor() {

        // Summernote HTML editor
        $('.summernote').each(function() {
            $(this).summernote({
                height: 380
            });
        });

        $('.summernote-air').each(function() {
            $(this).summernote({
                airMode: true
            });
        });

        // Hide the initial popovers that display
        $('.note-popover').css({
            'display': 'none'
        });

    }

})();
(function() {
    'use strict';

    $(initTypeahead);

    function initTypeahead() {

        if (!$.fn.typeahead) return;

        // BASIC EXAMPLE
        // ----------------------

        var substringMatcher = function(strs) {
            return function findMatches(q, cb) {
                var matches, substrRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                    if (substrRegex.test(str)) {
                        matches.push(str);
                    }
                });

                cb(matches);
            };
        };

        var states = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
            'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
            'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
            'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
            'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
            'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
            'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
            'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
            'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
        ];

        $('#the-basics .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            source: substringMatcher(states)
        });


        // BLOODHOUND EXAMPLE
        // ----------------------
        // constructs the suggestion engine
        var bStates = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // `states` is an array of state names defined in "The Basics"
            local: states
        });

        $('#bloodhound .typeahead').typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'states',
            source: bStates
        });


        // PREFETCH EXAMPLE
        // ----------------------
        var countries = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.whitespace,
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // url points to a json file that contains an array of country names, see
            // https://github.com/twitter/typeahead.js/blob/gh-pages/data/countries.json
            prefetch: 'static/typeahead/countries.json'
        });

        // passing in `null` for the `options` arguments will result in the default
        // options being used
        $('#prefetch .typeahead').typeahead(null, {
            name: 'countries',
            source: countries
        });


        // DEFAULT SUGGESTION EXAMPLE
        // ----------------------------
        var nflTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            identify: function(obj) {
                return obj.team;
            },
            prefetch: 'static/typeahead/nfl.json'
        });

        function nflTeamsWithDefaults(q, sync) {
            if (q === '') {
                sync(nflTeams.get('Detroit Lions', 'Green Bay Packers', 'Chicago Bears'));
            } else {
                nflTeams.search(q, sync);
            }
        }

        $('#default-suggestions .typeahead').typeahead({
            minLength: 0,
            highlight: true
        }, {
            name: 'nfl-teams',
            display: 'team',
            source: nflTeamsWithDefaults
        });


        // MULTIPLE DATASET & CUSTOM TEMPLATE
        // ------------------------------------
        var nbaTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'static/typeahead/nba.json'
        });

        var nhlTeams = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('team'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            prefetch: 'static/typeahead/nhl.json'
        });

        $('#multiple-datasets .typeahead').typeahead({
            highlight: true
        }, {
            name: 'nba-teams',
            display: 'team',
            source: nbaTeams,
            templates: {
                header: '<h3 class="league-name">NBA Teams</h3>'
            }
        }, {
            name: 'nhl-teams',
            display: 'team',
            source: nhlTeams,
            templates: {
                header: '<h3 class="league-name">NHL Teams</h3>'
            }
        });

        // SCROLLABLE EXAMPLE
        // -------------------
        $('#scrollable-dropdown-menu .typeahead').typeahead(null, {
            name: 'countries',
            limit: 10,
            source: countries
        });

    }

})();
(function() {
    'use strict';

    $(formValidation);

    function formValidation() {

        if (!$.fn.validate) return;

        $('#form-register').validate({
            errorPlacement: errorPlacementInput,
            // Form rules
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password1: {
                    required: true
                },
                confirm_match: {
                    required: true,
                    equalTo: '#id-password'
                }
            }
        });

        $('#form-example').validate({
            errorPlacement: errorPlacementInput,
            // Form rules
            rules: {
                sometext: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                digits: {
                    required: true,
                    digits: true
                },
                url: {
                    required: true,
                    url: true
                },
                min: {
                    required: true,
                    min: 6
                },
                max: {
                    required: true,
                    max: 6
                },
                minlength: {
                    required: true,
                    minlength: 6
                },
                maxlength: {
                    required: true,
                    maxlength: 10
                },
                length: {
                    required: true,
                    range: [6, 10]
                },
                match1: {
                    required: true
                },
                confirm_match: {
                    required: true,
                    equalTo: '#id-source'
                }
            }
        });

    }

    // Necessary to place dyncamic error messages
    // without breaking the expected markup for custom input
    function errorPlacementInput(error, element) {
        if (element.is(':radio') || element.is(':checkbox')) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }

})();
(function() {
    'use strict';

    $(formWizard);

    function formWizard() {

        if (!$.fn.steps) return;
        if (!$.fn.validate) return;

        var form = $('#example-form');

        form.validate({
            errorPlacement: errorPlacementInput,
            rules: {
                confirm: {
                    equalTo: '#password'
                }
            }
        });

        form.children('div').steps({
            headerTag: 'h4',
            bodyTag: 'fieldset',
            transitionEffect: 'slideLeft',
            onStepChanging: function(/*event, currentIndex, newIndex*/) {
                form.validate().settings.ignore = ':disabled,:hidden';
                return form.valid();
            },
            onFinishing: function(/*event, currentIndex*/) {
                form.validate().settings.ignore = ':disabled';
                return form.valid();
            },
            onFinished: function(/*event, currentIndex*/) {
                alert('Submitted!');

                // Submit form
                $(this).submit();
            }
        });

        // VERTICAL
        // -----------------------------------

        $('#example-vertical')
            .steps({
                headerTag: 'h4',
                bodyTag: 'section',
                transitionEffect: 'slideLeft',
                stepsOrientation: 'vertical'
            });


        // Necessary to place dyncamic error messages
        // without breaking the expected markup for custom input
        function errorPlacementInput(error, element) {
            if (element.is(':radio') || element.is(':checkbox')) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }

    }

})();

(function() {
    'use strict';

    $(formXeditable);

    function formXeditable() {

        if( !$.fn.editableform ) return;

        // Font Awesome support
        $.fn.editableform.buttons =
            '<button type="submit" class="btn btn-primary editable-submit">' +
            '<i class="icon-fw ion-checkmark"></i>' +
            '</button>' +
            '<button type="button" class="btn btn-secondary editable-cancel">' +
            '<i class="icon-fw ion-close-round"></i>' +
            '</button>';

        //defaults
        // $.fn.editable.defaults.url = 'static/xeditable.res';

        //enable / disable
        var isDisabled = false;
        $('#enable').click(function() {
            isDisabled = !isDisabled;
            $('#x-user .editable').editable('option', 'disabled', isDisabled); // or .editable('toggleDisabled');
            $(this).text(isDisabled ? 'Set enable' : 'Set disable');
        });

        //editables
        $('#username').editable({
            type: 'text',
            pk: 1,
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });

        $('#firstname').editable({
            validate: function(value) {
                if ($.trim(value) === '') return 'This field is required';
            },
            mode: 'inline'
        });

        $('#sex').editable({
            prepend: 'not selected',
            mode: 'inline',
            source: [{
                value: 1,
                text: 'Male'
            }, {
                value: 2,
                text: 'Female'
            }],
            display: function(value, sourceData) {
                var colors = {
                        '': 'gray',
                        1: 'green',
                        2: 'blue'
                    },
                    elem = $.grep(sourceData, function(o) {
                        return o.value === value;
                    });

                if (elem.length) {
                    $(this).text(elem[0].text).css('color', colors[value]);
                } else {
                    $(this).empty();
                }
            }
        });

        $('#status').editable({
            mode: 'inline'
        });

        $('#group').editable({
            showbuttons: false,
            mode: 'inline'
        });

        $('#dob').editable({
            mode: 'inline'
        });

        $('#event').editable({
            placement: 'right',
            combodate: {
                firstItem: 'name'
            },
            mode: 'inline'
        });

        $('#comments').editable({
            showbuttons: 'bottom',
            mode: 'inline'
        });

        $('#note').editable({
            mode: 'inline'
        });

        $('#pencil').click(function(e) {
            e.stopPropagation();
            e.preventDefault();
            $('#note').editable('toggle');
        });

        $('#x-user .editable').on('hidden', function(e, reason) {
            if (reason === 'save' || reason === 'nochange') {
                var $next = $(this).closest('tr').next().find('.editable');
                if ($('#autoopen').is(':checked')) {
                    setTimeout(function() {
                        $next.editable('show');
                    }, 300);
                } else {
                    $next.focus();
                }
            }
        });

        // TABLE
        // -----------------------------------

        $('#x-users a').editable({
            type: 'text',
            name: 'username',
            title: 'Enter username',
            mode: 'inline'
        });

    }

})();


(function() {
    'use strict';

    $(initHeader);

    function initHeader() {

        // Search modal
        var modalSearch = $('.modal-search');
        $('#header-search, .open-header-search').on('click', function(e) {
            e.preventDefault();
            modalSearch
                .on('show.bs.modal', function() {
                    // Add class for white backdrop
                    $('body').addClass('modal-backdrop-soft');
                })
                .on('hidden.bs.modal', function() {
                    // Remove class for white backdrop (if not will affect future modals)
                    $('body').removeClass('modal-backdrop-soft');
                })
                .on('shown.bs.modal', function() {
                    // Auto focus the search input
                    $('.header-input-search').focus();
                })
                .modal()
                ;
        });

        // Settings modal
        var modalSettings = $('.modal-settings');
        $('#header-settings').on('click', function(){
            modalSettings
                .on('show.bs.modal', function() {
                    // Add class for soft backdrop
                    $('body').addClass('modal-backdrop-soft');
                })
                .on('hidden.bs.modal', function() {
                    // Remove class for soft backdrop (if not will affect future modals)
                    $('body').removeClass('modal-backdrop-soft');
                })
                .modal()
                ;
        });

    }

})();
(function() {
    'use strict';

    $(initKanban);

    function initKanban() {

        if (typeof dragula === 'undefined') return;

        // https://github.com/bevacqua/dragula/issues/426#issuecomment-260434933
        window.addEventListener('touchmove', function() {});

        calculateTotals(document.querySelector('#pending'));
        calculateTotals(document.querySelector('#in-progress'));
        calculateTotals(document.querySelector('#done'));

        dragula([
            document.querySelector('#pending'),
            document.querySelector('#in-progress'),
            document.querySelector('#done')
        ]).on('drop', function(el, target, source, sibling) {

            updateState(target);

            calculateTotals(target);
            calculateTotals(source);

        });

        function removeBackground(index, className) {
            return (className.match(/(^|\s)bg-gradient-\S+/g) || []).join(' ');
        }

        function removeBadge(index, className) {
            return (className.match(/(^|\s)badge-\S+/g) || []).join(' ');
        }

        function calculateTotals(target) {
            var budgets = $(target).find('.budget');
            var total = 0;
            budgets.each(function() { total += parseFloat($(this).text().replace('$', '').trim(), 2) })
            $(target).parents('.cardbox').find('.total').text('$ ' + total);
        }

        function updateState(target) {
            var topline = $(target).find('.top-line');
            var badge = $(target).find('.badge');
            if (target.id == 'pending') {
                topline.removeClass(removeBackground).addClass('bg-gradient-primary');
                badge.removeClass(removeBadge).addClass('badge-primary');
            }
            if (target.id == 'in-progress') {
                topline.removeClass(removeBackground).addClass('bg-gradient-info');
                badge.removeClass(removeBadge).addClass('badge-info');
            }
            if (target.id == 'done') {
                topline.removeClass(removeBackground).addClass('bg-gradient-success');
                badge.removeClass(removeBadge).addClass('badge-success');
            }
        }

    }

})();
(function() {
    'use strict';

    $(dataMaps);

    function dataMaps() {

        var elMapBasic = document.getElementById('datamap-basic');
        var elMapArc = document.getElementById('datamap-arc');

        if(!elMapBasic || !elMapArc) return;

        var mapBasic = new Datamap({
            element: elMapBasic,
            scope: 'usa',
            responsive: true,
            options: {
                width: 1110,
                legendHeight: 60 // optionally set the padding for the legend
            },
            geographyConfig: {
                highlightFillColor: Colors.byName('deepPurple-300'),
                highlightBorderWidth: 0
            },
            fills: {
                'HIGH': Colors.byName('deepPurple-300'),
                'MEDIUM': Colors.byName('deepPurple-300'),
                'LOW': Colors.byName('deepPurple-300'),
                'defaultFill': Colors.byName('gray-lighter')
            },
            data: {
                'AZ': {
                    'fillKey': 'MEDIUM',
                },
                'CO': {
                    'fillKey': 'HIGH',
                },
                'DE': {
                    'fillKey': 'LOW',
                },
                'GA': {
                    'fillKey': 'MEDIUM',
                }
            }
        });


        var mapArc = new Datamap({
            element: elMapArc,
            scope: 'usa',
            responsive: true,
            fills: {
                defaultFill: Colors.byName('gray-lighter'),
                win: Colors.byName('blueGrey-700'),
            },
            geographyConfig: {
                borderWidth: 0,
                highlightFillColor: Colors.byName('gray-light'),
                highlightBorderWidth: 0
            },
            data: {
                'TX': {
                    fillKey: 'win'
                },
                'FL': {
                    fillKey: 'win'
                },
                'NC': {
                    fillKey: 'win'
                },
                'CA': {
                    fillKey: 'win'
                },
                'NY': {
                    fillKey: 'win'
                },
                'CO': {
                    fillKey: 'win'
                }
            }
        });

        mapArc.arc([{
            origin: 'CA',
            destination: 'TX',
            options: {
                strokeWidth: 3,
                strokeColor: Colors.byName('warning'),
            }
        }, {
            origin: 'OR',
            destination: 'TX',
            options: {
                strokeWidth: 3,
                strokeColor: Colors.byName('warning'),
            }
        }, {
            origin: 'NY',
            destination: 'TX',
            options: {
                strokeWidth: 3,
                strokeColor: Colors.byName('warning'),
            }
        }]);

        // Allow resize by hooking window resize event
        $(window).resize(function(){
            mapArc.resize();
            mapBasic.resize();
        });

    }



})();

(function() {
    'use strict';

    $(googleMaps);

    function googleMaps() {
        if (document.getElementById('map')) {
            var map = new GMaps({
                div: '#map',
                lat: -12.043333,
                lng: -77.028333
            });

            GMaps.geocode({
                address: '276 N TUSTIN ST, ORANGE, CA 92867',
                callback: function(results, status) {
                    if (status === 'OK') {
                        var latlng = results[0].geometry.location;
                        map.setCenter(latlng.lat(), latlng.lng());
                        map.addMarker({
                            lat: latlng.lat(),
                            lng: latlng.lng()
                        });
                    }
                }
            });
        }

        if (document.getElementById('map-markers')) {

            var mapMarkers = new GMaps({
                div: '#map-markers',
                lat: -12.043333,
                lng: -77.028333
            });
            mapMarkers.addMarker({
                lat: -12.043333,
                lng: -77.03,
                title: 'Lima',
                details: {
                    database_id: 42,
                    author: 'HPNeo'
                },
                click: function(e) {
                    if (console.log)
                        console.log(e);
                    alert('You clicked in this marker');
                }
            });
            mapMarkers.addMarker({
                lat: -12.042,
                lng: -77.028333,
                title: 'Marker with InfoWindow',
                infoWindow: {
                    content: '<p>HTML Content</p>'
                }
            });
        }

        // Panorama

        if (document.getElementById('panorama')) {
            GMaps.createPanorama({
                el: '#panorama',
                lat: 42.3455,
                lng: -71.0983
            });
        }
    }

})();

(function() {
    'use strict';

    $(vectorMap);

    function vectorMap() {

        if (document.getElementById('vector-map-world')) {

            var world_markers = [
                {'latLng': [47.14, 9.52],    'name': 'Liechtenstein'},
                {'latLng': [7.11, 171.06],   'name': 'Marshall Islands'},
                {'latLng': [17.3, -62.73],   'name': 'Saint Kitts and Nevis'},
                {'latLng': [3.2, 73.22],     'name': 'Maldives'},
                {'latLng': [35.88, 14.5],    'name': 'Malta'},
                {'latLng': [12.05, -61.75],  'name': 'Grenada'},
                {'latLng': [13.16, -61.23],  'name': 'Saint Vincent and the Grenadines'},
                {'latLng': [13.16, -59.55],  'name': 'Barbados'},
                {'latLng': [17.11, -61.85],  'name': 'Antigua and Barbuda'},
                {'latLng': [-4.61, 55.45],   'name': 'Seychelles'},
                {'latLng': [7.35, 134.46],   'name': 'Palau'},
                {'latLng': [42.5, 1.51],     'name': 'Andorra'}
            ];

            var world_options = {
                map: 'world_mill_en',
                normalizeFunction: 'polynomial',
                backgroundColor: '#fff',
                regionsSelectable: true,
                markersSelectable: true,
                markers: world_markers,
                regionStyle: {
                    initial: {
                        fill: Colors.byName('gray-lighter')
                    },
                    hover: {
                        fill: Colors.byName('green-500'),
                        stroke: '#fff'
                    },
                },
                markerStyle: {
                    initial: {
                        fill: Colors.byName('lightBlue-500'),
                        stroke: '#fff',
                        r: 10
                    },
                    hover: {
                        fill: Colors.byName('purple-500'),
                        stroke: '#fff'
                    }
                }
            };

            // var series = {};

            $('#vector-map-world').vectorMap(world_options);
        }// world


            // USA Map
        if (document.getElementById('vector-map-usa')) {

            var usa_markers = [{
                latLng: [40.71, -74.00],
                name: 'New York'
            }, {
                latLng: [34.05, -118.24],
                name: 'Los Angeles'
            }, {
                latLng: [41.87, -87.62],
                name: 'Chicago'
            }, {
                latLng: [29.76, -95.36],
                name: 'Houston'
            }, {
                latLng: [39.95, -75.16],
                name: 'Philadelphia'
            }, {
                latLng: [38.90, -77.03],
                name: 'Washington'
            }, {
                latLng: [37.36, -122.03],
                name: 'Silicon Valley',
                style: {
                    fill: Colors.byName('teal-700'),
                    r: 20
                }
            }];

            var usa_options = {
                map: 'us_mill_en',
                normalizeFunction: 'polynomial',
                backgroundColor: '#fff',
                regionsSelectable: true,
                markersSelectable: true,
                markers: usa_markers,
                regionStyle: {
                    initial: {
                        fill: Colors.byName('gray-lighter')
                    },
                    hover: {
                        fill: Colors.byName('cyan-100'),
                        stroke: '#fff'
                    },
                },
                markerStyle: {
                    initial: {
                        fill: Colors.byName('teal-300'),
                        stroke: '#fff',
                        r: 10
                    },
                    hover: {
                        fill: Colors.byName('teal-300'),
                        stroke: '#fff'
                    }
                }
            };

            $('#vector-map-usa').vectorMap(usa_options);

        }

    }

})();
(function() {
    'use strict';

    if (!$.fn.fullCalendar) return;

    $(initCalendar);

    $('#external-events .external-event').each(function() {
        var $this = $(this);
        // store data so the calendar knows to render an event upon drop
        $this.data('event', {
            title: $.trim($this.text()),
            stick: true
        });

        // create draggable using jQuery UI
        $this.draggable({
            zIndex: 999999,
            revert: true,
            revertDuration: 0
        });

    });

    function initCalendar() {

        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var removeAfterDropEvents = true;

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true,
            drop: function() {
                // if removeAfterDropEvents, remove the element from the "Draggable Events" list
                if (removeAfterDropEvents) {
                    $(this).remove();
                }
                // when done with events, show text
                if ( $('#external-events .external-event').length === 0) {
                    $('#external-events').html('<span>No more events today..</span>');
                }
            },
            events: [{
                title: 'All Day Event',
                start: new Date(y, m, 1)
            }, {
                title: 'Long Event',
                start: new Date(y, m, d - 5),
                end: new Date(y, m, d - 2)
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d - 3, 16, 0),
                allDay: false
            }, {
                id: 999,
                title: 'Repeating Event',
                start: new Date(y, m, d + 4, 16, 0),
                allDay: false
            }, {
                title: 'Meeting',
                start: new Date(y, m, d, 10, 30),
                allDay: false
            }, {
                title: 'Lunch',
                start: new Date(y, m, d, 12, 0),
                end: new Date(y, m, d, 14, 0),
                allDay: false
            }, {
                title: 'Birthday Party',
                start: new Date(y, m, d + 1, 19, 0),
                end: new Date(y, m, d + 1, 22, 30),
                allDay: false
            }, {
                title: 'Click for Google',
                start: new Date(y, m, 28),
                end: new Date(y, m, 29),
                url: 'http://google.com/'
            }]
        });
    }

})();
(function() {
    'use strict';

    $(googleMapsFull);

    function googleMapsFull() {

        if (document.getElementById('mapfull-markers')) {

            // custom style definition
            var MapStyles = [{ featureType: 'water', stylers: [{ visibility: 'on' }, { color: '#bdd1f9' }] }, { featureType: 'all', elementType: 'labels.text.fill', stylers: [{ color: '#334165' }] }, { featureType: 'landscape', stylers: [{ color: '#e9ebf1' }] }, { featureType: 'road.highway', elementType: 'geometry', stylers: [{ color: '#c5c6c6' }] }, { featureType: 'road.arterial', elementType: 'geometry', stylers: [{ color: '#fff' }] }, { featureType: 'road.local', elementType: 'geometry', stylers: [{ color: '#fff' }] }, { featureType: 'transit', elementType: 'geometry', stylers: [{ color: '#d8dbe0' }] }, { featureType: 'poi', elementType: 'geometry', stylers: [{ color: '#cfd5e0' }] }, { featureType: 'administrative', stylers: [{ visibility: 'on' }, { lightness: 33 }] }, { featureType: 'poi.park', elementType: 'labels', stylers: [{ visibility: 'on' }, { lightness: 20 }] }, { featureType: 'road', stylers: [{ color: '#d8dbe0', lightness: 20 }] }];
            // markers for map
            var myMarkers = [
                { id: 0, name: 'Canada', coords: { latitude: 56.130366, longitude: -106.346771 } },
                { id: 1, name: 'New York', coords: { latitude: 40.712784, longitude: -74.005941 } },
                { id: 2, name: 'Toronto', coords: { latitude: 43.653226, longitude: -79.383184 } },
                { id: 3, name: 'San Francisco', coords: { latitude: 37.774929, longitude: -122.419416 } },
                { id: 4, name: 'Utah', coords: { latitude: 39.320980, longitude: -111.093731 } }
            ];
            // Prepare the map
            var mapFull = new GMaps({
                div: '#mapfull-markers',
                lat: myMarkers[0].coords.latitude,
                lng: myMarkers[0].coords.longitude,
                zoom: 4
            });

            // Add custom styles
            mapFull.addStyle({
                styledMapName: 'Styled Map',
                styles: MapStyles,
                mapTypeId: 'map_style'
            });
            mapFull.setStyle('map_style');

            // Add custom markers
            for (var i = 0; i < myMarkers.length; i++) {
                mapFull.addMarker({
                    lat: myMarkers[i].coords.latitude,
                    lng: myMarkers[i].coords.longitude,
                    //title: 'Marker with InfoWindow',
                    infoWindow: {
                        content: '<p>' + myMarkers[i].name + '</p>'
                    }
                });
            }

            // Panto marker using the data attribute
            $('#markers-list').on('click', '[data-panto-marker]', function() {
                var markers = mapFull.markers;
                var id = $(this).data('pantoMarker');
                if (markers[id])
                    mapFull.map.panTo(markers[id].getPosition());
            });
        }
    }
})();

(function(){
    'use strict';

    $(initMessages);

    function initMessages() {
        var msgList = $('.msg-display');

        msgList.each(function() {
            var msg = $(this);

            msg.on('click', function(e){
                // Ignores drodown click to avoid opening modal at the same time
                if( $(e.target).is('.dropdown') ||
                    $(e.target).parents('.dropdown').length > 0  ) {
                    return;
                }
                // Open modal
                $('.modal-message').modal();

            });

        });

        $('#compose').on('click', function(){
            $('.modal-compose').modal();
        });

    }

})();
(function() {
    'use strict';

    $(initTimeline);

    function initTimeline() {
        if (document.getElementById('map-tm')) {
            new GMaps({
                div: '#map-tm',
                lat: -12.043333,
                lng: -77.028333
            });
        }
    }

})();


(function() {
    'use strict';

    $(initSettings);

    function initSettings() {

        var body = $('body');
        // var sidebar = $('.layout-container > aside');
        // var header = $('.layout-container > header');
        // var brand = sidebar.find('.brand-header');
        // var content = $('.layout-container > main');

        // Handler for themes preview
        $('input[name="setting-theme"]:radio').change(function() {
            body.removeClass(themeClassname);
            body.addClass(this.value);
        });
            // Regular expression for the pattern bg-* to find the background class
            function themeClassname(index, css) {
                var cmatch = css.match(/(^|\s)theme-\S+/g);
                return (cmatch || []).join(' ');
            }

        $('#sidebar-cover').change(function() {
            body[this.checked ? 'addClass' : 'removeClass']('sidebar-cover');
        });

        $('#fixed-footer').change(function() {
            body[this.checked ? 'addClass' : 'removeClass']('footer-fixed');
        });

        var sidebarToolbar = $('.sidebar-toolbar');
        $('#sidebar-showtoolbar').change(function() {
            sidebarToolbar[this.checked ? 'show' : 'hide']();
        });

    }

})();
(function() {
    'use strict';

    $(sidebarNav);

    function sidebarNav() {

        var $sidebarNav = $('.sidebar-nav');
        var $sidebarContent = $('.sidebar-content');

        activate($sidebarNav);

        $sidebarNav.on('click', function(event) {
            var item = getItemElement(event);
            // check click is on a tag
            if (!item) return;

            var ele = $(item),
                liparent = ele.parent()[0];

            var lis = ele.parent().parent().children(); // markup: ul > li > a
            // remove .active from childs
            lis.find('li').removeClass('active');
            // remove .active from siblings ()
            $.each(lis, function(idx, li) {
                if (li !== liparent)
                    $(li).removeClass('active');
            });

            var next = ele.next();
            if (next.length && next[0].tagName === 'UL') {
                ele.parent().toggleClass('active');
                event.preventDefault();
            }
        });

        // find the a element in click context
        // doesn't check deeply, asumens two levels only
        function getItemElement(event) {
            var element = event.target,
                parent = element.parentNode;
            if (element.tagName.toLowerCase() === 'a') return element;
            if (parent.tagName.toLowerCase() === 'a') return parent;
            if (parent.parentNode.tagName.toLowerCase() === 'a') return parent.parentNode;
        }

        function activate(sidebar) {
            sidebar.find('a').each(function() {
                var $this = $(this),
                    href = $this.attr('href').replace('#', '');
                if (href !== '' && window.location.href.indexOf('/' + href) >= 0) {
                    var item = $this.parents('li').addClass('active');
                    // Animate scrolling to focus active item
                    $sidebarContent.animate({
                        scrollTop: $sidebarContent.scrollTop() + item.position().top - (window.innerHeight / 2)
                    }, 100);
                    return false; // exit foreach
                }
            });
        }

        var layoutContainer = $('.layout-container');
        var $body = $('body');
        // Handler to toggle sidebar visibility on mobile
        $('.sidebar-toggler').click(function(e) {
            e.preventDefault();
            layoutContainer.toggleClass('sidebar-visible');
            // toggle icon state
            $(this).parent().toggleClass('active');
        });
        // Close sidebar when click on backdrop
        $('.sidebar-layout-obfuscator').click(function(e) {
            e.preventDefault();
            $body.removeClass('sidebar-cover-visible'); // for use with cover mode
            layoutContainer.removeClass('sidebar-visible'); // for use on mobiles
            // restore icon
            $('.sidebar-toggler').parent().removeClass('active');
        });

        // escape key closes sidebar on desktops
        $(document).keyup(function(e) {
            if (e.keyCode === 27) {
                $body.removeClass('sidebar-cover-visible');
            }
        });

        // Handler to toggle sidebar visibility on desktop
        $('.covermode-toggler').click(function(e) {
            e.preventDefault();
            $body.addClass('sidebar-cover-visible');
        });

        $('.sidebar-close').click(function(e) {
            e.preventDefault();
            $body.removeClass('sidebar-cover-visible');
        });

        // remove desktop offcanvas when app changes to mobile
        // so when it returns, the sidebar is shown again
        window.addEventListener('resize', function() {
            if (window.innerWidth < 768) {
                $body.removeClass('sidebar-cover-visible');
            }
        });

    }

})();
(function() {
    'use strict';

    $(tableBootgrid);

    function tableBootgrid() {

        if (!$.fn.bootgrid) return;

        var ioniconCss = {
            icon: 'icon',
            iconColumns: 'ion-ios-list-outline',
            iconDown: 'ion-chevron-down',
            iconRefresh: 'ion-refresh',
            iconSearch: 'ion-search',
            iconUp: 'ion-chevron-up',
            dropDownMenuItems: 'dropdown-menu dropdown-menu-right'
        };

        $('#bootgrid-basic').bootgrid({
            css: ioniconCss,
            templates: {
                // templates for BS4
                actionButton: '<button class="btn btn-secondary" type="button" title="{{ctx.text}}">{{ctx.content}}</button>',
                actionDropDown: '<div class="{{css.dropDownMenu}}"><button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"><span class="{{css.dropDownMenuText}}">{{ctx.content}}</span> <span class="caret"></span></button><ul class="{{css.dropDownMenuItems}}" role="menu"></ul></div>',
                actionDropDownItem: '<li class="dropdown-item"><a href="" data-action="{{ctx.action}}" class="{{css.dropDownItem}} {{css.dropDownItemButton}}">{{ctx.text}}</a></li>',
                actionDropDownCheckboxItem: '<li class="dropdown-item"><label class="{{css.dropDownItem}}"><input name="{{ctx.name}}" type="checkbox" value="1" class="{{css.dropDownItemCheckbox}}" {{ctx.checked}} /> {{ctx.label}}</label></li>',
                paginationItem: '<li class="page-item {{ctx.css}}"><a href="" data-page="{{ctx.page}}" class="page-link {{css.paginationButton}}">{{ctx.text}}</a></li>',
                search: "<div class=\"{{css.search}}\"><div class=\"input-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text bg-transparent b0\"><em class=\"{{css.icon}} {{css.iconSearch}}\"></span></em></div> <input type=\"text\" class=\"{{css.searchField}}\" placeholder=\"{{lbl.search}}\" /></div></div>"
            }
        });

        $('#bootgrid-selection').bootgrid({
            css: ioniconCss,
            selection: true,
            multiSelect: true,
            rowSelect: true,
            keepSelection: true,
            templates: {
                select: '<label class="mda-checkbox">' +
                    '<input name="select" type="{{ctx.type}}" class="{{css.selectBox}}" value="{{ctx.value}}" {{ctx.checked}} />' +
                    '<em class="bg-warning"></em>' +
                    '</label>',
                // templates for BS4
                actionButton: '<button class="btn btn-secondary" type="button" title="{{ctx.text}}">{{ctx.content}}</button>',
                actionDropDown: '<div class="{{css.dropDownMenu}}"><button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"><span class="{{css.dropDownMenuText}}">{{ctx.content}}</span> <span class="caret"></span></button><ul class="{{css.dropDownMenuItems}}" role="menu"></ul></div>',
                actionDropDownItem: '<li class="dropdown-item"><a href="" data-action="{{ctx.action}}" class="{{css.dropDownItem}} {{css.dropDownItemButton}}">{{ctx.text}}</a></li>',
                actionDropDownCheckboxItem: '<li class="dropdown-item"><label class="{{css.dropDownItem}}"><input name="{{ctx.name}}" type="checkbox" value="1" class="{{css.dropDownItemCheckbox}}" {{ctx.checked}} /> {{ctx.label}}</label></li>',
                paginationItem: '<li class="page-item {{ctx.css}}"><a href="" data-page="{{ctx.page}}" class="page-link {{css.paginationButton}}">{{ctx.text}}</a></li>',
                search: "<div class=\"{{css.search}}\"><div class=\"input-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text bg-transparent b0\"><em class=\"{{css.icon}} {{css.iconSearch}}\"></span></em></div> <input type=\"text\" class=\"{{css.searchField}}\" placeholder=\"{{lbl.search}}\" /></div></div>"
            }
        });

        var grid = $('#bootgrid-command').bootgrid({
            css: ioniconCss,
            formatters: {
                commands: function(column, row) {
                    return '<button type="button" class="btn btn-sm btn-info mr-2 command-edit" data-row-id="' + row.id + '"><em class="ion-edit"></em></button>' +
                        '<button type="button" class="btn btn-sm btn-danger command-delete" data-row-id="' + row.id + '"><em class="ion-trash-a"></em></button>';
                }
            },
            templates: {
                // templates for BS4
                actionButton: '<button class="btn btn-secondary" type="button" title="{{ctx.text}}">{{ctx.content}}</button>',
                actionDropDown: '<div class="{{css.dropDownMenu}}"><button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown"><span class="{{css.dropDownMenuText}}">{{ctx.content}}</span> <span class="caret"></span></button><ul class="{{css.dropDownMenuItems}}" role="menu"></ul></div>',
                actionDropDownItem: '<li class="dropdown-item"><a href="" data-action="{{ctx.action}}" class="{{css.dropDownItem}} {{css.dropDownItemButton}}">{{ctx.text}}</a></li>',
                actionDropDownCheckboxItem: '<li class="dropdown-item"><label class="{{css.dropDownItem}}"><input name="{{ctx.name}}" type="checkbox" value="1" class="{{css.dropDownItemCheckbox}}" {{ctx.checked}} /> {{ctx.label}}</label></li>',
                paginationItem: '<li class="page-item {{ctx.css}}"><a href="" data-page="{{ctx.page}}" class="page-link {{css.paginationButton}}">{{ctx.text}}</a></li>',
                search: "<div class=\"{{css.search}}\"><div class=\"input-group\"><div class=\"input-group-prepend\"><span class=\"input-group-text bg-transparent b0\"><em class=\"{{css.icon}} {{css.iconSearch}}\"></span></em></div> <input type=\"text\" class=\"{{css.searchField}}\" placeholder=\"{{lbl.search}}\" /></div></div>"
            }
        }).on('loaded.rs.jquery.bootgrid', function() {
            /* Executes after data is loaded and rendered */
            grid.find('.command-edit').on('click', function() {
                console.log('You pressed edit on row: ' + $(this).data('row-id'));
            }).end().find('.command-delete').on('click', function() {
                console.log('You pressed delete on row: ' + $(this).data('row-id'));
            });
        });

    }

})();
(function() {
    'use strict';

    $(tableDatatables);

    function tableDatatables() {

        if (!$.fn.dataTable) return;

        // Zero configuration

        $('#datatable1').DataTable({
            'paging': true, // Table pagination
            'ordering': true, // Column ordering
            'info': true, // Bottom left status text
            // Text translation options
            // Note the required keywords between underscores (e.g _MENU_)
            oLanguage: {
                sSearch: '<em class="ion-search"></em>',
                sLengthMenu: '_MENU_ records per page',
                info: 'Showing page _PAGE_ of _PAGES_',
                zeroRecords: 'Nothing found - sorry',
                infoEmpty: 'No records available',
                infoFiltered: '(filtered from _MAX_ total records)',
                oPaginate: {
                    sNext: '<em class="ion-ios-arrow-right"></em>',
                    sPrevious: '<em class="ion-ios-arrow-left"></em>'
                }
            }
        });


        // Filter

        $('#datatable2').DataTable({
            'paging': true, // Table pagination
            'ordering': true, // Column ordering
            'info': true, // Bottom left status text
            // Text translation options
            // Note the required keywords between underscores (e.g _MENU_)
            oLanguage: {
                sSearch: 'Search all columns:',
                sLengthMenu: '_MENU_ records per page',
                info: 'Showing page _PAGE_ of _PAGES_',
                zeroRecords: 'Nothing found - sorry',
                infoEmpty: 'No records available',
                infoFiltered: '(filtered from _MAX_ total records)',
                oPaginate: {
                    sNext: '<em class="ion-ios-arrow-right"></em>',
                    sPrevious: '<em class="ion-ios-arrow-left"></em>'
                }
            },
            // Datatable Buttons setup
            dom: 'Bfrtip',
            buttons: [
                { extend: 'copy', className: 'btn-info' },
                { extend: 'csv', className: 'btn-info' },
                { extend: 'excel', className: 'btn-info', title: 'XLS-File' },
                { extend: 'pdf', className: 'btn-info', title: $('title').text() },
                { extend: 'print', className: 'btn-info' }
            ]
        });

        $('#datatable3').DataTable({
            'paging': true, // Table pagination
            'ordering': true, // Column ordering
            'info': true, // Bottom left status text
            // Text translation options
            // Note the required keywords between underscores (e.g _MENU_)
            oLanguage: {
                sSearch: 'Search all columns:',
                sLengthMenu: '_MENU_ records per page',
                info: 'Showing page _PAGE_ of _PAGES_',
                zeroRecords: 'Nothing found - sorry',
                infoEmpty: 'No records available',
                infoFiltered: '(filtered from _MAX_ total records)',
                oPaginate: {
                    sNext: '<em class="ion-ios-arrow-right"></em>',
                    sPrevious: '<em class="ion-ios-arrow-left"></em>'
                }
            },
            // Datatable key setup
            keys: true
        });



    }

})();
(function() {
    'use strict';

    $(initFooTable);

    function initFooTable() {

        if (!$.fn.footable) return;

        $('.footable').footable();
        $('.footable-sort').footable();

        $('.sort-column').click(function(e) {
            e.preventDefault();
            //get the footable sort object
            var footableSort = $('.footable-sort').data('footable-sort');
            //get the index we are wanting to sort by
            var index = $(this).data('index');
            footableSort.doSort(index, 'toggle');
        });

    }

})();
(function() {
    'use strict';

    $(initTranslation);

    // Global configuration
    var preferredLang = 'en';
    var pathPrefix    = 'static/i18n'; // folder of json files
    var packName      = 'site';

    function initTranslation() {

        if (!$.fn.localize) return;

        // set initial options
        var opts = {
            language: preferredLang,
            pathPrefix: pathPrefix,
            callback: function(data, defaultCallback) {
                defaultCallback(data);
            }
        };

        // Set initial language
        setLanguage(opts);

        // Listen for changes
        $('.language-select').on('change', function() {

            var selectedLang = this.value;

            if (selectedLang && opts.language !== selectedLang) {

                opts.language = selectedLang;

                setLanguage(opts);

                activateDropdown($(this));
            }

        });
    }

    // Update translated text
    function setLanguage(options) {
        $('[data-localize]').localize(packName, options);
    }

    // Set the current clicked text as the active dropdown text
    function activateDropdown(elem) {
        var menu = elem.parents('.dropdown-menu');
        if (menu.length) {
            var toggle = menu.prev('button, a');
            toggle.text(elem.text());
        }
    }

})();


(function() {
    'use strict';

    $(userLock);

    function userLock() {

        if (!$.fn.validate) return;

        var $form = $('#user-lock');
        $form.validate({
            errorPlacement: errorPlacementInput,
            // Form rules
            rules: {
                accountName: {
                    required: true,
                    email: true
                }
            },
            submitHandler: function(/*form*/) {
                // form.submit();
                console.log('Form submitted!');
                // move to dashboard
                window.location.href = 'dashboard.html';
            }
        });
    }


    // Necessary to place dyncamic error messages
    // without breaking the expected markup for custom input
    function errorPlacementInput(error, element) {
        if ( element.is(':radio') || element.is(':checkbox')) {
            error.insertBefore(element.parent());
        }
        else if ( element.parent().is('.input-group') ) {
            error.insertBefore(element.parent());
        }
        else {
            error.insertBefore(element);
        }
    }

})();

(function() {
    'use strict';

    $(userRecover);

    function userRecover() {

        if (!$.fn.validate) return;

        var $form = $('#user-recover');
        $form.validate({
            errorPlacement: errorPlacementInput,
            // Form rules
            rules: {
                accountName: {
                    required: true,
                    email: true
                }
            },
            submitHandler: function(/*form*/) {
                console.log('Form submitted!');
            }
        });
    }

    // Necessary to place dyncamic error messages
    // without breaking the expected markup for custom input
    function errorPlacementInput(error, element) {
        if ( element.is(':radio') || element.is(':checkbox')) {
            error.insertAfter(element.parent());
        }
        else if ( element.parent().is('.input-group') ) {
            error.insertAfter(element.parent());
        }
        else {
            error.insertAfter(element);
        }
    }

})();

(function() {
    'use strict';

    $(userSignin);

    function userSignin() {

        if (!$.fn.validate) return;

        var $form = $('#user-login');
        $form.validate({
            errorPlacement: errorPlacementInput,
            // Form rules
            rules: {
                accountName: {
                    required: true,
                    email: true
                },
                accountPassword: {
                    required: true
                }
            },
            submitHandler: function(/*form*/) {
                // form.submit();
                console.log('Form submitted!');
            }
        });
    }

    // Necessary to place dyncamic error messages
    // without breaking the expected markup for custom input
    function errorPlacementInput(error, element) {
        if ( element.is(':radio') || element.is(':checkbox')) {
            error.insertAfter(element.parent());
        }
        else {
            error.insertAfter(element);
        }
    }

})();

(function() {
    'use strict';

    $(userSignup);

    function userSignup() {

        if (!$.fn.validate) return;

        var $form = $('#user-signup');
        $form.validate({
            errorPlacement: errorPlacementInput,
            // Form rules
            rules: {
                accountName: {
                    required: true,
                    email: true
                },
                accountPassword: {
                    required: true
                },
                accountPasswordCheck: {
                    required: true,
                    equalTo: '#account-password'
                }
            },
            submitHandler: function( /*form*/ ) {
                // form.submit();
                console.log('Form submitted!');
                $('#form-ok').hide().removeClass('invisible').show(500);
            }
        });
    }


    // Necessary to place dyncamic error messages
    // without breaking the expected markup for custom input
    function errorPlacementInput(error, element) {
        if (element.is(':radio') || element.is(':checkbox')) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }

})();
(function() {
    'use strict';

    $(initScreenfull);

    function initScreenfull() {
        var element = $('[data-toggle-fullscreen]');
        // Not supported under IE
        if (msie()) {
            element.hide();
        } else {
            element.on('click', function(e) {
                e.preventDefault();

                if (screenfull.enabled) {

                    screenfull.toggle();

                } else {
                    // Fullscreen not enabled
                }

            });
        }
    }

    function msie() {
        var ua = window.navigator.userAgent;
        var msie = ua.indexOf('MSIE ');
        return (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./));
    }

})();
(function() {
    'use strict';

    $(initWidgets);

    function initWidgets() {

        if(!$.fn.peity) return;

        $('.line1').peity('line', {
            fill: [Colors.byName('blue-200')],
            stroke: Colors.byName('blue-500'),
            strokeWidth: 2,
            height: 20,
            width: 60
        });

        $('.line2').peity('line', {
            fill: [Colors.byName('green-200')],
            stroke: Colors.byName('green-500'),
            strokeWidth: 2,
            height: 20,
            width: 60
        });

        $('.line3').peity('line', {
            fill: 'rgba(255,255,255,0.5)',
            stroke: '#fff',
            strokeWidth: 2,
            height: 20,
            width: 60
        });

        $('.bar1').peity('bar', {
            fill: [Colors.byName('deepPurple-500')],
            height: 30,
            width: 60
        });

        $('.bar2').peity('bar', {
            fill: [Colors.byName('pink-500')],
            height: 30,
            width: 60
        });

    }


})();