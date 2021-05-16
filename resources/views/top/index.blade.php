<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="/css/app.css" rel="stylesheet">
    <title>paON</title>
</head>

<body>
  <header class="flex justify-between bg-gray-200 pl-8 pt-2 pb-4 h-24">
    <div class="inline-flex">
      <img class="mr-4" src="images/logo.png" alt="ロゴ">
    </div>
    <div class="flex justify-end space-x-8 pr-10 pt-6">
      <a href="join.blade.php"><img class="h-9 pr-20 pl-3" src="images/login.png">ログインする</a>
      <a href="#"><img class="h-9 pr-12 pl-2" src="images/cart.png">カートへ</a>
    </div>
  </header>
  <nav>
    <form action="" method="POST">
      <div class="grid grid-cols-6 gap-4 mt-2">
        <div class="col-start-5 col-end-6 float-left pl-52"><img class="h-6" src="images/search.png"></div>
        <p class="border"><input type="search" name="search" placeholder="検索する"></p>
      </div>
    </form>
  </nav>
<main>
</main>
  <footer class="h-20% bg-gray-300">
    <div class="text-center">&copy;2021&nbsp;yuusuke.T</div>
  </footer>
</body>
</html>