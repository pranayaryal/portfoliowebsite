<!DOCTYPE html>
<meta charset="utf-8">
<style>

    body {
        font: 10px sans-serif;
    }

    h1,p {
        margin-right:50px;

    }

    .axis path,
    .axis line {
        fill: none;
        stroke: #000;
        shape-rendering: crispEdges;
    }

    .bar {
        fill: orange;
    }

    .bar:hover {
        fill: orangered ;
    }

    .x.axis path {
        display: none;
    }

    .d3-tip {
        line-height: 1;
        font-weight: bold;
        padding: 12px;
        background: rgba(0, 0, 0, 0.8);
        color: #fff;
        border-radius: 2px;
    }

    /* Creates a small triangle extender for the tooltip */
    .d3-tip:after {
        box-sizing: border-box;
        display: inline;
        font-size: 10px;
        width: 100%;
        line-height: 1;
        color: rgba(0, 0, 0, 0.8);
        content: "\25BC";
        position: absolute;
        text-align: center;
    }

    /* Style northward tooltips differently */
    .d3-tip.n:after {
        margin: -1px 0 0 0;
        top: 100%;
        left: 0;
    }
</style>
<head><h1>Average Hospital Bill Payments by State</h1>
    <h2>(Source: Hospital Charge Data from data.gov)</h2>
</head>
<body>
<div class="main"></div>
<script src="http://d3js.org/d3.v3.min.js"></script>
<script src="http://labratrevenge.com/d3-tip/javascripts/d3.tip.v0.6.3.js"></script>
<script>

    var margin = {top: 40, right: 40, bottom: 30, left: 150},
            width = 1200 - margin.left - margin.right,
            height = 500 - margin.top - margin.bottom;

    var commasFormatter = d3.format(",.0f");

    var x = d3.scale.ordinal()
            .rangeRoundBands([0, width], .1);

    var y = d3.scale.linear()
            .range([height,0]);

    var xAxis = d3.svg.axis()
            .scale(x)
            .orient("bottom");

    var yAxis = d3.svg.axis()
            .scale(y)
            .orient("left")
            .tickFormat(function(d){return "$" + commasFormatter(d);});


    var tip = d3.tip()
            .attr('class', 'd3-tip')
            .offset([-10, 0])
            .html(function(d) {
                return "<strong>Average Payments: $</strong><span style='color:red'>" + d.payments + "</span>";
            })

    var svg = d3.select(".main").append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
            .append("g")
            .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

    svg.call(tip);

    d3.tsv("data.tsv", type, function(error, data) {
        x.domain(data.map(function(d) { return d.state; }));
        y.domain([7000, d3.max(data, function(d) { return d.payments; })]);

        svg.append("g")
                .attr("class", "x axis")
                .attr("transform", "translate(0," + height + ")")
                .call(xAxis);

        svg.append("g")
                .attr("class", "y axis")
                .call(yAxis)
                .append("text")
                .attr("transform", "rotate(-90)")
                .attr("y", 6)
                .attr("dy", ".71em")
                .style("text-anchor", "end")
                .text("Average Total Payments");


        svg.selectAll(".bar")
                .data(data)
                .enter().append("rect")
                .attr("class", "bar")
                .attr("x", function(d) { return x(d.state); })
                .attr("width", x.rangeBand())
                .attr("y", function(d) { return y(d.payments); })
                .attr("height", function(d) { return height - y(d.payments); })
                .on('mouseover', tip.show)
                .on('mouseout', tip.hide)

    });

    function type(d) {
        d.payments = +d.payments;
        return d;
    }

</script>