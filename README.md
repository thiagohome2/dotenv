# dotenv
.env for all PHP versions

0) Create the .env file declaring the variables in the given pattern:
DB_HOST=localhost

1) Now just put the class in the project:
require_once(__DIR__ . "/util/DotEnv.php");

2) Create the object:
$dot = new DotEnv(__DIR__ . '/.env');

3) Load the global variables:
$dot->load();

4) use as per PHP documentation:
getenv('DB_HOST');