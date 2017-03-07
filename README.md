# Add suscribers to your Mailchimp or Mailrelay accounts using PHP / Curl

##Using Mailchimp

### 1 - Configure your API credentials and List ID

```
//Mailchimp API credentials
var $login = '{your-beautifull-mailchimp-user}';
var $key = '{your-beautifull-mailchimp-api-key}';
var $url = '{your-beautifull-mailchimp-api-url}';

//List ID
var $list = '{your-beautifull-mailchimp-list-id}';

```

### 2 - Call class and function "add"

```
$mailchimpClass = new Mailchimp();

//Send Email, Name and Lastname
$response = $mailchimpClass->add( "john-doe@gmail.com", "John", "Doe" );

```

##Using Mailrelay


### 1 - Configure your API credentials

```
//Mailrelay API credentials
var $key = '{your-beautifull-mailrelay-api-key}';
var $url = '{your-beautifull-mailrelay-api-url}';

```

### 2 - Call class and function "add"

```
$mailrelayClass = new Mailrelay();

//Send Email, Name and Lastname
$response = $mailrelayClass->add( "john-doe@gmail.com", "John", "Doe" );

```


