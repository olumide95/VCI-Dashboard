$(document).ready(function() {
	
	// Area Chart
	
  //   Morris.Area({
		// element: 'area-charts',
		// data: [
		// 	{ y: '2006', a: 100, b: 90 },
		// 	{ y: '2007', a: 75,  b: 65 },
		// 	{ y: '2008', a: 50,  b: 40 },
		// 	{ y: '2009', a: 75,  b: 65 },
		// 	{ y: '2010', a: 50,  b: 40 },
		// 	{ y: '2011', a: 75,  b: 65 },
		// 	{ y: '2012', a: 100, b: 90 }
		// ],
		// xkey: 'y',
		// ykeys: ['a', 'b'],
		// labels: ['Total Invoice', 'Pending Invoice'],
		// lineColors: ['#ff9b44','#fc6075'],
		// lineWidth: '3px',
		// resize: true,
		// redraw: true
  //   });

	// Bar Chart
	
	Morris.Bar({
		element: 'bar-charts',
		data: [
			{ y: 'July', a: 100, b: 90 },
			{ y: 'August', a: 75,  b: 65 },
			{ y: 'September', a: 50,  b: 40 },
			{ y: 'October', a: 75,  b: 65 },
			{ y: 'November', a: 50,  b: 40 },
			{ y: 'December', a: 75,  b: 65 },
			// { y: '2012', a: 100, b: 90 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Employees Active', 'Total Employees Inactive'],
		lineColors: ['#ff9b44','#fc6075'],
		lineWidth: '3px',
		barColors: ['#ff9b44','#fc6075'],
		resize: true,
		redraw: true
	});
	
	// Line Chart
	
	Morris.Line({
		element: 'line-charts',
		data: [
			{ y: '2006', a: 50, b: 90 },
			{ y: '2007', a: 75,  b: 65 },
			{ y: '2008', a: 50,  b: 40 },
			{ y: '2009', a: 75,  b: 65 },
			{ y: '2010', a: 50,  b: 40 },
			{ y: '2011', a: 75,  b: 65 },
			{ y: '2012', a: 100, b: 50 }
		],
		xkey: 'y',
		ykeys: ['a', 'b'],
		labels: ['Total Active', 'Total Inactive'],
		lineColors: ['#ff9b44','#fc6075'],
		lineWidth: '3px',
		resize: true,
		redraw: true
	});
	
	// Donut Chart
		
	Morris.Donut({
		element: 'pie-charts',
		colors: [
			'#ff9b44',
			'#fc6075',
			'#ffc999',
			'#fd9ba8',
			'#c19c00',
			'#efcc00',
			'#d9da00'
		],
		data: [
			{label: "Field Service", value: 10},
			{label: "Engineering", value: 20},
			{label: "Procurement", value: 25},
			{label: "Marine", value: 15},
			{label: "Bids and Proposal", value: 15},
			{label: "Document Control", value: 5},
			{label: "Human Resources", value: 10}
		],
		resize: true,
		redraw: true
	});
		
});