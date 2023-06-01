<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        label {
            display: block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Registration Form</h1>
    <h2>{{ session('message')}}</h2>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
