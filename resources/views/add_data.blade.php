<div>

@if(session('message'))
    <h1>{{session('message')}}</h1>
@endif


    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
     <h1>this is the add data page</h1>
     <form action="/data" method="post">
        @csrf
        <input type="text" name="email" placeholder="email"><br>
        <input type="text" name="username" placeholder="username"><br>
        <input type="text" name="number" placeholder="number"> <br>
        <input type="password" name="password" placeholder="password"> <br>
        <button type="submit">submit</button>




        <div>

        <h2>oif you wanted to check data go there</h2>
            <a href="/data_list">cheak data</a>
        </div>
</div>
