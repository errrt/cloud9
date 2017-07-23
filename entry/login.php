<?php
if ($_SERVER['REQUEST_METHOD'] !=='POST'){
    header('Location: /entry/dugout_entry.php');
    exit;
}

session_start();

$email = get_post_data('email');
$password = get_post_data('password');

setcookie('email', $email, time() + 60 * 60 * 24 * 365);

$data[0]['user_id'] = $user_id;

if (isset($data[0]['user_id'])){
    
  // セッション変数にuser_idを保存
  $_SESSION['user_id'] = $data[0]['user_id'];
  // ログイン済みユーザのホームページへリダイレクト
  header('Location: /dogout_top.php');
  exit;
} else {
  // ログインページへリダイレクト
  header('Location: /dogout_top.php');
  exit;
}
//POSTデータから任意データの取得
function get_post_data($key) {
  $str = '';
  if (isset($_POST[$key])) {
    $str = $_POST[$key];
  }
  return $str;
}
?>
