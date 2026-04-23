<form action="/recipes" method="POST">
  2     @csrf <!-- Security: Prevents cross-site request forgery attacks -->
  3     <input type="text" name="title" placeholder="Recipe Title">
  4     <textarea name="content" placeholder="Instructions"></textarea>
  5     <button type="submit">Save Recipe</button>
  6 </form>
