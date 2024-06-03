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
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
