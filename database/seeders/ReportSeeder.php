<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;
use App\Models\Order;
use Faker\Factory;
class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        for ($i=0; $i <=1000; $i++){
            $faker=Factory::create();

            $country=['ASIA','EUROPE','AFRICA','US','AUSTRALIA'];
            $device=['app','browser'];
            $gender=['male','female'];

            $customer=Customer::create([
                'full_name'     =>$faker->name(),
                'country'       =>$faker->randomElement($country),
                'age'           =>$faker->numberBetween(1,60),
                'gender'        =>$faker->randomElement($gender),
                'device'        =>$faker->randomElement($device)

            ]);

            $category=['Toys','Books'
            ,'Home Supplies','Accessories',
            'Gadgets','Food','Appliances'];

            $status=['processing','shipped','delivered','canceled']; 

            $order=Order::create([
                'customer_id'   =>$customer->id,
                'total'         =>$faker->randomFloat(2, 100, 100000),
                'category'      =>$faker->randomElement($category),
                'promo'         =>$faker->boolean(50),
                'status'        =>$faker->randomElement($status),
                'order_date'    =>$faker->dateTimeBetween('-10 years')

            ]);


        }
    }
}
