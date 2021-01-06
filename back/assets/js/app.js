$(document).ready(function(){
	$.ajax({
		url: "http://localhost/test/web/back/view/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var medicament = [];
			var prix = [];
			var quantite = [];

			for(var i in data) {
				medicament.push("medicament " + data[i].idMedicament);
				prix.push(data[i].prix);
				quantite.push(data[i].quantite);
			}

			var chartdata = {
				labels: medicament,
				datasets : [
					{
						label: 'Prix',
						backgroundColor: "rgba(89, 105, 255,0.5)",
						borderColor: "rgba(89, 105, 255,0.7)",
						borderWidth: 2,
						hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: prix
					}
					, {
						label: 'Quantite',
						data: quantite,
						backgroundColor: "rgba(255, 64, 123,0.5)",
						borderColor: "rgba(255, 64, 123,0.7)",
						borderWidth: 2
					}]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata,
	
			options: {
				legend: {
					display: true,
					position: 'bottom',

					labels: {
						fontColor: '#71748d',
						fontFamily: 'Circular Std Book',
						fontSize: 14,
					}
				},

				scales: {
					xAxes: [{
						ticks: {
							fontSize: 14,
							fontFamily: 'Circular Std Book',
							fontColor: '#71748d',
						}
					}],
					yAxes: [{
						ticks: {
							fontSize: 14,
							fontFamily: 'Circular Std Book',
							fontColor: '#71748d',
						}
					}]
				}
			}
			});
		},
		error: function(data) {
			console.log(data);
		}
	});
});