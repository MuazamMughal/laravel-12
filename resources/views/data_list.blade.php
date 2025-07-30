<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->

    <h1>  this is the total data that you have in your db </h1>
    <table border="1">
        <tr>
            <th>email</th>
            <th>username</th>
            <th>number</th>
            <th>password</th>
            <th>manupulate</th>
            <th>Edit</th>
        </tr>
        @foreach($data as $key=>$value)
            <tr>
                <td>{{$value->email}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->number}}</td>
                <td>{{$value->password}}</td>
                <td><a href="/delete/{{$value->id}}">delete</a></td>
                <td><a href="/edit/{{$value->id}}">edit</a></td>
            </tr>
        @endforeach

        <div>

</div>
<div>
    @if(session('deletemessage'))    
        <h1>{{session('deletemessage')}}</h1>
    @endif
</div>
<div>   
<h2>oif you wanted to check data go there</h2>
<a href="/data1">Add data</a>
</div>
