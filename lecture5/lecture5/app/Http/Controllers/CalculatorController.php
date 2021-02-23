<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
	public function operation($number1,$sign,$number2){
		switch ($sign) {
			case '+':
				$result=$number1+$number2;
				return view('test')->with('result',$result);
				# code...
				break;

			case '-':
				$result=$number1-$number2;
				return view('test',compact('result'));
				# code...
				break;

			case '*':
				$result=$number1*$number2;
				return view('test',['result'=>$result]);
				# code...
				break;

			case 'divide':
				$result=$number1/$number2;
				return view('test',['result'=>$result]);
				# code...
				break;
			
			
		}

	}
    //
}
