<?php
/*
PHP CLASS: Mailrelay API connection
--------------------------------------
By David Armento
www.davidarmento.com
info@davidarmento.com
*/

class Mailrelay {

    //Mailrelay API credentials
    var $key = '{your-beautifull-mailrelay-api-key}';
    var $url = '{your-beautifull-mailrelay-api-url}';
	
    function add( $email, $name='', $surname='' ) {

        $curl = curl_init($this->url);

        $postData = array(
            'function' => 'addSubscriber',
            'apiKey' => $this->key,
            'email' => $email,
            'name' => $name.' '.$surname,
            'groups' => array(
                2
            )
        );

        $post = http_build_query($postData);

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        $json = curl_exec($curl);

        if ($json === false) {
            $result = false;
        }
        else {
            $result = json_decode($json);
        }

        return $result;
    }
}
?>
