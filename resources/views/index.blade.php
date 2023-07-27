<table>
@foreach($users as $user)
<tr>
    @if($user->id==1)
    <td>Name: {{ $user->name }}</td>
    <td>Email: {{ $user->email }}</td>
    @endif
</tr>
@endforeach
</table>
