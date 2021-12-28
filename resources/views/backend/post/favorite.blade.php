<table border="1px">
    <a href="{{route('posts.list')}}">Quay lại</a>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Content</th>
            <th>Quantity</th>
            <th>Action</th>
            </tr>
    </thead>
    @if(count($favorites) > 0)
    @foreach($favorites as $favorite)
    <tr>
        <td>{{ $favorite["id"] }}</td>
        <td>{{ $favorite["title"] }}</td>
        <td>{{ $favorite["content"] }}</td>
        <td>{{ $favorite["quantity"] }}</td>
        <td><a href="{{route('posts.deleteFavorite',$favorite["id"])}}">Delete</a></td>
    </tr>
    @endforeach
    @else
        <tr>
            <td colspan="5">Chưa có mục yêu thích nào</td>
        </tr>

    @endif

</table>
