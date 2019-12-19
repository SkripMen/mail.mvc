<?php

class Model_Mail extends Model
{
    public function get_result($mail = null, $name = null, $title = null, $text = null)
    {
        $data = 'Всё не норм';
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $data = 'Ошибка введения почты';
            return $data;
        }

        if (empty($name)) {
            $data = 'Вы не ввели имя';
            return $data;
        }

        if (empty($title)) {
            $data = 'Вы не задали тему';
            return $data;
        }

        if (empty($text)) {
            $data = 'Вы не написали сообщение';
            return $data;
        }

        if (mail($mail, trim($title), trim($text))) {
            $data = 'Вам было отправлено сообщение от пользователя: ' . $name . '. На почту: (' . $mail . ') Тема сообщения: ' . $title .
                '. Текст сообщения: ' . $text;
        }
        return $data;
    }
}