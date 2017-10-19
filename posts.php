<?php

$heart = 'images/heart.jpg';

$posts = [
    'post1' => [ 
	    'author' => [
	        'username' => "@Капибара_Кузьма",
		    'avatar' => 'images/ava.jpg',
		    'post_time' => date ('Y-m-d H:i:s', time () - 3600),
				    ],
	    'text' => 'Семейное фото',
	    'post_photo' => 'images/photo1.jpg',
        'like_sum' => 7777,
        'hashtags' => [
                    "#Семья", 
                    "#Отдых_Капибары",

                      ],
		       ],
    'post2' => [
	    'author' => [
	        'username' => "@Капибара_Кузьма",
		    'avatar' => 'images/ava.jpg',
		    'post_time' => date ('Y-m-d H:i:s', time () - 3600),
				    ],
	    'text' => 'Читаю книгу',
	    'post_photo' => 'images/photo2.jpg',
        'like_sum' => 7008,
        'hashtags' => [
                   "#Книга", 
                   "#Отдых_Капибары",
                   ],
		       ],
    'post3' => [
	    'author' => [
	        'username' => "@Капибара_Кузьма",
		    'avatar' => 'images/ava.jpg',
		    'post_time' => date ('Y-m-d H:i:s', time () - 3600),
				    ],
	    'text' => 'Открыл арбузный сезон',
	    'post_photo' => 'images/photo3.jpg',
        'like_sum' => 6598,
        'hashtags' => [
                   "#Арбуз", 
                   "#Отдых_Капибары",
                   ],
		       ],

   /*$post_photo = fopen ('Запись.php', 'r');
fread ($post_photo, '');
fclose ($post_photo);
$text = fopen ('Запись.php', 'r');
fread ($text, '');
fclose ($text);
   'post4' => [
	    'author' => [
	        'username' => "@Капибара_Кузьма",
		    'avatar' => 'images/ava.jpg',
		    'post_time' => date ('Y-m-d H:i:s', time () - 3600),
				    ],
	    'text' => $text,
	    'post_photo' =>  $path),
        'like_sum' => 6598,
        'hashtags' => [
                   "#Арбуз", 
                   "#Отдых_Капибары",
                   ],
                ],*/
   
		];
    

?>