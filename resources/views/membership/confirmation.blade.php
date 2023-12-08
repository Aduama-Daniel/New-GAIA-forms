<!-- resources/views/membership/confirmation.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Confirmation</title>
</head>
<body>

<h1>Confirmation Page</h1>

@if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
@endif

<!-- You can customize this view based on your needs -->

</body>
</html>
