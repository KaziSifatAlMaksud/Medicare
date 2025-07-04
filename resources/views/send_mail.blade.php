<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        img {
            display: block; /* Prevents extra space below the image */
        }
    </style>
</head>
<body>
    <div style="text-align: left; padding: 20px;">
        <img src="{{ url('/images/upload/66d962af6670f.png') }}" alt="Company Logo" style="max-height: 150px; width: auto;"/>
    </div>
    <div style="padding: 20px;">
        {!! clean($content) !!}
    </div>
</body>
</html>
