<?php

class Model_Mail extends Model
{
    public function get_result($mail = null, $name = null, $title = null, $text = null)
    {
        // $result = "";
        // $error = array();
        
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errors[] .= 'Ошибка введения почты!</br>' . PHP_EOL;
        }

        if (empty(trim($name))) {
            $errors[] .= 'Вы не ввели имя!</br>' . PHP_EOL;

        }

        if (empty(trim($title))) {
            $errors[] .= 'Вы не задали тему!</br>' . PHP_EOL;

        }

        if (empty(trim($text))) {
            $errors[] .= 'Вы не написали сообщение!</br>' . PHP_EOL;

        }

        if (empty($errors) && mail($mail, trim($title), trim($text))) {
            $result = 'Вам было отправлено сообщение от пользователя: ' . $name . '.</br>На почту: (' . $mail . ').</br> Тема сообщения: ' . $title . '. </br>Текст сообщения: ' . $text;
        }
        else{
            foreach ($errors as $value){
                echo $value;
            }
        }
        
        
        
        return $result;
    }
}