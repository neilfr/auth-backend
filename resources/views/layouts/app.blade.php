<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fortify Example</title>
</head>
<body>
<div>
    <ul>
        <li>
            <form method="POST" action="{{route('logout')}}">
                @csrf
                <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();">Logout</a>
            </form>
        </li>
    </ul>
</div>
<div>
    Nav goes here for app layout
</div>
<div>{{ $slot }}</div>
</body>
</html>
