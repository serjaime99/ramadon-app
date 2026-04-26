<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Recipe</title>
</head>
<body>
  1 <h1>Edit Recipe</h1>
  2 <form action="/recipes/{{ $recipe->id }}" method="POST">
  3     @csrf
  4     @method('PUT')
  5     <input type="text" name="title" value="{{ $recipe->title }}">
  6     <textarea name="content">{{ $recipe->content }}</textarea>
  7     <button type="submit">Update Recipe</button>
  8 </form>
</body>
</html>