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
        </tr>
        @foreach($data as $key=>$value)
            <tr>
                <td>{{$value->email}}</td>
                <td>{{$value->username}}</td>
                <td>{{$value->number}}</td>
                <td>{{$value->password}}</td>
                <td><a href="/data1">delete</a></td>
            </tr>
        @endforeach

        <div>

        <h2>oif you wanted to check data go there</h2>
            <a href="/data1">cheak data</a>
</div>
