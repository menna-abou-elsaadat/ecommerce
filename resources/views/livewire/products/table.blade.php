<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td><a href="/products/{{$product->id}}/details">{{$product->name}}</a></td>
            <td>{{$product->price}}</td>
            <td><img src="{{ asset('uploads/'.$product->uuid.'/'.$product->image_name) }}" class="rounded" alt="image not found" width="50" height="50"></td>
        </tr>
        @endforeach
    </tbody>
</table>