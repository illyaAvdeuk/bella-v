<style>
        canvas{
                -moz-user-select: none;
                -webkit-user-select: none;
                -ms-user-select: none;
        }
</style>
<script src="/js/Chart.min.js"></script>
<script src="/js/ion.rangeSlider.min.js"></script>
<script>
        $("#rangeSlider_1").ionRangeSlider({
            min: 1,
            max: 30,
            step: 1,
            grid: true,
            values: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]
        });
        $("#rangeSlider_2").ionRangeSlider({
            min: 1,
            max: <?= Yii::$app->calculator->product->calculate->proc_per_day ?>,
            step: 1,
            grid: true,
            values: [<?php
                for ($i=1;$i<=Yii::$app->calculator->product->calculate->proc_per_day;$i++) {
                    echo $i.",";
                }
            ?>]
        });
        $("#rangeSlider_3").ionRangeSlider({
            min: <?= Yii::$app->calculator->product->calculate->min_price ?>,
            max: <?= Yii::$app->calculator->product->calculate->max_price ?>,
            step: <?= Yii::$app->calculator->product->calculate->step ?>,
            grid: true,
            values: [<?php
                for ($i=Yii::$app->calculator->product->calculate->min_price;$i<=Yii::$app->calculator->product->calculate->max_price;$i+=Yii::$app->calculator->product->calculate->step) {
                    echo $i.",";
                }
            ?>]
        });
</script>


<script>
        Chart.defaults.global.pointHitDetectionRadius = 1;

        var logo = new Image();
        logo.src = '/images/logo_tiny.png';

        Chart.plugins.register({
            afterUpdate: function(chart) {
                var okupIndex;
                chart.config.data.datasets[0].data.forEach(function(item,index){
                    if (item.y < <?= Yii::$app->calculator->product->calculate->product_price ?>) {
                        okupIndex = index+1;
                    }
                });
                if (chart.config.data.datasets[0]._meta[0].data[okupIndex] === undefined) {
                    okupIndex--;
                }
                chart.config.data.datasets[0]._meta[0].data[okupIndex]._model.pointStyle = logo;
            },
                beforeRender: function (chart) {
                        if (chart.config.options.showAllTooltips) {
                                // create an array of tooltips
                                // we can't use the chart tooltip because there is only one tooltip per chart
                                chart.pluginTooltips = [];
                                var showDotsIndexList = [0,1,3,7,9];
                                chart.config.data.datasets.forEach(function (dataset, i) {
                                        chart.getDatasetMeta(i).data.forEach(function (sector, j) {
                                                if ( $.inArray(j, showDotsIndexList) == -1 ) {
                                                        chart.pluginTooltips.push(new Chart.Tooltip({
                                                                _chart: chart.chart,
                                                                _chartInstance: chart,
                                                                _data: chart.data,
                                                                _options: chart.options.tooltips,
                                                                _active: [sector]
                                                        }, chart));
                                                }
                                        });
                                });

                                // turn off normal tooltips
                                chart.options.tooltips.enabled = false;
                        }
                },
                afterDraw: function (chart, easing) {
                        if (chart.config.options.showAllTooltips) {
                                // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
                                if (!chart.allTooltipsOnce) {
                                        if (easing !== 1)
                                                return;
                                        chart.allTooltipsOnce = true;
                                }

                                // turn on tooltips
                                chart.options.tooltips.enabled = true;
                                Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
                                // This line checks if the item is visible to display the tooltip
                                if(!tooltip._active[0].hidden){
                                  tooltip.initialize();
                                  tooltip.update();
                                  // we don't actually need this since we are not animating tooltips
                                  tooltip.pivot();
                                  tooltip.transition(easing).draw();
                                }
                                });
                                chart.options.tooltips.enabled = false;
                        }
                }
        });


        window.onload = function() {
                var chartEl = document.getElementById("chart").getContext("2d");
                var gradient = chartEl.createLinearGradient(0,0,0,150);
                    gradient.addColorStop(0, 'rgba(253,67,43,1)');   
                    gradient.addColorStop(1, 'rgba(253,67,43,0)');
                window.myLine = new Chart(chartEl, {
                        type: 'line',
                        data: {
                        labels: ["", "", "1 год", "", "2 года", "", "3 года", "", "4 года", "", "5 лет"],
                        datasets: [{
                                pointRadius: 0,
                            data: [{
                                x: "",
                                y: 0
                            }, {
                                x: "",
                                y: <?= round(Yii::$app->calculator->profitPerYear/2) ?>
                            }, {
                                x: "1 год",
                                y: <?= round(Yii::$app->calculator->profitPerYear) ?>
                            }, {
                                x: "",
                                y: <?= round(Yii::$app->calculator->profitPerYear*1.5) ?>
                            },  {
                                x: "2 года",
                                y: <?= round(Yii::$app->calculator->profitPerYear*2) ?>
                            }, {
                                x: "",
                                y: <?= round(Yii::$app->calculator->profitPerYear*2.5) ?>
                            },  {
                                x: "3 года",
                                y: <?= round(Yii::$app->calculator->profitPerYear*3) ?>
                            }, {
                                x: "",
                                y: <?= round(Yii::$app->calculator->profitPerYear*3.5) ?>
                            },  {
                                x: "4 года",
                                y: <?= round(Yii::$app->calculator->profitPerYear*4.0) ?>
                            }, {
                                x: "",
                                y: <?= round(Yii::$app->calculator->profitPerYear*4.5) ?>
                            },  {
                                x: "5 лет",
                                y: <?= round(Yii::$app->calculator->profitPerYear*5.0) ?>
                            }],
                        backgroundColor: gradient,
                            borderColor: 'rgba(253,67,43,1)',
                            borderWidth: 1
                        }]
                        },
                        options: {
                                showAllTooltips: true,
                                title:{
                                    display:false
                                },
                                legend: {
                                    display: false
                                },
                                scales: {
                                    xAxes: [{
			                gridLines: {
			                	color: "rgba(0, 0, 0, 0.4)",
			                    tickMarkLength: 5,
			                    drawOnChartArea: false
			                }
			            }],
			            yAxes: [{
			                ticks: {
			                    beginAtZero:true
			                },
			                gridLines: {
			                	color: "rgba(0, 0, 0, 0.4)",
			                    tickMarkLength: 5,
			                    drawOnChartArea: false
			                }
			            }]
                                },
                                tooltips: {
                                        mode: "label",
                                        backgroundColor: 'rgba(0,0,0,0)',
                                        titleFontColor: '#000',
                                        bodyFontColor: '#000',
                                        callbacks: {
                                                title: function() {
                                                        // Title doesn't make sense for scatter since we format the data as a point
                                                        return '';
                                                },
                                                label: function(tooltipItem) {
                                                        if ( tooltipItem.xLabel == "" ) {
                                                                return "";
                                                        }
                                                        //console.log(tooltipItem);
                                                        return (tooltipItem.yLabel).formatMoney(0, '.', ' ');
                                                },
                                                labelColor: function(tooltipItem, chartInstance) {
                                                        //console.log(tooltipItem);
                                                        return {
                                                                borderColor: 'rgba(255,255,255,0.01)',
                                                                backgroundColor: 'rgba(255,255,255,0.01)'
                                                        };
                                                }
                                        },
                                }
                        }
                });
        };
        
        
Number.prototype.formatMoney = function(c, d, t){
var n = this, 
    c = isNaN(c = Math.abs(c)) ? 2 : c, 
    d = d == undefined ? "." : d, 
    t = t == undefined ? "," : t, 
    s = n < 0 ? "-" : "", 
    i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))), 
    j = (j = i.length) > 3 ? j % 3 : 0;
   return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
 };        
</script>