var chart1;
$(document).ready(function(){

	$('.veteran').DataTable();

	Highcharts.chart('container_triwulan', {
	    chart: {
	        type: 'column'
	    },
	    title: {
	        text: 'Chart Veteran Per-Triwulan'
	    },
	    xAxis: {
	        categories: ['V / Brawijaya', 'III / Siliwangi', 'IV / Diponegoro', 'Jaya', 'IX / Udayana', 'XIV / Hasanudin','Iskandar Muda','	I / Bukit Barisan','VI / Mulawarman','II / Sriwijaya','XII / Tanjungpura','XVI / Pattimura','XVII / Cendrawasih','XIII / Merdeka','XVIII / Kasuari']
	    },
	    credits: {
	        enabled: false
	    },
	    series: [{
	        name: 'I',
	        data: [176, 92, 397, 438, 605, 42, 716, 172, 7, 129, 900, 486, 139, 10,3]
	    }, {
	        name: 'II',
	        data: [92, 51, 158, 306, 576, 83, 122, 115, 151, 15,42, 195, 109,1,2]
	    },{
	        name: 'III',
	        data: [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,0]
	    }, {
	        name: 'IV',
	        data: [21, 20, 67, 78, 167, 4, 123, 23, 6, 4,0, 32, 69,50,0]
	    }]
	});
   

});