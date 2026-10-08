<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Clinic Management System')</title>
    <style>
        :root {
            --bg: #f4f7fb;
            --card: #ffffff;
            --primary: #2d6cdf;
            --primary-dark: #214fa8;
            --text: #1f2937;
            --muted: #6b7280;
            --border: #dfe7f5;
            --danger: #b42318;
            --success: #1d7a46;
            --warning: #f5a623;
            --shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        a {
            text-decoration: none;
            color: var(--primary);
        }

        .topbar {
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            box-shadow: 0 2px 8px rgba(15, 23, 42, 0.03);
        }

        .topbar-inner {
            max-width: 1100px;
            margin: 0 auto;
            padding: 18px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .brand {
            font-size: 1.6rem;
            font-weight: bold;
            color: var(--text);
        }

        .nav {
            display: flex;
            gap: 16px;
            align-items: center;
        }

        .nav a {
            padding: 8px 12px;
            border-radius: 8px;
            color: var(--text);
            font-weight: 600;
        }

        .nav a:hover {
            background: #eef4ff;
        }

        .container {
            max-width: 1100px;
            margin: 32px auto;
            padding: 0 20px 40px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 14px;
            box-shadow: var(--shadow);
            padding: 24px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        h1,
        h2,
        h3 {
            margin-top: 0;
        }

        .btn {
            display: inline-block;
            border: none;
            border-radius: 10px;
            padding: 10px 16px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.2s ease;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: var(--primary-dark);
        }

        .btn-secondary {
            background: #eef2f7;
            color: var(--text);
        }

        .btn-danger {
            background: var(--danger);
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 12px;
        }

        th,
        td {
            border-bottom: 1px solid var(--border);
            padding: 12px 10px;
            text-align: left;
            vertical-align: middle;
        }

        th {
            background: #f8fafc;
            color: var(--text);
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: wrap;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        label {
            font-weight: 600;
            color: var(--text);
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid var(--border);
            border-radius: 8px;
            font-size: 1rem;
            background: #fff;
            color: var(--text);
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .form-actions {
            margin-top: 24px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .alert {
            padding: 14px 16px;
            border-radius: 10px;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .alert-success {
            background: #eafaf1;
            color: var(--success);
            border: 1px solid #cfead9;
        }

        .alert-error {
            background: #fff2f1;
            color: var(--danger);
            border: 1px solid #f5c7c2;
        }

        .alert-error ul {
            margin: 8px 0 0 18px;
        }

        .empty {
            color: var(--muted);
            padding: 18px 0;
        }

        .error-message {
            color: var(--danger);
            font-size: 0.9rem;
            margin-top: -6px;
        }

        .detail-card {
            background: #f9fbff;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 18px;
        }

        .detail-card p {
            margin: 10px 0;
        }

        .detail-card strong {
            display: inline-block;
            width: 160px;
        }
    </style>
</head>

<body>
    <header class="topbar">
        <div class="topbar-inner">
            <div class="brand">Clinic Management System</div>
            <nav class="nav">
                <a href="{{ route('patients.index') }}">Patients</a>
                <a href="{{ route('appointments.index') }}">Appointments</a>
            </nav>
        </div>
    </header>

    <main class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>

</html>