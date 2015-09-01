<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>

@include('nav', ['active' => 'report'])

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Weather Data By Day</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>Day</th>
                    <th>Max Temperature</th>
                    <th>Min Temperature</th>
                    <th>Avg Temperature</th>
                </tr>
                </thead>
                <tbody>
                @foreach($weatherDataList as $weatherData)
                    <tr>
                        <th scope="row">{{array_get($weatherData, "day", "Undefined")}}</th>
                        <td>{{array_get($weatherData, "maxTemp", "Undefined")}}&deg</td>
                        <td>{{array_get($weatherData, "minTemp", "Undefined")}}&deg</td>
                        <td>{{array_get($weatherData, "avgTemp", "Undefined")}}&deg</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>