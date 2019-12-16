<?php
class Model_Mail extends Model
{
    public function get_data()
    {
        $data = 'Всё не норм';
        if(mail ( $_POST['mail'] , trim($_POST['title']) , trim($_POST['text'])))
        {
            $data = 'Вам было отправлено сообщение от пользователя '.$_POST['name'].' ('.$_POST['mail'].'). <fieldset>
<legend>Тема сообщения: '.$_POST['title'].'</legend>
'.$_POST['text']. ' </fieldset>';
        }
        return $data;
    }
}