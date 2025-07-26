<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>this is the view page which is directly open from the controller{{$name[0]}}</h1>
    <h2> so here we got the data as astring aray from the controller</h2>
    <h2> {{ $name[0]}} is the sarating words of my full name {{$name[1]}} 
        this is the prefix of my name {{$name[2]}}
    </h2>

    <!-- so herer we ding conditional renderring  -->
    <div>
     @if($name[2]== 'muaz')
        <h1>this is muaz</h1>
     @elseif($name[2]== 'mughal')
        <h1>this is mughal</h1>
     @elseif($name[2]== 'muhammad')
        <h1>this is muhammad</h1>
        @endif
</div>


      <div>
        @if(session('message'))
            <h1>{{session('message')}}</h1>
        @endif
      </div>
        <!-- then i use foreach loop to itreate all the stuff  -->
         <div class="bg-blue-500 p-4  text-white">
         @foreach($name as $key=>$value)
            <h1 class="text-white">{{$value}}</h1>
         @endforeach
        </div>
         <!-- so here we use the foreach loop to iterate the array and show the data --> 
          <div>
            @for($i=0;$i<count($name);$i++)
            <h1>{{$name[$i]}}</h1>
            @endfor
          </div>   
          <div>
            this is data that i got from session wit if condition
            @if(session('email'))
                <h1>{{session('email')}}</h1>
            @endif
            @if(session('password'))
                <h1>{{session('password')}}</h1>
            @endif
           

          <h1>
            <a href="/logout">logout</a>
          </h1>
          
          

</body>
</html>