<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
// public function test1(){
//     return view("login");
// }
public function carForm() {
    return view("car");
}

public function addcar(Request $request) {
    $cartitle = $request->input("title");
    $price = $request->input("price");
    $description = $request->input('description');
    echo "The title of the car is: " . $cartitle . "and price is " .$price ."and description is".$description;
    $publish = $request->input("remember");
    if($publish){
        echo "the car is published.";
    }else{
        echo "the car is not published.";
    }
}
}
