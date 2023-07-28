
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif



<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}"><br><br>
    <textarea name="description">{{ old('description') }}</textarea><br><br>
    <input type="submit" name="submit" value="submit">
</form>
