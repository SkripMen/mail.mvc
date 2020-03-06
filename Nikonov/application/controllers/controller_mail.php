<?php
class Controller_mail extends Controller
{
    function __construct()
    {
        $this->model = new Model_Mail();
        $this->view = new View();
    }

    function action_index()
    {
        $this->view->generate('mail_view.php', 'template_view.php');
    }

    function action_result()
    {
        $data = $this->model->get_result($_POST['mail'],$_POST['name'],$_POST['title'],$_POST['text']);
        $this->view->generate('result_view.php', 'template_view.php',$data);
    }

}