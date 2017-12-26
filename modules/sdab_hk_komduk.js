$(document).ready(function(){

	$('.sdabHk_provinsi').DataTable();
	$('.sdabHk_subBidang').DataTable();

	Highcharts.chart('containerSdabHkKomduk', {
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
	            name: 'PISANG',
	            y: 293506613.09
	        }, {
	            name: 'JAHE',
	            y: 77335033.84,
	            sliced: true,
	            selected: true
	        },{
	            name: 'JERUK',
	            y: 4832405.72
	        },{
	            name: 'KENTANG',
	            y: 2122009.30
	        }]
	    }]
	});

});