<?php
include('src/ApiClient.php');
$insights = new SSX\API\Google\PageSpeed\ApiClient("http://google.com","AIzaSyCL5qxwBRMrzBhAvTnwRcXL_2F8NtchHRA");
echo '<pre>';//print_r();

print_r($insights->getRaw());
?>
<img src="<?php echo $insights->getScreenshot();?>" height="200">