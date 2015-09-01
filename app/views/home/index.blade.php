<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>

@include('nav', ['active' => 'home'])

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h1>Today's Weather Forcast <small>Day {{$day}}</small></h1>
				<table class="table">
					<thead>
					<tr>
						<th>Max Temperature</th>
						<th>Min Temperature</th>
						<th>Avg Temperature</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>{{$maxTemp}}&deg</td>
						<td>{{$minTemp}}&deg</td>
						<td>{{$avgTemp}}&deg</td>
					</tr>
					</tbody>
				</table>

				<form action="<?=url('upload')?>" method="POST" class="pull-right text-right" enctype="multipart/form-data">
					<input type="file" name="weatherDataFile" id="WeatherDataFileInput">
					<button type="submit" class="btn btn-default">Upload</button>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

</body>
</html>