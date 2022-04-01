<!--  This LightShot link generator is build with PHP. -->
<?php

/**
 * Depending on given parameters, return random assortment of letters/numbers.
 */
function generateRandomString($length, $type)
{

    $characters = '';

    if ($type == "letter")
        $characters = 'abcdefghijklmnopqrstuvwxyz';

    else if ($type == "number")
        $characters = '0123456789';

    $charactersLength = strlen($characters);
    $selectedCharacters = '';

    for ($i = 0; $i < $length; $i++) {
        $selectedCharacters .= $characters[rand(0, $charactersLength - 1)];
    }
    return $selectedCharacters;
}

// On button press execute
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $url = "https://prnt.sc/";
    // Add random LightShot image id to link. 

    $url .= generateRandomString(2, 'letter');
    $url .= generateRandomString(4, 'number');

    header("Location: " . $url);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>LightShot Random Image Viewer</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="//st.prntscr.com/2021/10/22/2139/img/footer-logo.png">
</head>

<body>
    <center>
        <img id="lightShotLogo" src="//st.prntscr.com/2021/10/22/2139/img/footer-logo.png">
        <h1 id="main_heading">LightShot Image Viewer</h1>
        <h3>Press the button to see random image.</h3>

        <form action="" method="POST">
            <input class="form_input" type="text" hidden="true" value="generate">
            <input class="form_input" type="submit" value="View Image">
        </form>
    </center>
</body>

</html>