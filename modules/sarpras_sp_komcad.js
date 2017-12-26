$(document).ready(function(){

	$('.sarprasStasiunPemancar_provinsi').DataTable();
	$('.sarprasStasiunPemancar_subBidang').DataTable();

	Highcharts.chart('containerSarprasStasiunPemancarKomduk', {
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
	            name: 'Radio',
	            y: 186
	        }, {
	            name: 'TV',
	            y: 22,
	            sliced: true,
	            selected: true
	        },{
	            name: 'Stasiun Bumi',
	            y: 0
	        }]
	    }]
	});

});