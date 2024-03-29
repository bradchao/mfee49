<?php
    include 'bradapis.php';
    session_start();

    if (isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];

        $sql = 'SELECT id, account, passwd, name, icon, icontype FROM member ' . 
                'WHERE account = ?';

        $mysqli = new mysqli('localhost','root','', 'ispan', 3306);
        $mysqli->set_charset('utf8');

        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('s', $account);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows() > 0){
            $stmt->bind_result($id, $account, $hashpasswd, $name, $icon, $icontype);
            $stmt->fetch();
            if (password_verify($passwd, $hashpasswd)){
                $member = new Member($id, $account, $hashpasswd, $name,$icon, $icontype);
                $_SESSION['member'] = $member;
                header('location: main.php');
            }
        }
    }
?>
<meta charset='utf-8' />
<h1>Login</h1>
<form method="post">
    Account: <input name='account' /><br />
    Password: <input type="password" name='passwd' /><br />
    <input type="submit" value='login' />
</form>