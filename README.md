### Run PHPUnit tests on Windows.

To run all unit tests, open the **Command Prompt** and run
```
vendor\bin\phpunit --bootstrap .\vendor\autoload.php .\tests
```
To run all unit tests in the EmailTests class, open the **Command Prompt** and run
```
vendor\bin\phpunit --bootstrap .\vendor\autoload.php .\tests\EmailTest
```
To run the unit test testCanBeUsedAsString in the EmailTests class, open the **Command Prompt** and run
```
vendor\bin\phpunit --filter testCanBeUsedAsString --bootstrap .\vendor\autoload.php .\tests\EmailTest
```
