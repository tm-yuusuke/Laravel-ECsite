<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/app.css" rel="stylesheet">
    <title>会員登録ページ</title>
</head>
<body>
  <header class="flex justify-between bg-gray-200 pl-8 pt-2 pb-4 h-24">
    <div class="inline-flex">
      <img class="mr-4" src="images/logo.png" alt="ロゴ">
    </div>
  </header>
<main>
  <div>
    <p>フォームに必要事項をご記入下さい</p>
    <dl>
      <dt>ユーザーネーム<span class="required">必須</span></dt>
      <dd>
        <input type="text" name="name" size="40" value="#">
      </dd>
      <dt>ユーザーID<span class="required">必須</span></dt>
      <dd>
        <input type="text" name="id" size="40" value="#">
      </dd>
      <dt>パスワード<span class="required">必須</span></dt>
      <dd>
        <input type="text" name="password" size="40" value="#">
      </dd>
    </dl>
  </div>
</main>
<footer class="h-20% bg-gray-300">
    <div class="text-center">&copy;2021&nbsp;yuusuke.T</div>
  </footer>
</body>
</html>