<?php

class Model_Mail extends Model
{
    public function get_result($mail = null, $name = null, $title = null, $text = null)
    {
        $result = "";
        $good = true;
        
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $result .= 'Ошибка введения почты!</br>' . PHP_EOL;
            $good = false;
        }

        if (empty(trim($name))) {
            $result .= 'Вы не ввели имя!</br>' . PHP_EOL;
            $good = false;
        }

        if (empty(trim($title))) {
            $result .= 'Вы не задали тему!</br>' . PHP_EOL;
            $good = false;
        }

        if (empty(trim($text))) {
            $result .= 'Вы не написали сообщение!</br>' . PHP_EOL;
            $good = false;
        }

        if ($good && mail($mail, trim($title), trim($text))) {
            $result = 'Вам было отправлено сообщение от пользователя: ' . $name . '.</br>На почту: (' . $mail . ').</br> Тема сообщения: ' . $title . '. </br>Текст сообщения: ' . $text;
        }
        
        
        
        return $result;
    }
}