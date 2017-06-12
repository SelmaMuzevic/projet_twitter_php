<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet Twitter</title>
</head>
<body>
    <?php
    include_once("tweet.php");
$instanceTweet = new tweet();

$tweets = [
    ['pseudo'=> 'test',
	'message' => 'mon mesage de test',
	'avatar' => 'avatar.jpg',
	'retweets' => 10,
	'likes' => 5,
	'date' => '12-06-2017'],
    ['pseudo' => 'test2',
	'message' => 'mon mesage de test2',
	'avatar' => 'avatar.jpg',
	'retweets' => 2,
	'likes' => 14,
	'date' => '12-06-2017'],
	['pseudo' => 'test3',
	'message' => 'mon mesage de test3',
	'avatar' => 'avatar.jpg',
	'retweets' => 4,
	'likes' => 2,
	'date' => '12-06-2017']
	];

    foreach($tweets as $tweet) {
	    echo '<section class="tweet">';
	    echo '<h2 class="pseudo">' . $tweet['pseudo'] . '</h2>';
	    echo '<img class="avatar" src="images/' . $tweet['avatar'] . '/>'; 
	    echo '<p class="message">' . $tweet['message'] . '</p>';
	    echo '<p class="infos">Retweets : ' . $tweet['retweets'] .
	            ' Likes : ' . $tweet['likes'] . '</p>';
	    echo '<p class="date">' . $tweet['date'] . '</p>';
	    echo '</section>';
	            
	    }
    ?>
</body>
</html>