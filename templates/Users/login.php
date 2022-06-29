<form method="POST">
    <input type="hidden" name="_csrfToken" value="<?= $this->request->getAttribute('csrfToken') ?>">

    <input type="text" name="username"/>
    <input type="password" name="password"/>
    <button type="submit">送信</button>
</form>
