<?php
set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/config.php';

if (getenv('USERNAME')) {
    $username = getenv('USERNAME');
}
if (getenv('PASSWORD')) {
    $password = getenv('PASSWORD');
}
if (getenv('EXPORTEDACCOUNT')) {
    $exportedAccount = getenv('EXPORTEDACCOUNT');
}

$debug = false;
$truncatedDebug = false;

$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
try {
    $ig->setUser($username, $password);
    $ig->login();
} catch (\Exception $e) {
    echo 'Something went wrong: '.$e->text."\n";
    exit(0);
}

$file = fopen('export.json', 'w');

$user = $ig->getUserInfoByName($exportedAccount)->user;
$mediaCount = $user->media_count;

try {
    $i = 0;
    $maxId = null;
    echo "Exporting items for user: $exportedAccount \n";
    fwrite($file, "{" . "\n");
    do {
        $response = $ig->getUserFeed($user->pk, $maxId);
        foreach ($response->getItems() as $item) {
            if ($i > 0) {
                fwrite($file, ", " . "\n");
            }
            fwrite($file, '"' . $i . '": [' . "\n");
            fwrite($file, json_encode($item) . "\n");
            fwrite($file, ']' . "\n");
            $i++;
        }
        $maxId = $response->getNextMaxId();
        echo "Sleeping for 5s... Count: $i/$mediaCount items \n";
        sleep(5);
    } while ($maxId !== null);
    fwrite($file, "}" . "\n");
} catch (\Exception $e) {
    echo 'Something went wrong: '.$e->getMessage()."\n";
}

fclose($file);

echo "done :)" ."\n";
