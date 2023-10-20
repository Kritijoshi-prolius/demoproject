<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Customer::create([
            'name' => 'Yjat',
            'email' => 'k.ajncnc790@gmail.com',
            'gender' => 'f',
            'address' => strtoupper('gorwa'),
            'dob' => '2002/10/10',
            'state' => strtoupper('maha'),
            'country' => strtoupper('india'),
            'password'=> strtoupper('gusjhcsiowi'),
    
        ]);
        Customer::create([
            'name' => 'Basant',
            'email' => 'basant790@gmail.com',
            'gender' => 'm',
            'address' => strtoupper('gorwa'),
            'dob' => '2002/11/10',
            'state' => strtoupper('maha'),
            'country' => strtoupper('india'),
            'password'=> strtoupper('gusjhcsiowi'),
    
        ]);
    
    
}
}