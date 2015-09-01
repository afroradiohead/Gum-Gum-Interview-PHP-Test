<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script type="text/javascript" src="{{url('js/list.js')}}"></script>
</head>
<body>

@include('nav', ['active' => 'list'])

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