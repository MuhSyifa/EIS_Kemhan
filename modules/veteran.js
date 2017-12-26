var chart1;
$(document).ready(function(){

	$('.veteran').DataTable();

	Highcharts.chart('container_veteran', {
	    chart: {
	        type: 'column'
	    },
	    title: {
	        text: 'Chart Veteran Berdasrkan Babin'
	    },
	    xAxis: {
	        categories: ['V / Brawijaya', 'III / Siliwangi', 'IV / Diponegoro', 'Jaya', 'IX / Udayana', 'XIV / Hasanudin','Iskandar Muda','	I / Bukit Barisan','VI / Mulawarman','II / Sriwijaya','XII / Tanjungpura','XVI / Pattimura','XVII / Cendrawasih','XIII / Merdeka','XVIII / Kasuari']
	    },
	    credits: {
	        enabled: false
	    },
	    series: [{
	        name: 'Disahkan',
	        data: [12594, 9171, 8372, 6137, 4335, 4095, 3801, 1885, 1716, 1459, 1196, 778, 554, 75]
	    }, {
	        name: 'Dalam Proses',
	        data: [214, 122, 81, 46, 13, 2, 3, 17, 4, 29,1, 16, 13,1,11]
	    }]
	});
   

});