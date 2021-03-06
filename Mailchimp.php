<?php
/*
PHP CLASS: Mailchimp API connection
--------------------------------------
By David Armento
www.davidarmento.com
info@davidarmento.com
*/

class Mailchimp {

    //Mailchimp API credentials
    var $login = '{your-beautifull-mailchimp-user}';
    var $key = '{your-beautifull-mailchimp-api-key}';
    var $url = '{your-beautifull-mailchimp-api-url}';

    //List ID
    var $list = '{your-beautifull-mailchimp-list-id}';

    function add( $email, $name='', $surname='' ) {

        $ch = curl_init( $this->url . 'lists/'.$this->list.'/members/' );

        curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Authorization: ' . $this->login . ' ' . $this->key,
            )
        );

        curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
        curl_setopt( $ch, CURLOPT_TIMEOUT, 5 );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_USERAGENT, 'YOUR-USER-AGENT' );

        $data = '{
            "email_address": "'.$email.'",
            "status": "subscribed",
            "merge_fields": {
                "FNAME": "'.$name.'",
                "LNAME": "'.$surname.'"
            }
        }';

        curl_setopt( $ch, CURLOPT_POSTFIELDS, $data );

        $response = curl_exec( $ch );
        curl_close( $ch );

        return $response;
    }

}
?>
