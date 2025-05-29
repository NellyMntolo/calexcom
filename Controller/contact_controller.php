<?php 
  include("../model/dbconfig.php");
  mysql_set_charset("utf8");
  include_once "../Mail/class.phpmailer.php";
  include_once "../Mail/class.phpmaileroauth.php";
  include_once "../Mail/class.phpmaileroauthgoogle.php";
  include_once "../Mail/class.pop3.php";
  include_once "../Mail/class.smtp.php";
  include_once "../Mail/PHPMailerAutoload.php";
  $pop = new POP3();
  //$pop3 = new pop3_class;
  $mail = new PHPMailer(true);

  session_start();
  $current_lang = $_SESSION['lang'];

    $todo='';

   //if($_SERVER["REQUEST_METHOD"] == "POST")
    //if(isset($_POST['contact_calex'])){

                        $sqlen_smtp = 'select smtp from think_master where user_n ="admin"';
                        $retvalen_smtp = mysql_query( $sqlen_smtp, $conn );
                             if(! $retvalen_smtp )
                             {
                                die('Could not get data: ' . mysql_error());
                             }
                        $rowen_smtp = mysql_fetch_array($retvalen_smtp, MYSQL_ASSOC);
                        $smtp_pass = $rowen_smtp['smtp'];
      

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['code'])  ){


      if($_POST['code'] == $_SESSION['rand_code']) {


        $name = $_POST['name'];
        $email = $_POST['email']; 
        $company = $_POST['company']; 
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $code = $_POST['code'];

        //echo $name.' <br>';
        //echo $email.' <br>';
        //echo $company.' <br>';
        //echo $subject.' <br>';
        //echo $message.' <br>';
        //echo $code.' <br>';


        $mail->IsSMTP();
try {
    //$mail->SMTPDebug = 2;     
    $mail->SMTPSecure = 'tls'; 
    $mail->SMTPAuth = true; 
    $mail->Host = "smtp.gmail.com"; 
    $mail->Port = 587; //465 587
    $mail->Username = "service@calex.com.tw";
    //$mail->Password = "1234@Nelly";
    $mail->Password = $smtp_pass;
    $mail->AddAddress('service@calex.com.tw', 'Calex'); //service@calex.com.tw
    $mail->From = 'service@calex.com.tw'; 
    $mail->SetFrom($email, 'service@calex.com.tw');
    $mail->Subject = 'From www.calex.com.tw Contact';
    $mail->AltBody = '';
    $mail->CharSet = 'UTF-8';
    $body = '<div style="font-size:17px;font-family:Georgia;color:#14695e;" accept-charset="utf-8" charset="UTF-8">
    Dear Admin,<br><br>New Contact From Your Website.</div><br><hr style="border:0;height:2px;background-image:linear-gradient(to right,rgba(0, 0, 0, 0),rgba(78, 151, 222,0.75),rgba(0, 0, 0, 0));">
    <div style="font-size:17px;font-family:Georgia;color:#14695e;" accept-charset="utf-8" charset="UTF-8">
    <br><br>Name:<br> '.$name.'
    <br><br>Email:<br> '.$email.'    
    <br><br>Company:<br> '.$company.'
    <br><br>Subject:<br> '.$subject.'
    <br><br>Message:<br> '.$message.'
    </div><hr style="border:0;height:2px;background-image:linear-gradient(to right,rgba(0, 0, 0, 0),rgba(78, 151, 222,0.75),rgba(0, 0, 0, 0));">'; // automatically
    $mail->MsgHTML($body);
    $mail->Send();
    //echo "Message Sent OK</p>\n";
    //echo " response arrived ok";
} catch ( phpmailerException $e ) {
    //echo $e->errorMessage(); 
} catch ( Exception $e ) {
    //echo $e->getMessage(); 
}


      }

    }

  //}

  
function doubleCheck(){
  global $todo;
  //echo $todo;
  //echo "<script type=\"text/javascript\">window.location.href='#check-space'</script>";
}



?>