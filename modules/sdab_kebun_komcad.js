$(document).ready(function(){

	$('.sdabKebun_provinsi').DataTable();
	$('.sdabKebun_subBidang').DataTable();

	Highcharts.chart('containerSdabKebunKomduk', {
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
	            name: 'KELAPA SAWIT',
	            y: 3174999.00
	        }, {
	            name: 'KARET',
	            y: 1459972.00,
	            sliced: true,
	            selected: true
	        },{
	            name: 'TEBU',
	            y: 1340352.00
	        },{
	            name: 'KELAPA',
	            y: 419704.00
	        },{
	            name: 'KOPI',
	            y: 199671.20
	        },{
	            name: 'KAKAO',
	            y: 127978.00
	        },{
	            name: 'TEMBAKAU',
	            y: 108438.00
	        },{
	            name: 'CENGKEH',
	            y: 10655.00
	        },{
	            name: 'TEH',
	            y: 5058.00
	        },{
	            name: '',
	            y: 3536.00
	        },{
	            name: 'LADA',
	            y: 346.00
	        },{
	            name: 'KAPAS',
	            y: 119.00
	        }]
	    }]
	});

});