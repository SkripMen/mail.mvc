<?php

class Model_Mail extends Model
{
    public function get_result($array)
    {
        $data = 'Всё не норм';
        if (!filter_var($array['mail'], FILTER_VALIDATE_EMAIL)) {
            $data = 'Ошибка введения почты';
            return $data;
        }

        if (empty($array['name'])){
            $data = 'Вы не ввели имя';
            return $data;
        }

        if (empty($array['title'])) {
            $data = 'Вы не задали тему';
            return $data;
        }

        if (empty($array['text'])) {
            $data = 'Вы не написали сообщение';
            return $data;
        }

        if (mail($array['mail'], trim($array['title']), trim($array['text']))) {
            $data = 'Вам было отправлено сообщение от пользователя: ' . $array['name'] . '. На почту: (' . $array['mail'] . ') Тема сообщения: ' . $array['title'] .
                '. Текст сообщения: ' . $array['text'];
        }
        return $data;
    }
}