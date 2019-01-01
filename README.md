# clemon
Clemon sender. PHP library.

Example:
```
require __DIR__ . '/vendor/autoload.php';

use Clemon\Sender;
use Clemon\Transport\TransportSwiftMailer;

$config = array(
        'host' => "smtp.gmail.com",
        'port' => 587,
        'emailFrom' => "",
        'name' => "",
        'pass' => "",
        'encryption' => "tls"
);
$transportSwiftMailer = new TransportSwiftMailer($config);
$sender = new Sender($transportSwiftMailer);

$user = array(
    'firstName' => 'FirstName',
    'lastName' => 'LastName',
    'email' => 'email@gmail.com'
);

$sender->sendMessage(
    'register',
    $user
);
```
