@extends("main")

@section("content")
    <div class="center-table">
        <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Created</th>
                <th>Active</th>
                </th>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
