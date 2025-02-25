<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row">
  @foreach ($viewData["users"] as $user)
  <div>
    <div>
      <img src="{{asset('images/image.png')}}">
      <div>
        <a href="{{route('user.show',['id'=>$user->id])}}">{{ $user->id }}</a>
        <p>{{ $user->username }}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

</body>
</html>