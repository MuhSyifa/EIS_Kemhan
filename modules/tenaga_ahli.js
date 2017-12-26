$(document).ready(function(){

	$('.sdmTenagaAhli_provinsi').DataTable();
	$('.sdmTenagaAhli_subBidang').DataTable();

	Highcharts.chart('SdmTenagaAhliKomduk', {
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
	            name: 'TENAGA PARA MEDIS',
	            y: 16205
	        }, {
	            name: 'TENAGA MEDIS',
	            y: 2337,
	            sliced: true,
	            selected: true
	        },{
	            name: 'AHLI SOSIAL',
	            y: 2242,
	            sliced: true,
	            selected: true
	        },{
	            name: 'AHLI TEKNIK',
	            y: 1317
	        }, {
	            name: 'OPERATOR ANGKUTAN',
	            y: 649,
	            sliced: true,
	            selected: true
	        },{
	            name: 'AHLI NUBIKA',
	            y: 29,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});