<form action="mail/result" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
    <p>E-mail:<br> <input name="mail" type="email" ></p>
    <p>Имя:<br> <input name="name" type="text" ></p>
    <p>Тема сообщения: <br><input name="title" type="text" size="64" ></p>
    <p>Текст сообщения:<br>
        <textarea name="text" rows="5" cols="50">
</textarea></p>
    <p><input type="submit" value="Сохранить"></p>
</form>