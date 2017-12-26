$(document).ready(function(){

	$('.sarprasRumahSakit_provinsi').DataTable();
	$('.sarprasRumahSakit_subBidang').DataTable();

	Highcharts.chart('containerSarprasRumahSakitKomduk', {
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
	            name: 'Rumah Sakit I/A',
	            y: 43
	        }, {
	            name: 'Rumah Sakit II/B',
	            y: 0,
	            sliced: true,
	            selected: true
	        },{
	            name: 'Rumah Sakit III/C',
	            y: 51
	        },{
	            name: '	Jumlah Rumah Sakit IV/D',
	            y: 0
	        }]
	    }]
	});

});