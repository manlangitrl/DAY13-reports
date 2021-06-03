<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use Carbon\Carbon;
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
        $country= [
        'asia'=>Customer::whereCountry('ASIA')->count(),
        'europe'=>Customer::whereCountry('EUROPE')->count(),
        'africa'=>Customer::whereCountry('AFRICA')->count(),
         'us'=>Customer::whereCountry('US')->count(),
        'australia'=>Customer::whereCountry('AUSTRALIA')->count(),
        ];

        // dd($country);

        return view('index')->with(
            ['total_customers'=>$total_customers,'browser'=>$browser,'app'=> $app,
                'male'=>$male,'female'=>$female,'age'=>$age, 'country'=>$country

            
            
            ]
        );


    }

    public function orders()
            {

                $data= [
                    'total_earned'=>Order::where('status','!=','canceled')->sum('total'),
                    'avg_order_total'=>Order::avg('total'),

                    'category'=>[
                        'Toys'=>Order::whereCategory('Toys')->count(),
                        'Books'=>Order::whereCategory('Books')->count(),
                        'Home_Supplies'=>Order::whereCategory('Home Supplies')->count(),
                        'Accessories'=>Order::whereCategory('Accessories')->count(),
                        'Gadgets'=>Order::whereCategory('Gadgets')->count(),
                        'Food'=>Order::whereCategory('Food')->count(),
                        'Appliances'=>Order::whereCategory('Appliances')->count()
                    ],

                    'status'=>[
                        'processing'=>Order::whereStatus('processing')->count(),
                        'shipped'=>Order::whereStatus('shipped')->count(),
                        'delivered'=>Order::whereStatus('delivered')->count(),
                        'canceled'=>Order::whereStatus('canceled')->count() 
                    ],

                    'promotion'=>[
                        'used'=>Order::wherePromo('1')->count(),
                        'not_used'=>Order::wherePromo('0')->count(),  
                    ],

                    'year'=>[
                        '10'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(10),
                                                                Carbon::parse('2021-12-31')->subYears(10)])->where('status','!=','canceled')->sum('total'),

                        '9'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(9),
                                                                Carbon::parse('2021-12-31')->subYears(9)])->where('status','!=','canceled')->sum('total'),

                        '8'=>Order::whereBetween('order_date',        [Carbon::parse('2021-01-01')->subYears(8),
                                                                 Carbon::parse('2021-12-31')->subYears(8),])->where('status','!=','canceled')->sum('total'),

                        '7'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(7),
                                                         Carbon::parse('2021-12-31')->subYears(7)])->where('status','!=','canceled')->sum('total'),

                        '6'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(6),
                                                        Carbon::parse('2021-12-31')->subYears(6)])->where('status','!=','canceled')->sum('total'),

                        '5'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(5),
                                                                Carbon::parse('2021-12-31')->subYears(5)])->where('status','!=','canceled')->sum('total'),
                                                                
                        '4'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(4),
                                                                Carbon::parse('2021-12-31')->subYears(4)])->where('status','!=','canceled')->sum('total'),

                        '3'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(3),
                                                         Carbon::parse('2021-12-31')->subYears(3)])->where('status','!=','canceled')->sum('total'),

                        '2'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(2),
                                                        Carbon::parse('2021-12-31')->subYears(2)])->where('status','!=','canceled')->sum('total'),

                        '1'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01')->subYears(1),
                                                 Carbon::parse('2021-12-31')->subYears(1)])->where('status','!=','canceled')->sum('total'),
                                                                                                
                        '0'=>Order::whereBetween('order_date', [Carbon::parse('2021-01-01'),
                        Carbon::parse('2021-12-31')])->where('status','!=','canceled')->sum('total'),
                    ]

               
                ];  

                    // dd($data);

                    return view('order')->with(
                        ['data'=>$data
            
                        
                     ]
                    );
         }
         
}
