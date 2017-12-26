$(document).ready(function(){

	$('.sdabListrik_provinsi').DataTable();
	$('.sdabListrik_subBidang').DataTable();

	Highcharts.chart('containerSdabListrikKomduk', {
	    chart: {
	        plotBackgroundColor: null,
	        plotBorderWidth: null,
	        plotShadow: false,
	        type: 'pie'
	    },
	    title: {
	        text: ''
	    },
	    tooltip: {
	        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	    },
	    plotOptions: {
	        pie: {
	            allowPointSelect: true,
	            cursor: 'pointer',
	            dataLabels: {
	                enabled: true,
	                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	                style: {
	                    color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	                }
	            }
	        }
	    },
	    series: [{
	        name: 'Sub Bidang',
	        colorByPoint: true,
	        data: [{
	            name: 'PLTU-B Steam Coal',
	            y: 9807.66
	        }, {
	            name: 'PLTG-G Natural Gas Turbine',
	            y: 6918.12,
	            sliced: true,
	            selected: true
	        },{
	            name: 'PLTD Diesel',
	            y: 4241.13
	        },{
	            name: 'PLTGU-M Combine Cycle',
	            y: 3282.41
	        }, {
	            name: 'PLTA HYDRO',
	            y: 169.16,
	            sliced: true,
	            selected: true
	        },{
	            name: 'PLTG-M Gas Turbine',
	            y: 13.18
	        },{
	            name: '	PLT Surya Photovolataic',
	            y: 0.00
	        }]
	    }]
	});

});