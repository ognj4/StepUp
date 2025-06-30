<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageHeader')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
@include('components.navigation')
@yield('content')
@if(session('success'))
    <div id="flash-alert" class="alert alert-success mt-4 mx-auto text-center shadow" style="max-width: 500px;">
        {{ session('success') }}
    </div>

    <script>
        setTimeout(() => {
            const alertBox = document.getElementById('flash-alert');
            if (alertBox) {
                alertBox.style.transition = 'opacity 0.3s ease';
                alertBox.style.opacity = '0';
                setTimeout(() => alertBox.remove(), 500);
            }
        }, 1500);
    </script>
@endif
@include('components.footer')
</body>
</html>
