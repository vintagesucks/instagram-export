<?php
/**
 * Instagram Export
 *
 * Exports all items on an Instagram profile to JSON.
 *
 * PHP version 7.1.3
 *
 * @category Instagram_Export
 * @package  Instagram_Export
 * @author   Nikolas Evers <hello@nikol.as>
 * @license  MIT License https://git.io/vFyxs
 * @link     https://github.com/vintagesucks/instagram-export
 */

set_time_limit(0);
date_default_timezone_set('UTC');

require __DIR__.'/vendor/autoload.php';

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
require __DIR__.'/config.php';
$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
try {
    $ig->login($username, $password);
} catch (\Exception $e) {
    echo 'Something went wrong: '.$e->getMessage()."\n";
    exit(1);
}

$file = fopen('export.json', 'w');

$user = $ig->people->getInfoByName($exportedAccount)->getUser();
$mediaCount = $user->getMediaCount();

try {
    $i = 0;
    $maxId = null;
    echo "Exporting items for user: $exportedAccount \n";
    fwrite($file, "{" . "\n");
    do {
        $response = $ig->timeline->getUserFeed($user->getPk(), $maxId);
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
    exit(1);
}

fclose($file);

echo "done :)" ."\n";
exit(0);
