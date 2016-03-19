var margin = {top: 40, right: 20, bottom: 30, left: 100},
    width = 960 - margin.left - margin.right,
    height = 300 - margin.top - margin.bottom;

var commasFormatter = d3.format(",.0f");

var x = d3.scale.ordinal()
    .rangeRoundBands([0, width], .1);

var y = d3.scale.linear()
    .range([height, 0]);

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
        return "<strong>Payments:</strong> <span style='color:red'>" + "$" + d.payments + "</span>" +
         " <strong>State:</strong> <span style='color:red'>" + "$" + d.state + "</span>";
    })

var svg = d3.select(".grid").append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
    .append("g")
    .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

svg.call(tip);

// The new data variable.
var data = [

    {state:  "AK", payments: 14572},
    {state:  "AL", payments: 7568},
    {state:  "AR", payments: 8019},
    {state:  "AZ", payments: 10154},
    {state:  "CA", payments: 12629},
    {state:  "CO", payments: 9502},
    {state:  "CT", payments: 11365},
    {state:  "DC", payments: 12998},
    {state:  "DE", payments: 10360},
    {state:  "FL", payments: 8826},
    {state:  "GA", payments: 8925},
    {state:  "HI", payments: 12775},
    {state:  "IA", payments: 8312},
    {state:  "ID", payments: 9827},
    {state:  "IL", payments: 9790},
    {state:  "IN", payments: 8756},
    {state:  "KS", payments: 8455},
    {state:  "KY", payments: 8278},
    { state: "LA", payments:	8638},
    { state: "MA", payments:	10279},
    { state: "MD", payments:	12608},
    { state: "ME", payments:	8679},
    { state: "MI", payments:	9754},
    { state: "MN", payments:	9948},
    { state: "MO", payments:	8724},
    { state: "MS", payments:	8229},
    { state: "MT", payments:	9252},
    { state: "NC", payments:	9089},
    { state: "ND", payments:	9827},
    { state: "NE", payments:	9331},
    { state: "NH", payments:	9289},
    { state: "NJ", payments:	10678},
    { state: "NM", payments:	9619},
    { state: "NV", payments:	10291},
    { state: "NY", payments:	11795},
    { state: "OH", payments:	8808},
    { state: "OK", payments:	8353},
    { state: "OR", payments:	10436},
    { state: "PA", payments:	9100},
    { state: "RI", payments:	10509},
    { state: "SC", payments:	9132},
    { state: "SD", payments:	10141},
    { state: "TN", payments:	8153},
    { state: "TX", payments:	9243},
    { state: "UT", payments:	9749},
    { state: "VA", payments:	8887},
    { state: "VT", payments:	11766},
    { state: "WA", payments:	10543},
    { state: "WI", payments:	9270},
    { state: "WV", payments:	7968},
    { state: "WY", payments:	11398}

];

// The following code was contained in the callback function.
x.domain(data.map(function(d) { return d.state; }));
y.domain([0, d3.max(data, function(d) { return d.payments; })]);

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

function type(d) {
    d.payments = +d.payments;
    return d;}