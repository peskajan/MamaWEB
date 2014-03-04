<!DOCTYPE html>
<html>
    <head>
        <meta charset="CP1250">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/icons/title-icon.png">

        <title>Kontakty | Jana Budková | Líčení | Praha, Slaný a okolí</title>

        <!-- Bootstrap core CSS -->
        <link href="/js/libs/twitter-bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/css/lightbox.css" rel="stylesheet"/>
        <link href="/css/main.css" rel="stylesheet">
        <script src="/js/libs/jquery/jquery.js"></script>
        <script src="/js/libs/modernizr/modernizr.min.js" rel="stylesheet"></script>
        <script src="/js/libs/twitter-bootstrap/js/bootstrap.js"></script>
        <script src="/js/libs/holder.js"></script>
        <script src="/js/libs/lightbox-2.6.min.js"></script>
        <script src="/js/main.js"></script>
        <script src="/js/contact.js" rel="stylesheet"></script>
    </head>
    <!-- NAVBAR
    ================================================== -->
    <body>
        <?php
        include "header.php";
        ?>

        <div id="content" class="main_content container">
            <h2 class="page-heading">Kontakty</h2>
            <p class="lead">V případě, že máte zájem o mé služby a chtěli byste si domluvit termín nebo máte jakýkoliv dotaz, neváhejte mě kontaktovat buď přímo:</p>
            <table class="afterlead">
                <tr><td>Jana Budková</td></tr>
                <tr><td><a href="tel:+420 736 651 141" target="_top"><img class="contact-icon" src="/images/phone.png" alt="facebook"/>+420 736 651 141</a></td></tr>
                <tr><td><a href="mailto:budkova.jana@email.cz"><img class="contact-icon" src="/images/mail.png" alt="facebook"/>budkova.jana@email.cz</a></td></tr>
                <tr><td><a title="Líčení, vizážistika - Jana Budková - Facebook" href="https://www.facebook.com/pages/Jana-Budkov%C3%A1-viz%C3%A1%C5%BEistka-a-kosmetick%C3%A1-poradkyn%C4%9B/277499939054552?fref=ts" target="_top">
                            <img class="contact-icon" src="/images/fb.png" alt="facebook"/>Jana Budková - vizážistka</a></td></tr>
            </table>

            <p class="lead">nebo pomocí kontaktního formuláře:</p>
            <div id="contact-form">
                <?php
                //init variables
                $returned_data = array();
                $isReturn = false;

                if (isset($_SESSION['cf_returndata'])) {
                    $returned_data = $_SESSION['cf_returndata'];
                    $isReturn = true;
                }
                ?>
                <ul id="errors" class="<?php echo ($isReturn && !$returned_data['form_ok']) ? 'visible' : ''; ?>">
                    <li id="info">Objevily se potíže při odesílání Vašeho dotazu:</li>
                    <?php
                    if (isset($returned_data['errors']) && count($returned_data['errors']) > 0) :
                        foreach ($returned_data['errors'] as $error) :
                            ?>
                            <li><?php echo $error ?></li>
                            <?php
                        endforeach;
                    endif;
                    ?>
                </ul>
                <p id="success" class="<?php echo ($isReturn && $returned_data['form_ok']) ? 'visible' : ''; ?>">Vaše zpráva byla odeslána, děkuji. Ozvu se Vám hned, jak to bude možné.</p>
                <form method="post" action="/process-contact/">
                    <label for="name">Jméno: <span class="required">*</span></label>
                    <input type="text" id="name" name="name" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['name'] : '' ?>" placeholder="Vaše jméno a příjmení" required />

                    <label for="email">Email: <span class="required">*</span></label>
                    <input type="email" id="email" name="email" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['email'] : '' ?>" required />

                    <label for="telephone">Telefon: </label>
                    <input type="tel" id="telephone" name="telephone" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['telephone'] : '' ?>" />

                    <label for="subject">Předmět: <span class="required">*</span></label>
                    <input type="text" id="subject" name="subject" value="<?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['subject'] : '' ?>" required />

                    <label for="message">Zpráva: <span class="required">*</span></label>
                    <textarea id="message" name="message" placeholder="Zadejte Váš dotaz" required><?php echo ($isReturn && !$returned_data['form_ok']) ? $returned_data['posted_form_data']['message'] : '' ?></textarea>
                    <p id="req-field-desc"><span class="required">*</span> označuje povinné položky.</p>

                    <input type="submit" value="Odeslat" id="submit-button" class="btn btn-lg btn-primary" >
                    <span id="loading"></span>

                </form>
                <?php unset($_SESSION['cf_returndata']); ?>
            </div>
        </div>
    </body>
</html>
