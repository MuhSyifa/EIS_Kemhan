$(document).ready(function(){

	$('.sarprasIndustriDarat_provinsi').DataTable();
	$('.sarprasIndustriDarat_subBidang').DataTable();

	Highcharts.chart('containerSarprasIndustriDaratKomduk', {
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
	            name: 'Otomotif',
	            y: 1
	        }, {
	            name: 'Komunikasi',
	            y: 0,
	            sliced: true,
	            selected: true
	        },{
	            name: 'Textil',
	            y: 0
	        },{
	            name: 'Baja',
	            y: 0
	        },{
	            name: 'Kimia',
	            y: 1
	        }]
	    }]
	});

});