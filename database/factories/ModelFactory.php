<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});







        /* seed staffs*/
$factory->define(App\Models\StaffDetails::class,function (Faker\Generator $faker){

    return [
        'staff_Id' => $faker->unique()->userName,
        'first_Name' => $faker->firstName,
         'middle_Name' => $faker->lastName,
         'last_Name' => $faker->lastName,
         'designation' => $faker->text,
         'department_id' => function(){
                return factory(App\Models\Department::class)->create()->id;
         },
         'admin_Post'=> $faker->text,
         'tel_No' => $faker->phoneNumber,
         'date_Of_Employment' => $faker->dateTimeThisCentury->format('Y-m-d'),
       'application_Number'=>$faker->randomDigitNotNull,
 ];

});


            /*seed Departments*/
$factory->define(App\Models\Department::class,function (Faker\Generator $faker){

    $names = ['Engineering','computer','social science','Human resource','maintainance','IT'];

                return [
                    'name'=>$names[rand(0,5)],
                    'head_Of_Department'=>$faker->name,
                    'college_Id' => function(){
                        return factory(App\Models\College::class)->create()->id;
                    }
                ];
    });


            /* seed colleges*/
$factory->define(App\Models\College::class,function (Faker\Generator $faker){

    $colleges = ['Coict','Coet','Soed','Sjmc'];

    return [
        'college_Name' =>$colleges[rand(0,3)]
    ];
});
            /* seed logins*/
$factory->define(App\Models\Logins::class,function (Faker\Generator $faker){
    static $password;
    $staff = factory(App\Models\StaffDetails::class)->create();
    return [
        'username' => $staff->staff_Id,
        'staff_Id' => $staff->id,
        'password' => 'secret',
    ];
});


$factory->define(App\User::class,function (Faker\Generator $faker){

    static $password;
    $staff = factory(App\Models\StaffDetails::class)->create();
    return [
        'email' => $staff->staff_Id,
        'staff_Id' => $staff->id,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});