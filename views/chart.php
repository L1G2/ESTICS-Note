<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<title>Line Chart</title>
	<script src="../Views/assets/js/Chart.min.js"></script>
	<script src="../Views/assets/js/utils.js"></script>	

		<div style="width:100%">
			<div class="chartjs-size-monitor">
				<div class="chartjs-size-monitor-expand">
					<div class=""></div>
			</div>
		</div>
		<canvas id="canvas" width="200" height="165" class="chartjs-render-monitor"></canvas>
	</div>
	<br>
	<br>
	<script>
		var config = {
			type: 'line',
			data: {
				labels: ['Jan', 'Fev', 'Mar', 'Apr', 'May', 'Jun', 'Jui','Aou','Sep','Oct','Nov','Dec'],
				datasets: [{
					label: 'Moyenne de classe en INFO_240',
					backgroundColor: window.chartColors.red,
					borderColor: window.chartColors.red,
					data: [10,16,15,14,18,12,13,15,14,18,12,18],
					fill: false,
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Chart.js Line Chart'
				},
				tooltips: {
					mode: 'index',
					intersect: false,
				},
				hover: {
					mode: 'nearest',
					intersect: true
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
		};
	</script>
</body></html>