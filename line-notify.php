 <?php 


    $header = "Testing Line Notify";
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $message = $header.
                "\n". "ชื่อจริง: " . $firstname;

    if (isset($_POST["submit"])) {
        if ( $firstname <> "" ||  $lastname <> "" ||  $phone <> "" ||  $email <> "" ) {
            sendlinemesg();
          
            $res = notify_message($message);
          
        } else {
            
        }
    }

    function sendlinemesg() {
		// LINE LINE_API https://notify-api.line.me/api/notify
		// LINE TOKEN mhIYaeEr9u3YUfSH1u7h9a9GlIx3Ry6TlHtfVxn1bEu แนะนำให้ใช้ของตัวเองนะครับเพราะของผมยกเลิกแล้วไม่สามารถใช้ได้
        define('LINE_API',"https://notify-api.line.me/api/notify");
        define('LINE_TOKEN',"rwHEtj1TyUMegZ5sJdDYCxBfTk0INwpKGxz6HVACxN5");

        function notify_message($message) {
            $queryData = array('message' => $message);
            $queryData = http_build_query($queryData,'','&');
            $headerOptions = array(
                'http' => array(
                    'method' => 'POST',
                    'header' => "Content-Type: application/x-www-form-urlencoded\r\n"
                                ."Authorization: Bearer ".LINE_TOKEN."\r\n"
                                ."Content-Length: ".strlen($queryData)."\r\n",
                    'content' => $queryData
                )
            );
            $context = stream_context_create($headerOptions);
            $result = file_get_contents(LINE_API, FALSE, $context);
            $res = json_decode($result);
            return $res;
        }
    }


?>