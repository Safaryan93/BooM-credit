<?php
if(!isset($_POST['name']) || !isset($_POST['phone']) || !isset($_POST['email'])) {
    header('https://boom-credit.am/fill_blanks_page.php');
}else{
    $name = $_POST['name'];
    $phon = $_POST['phone'];
    $email = $_POST['email'];
    $ashxatox = $_POST['yes_no_one'];
    $sev_cucak = $_POST['yes_no_two'];
    $gumar = $_POST['gumar'];


    $to='top_credit2021@mail.ru';
    $subject='тема сообщений';
    $massege =" անուն: ".$name."\r\n հեռ: ".$phon."\r\n գրանցված աշխատող: ".$ashxatox."\r\n սև ցուցակ: ".$sev_cucak ."\r\n գումար: ".$gumar ." դր\r\n էլ․ հասցե: ".$email;

    mail ($to, $subject, $massege);

    header('Location: https://boom-credit.am/fill_blanks_page.php');
}


?>
