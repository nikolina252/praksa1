@if (session('msg'))
    <div class="alert alert-success">
        {{ session('msg') }}
    </div>
@endif
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
<table >
    <tr >
        <th>Ime</th>
        <th>Prezime</th>
        <th>Telefon</th>
        <th>Password</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($users as $user)
        <tr>
            <td>{{$user->ime}}</td> 
            <td>{{$user->prezime}}</td>
            <td>{{$user->tel}}</td>
            <td>{{$user->pass}}</td>
            <td><a href="edit/{{$user->id}}">
                <button> Edit </button></a></td>
            <td><a href="delete/{{$user->id}}">
                <button> Delete </button></a></td>
        </tr>
    @endforeach
</table>


<a href="/register">
    <button> Go to register </button>
</a>