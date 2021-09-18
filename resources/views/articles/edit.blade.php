 <!DOCTYPE html>
 <html lang="ja">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>article edit</title>
     <link rel="stylesheet" href="{{ asset('css/style.css') }}">
 </head>

 <body>
     <h1>投稿論文編集</h1>
     <!-- 更新先はitemsのidにしないと増える php artisan rote:listで確認① -->
     <form action="/articles/{{ $article->id }}" method="post">
         @csrf
         <!-- formタグはPUTやDELETEをサポートしていないため ,@ methodで指定する必要がある -->
         @method('PATCH')
         <!-- idはそのまま -->
         <input type="hidden" name="id" value="{{ $article->id }}">
         <p>
             <label for="title">論文タイトル</label>
             <input type="text" name="title" value="{{ $article->title }}">
         </p>
         <p>
             <label for="body">本文</label>
             <textarea type="text" name="body">{{ $article->body }}</textarea>
         </p>

         <input type="submit" value="更新">
     </form>
 </body>

 </html>
