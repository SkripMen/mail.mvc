<?php
class Model_Mail extends Model
{
    public function get_result($array)
    {
        $data = 'Всё не норм';
        if(mail ( $array['mail'] , trim($array['title']) , trim($array['text'])))
        {
            $data = 'Вам было отправлено сообщение от пользователя: '.$array['name'].'. На почту: ('.$array['mail'].') Тема сообщения: '.$array['title'].
                '. Текст сообщения: '.$array['text'];
        }
        return $data;
    }
}