<h1>Users List</h1>

@foreach ($users as $key => $user)
    <a href="{{ route('admin.users.show', $user['id']) }}">{{ $user['name'] }}</a> <br>
@endforeach