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




$factory->define(App\Models\StaffDetails::class,function (Faker\Generator $faker){

    $colleges = ['Coict','Coet','Soed','Sjmc'];


    return [
        'staff_Id' => $faker->unique()->userName,
        'first_Name' => $faker->firstName,
         'middle_Name' => $faker->lastName,
         'last_Name' => $faker->lastName,
         'designation' => $faker->text,
         'college' => $colleges[rand(0,3)],
         'admin_Post'=> $faker->text,
         'tel_No' => $faker->phoneNumber,
         'date_Of_Employment' => $faker->dateTimeThisCentury->format('Y-m-d'),
       'application_Number'=>$faker->randomDigitNotNull,
 ];

});

$factory->define(App\Models\Logins::class,function (Faker\Generator $faker){
    static $password;
    $staff = factory(App\Models\StaffDetails::class)->create();
    return [
        'username' => $staff->staff_Id,
        'staff_Id' => $staff->id,
        'password' => $password ?: $password = bcrypt('secret'),
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



$factory->define(App\Models\House::class,function (Faker\Generator $faker){

   $categories = ['one','two','three'];
   $locations  = ['changanyikeni','Mwenge','Kawe','Posta'];

    return [
        'house_Category' => $categories[rand(0,2)],
        'no_Of_Bedrooms' => rand(3,10),
        'house_number' =>$faker->text,
        'staff_Id' => function(){
        return factory(App\Models\StaffDetails::class)->create()->id;
        },
        'location' =>$locations[rand(0,3)]
    ];
});


//$factory->define( App\Models\Application::class, function(Faker\Generator $faker){
//    $typeallocation =['new','reallocation','new','reallocation'];
//
//  return[
//      'apply_Date'=>$faker->dateTimeThisCentury->format('Y-m-d'),
//       'staff_id'=> function(){
//      return factory(App\Models\StaffDetails::class)->create()->id;
//       },
//      'application_Type'=>$typeallocation[rand(0,3)],
//      'approved_By_Officer'=>$faker->text,
//       'approved_By_Housing_Officer'=>$faker->text,
//      'confirmation'=>$faker->text,
//
//  ];
//
//});
