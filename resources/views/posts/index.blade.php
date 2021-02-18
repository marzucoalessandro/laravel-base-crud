<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/app.css">
    <title>Posts</title>
  </head>
  <body>
    <h1>Tabella dei Post</h1>

    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>title</th>
          <th>body</th>
        </tr>
      </thead>
      <tbody>@foreach($posts as $item)
        <tr>
          <td> {{$item->id}}</td>
          <td> {{$item->title}}</td>
          <td> {{$item->body}}</td>
        </tr>
      </tbody>@endforeach
    </table>
  </body>
  </html>
