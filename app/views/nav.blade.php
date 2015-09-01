<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url("/")}}">Gum Gum's Weather Forecast App</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{isset($active) && $active == "home" ? 'active' : ''}}"><a href="{{url("/")}}">Today's Forecast</a></li>
                <li class="{{isset($active) && $active == "list" ? 'active' : ''}}"><a href="{{url('list')}}">List By Days</a></li>
                <li class="{{isset($active) && $active == "report" ? 'active' : ''}}"><a href="{{url('report')}}">Report</a></li>
            </ul>
        </div>
    </div>
</nav>