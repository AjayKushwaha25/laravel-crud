<table border="1" cellspacing="2" cellpadding="2">
    <tr>
        <td>Name</td>
        <td>Description</td>
        <td>Action</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>
                <a href="{{ route('products.edit', [$product->id]) }}">Edit</a> |


                <form action="{{ route('products.destroy', [$product->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" name="submit" value="Delete">
                </form>
            </td>
        </tr>
    @endforeach
</table>
