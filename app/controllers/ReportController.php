<?php

class ReportController extends BaseController {

    public function onGet(){
        $day = date("j",strtotime("now"));
        $weatherDataList = WeatherData::all()->toArray();

        return View::make('report.index', array(
            "weatherDataList" => $weatherDataList,
            "day" => $day
        ));
    }

}
