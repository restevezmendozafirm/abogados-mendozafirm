<?php

if($_POST['email']) {
    $email = htmlentities($_POST['email'], ENT_QUOTES);
    $ObjCapchat = new Captcha();
    $retorno = $ObjCapchat->getCaptcha($_POST['g-recaptcha-response']);
    var_dump($_POST['g-recaptcha-response']);

    if($retorno->success == true && $retorno->score >= 0.5) {
        echo 'si';
    }else {
        echo 'no';
    }
}
class Captcha {
    public function getCaptcha($SecretKey){
        $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LcTF7wpAAAAAF1Jcy8Hj6NVpYkcl7ToA8CUgu84&response={$SecretKey}");
        $retorno = json_decode($respuesta);
        return $retorno;
    }
}
?>