<form action="{{ route('products.update',[$product->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $product->name }}"><br><br>
    <textarea name="description">{{ $product->description }}</textarea><br><br>
    <input type="submit" name="submit" value="submit">
</form>
