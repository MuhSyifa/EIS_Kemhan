$(document).ready(function(){

	$('.sdabPP_provinsi').DataTable();
	$('.sdabPP_subBidang').DataTable();

	Highcharts.chart('containerSdabPPKomduk', {
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
	            name: 'PADI',
	            y: 5442536.46
	        }, {
	            name: 'JAGUNG',
	            y: 1539414.23,
	            sliced: true,
	            selected: true
	        },{
	            name: 'UBI KAYU',
	            y: 5565957.73
	        },{
	            name: 'UBI JALAR',
	            y: 71681.01
	        },{
	            name: 'KEDELAI',
	            y: 67192.12
	        },{
	            name: 'KACANG HIJAU',
	            y: 40786.90
	        },{
	            name: 'KACANG TANAH',
	            y: 19124.20
	        }]
	    }]
	});

});