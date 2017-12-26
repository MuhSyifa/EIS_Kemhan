$(document).ready(function(){

	$('.sdmGardaBangsa_provinsi').DataTable();
	$('.sdmGardaBangsa_subBidang').DataTable();

	Highcharts.chart('SdmGardaBangsaKomduk', {
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
	            name: 'MENWA,SATPAM,LINMAS DAN PRAMUKA',
	            y: 537852
	        }, {
	            name: 'POLISI',
	            y: 121273,
	            sliced: true,
	            selected: true
	        },{
	            name: 'ORGANISASI OLAH RAGA BELA DIRI',
	            y: 83700,
	            sliced: true,
	            selected: true
	        }]
	    }]
	});

});