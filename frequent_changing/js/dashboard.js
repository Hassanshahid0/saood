$(function () {
  "use strict";
  feather.replace();
  //BAR CHART
  
  // Helper to parse currency strings to numbers safely
  function parseAmount(val) {
    if (!val) return 0;
    // Decode HTML entities (e.g., &#8358; -> ₦)
    let txt = document.createElement("textarea");
    txt.innerHTML = val;
    let decoded = txt.value;
    // Remove currency symbols and other non-numeric chars, keeping only digits, dot, and minus
    // We remove common currency symbols specifically first to be safe
    let cleaned = decoded.replace(/[^\d.-]/g, '');
    
    // If the value was something like "&#8358; 1,000", decoded is "₦ 1,000"
    // and cleaned becomes "1000".
    // If the value was just "1,000", cleaned becomes "1000".
    
    let num = parseFloat(cleaned);
    return isNaN(num) ? 0 : num;
  }

  let purchase = $("#purchase").val() || 'Purchase';
  let sale = $("#sale").val() || 'Sale';
  let waste = $("#waste").val() || 'Waste';
  let expense = $("#expense").val() || 'Expense';
  let cust_rcv = $("#cust_rcv").val() || 'Customer Receive';
  let supp_pay = $("#supp_pay").val() || 'Supplier Pay';
  
  let purchase_value = parseAmount($("#purchase_value").val());
  let sale_value = parseAmount($("#sale_value").val());
  let waste_value = parseAmount($("#waste_value").val());
  let expense_value = parseAmount($("#expense_value").val());
  let cust_rcv_value = parseAmount($("#cust_rcv_value").val());
  let supp_pay_value = parseAmount($("#supp_pay_value").val());

  let dinein_count = parseAmount($("#dinein_count").val());
  let take_away_count = parseAmount($("#take_away_count").val());
  let delivery_count = parseAmount($("#delivery_count").val());
  let base_url = $("#base_url_").val();

  if ($("#operational_comparision").length > 0) {
      // Morris Bar Chart now handled in dashboard.php to avoid dependency order issues
  }

  $(
    "#low_stock_ingredients, #top_ten_food_menu, #top_ten_customer, #customer_receivable, #supplier_payable"
  ).slimscroll({
    height: "220px",
  });

  // -------------
  // - PIE CHART -
  // -------------
  // Get context with jQuery - using jQuery's .get() method.
  if ($("#pieChart").length > 0) {
    let pieChartCanvas = $("#pieChart").get(0).getContext("2d");
    let pieChart = new Chart(pieChartCanvas);
    let PieData = [
      {
        value: dinein_count,
        color: "#dad6fa",
        highlight: "#dad6fa",
        label: "Dine In",
      },
      {
        value: take_away_count,
        color: "#ebf6f2",
        highlight: "#ebf6f2",
        label: "Take Away",
      },
      {
        value: delivery_count,
        color: "#f3e8fe",
        highlight: "#f3e8fe",
        label: "Delivery",
      },
    ];
    let pieOptions = {
      // Boolean - Whether we should show a stroke on each segment
      segmentShowStroke: true,
      // String - The colour of each segment stroke
      segmentStrokeColor: "#fff",
      // Number - The width of each segment stroke
      segmentStrokeWidth: 1,
      // Number - The percentage of the chart that we cut out of the middle
      percentageInnerCutout: 50, // This is 0 for Pie charts
      // Number - Amount of animation steps
      animationSteps: 100,
      // String - Animation easing effect
      animationEasing: "easeOutBounce",
      // Boolean - Whether we animate the rotation of the Doughnut
      animateRotate: true,
      // Boolean - Whether we animate scaling the Doughnut from the centre
      animateScale: false,
      // Boolean - whether to make the chart responsive to window resizing
      responsive: true,
      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: false,
      // String - A legend template
      legendTemplate:
        "<ul class='<%=name.toLowerCase()%>-legend'><% for (let i=0; i<segments.length; i++){%><li><span style='background-color:<%=segments[i].fillColor%>'></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>",
      // String - A tooltip template
      tooltipTemplate: "<%=value %> <%=label%> Orders",
    };
    // Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    if (typeof pieChart.Doughnut === 'function') {
      pieChart.Doughnut(PieData, pieOptions);
    }
  }
  // -----------------
  // - END PIE CHART -
  // -----------------

  //show last 12 months sale comparison
  selectMonth(12);
  $("#operational_comparision_range").on("click", function () {
    $("#operational_comparision_range_fields").show();
  });
  $("#operational_comparision_cancel").on("click", function () {
    $("#operational_comparision_range_fields").hide();
  });

  function selectMonth(value) {
    let csrf_name_ = $("#csrf_name_").val();
    let csrf_value_ = $("#csrf_value_").val();
    $.ajax({
      url: base_url + "Dashboard/comparison_sale_report_ajax_get",
      type: "get",
      datatype: "json",
      data: {
        months: value,
        csrf_name_: csrf_value_,
      },
      success: function (response) {
        let json = $.parseJSON(response);
        google.charts.load("current", {
          packages: ["corechart", "bar"],
        });
        google.charts.setOnLoadCallback(drawStuff);

        function drawStuff() {
          let chartDiv = document.getElementById("chart_div");

          let data = "";
          let dataArray = [];
          let dataArrayValue = [];
          dataArrayValue = [];
          dataArrayValue.push("");
          dataArrayValue.push("");
          dataArray.push(dataArrayValue);

          $.each(json, function (i, v) {
            window["monthName" + i] = v.month;
            window["collection" + i] = v.saleAmount;
            dataArrayValue = [];
            dataArrayValue.push(v.month);
            dataArrayValue.push(v.saleAmount);
            dataArray.push(dataArrayValue);
          });
          data = google.visualization.arrayToDataTable(dataArray);
          let options = {
            legend: {
              position: "none",
            },
            colors: ["#dad6fa", "#dad6fa", "#dad6fa"],
            axes: {
              y: {
                all: {
                  format: {
                    pattern: "decimal",
                  },
                },
              },
            },
            series: {
              0: {
                axis: "0",
              },
            },
          };

          function drawMaterialChart() {
            let materialChart = new google.charts.Bar(chartDiv);
            materialChart.draw(data, options);
          }

          function drawClassicChart() {
            let classicChart = new google.visualization.ColumnChart(chartDiv);
            classicChart.draw(data, classicOptions);
          }
          drawMaterialChart();
        }
      },
    });
  }

  $(document).on("change", "#outlet_id_dashboard", function () {
    //change outlet id for dashboard data change
    $("#outlet_form").submit();
  });
});
