<!DOCTYPE html> 
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>ccQuotes PHP</title>
    </head>
    <body>
	<?php
// Start of reference code used from Professor Wergeles lecture video
	$ccQuotes = array();
	$ccQuotes[] = 'We as Evans Scholars, strive for ideals of community leadership - achieved not necessarily through popularity, but through character.';
	$ccQuotes[] = 'We cherish the ability to set aside pleasurable activities until the necessary ones are accomplished.';
	$ccQuotes[] = 'We strive for group unity and loyalty through an interaction and appreciation of varied backgrounds and personalities.';
	$ccQuotes[] = 'We strive for public esteem based upon the demonstrated ability to achieve and maintain positions of respect in our community.';
	$ccQuotes[] = 'We represent an educational institution seeking to teach men and women to live and work with each other and to instill in them the ability to embrace individual differences and to respect individual freedoms.';
    $ccQuotes[] = 'Personal growth is our goal; group living is our means.';
	// Get action
	$action = empty($_GET['action']) ? '' : $_GET['action'];

	$info = '';

	switch($action) {
		case 'getQuotes':
			$info = "Something isn't working right"; 
			break;
		default: 
            $info = $ccQuotes[array_rand($ccQuotes)];
			break;
	}

	print $info;
// End of reference code used from Professor Wergeles lecture video
	?>
    </body>
</html>