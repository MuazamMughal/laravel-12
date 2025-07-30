<div>
  
<!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

<h1>this is the edit page</h1>
<form action="/edit_data" method="post">
    @csrf
    <input type="text" name="email" placeholder="email" value="{{$data->email}}"><br>
    <input type="text" name="username" placeholder="username" value="{{$data->username}}"><br>
    <input type="text" name="number" placeholder="number" value="{{$data->number}}"> <br>
    <input type="password" name="password" placeholder="password" value="{{$data->password}}"> <br>
    <button type="submit">submit</button>

    <div>
        <h2>oif you wanted to check data go there</h2>
            <a href="/data_list">cheak data</a>
    </div>
</div>
