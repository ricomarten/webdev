<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisaninweb\SoapWrapper\SoapWrapper;
use SoapClient;


class HomeController extends Controller
{
    protected $soapWrapper;
    public function __construct(SoapWrapper $soapWrapper)
    {
        $this->soapWrapper = $soapWrapper;
    }
    public function index()
    {
        if(!request('year')) {
            die("year required");
        }
        
        $soapClient = new SoapClient('http://kayaposoft.com/enrico/ws/v2.0/index.php?wsdl');
        $results = $soapClient->getHolidaysForYear($_REQUEST['year'], "usa", "al", "all");
       
        echo "<pre>";
        print_r($results);
        foreach ($results->holiday as $result) {
            echo "<strong>" . $result->name->text . "</strong>: " . $result->holidayType . "(" . $result->date->day . '/' . $result->date->month . '/' . $result->date->year . ")" . "<br/>";
        }
        echo "</pre>";
    }
}
