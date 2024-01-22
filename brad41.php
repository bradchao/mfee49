<form action='brad42.php' method="post"
    enctype="multipart/form-data" onsubmit="return false;">
    Account: <input name='account' onblur="return checkAccount();"/>
    <span id='mesg'></span><br />
    Password: <input type="password" name='passwd' /><br />
    Name: <input name='name' /><br />
    Icon: <input type="file" name="icon" /><br />
    <input type="submit" value='Register' />
</form>