<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      div{margin:20px;}
    </style>
  </head>

<body>
  <div>
    hellocar blade
    <br><br>
    <a href="{{route('cars.create')}}">add</a>
    <br><br>
    {{-- hell {{$name}} --}}
    <br><br>
    {{-- {{dd($data)}}<br> --}}
    {{-- {{$data['id']}} <br>
    {{$data['name']}} <br>
    {{$data['chinese']}} <br>
    {{$data['english']}} <br>
    {{$data['math']}} <br> --}}
    {{-- print_r($data); --}}
    {{-- <h1>hi ?php $name ? </h1> --}}
    {{-- <h1>hi {{$data['name']}} </h1> --}}

  {{-- 方法一 html與php分開 --}}
    <h1> hi {{$data['name']}} </h1>
    <h1> Avg => {{$data['avg']}} </h1>
  {{-- 方法二 php全部用字串表達 --}}
  <?php 
  echo "<h2>" . $data['name'] ."</h2>";
  ?>

  {{-- 平均分數 --}}
  <?php 
    $data['avg'] = ( $data['chinese'] + $data['math'] + $data['english']) /3 ;
  ?>

    <a href="{{ foute('cars.create')}}">單筆新增</a>

  </div>
</body>
</html>