<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'CV')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f3f3f3;
            color: #333;
        }

        .cv-wrapper {
            max-width: 1000px;
            margin: 50px auto;
            display: flex;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        /* --- SIDEBAR --- */
        .sidebar {
            background-color: #111827;
            color: white;
            width: 35%;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .sidebar img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 4px solid #d4af37;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .sidebar h5 {
            color: #d4af37;
            font-weight: 600;
            margin-top: 20px;
            margin-bottom: 10px;
            align-self: flex-start;
        }

        .sidebar p, .sidebar strong {
            font-size: 0.9rem;
        }

        .sidebar .info-item {
            align-self: flex-start;
            margin-bottom: 8px;
        }

        /* --- CONTENT --- */
        .content {
            background-color: #fff;
            width: 65%;
            padding: 50px 60px;
        }

        .content h2 {
            font-weight: 700;
            font-size: 1.8rem;
        }

        .content p.subtitle {
            color: #666;
            margin-top: -5px;
            font-style: italic;
        }

        hr {
            width: 60px;
            border: 2px solid #d4af37;
            margin: 10px 0 25px;
        }

        .section-title {
            font-weight: 600;
            border-bottom: 2px solid #eee;
            margin-bottom: 10px;
            padding-bottom: 4px;
            color: #111827;
        }

        ul {
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div class="cv-wrapper">
        <div class="sidebar">
            @include('includes.sidebar')
        </div>
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
