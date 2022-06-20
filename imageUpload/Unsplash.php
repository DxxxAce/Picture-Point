<?php

            $apiAccess = "dD97ZNnvP8Ea0yhdP2hwfuY_19fYOo7GD7DWPlakgno";
            $apiSecret = "BuYoliikwTLPL8Y6tELrer5f9QeW-5r216Tn5AaQJSA";

           $username = $_POST['unspUsername'];

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

            foreach($resultcurl as $link){
                $ch = curl_init($link);
                mkdir('/Web-Project/imageUpload/uploads/'.$username);
                $fp = fopen('/Web-Project/imageUpload/uploads/'.$username, 'wb');
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
    /*
     $url = "https://api.unsplash.com/users/josephm82/photos";

     $params = array(
         'client_id'=> $apiAccess,
         'per_page' => 3,
         'orientation' => 'portrait',
         'page' => 1
     );

     $curl = curl_init($url);
     curl_setopt($curl, CURLOPT_POST, true);
     curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
     curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($curl, CURLOPT_PROXY_SSL_VERIFYPEER, false);
     $result = curl_exec($curl);
     curl_close($curl);

     var_dump($result);*/



//var_dump($manage);

}
