<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function getBrowser() {
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $browserName = 'Unknown';
            $platform = 'Unknown';
            $version = "";

            if(preg_match('/linux/i', $userAgent)){
                $platform = 'linux';
            } elseif(preg_match('/macintosh|mac os x/i', $userAgent)) {
                $platform = 'mac';
            } elseif(preg_match('/windows|win32/i', $userAgent)) {
                $platform = 'windows';
            }

            if(preg_match('/MSIE/i', $userAgent) && !preg_match('/Opera/i', $userAgent)) {
                $browserName = 'Internet Explorer';
                $ub = "MSIE";
            } elseif(preg_match('/Firefox/i', $userAgent)) {
                $browserName = 'Mozilla Firefox';
                $ub = 'Firefox';
            } elseif(preg_match('/Chrome/i', $userAgent)) {
                $browserName = 'Google Chrome';
                $ub = 'Chrome';
            } elseif(preg_match('/Safari/i', $userAgent)) {
                $browserName = 'Apple Safari';
                $ub = 'Safari';
            } elseif(preg_match('/Opera/i', $userAgent)) {
                $browserName = 'Opera';
                $ub = 'Opera';
            } elseif(preg_match('/Netscape/i', $userAgent)) {
                $browserName = 'Netscape';
                $ub = 'Netscape';
            }

            $known = array('Version', $ub, 'other');
            $pattern = '#(?<browser>' .join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
            
            if(!preg_match_all($pattern, $userAgent, $matches)) {
                //no matching number just continue
            }

            $i = count($matches['browser']);

            if($i == 1) {
                //see if version is before or after the name
                if (strripos($userAgent,"Version") < strripos($userAgent,$ub)) {
                    $version = $matches['version'][0];
                } else {
                     $version= $matches['version'][1];
                }
            } else {
               $version= $matches['version'][0];
            }

            // check if we have a number
            if($version == null || $version == "") { $version = "?"; }
            return array(
                'userAgent' => $userAgent,
                'name' => $browserName,
                'version' => $version,
                'platform' => $platform,
                'pattern' => $pattern
            );
        }

        $ua = getBrowser();
         $yourbrowser = "Your browser: " . $ua['name'] . " " . $ua['version'] .
            " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
         
         print_r($yourbrowser);
    ?>
</body>
</html>