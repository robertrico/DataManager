<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use MongoDB\BSON\ObjectID;
use MongoDB\BSON\UTCDateTime;

class DynamicParserComponent extends Component
{
    public function parseDate($date,$format,$return_obj)
    {
		$d = \DateTime::createFromFormat($format, $date);
		if($d && $d->format($format) === $date){
			return new $return_obj($d->getTimestamp()*1000);
		}else{
			return $date;
		}
    }
}
