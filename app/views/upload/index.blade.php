<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>

@include('nav')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Did your file upload correctly?
                <form action="{{url('upload/onConfirm')}}" method="POST" class="form-inline" style="display:inline">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="{{url("/")}}" class="btn btn-danger">No (take me back!)</a>
                        <button type="submit" class="btn btn-success">Yes (save it in your system!)</button>
                    </div>
                </form>

            </h1>
            <div class="row">
                <div class="col-md-6">
                    <h3>Raw Data: <small>Based on your upload</small></h3>
                    <pre>{{$weatherDataFileText}}</pre>
                </div>

                <div class="col-md-6">
                    <h3>Processed Data:</h3>
                    <table class="table">
                        <thead>
                        <tr>
                            @foreach($weatherDataHeaderList as $weatherDataHeader)
                                <th>{{$weatherDataHeader}}</th>
                            @endforeach
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($weatherDataMapping as $weatherData)
                            <tr>
                                <th scope="row">{{array_get($weatherData, "0", "Undefined")}}</th>
                                <td>{{array_get($weatherData, "1", "Undefined")}}&deg</td>
                                <td>{{array_get($weatherData, "2", "Undefined")}}&deg</td>
                                <td>{{array_get($weatherData, "3", "Undefined")}}&deg</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>