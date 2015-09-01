<?php

class ListController extends BaseController {

    public function onGet(){
        $day = date("j",strtotime("now"));
        $weatherDataList = WeatherData::all()->toArray();

        return View::make('list.index', array(
            "weatherDataList" => $weatherDataList,
            "day" => $day
        ));
    }

}
