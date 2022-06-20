<?php

            $apiAccess = "dD97ZNnvP8Ea0yhdP2hwfuY_19fYOo7GD7DWPlakgno";
            $apiSecret = "BuYoliikwTLPL8Y6tELrer5f9QeW-5r216Tn5AaQJSA";

           $username = $_POST['unspUsername'];

           setcookie('unspuser', $username, time()+60*60*24*6004, '/', NULL, 0);

           $photocount = 10;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.unsplash.com/users/'.$username.'/photos?per_page=&orientation=portrait&page=1&client_id='.$apiAccess);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
            }
            curl_close($ch);

            $manage = json_decode($result, true);

            for($i = 0; $i < $photocount; $i++){
                $filter1 = $manage[$i];
                $filter2 = $filter1['links'];
                $resultcurl[] = $filter2['download'];
            }

            //print_r($resultcurl);

            if(!file_exists('../Web/php/views/unsphotos/'.$username.'/')){
                mkdir('../Web/php/views/unsphotos/'.$username.'/');
            }

            foreach($resultcurl as $link){
                $fileNameNew = uniqid('', true).".png";
                $fileDestination = '../Web/php/views/unsphotos/'.$username.'/'.$fileNameNew;
                file_put_contents($fileDestination, file_get_contents($link));
            }
            header("Location: ../Web/php/public/index.php/gallery");

