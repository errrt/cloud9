<?php
/*
*  ログイン済みユーザのホームページ
*
*  セッションの仕組み理解を優先しているため、本来必要な処理も省略しています
*/
// セッション開始
session_start();
// セッション変数からuser_id取得
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
} else {
  // 非ログインの場合、ログインページへリダイレクト
  header('Location: /entry/dugout_entry.php');
  exit;
}
// ユーザ名の取得（本来、データベースからユーザIDに応じたユーザ名を取得しますが、今回は省略しています）
$data[0]['user_name'] = '';
// ユーザ名を取得できたか確認
if (isset($data[0]['user_name'])) {
  $user_name = $data[0]['user_name'];
} else {
  // ユーザ名が取得できない場合、ログアウト処理へリダイレクト
  header('Location: /entry/logout.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang = "ja">
    <meta charset ="UTF-8">
    <title>dugout</title>
    <link rel="stylesheet" href="prd.css">
    <link rel="stylesheet" href="top.css">
</html>
<body>
    <header roll="header">
        <div id="header_inner">
        <div id="logo">
        <h1 id="top_logo">dugout</h1>
        </div>
        </div>
    </header>
    <div id="top_wrapper">
    <content roll="top_content">
        <div id="top_search">
            <form>
                <input type="text" name="search" placeholder="search">
                <input type="submit" value="Submit">
            </form>
        </div>
        <div id ="top_prds">
            <ul>
                <li>
                    <a href="#"><img src="" alt="prds"></a>
                </li>
                <li>
                    <a href="#"><img src="" alt="prds"></a>
                </li>
                <li>
                    <a href="#"><img src="" alt="prds"></a>
                </li>
                <li>
                    <a href="#"><img src="" alt="prds"></a>
                </li>
            </ul>
        </div>
    </content>
    </div>
    
</body>