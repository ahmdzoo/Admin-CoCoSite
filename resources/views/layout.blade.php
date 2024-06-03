<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
</head>
<body>
    <header>
        <h1>My Application</h1>
        <nav>
            <ul>
                <li><a href="{{ route('transactions.index') }}">Transactions</a></li>
                <li><a href="{{ route('users.index') }}">Users</a></li>
                <!-- Link navigasi lainnya -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
