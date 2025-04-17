<?php




$servername = "mysql-1ba93860-awaisbrothers6-7113.k.aivencloud.com";
$username = "avnadmin";
$password = "AVNS_pPst7COXGBBJWjoofzd";
$database = "defaultdb";
$conn = new mysqli($servername , $username , $password , $database);
if(!$conn){
    echo " CONNECTION TO DATABSE FAILED";
    
}


function sendMessage($chat_id, $text) {
    $token = '7529913637:AAFr-E6m5HRQLwhCRGUZBhT9pUfzcwRnG4Q'; // Replace with your bot token
    $url = 'https://api.telegram.org/bot' . $token . '/sendMessage';
    $data = array('chat_id' => $chat_id, 'text' => $text);
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    return $result;
}



$mess = $_POST['msg'];

$sql = "SELECT `chat_id` FROM `id`";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_row($result)) {
        $id = $row[0];
        sendMessage($id , $mess);
}

?>
