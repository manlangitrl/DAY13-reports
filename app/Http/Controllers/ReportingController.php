<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
class ReportingController extends Controller
{
    protected $request;

    public function __construct (Request $request)
    {

       $this->request=$request; 
    }

    public function index(){

        $total_customers=Customer::count();
        $browser=Customer::whereDevice('browser')->count();
        $app=Customer::whereDevice('app')->count();
        $male=Customer::whereGender('male')->count();
        $female=Customer::whereGender('female')->count();
     
        $age= [
            'child'=>Customer::whereBetween('age',[0,12])->count(),
            'adolescense'=>Customer::whereBetween('age',[13,18])->count(),
            'adult'=>Customer::whereBetween('age',[19,59])->count(),
            'senior'=>Customer::where('age','>=',59)->count()
        ];
        // dd($age);

        return view('index')->with(
            ['total_customers'=>$total_customers,'browser'=>$browser,'app'=> $app,
                'male'=>$male,'female'=>$female,'age'=>$age

            
            
            ]
        );


    }
}
