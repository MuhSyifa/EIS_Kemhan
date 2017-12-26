$(document).ready(function(){

	$('.sarprasRadioTransmisi_provinsi').DataTable();
	$('.sarprasRadioTransmisi_subBidang').DataTable();

	Highcharts.chart('containerSarprasRadioTransmisiKomduk', {
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
	            name: 'Stasiun Transmisi Telepom',
	            y: 0
	        }, {
	            name: 'RAPI',
	            y: 0,
	            sliced: true,
	            selected: true
	        },{
	            name: 'ORARI',
	            y: 0
	        }]
	    }]
	});

});