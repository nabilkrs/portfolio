<?php
$subject  = $_POST['subject'];
$body = $_POST['message'];



echo '<script type="text/javascript">
    window.open("https://mail.google.com/mail/?view=cm&fs=1&to=nabilkrissane.225@gmail.com&su='.$subject.'&body='.$body.'");
</script>';
echo '<script type="text/javascript">
    javascript:history.go(-1);
</script>';


?>