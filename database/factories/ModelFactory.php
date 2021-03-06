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

//colleges
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
    $roles=['1','2','3','4','5','6'];//I added the array of roles
    static $password;
    $staff = factory(App\Models\StaffDetails::class)->create();
    return [
        'username' => $staff->staff_Id,
        'staff_Id' => $staff->id,
        'password' => 'secret',
        'role'=>$roles[rand(0,5)],//The role is assigned in array

    ];
});

//
$factory->define(App\User::class,function (Faker\Generator $faker){

    static $password;
    $staff = factory(App\Models\StaffDetails::class)->create();
    return [
        'email' => $staff->staff_Id,
        'staff_Id' => $staff->id,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

//house factory

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


$factory->define( App\Models\Application::class, function(Faker\Generator $faker){
    $typeallocation =['new','reallocation','new','reallocation'];

  return[
      'apply_Date'=>$faker->dateTimeThisCentury->format('Y-m-d'),
       'staff_id'=> function(){
      return factory(App\Models\StaffDetails::class)->create()->id;
       },
      'application_Type'=>$typeallocation[rand(0,3)],
      'approved_By_Officer'=>$faker->text,
       'approved_By_Housing_Officer'=>$faker->text,
      'confirmation'=>$faker->text,

  ];

});


//Autority factory
$factory->define(App\Authority::class, function(Faker\Generator $faker){
    $authorityNumber=['1','4','5','7','89','98','34'];
    $authority = ['Staff','Housing Officer','Admin','Head of Department'];
    return[
        'authority_Id'=>$authorityNumber[rand(0,6)],
        'authority_Name'=>$authority[rand(0,3)],
    ];


});



//Clearence factory
$factory->define(  App\Models\Clearence::class, function(Faker\Generator $faker){
    $remarksDetails=['Excellent', 'Good', 'Better','Best'];
    $quantityDetails=['Two beds', 'Two chairs','Two tables'];
    return[
      'staff_id'=> function(){
          return factory(App\Models\StaffDetails::class)->create()->id;
      },
      'description'=>$faker->text,
      'quantity'=>$quantityDetails[rand(0,2)],
        'remarks'=>$remarksDetails[rand(0,3)],
  ];

});


//Will come back later

$factory->define(App\Role::class,function(Faker\Generator $faker){
    $roleName=['Normal Staff','Housing Officer','H_O_D','admin'];


    return[
        'role_Id'=>$faker->unique()->text,
         'role_Name'=>$roleName[rand(0,3)],
    'authority_Id'=> function()
    {
        return factory(App\Authority::class)->create()->id;
    },

    ];

});