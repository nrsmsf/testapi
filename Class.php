
<?php
error_reporting(E_ALL);

class Div
{
	public function get(){
		$data = file_get_contents('div.csv');
		$data = explode("\r", $data);
		return $data;
	}

    public function parse(){
        $var = $this->get();
        $arr = [];
        for($i = 0; $i < count($var); $i++)  {
            $x = explode(";" , $var[$i]);
            $x['ticker'] = $x['0'];
            $x['date_pay'] = $x['1'];
            $x['amount'] = $x['2'];
            $x['date_exp'] = $x['3'];
            unset($x[0], $x[1], $x[2], $x[3]);
            array_push($arr, $x);

        }

        return($arr);

    }

}

