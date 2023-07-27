<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name"><br><br>
    <textarea name="description"></textarea><br><br>
    <input type="submit" name="submit" value="submit">
</form>
