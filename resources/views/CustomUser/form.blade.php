<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>
<body>
    
    <form action="{{route('user.save')}}" method="POST">
        @csrf
        <label>name:</label><br>
        <input type="text" name="username" required><br>

        <label>email:</label><br>
        <input type="email" name="email" required><br>
        
        <label>password:</label><br>
        <input type="password" name="password" required><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>