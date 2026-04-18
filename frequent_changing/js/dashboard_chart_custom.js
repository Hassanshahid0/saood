// Draw chart
//initial blank chart assign
//Plugin is not being initialized in use strict mode, script is added here for that reason
let dashboard_chart_color = $('#dashboard_chart_color').val();
let ctx = document.getElementById("day_week_month_chart_report").getContext('2d');
const myLineChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: [],
        datasets: [
            {
                label: 'Income',
                data: [],
                fill: false,
                borderColor: '#C5A868',
                backgroundColor: '#C5A868',
                borderWidth: 3,
                tension: 0.4,
                pointRadius: 5,
                pointHoverRadius: 7,
                pointBackgroundColor: '#C5A868',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2,
            },
            {
                label: 'Expense',
                data: [],
                fill: false,
                borderColor: '#675F4C',
                backgroundColor: '#675F4C',
                borderWidth: 3,
                tension: 0.4,
                pointRadius: 5,
                pointHoverRadius: 7,
                pointBackgroundColor: '#675F4C',
                pointBorderColor: '#ffffff',
                pointBorderWidth: 2,
                hidden: false
            }
        ]
    },
    options: {
        plugins: {
            legend: {
                display: false
            },
            tooltip: {
                enabled: true,
                mode: 'index',
                intersect: false,
                backgroundColor: 'rgba(44, 36, 22, 0.9)',
                titleFont: {
                    size: 14,
                    family: 'DM Sans',
                    weight: '600'
                },
                bodyFont: {
                    size: 13,
                    family: 'DM Sans'
                },
                padding: 12,
                cornerRadius: 8,
                displayColors: true,
                callbacks: {
                    title: function(tooltipItems) {
                        return tooltipItems[0].label;
                    },
                    label: function(context) {
                        let label = context.dataset.label || '';
                        if (label) {
                            label += ': ';
                        }
                        if (context.parsed.y !== null) {
                            label += context.parsed.y;
                        }
                        return label;
                    }
                }
            }
        },
        responsive: true,
        maintainAspectRatio: false,
        interaction: {
            mode: 'index',
            intersect: false,
        },
        scales: {
            x: {
                display: true,
                grid: {
                    display: false
                },
                ticks: {
                    font: {
                        size: 12,
                        family: 'DM Sans'
                    }
                }
            },
            y: {
                display: true,
                beginAtZero: true,
                grid: {
                    color: 'rgba(0,0,0,0.05)'
                },
                ticks: {
                    font: {
                        size: 12,
                        family: 'DM Sans'
                    },
                    callback: function(value) {
                        if (value >= 1000000) {
                            return (value / 1000000).toFixed(1).replace(/\.0$/, '') + 'M';
                        } else if (value >= 1000) {
                            return (value / 1000).toFixed(1).replace(/\.0$/, '') + 'K';
                        }
                        return value;
                    }
                }
            }
        }
    }
});


$(function () {
    "use strict";
    let base_url = $("#base_url_").val();
    function show_sale_report(type,action_type) {
        let csrf_name_ = $("#csrf_name_").val();
        let csrf_value_ = $("#csrf_value_").val();
        let outlet_id = $("#outlet_id_dashboard").val();
        let start_date = $("#start_date_dashboard").val();
        let end_date = $("#end_date_dashboard").val();
        $.ajax({
            url: base_url+"Dashboard/get_sale_report_charge",
            type: "POST",
            dataType: "json",
            data: {
                outlet_id: outlet_id,
                start_date: start_date,
                end_date: end_date,
                type: type,
                action_type: action_type,
                csrf_name_: csrf_value_,
            },
            success: function (response) {
                $(".set_total_1").html(response.set_total_1);
                $(".set_total_2").html(response.set_total_2);
                $(".set_total_3").html(response.set_total_3);
                $(".set_total_4").html(response.set_total_4);
                if(Number(response.set_total_3)){
                    $(".set_total_5").html((Number(response.set_total_1)/Number(response.set_total_3)).toFixed(2));
                }else{
                    $(".set_total_5").html((0).toFixed(2));
                }

                // Update the chart total value
                $("#chart-total-value").html(response.set_total_1);

                // Check if we have dual-line data (income/expense)
                if(action_type == "revenue" && response.data_points.income && response.data_points.expense) {
                    // Handle dual-line chart
                    let incomeData = response.data_points.income;
                    let expenseData = response.data_points.expense;

                    let labels = [];
                    let incomeValues = [];
                    let expenseValues = [];

                    $.each(incomeData, function (i, v) {
                        labels.push(v.x_label);
                        incomeValues.push(Number(v.y_value));
                    });

                    $.each(expenseData, function (i, v) {
                        expenseValues.push(Number(v.y_value));
                    });

                    // Update chart
                    myLineChart.data.labels = labels;
                    myLineChart.data.datasets[0].data = incomeValues;
                    myLineChart.data.datasets[0].label = 'Income';
                    myLineChart.data.datasets[0].hidden = false;
                    myLineChart.data.datasets[1].data = expenseValues;
                    myLineChart.data.datasets[1].label = 'Expense';
                    myLineChart.data.datasets[1].hidden = false;
                    myLineChart.update();

                } else {
                    // Handle single-line chart (other action types)
                    let json = (response.data_points);
                    var data_label = [];
                    var data_label_value = [];
                    $.each(json, function (i, v) {
                        data_label.push(v.x_label);
                        data_label_value.push(Number(v.y_value));
                    });

                    // Update chart with single dataset
                    myLineChart.data.labels = data_label;
                    myLineChart.data.datasets[0].data = data_label_value;
                    myLineChart.data.datasets[0].label = 'Data';
                    myLineChart.data.datasets[1].data = [];
                    myLineChart.update();
                }

            },
        });
    }
    
    function show_sale_report_today() {
        let csrf_name_ = $("#csrf_name_").val();
        let csrf_value_ = $("#csrf_value_").val();
        let outlet_id = $("#outlet_id_dashboard").val();
        $.ajax({
            url: base_url+"Dashboard/get_sale_report_charge_today",
            type: "POST",
            dataType: "json",
            data: {
                outlet_id: outlet_id,
                csrf_name_: csrf_value_,
            },
            success: function (response) {
                $(".set_today_total_1").html(response.set_total_1);
                $(".set_today_total_2").html(response.set_total_2);
                $(".set_today_total_3").html(response.set_total_3);
                $(".set_today_total_4").html(response.set_total_4);
                if(Number(response.set_total_3)){
                    $(".set_today_total_5").html((Number(response.set_total_1)/Number(response.set_total_3)).toFixed(2));
                }else{
                    $(".set_today_total_5").html((0).toFixed(2));
                }

                $('.spincrement').spincrement({
                    from: 0.0,
                    decimalPlaces: 2,
                    thousandSeparator:null,
                    duration: 1000,
                });
            },
        });
    }

    setTimeout(function () {
        show_sale_report("day","revenue");
        show_sale_report_today();
    }, 2000);

    $(document).on('click', '.get_graph_data', function(e) {
        e.preventDefault();
        $('.get_graph_data').removeClass('active');
        $(this).addClass('active');
        let action_type = $(this).attr('data-action_type');
        let text = $(this).attr('data-text');
        $(".sale_report_header").html(text);
        let type = "day";

        $(".get_date_by_custom_btn").each(function() {
            if($(this).hasClass("custom_td_active")){
                type = $(this).attr('data-type');
            }
        });

        show_sale_report(type,action_type);
    });
    $(document).on('click', '.get_action_prevent', function(e) {
        e.preventDefault();
    });
    $(document).on('click', '.get_date_by_custom_btn', function(e) {
        e.preventDefault();
        $('.get_date_by_custom_btn').removeClass('custom_td_active');
        $(this).addClass('custom_td_active');
        let type = $(this).attr("data-type");
        
        // Sync new UI buttons
        $('.btn-time-filter').removeClass('btn-time-active');
        $('.btn-time-filter').css({
            'background': 'transparent',
            'color': '#6E665A'
        });
        $('.btn-time-filter[data-type="' + type + '"]').addClass('btn-time-active');
        $('.btn-time-filter[data-type="' + type + '"]').css({
            'background': 'linear-gradient(180deg, #B8954A 0%, #D4B575 100%)',
            'color': 'white'
        });
        
        let action_type = "revenue";

        $(".get_graph_data").each(function() {
            if($(this).hasClass("active")){
                action_type = $(this).attr('data-action_type');
            }
        });

        show_sale_report(type,action_type);

    });
});
