$(document).ready(function(){

	$('.sdabPeternakan_provinsi').DataTable();
	$('.sdabPeternakan_subBidang').DataTable();

	Highcharts.chart('containerSdabPeternakanKomduk', {
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
	            name: 'SAPI POTONG',
	            y: 1132163.00
	        }, {
	            name: 'KAMBING',
	            y: 0.00,
	            sliced: true,
	            selected: true
	        },{
	            name: 'AYAM PETELUR',
	            y: 0.00
	        },{
	            name: 'KERBAU',
	            y: 0.00
	        },{
	            name: 'AYAM BURAS',
	            y: 0.00
	        },{
	            name: 'DOMBA',
	            y: 0.00
	        },{
	            name: 'KUDA',
	            y: 0.00
	        },{
	            name: 'AYAM RAS PEDAGING',
	            y: 0.00
	        },{
	            name: 'SAPI PERAH',
	            y: 0.00
	        },{
	            name: 'ITIK',
	            y: 0.00
	        }]
	    }]
	});

});