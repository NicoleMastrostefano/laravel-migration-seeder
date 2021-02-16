<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($articles as $item)
      <small>{{ $item->id }}</small>
      <h2>{{ $item->title }}</h2>
      <h3>{{ $item->subtitle }}</h3>
      <h4>{{ $item->author }}</h4>
      <p>{{ $item->text}}</p>
      <small>{{ $item->publication_date }}</small>
      <hr>
    @endforeach
  </body>
</html>
