<?php

if (isset($_POST)) {

    //form validation vars
    $formok = true;
    $errors = array();

    //sumbission data
    $ipaddress = $_SERVER['REMOTE_ADDR'];
    $date = date('d/m/Y');
    $time = date('H:i:s');

    //form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //validate form data
    //validate name is not empty
    if (empty($name)) {
        $formok = false;
        $errors[] = "Nezadali jste Vaše jméno";
    }

    //validate email address is not empty
    if (empty($email)) {
        $formok = false;
        $errors[] = "Nezadali jste Váši emailovou adresu";
        //validate email address is valid
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $formok = false;
        $errors[] = "Nezadali jste platnou emailovou adresu";
    }

    //validate message is not empty
    if (empty($message)) {
        $formok = false;
        $errors[] = "Nezadali jste obsah Vašho dotazu";
    }

    //send email if all is ok
    if ($formok) {
        $headers = "From: {$email}" . "\r\n";
        $headers .= 'Content-type: text/html; charset=windows-1250' . "\r\n";

        $emailbody = "<p>Obdrželi jste novou zprávu/dotaz z vašich stránek dne {$date} v {$time}</p>
					  <p><strong>Jméno: </strong> {$name} </p>
					  <p><strong>Email: </strong> {$email} </p>
					  <p><strong>Telefon: </strong> {$telephone} </p>
					  <p><strong>Pøedmìt: </strong> {$subject} </p>
					  <p><strong>Zpráva: </strong> {$message} </p>";

        mail("budkova.jana@email.cz", "Líèení pro tebe - {$subject}", $emailbody, $headers);
    }

    //what we need to return back to our form
    $returndata = array(
        'posted_form_data' => array(
            'name' => $name,
            'email' => $email,
            'telephone' => $telephone,
            'subject' => $subject,
            'message' => $message
        ),
        'form_ok' => $formok,
        'errors' => $errors
    );


    //if this is not an ajax request
    if (empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest') {
        //set session variables
        session_start();
        $_SESSION['cf_returndata'] = $returndata;

        //redirect back to form
        header('location: ' . $_SERVER['HTTP_REFERER']);
    }
}
