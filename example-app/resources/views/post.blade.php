<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Post</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
            </tr>
        </thead>
        <tbody>

            <!-- {{ var_dump($blogs) }} -->

            @foreach ($blogs as $row)
            <tr>
                <td>{{ $row['id'] }}</td>
                <td>{{ $row['title'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>