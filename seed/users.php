<?php
require '../config/database.php';
require '../vendor/autoload.php';

$faker = Faker\Factory::create();

for ($i=1; $i < 150 ; $i++) {
  $q = $db->prepare('INSERT INTO users(name,pseudo,email,password,active,created_at,city, country, sex, available_for_hiring, description)
                                VALUES(:name, :pseudo, :email, :password, :active, :created_at, :city, :country, :sex, :available_for_hiring, :description)');
  $q->execute([
      'name' => $faker->unique()->name ,
      'pseudo' => $faker->unique()->userName,
      'email' => $faker->unique()->email,
      'password' => password_hash('123456',PASSWORD_BCRYPT),
      'active' => 1,
      'created_at' => $faker->date().' '. $faker->time() ,
      'city' => $faker->unique()->city,
      'country' => $faker->unique()->country,
      'sex' => $faker->randomElement(['M','F']),
      'available_for_hiring' => $faker->randomElement([0,1]),
      'description' => $faker->paragraph(),
  ]);

  echo 'users added';
}

?>
