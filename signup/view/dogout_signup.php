<?php
session_start();

if(!empty($_POST)){
  //エラー項目の確認
  if($_POST['username'] == ''){
    $error['username'] = 'blank';
  }
  if($_POST['email'] == ''){
    $error['email'] = 'blank';
  }
  if(strlen($_POST['password']) < 6){
    $error['password'] = 'length';
  }
  if($_POST['password'] == ''){
    $error['password'] = 'blank';
  }
 
  if(empty($error)){
    $_SESSION['signup'] = $_POST;
    header('Location: /signup/view/signup_confirm.php');
    exit();
  }
}

//rewrite
if($_REQUEST['action'] ==='rewrite'){
  $_POST = $_SESSION['signup'];
}

?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset = "utf-8">
        <title>
            sign_up
        </title>
    </head>
    <body>
        <form action="" method="post">
            username<input type="text" name="username"
            value="<?php echo htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8'); ?>">
            <?php if(!empty($error['username']) && $error['username'] === 'blank'): ?>
            <p><font color="red">* ユーザー名を入力してください</font></p>
            <?php endif; ?>
            password<input type="password" name="password">
            <?php if(!empty($error['password']) && $error['password'] ==='blank'): ?>
            <p><font color="red">*パスワードを入力してください</font></p>
            <?php endif; ?>
            <?php if(!empty($error['password']) && $error['password']==='length'): ?>
            <p><font color="red">*パスワードは6文字以上で入力してください</font> </p>
            <?php endif; ?>
            mail<input type="email" name="email"
            value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8'); ?>">
            <?php if(!empty($error['email']) && $error['email'] === 'blank'): ?>
             <p><font color="red">* メールアドレスを入力してください</font></p>
             <?php endif; ?>
             <?php if(!empty($error['email']) && $error['email'] == 'duplicate'): ?>
             <p><font color="red">* 指定されたメールアドレスは既に登録されています</font></p>
             <?php endif; ?>
             <input type="submit" value="confirm">
            
        </form>
    </body>
</html>