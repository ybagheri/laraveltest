<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Ybagheri\Strfun;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/formbuilder', function () {
    return view('formbuilder');

});
Route::get('test', function () {
    $inputType=collect(["bigIncrements" => "text",	"bigInteger" => "text",	"binary" => "file",	"boolean" => "checkbox",	"char" => "text",	"date" => "text",	"dateTime" => "text",	"dateTimeTz" => "text",	"decimal" => "text",	"double" => "text",	"enum" => "radio",	"float" => "text",	"increments" => "text",	"integer" => "text",	"ipAddress" => "text",	"json" => "",	"jsonb" => "",	"longText" => "textarea ",	"macAddress" => "text",	"mediumIncrements" => "text",	"mediumInteger" => "text",	"mediumText" => "textarea ",	"morphs" => "",	"nullableMorphs" => "",	"nullableTimestamps" => "",	"rememberToken" => "",	"smallIncrements" => "text",	"smallInteger" => "text",	"softDeletes" => "",	"string" => "text",	"string" => "text",	"text" => "text",	"time" => "text",	"timeTz" => "text",	"tinyInteger" => "text",	"timestamp" => "",	"timestampTz" => "",	"timestamps" => "",	"timestampsTz" => "",	"unsignedBigInteger" => "text",	"unsignedInteger" => "text",	"unsignedMediumInteger" => "text",	"unsignedSmallInteger" => "text",	"unsignedTinyInteger" => "text",	"uuid" => "text"]);
    return $inputType->get('softDeletes');

    /*
        $strfun = new Strfun;
        $directory='..\database\migrations';
        $files = File::allFiles($directory);
        foreach ($files as $file)
        {
            foreach(preg_split("/((\r?\n)|(\r\n?))/", File::get($file)) as $line){
                if ($ss=$strfun->getStringBetween($line, "->", "("))
             echo   e($ss."<br>");
            }

            //print_r(preg_split("/((\r?\n)|(\r\n?))/", File::get($file)));


        }
    */



});
function getInputType($segments)
{
    $inputType = collect(["bigIncrements" => "text", "bigInteger" => "text", "binary" => "file", "boolean" => "checkbox", "char" => "text", "date" => "text", "dateTime" => "text", "dateTimeTz" => "text", "decimal" => "text", "double" => "text", "enum" => "radio", "float" => "text", "increments" => "text", "integer" => "text", "ipAddress" => "text", "json" => "", "jsonb" => "", "longText" => "textarea ", "macAddress" => "text", "mediumIncrements" => "text", "mediumInteger" => "text", "mediumText" => "textarea ", "morphs" => "", "nullableMorphs" => "", "nullableTimestamps" => "", "rememberToken" => "", "smallIncrements" => "text", "smallInteger" => "text", "softDeletes" => "", "string" => "text", "string" => "text", "text" => "text", "time" => "text", "timeTz" => "text", "tinyInteger" => "text", "timestamp" => "", "timestampTz" => "", "timestamps" => "", "timestampsTz" => "", "unsignedBigInteger" => "text", "unsignedInteger" => "text", "unsignedMediumInteger" => "text", "unsignedSmallInteger" => "text", "unsignedTinyInteger" => "text", "uuid" => "text"]);
    return $inputType->get($segments);
}
function getColumnName($segments)
{

}
