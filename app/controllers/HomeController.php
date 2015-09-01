<?php

class HomeController extends BaseController {

	public function onGet(){
		$day = date("j",strtotime("now"));
		$weatherData = array();
		$weatherDataModel = WeatherData::where("day", $day)->first();

		if($weatherDataModel){
			$weatherData = $weatherDataModel->toArray();
		}


		return View::make('home.index', array(
			"day" => $day,
			"maxTemp" => array_get($weatherData, "maxTemp", "Unavailable"),
			"minTemp" => array_get($weatherData, "minTemp", "Unavailable"),
			"avgTemp" => array_get($weatherData, "avgTemp", "Unavailable")
		));
	}

}
