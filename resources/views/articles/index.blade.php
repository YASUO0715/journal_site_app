  <!DOCTYPE html>
  <html lang="ja">

  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>article index</title>
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>
      <h1>論文一覧</h1>
      <div class="article">
          <ul>
              @foreach ($articles as $article)
                  <!-- // リンク先をidで取得し名前で出力 -->
                  <li><a href="/articles/{{ $article->id }}">{{ $article->title }}</a></li>
              @endforeach
          </ul>
      </div>
      <button type=“button” onclick="location.href='/articles/create'">新規論文投稿</button>
  </body>

  </html>
