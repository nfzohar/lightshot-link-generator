/**
 * Depending on given parameters, return random assortment of letters/numbers.
 */
function generateRandomString($length, $type) {

    var characters = '';
    var multiplier = 0;

    if ($type == "letter") {
        characters = 'abcdefghijklmnopqrstuvwxyz';
        multiplier = 100;
    } else if ($type == "number") {
        characters = '0123456789';
        multiplier = 10;
    }

    let charactersLength = characters.length - 1;
    let selectedCharacters = '';

    for (let i = 0; i < $length; i++) {

        do {
            var random_number = Math.floor(Math.random() * multiplier);
        } while (random_number > (charactersLength));

        selectedCharacters += characters[random_number];
    }
    return selectedCharacters;
}

function redirectToLightShotLink() {

    let url = "https://prnt.sc/";

    // Add random LightShot image id to link. 
    url += generateRandomString(2, 'letter');
    url += generateRandomString(4, 'number');

    // Redirect to generated link.
    window.location.href = url;
}