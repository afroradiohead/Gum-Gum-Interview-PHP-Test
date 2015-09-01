<?php

class UploadController extends BaseController {
    public static $WEATHERDATAHEADER_DBCOLUMNS = array(
        "day" => "day",
        "mxt" => "maxTemp",
        "mnt" => "minTemp",
        "avt" => "avgTemp"
    );


    public function onPost(){
        $weatherDataFile = Input::file('weatherDataFile');
        $weatherDataFileText = File::get($weatherDataFile);
        $weatherDataMapping = array_map(function($data){
            return (array_values(array_filter(explode(" ", $data))));
        }, str_getcsv($weatherDataFileText, "\n"));
        $weatherDataHeaderList = array_shift($weatherDataMapping);

        Session::put("uploadedLeatherDataHeaderList", $weatherDataHeaderList);
        Session::put("uploadedWeatherData", $weatherDataMapping);

        return View::make('upload.index',array(
            "weatherDataFileText" => $weatherDataFileText,
            "weatherDataHeaderList" => $weatherDataHeaderList,
            "weatherDataMapping" => $weatherDataMapping,
        ));
    }


    public function onConfirm(){
        $weatherDataHeaderList = Session::get("uploadedLeatherDataHeaderList");
        $weatherDataMapping =  Session::get("uploadedWeatherData");

        $cleanedWeatherDataHeaderList = array_map(function($weatherDataHeader){
            $weatherDataHeader = strtolower($weatherDataHeader);
            return array_get(self::$WEATHERDATAHEADER_DBCOLUMNS, $weatherDataHeader, $weatherDataHeader);
        }, $weatherDataHeaderList);

        $databaseWeatherDataMapping = array_map(function($weatherData) use($cleanedWeatherDataHeaderList){
            return array_combine($cleanedWeatherDataHeaderList, $weatherData);
        }, $weatherDataMapping);

        WeatherData::truncate();
        WeatherData::insert($databaseWeatherDataMapping);

        return Redirect::to("/");
    }


}
