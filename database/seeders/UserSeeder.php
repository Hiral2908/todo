<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Todo; 
use Illuminate\Support\Facades\Mail;
use App\Mail\sendSignUpEmail;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create(); 
    	foreach (range(1,10) as $index)
        {
            $res=new Todo;
            $res->first_name= $faker->firstName;
            $res->last_name=$faker->lastName;
            $res->email=$faker->email;
            $res->password =  Hash::make('password');
            $res->gender='random';
            $res->employment=$faker->jobTitle;
            $res->is_active=true;
            $res->save();
            
            Mail::to($res->email)->send(new sendSignUpEmail($res));
	    }
    }  
    
}
