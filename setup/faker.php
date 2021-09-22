<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
require_once __DIR__ . '/../operations/database.php';

/*********************************************************
 https://fakerphp.github.io/formatters/miscellaneous/
*************************************************************/

$DB = new DataBase();
$DB = $DB->connectTo($_ENV['DATABASE_NAME']);
$faker = Faker\Factory::create('en_GB');
$numberOfRecords = 50;

for ($i=0; $i <$numberOfRecords; $i++) {
    try {
        $uni_id  = $faker->unique()->randomNumber(5);
        // $firstname  = $faker->firstname;
        // $lastname  = $faker->lastName;
        $email  = $faker->unique()->email;
        // $mobileNumber  = $faker->mobileNumber;
        // $password  = $faker->name;

        $sql = "INSERT INTO email(
        email,
      )
      VALUES(
      -- '$uni_id',
      -- '$firstname',
      -- '$lastname',
      '$email',
      -- '$mobileNumber',
      -- '$password'
    )";
        $DB->exec($sql);
        echo "Completed... . $i . Reconds created, with no errors \n <br>";
    } catch (\Exception $e) {
        echo "ERROR FOUND....  " . $e->getMessage() ;
        die();
    }
}
