1 <!DOCTYPE html>
2 <html>
3 <head>
4     <title>My Recipes</title>
5 </head>
6 <body>
7     <h1>My Recipes</h1>
8     
9     @foreach($recipes as $recipe)
10         <div>
11             <h2>{{ $recipe->title }}</h2>
12             <p>{{ $recipe->content }}</p>
13         </div>

            <form action="/recipes/{{ $recipe->id }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
            </form>
14     @endforeach
15 </body>
16 </html>