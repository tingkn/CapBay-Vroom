<!DOCTYPE html>
<html>
<head>
    <title>Edit Registration</title>
    <link rel="stylesheet" href="/css/style.css">
<header>
    <nav>
        <ul>
            <li><a href="/" class="logo">CapBay Auto</a></li>
        </ul>
    </nav>
</header>
</head>
<body class="edit">
    <h1>Edit Registration</h1>

    <form method="POST" action="{{ route('reglist.update', $registration->id) }}">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $registration->name }}" readonly>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $registration->email }}" readonly>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ $registration->phone }}" readonly>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ $registration->address }}" readonly>

        <label for="preferred_date">Preferred Date:</label>
        <input type="date" id="preferred_date" name="preferred_date" value="{{ $registration->preferred_date }}" readonly>

        <label for="preferred_time">Preferred Time:</label>
        <input type="time" id="preferred_time" name="preferred_time" value="{{ $registration->preferred_time }}" readonly>

        <label for="down_payment">Down Payment (%):</label>
        <input type="text" id="down_payment" name="down_payment" value="{{ $registration->down_payment }}">

        <label for="purchase_status">Purchase Status:</label>
        <select id="purchase_status" name="purchase_status">
            <option value="In progress" {{ $registration->purchase_status === 'In progress' ? 'selected' : '' }}>In progress</option>
            <option value="Canceled" {{ $registration->purchase_status === 'Canceled' ? 'selected' : '' }}>Canceled</option>
            <option value="Completed" {{ $registration->purchase_status === 'Completed' ? 'selected' : '' }}>Completed</option>
        </select>

        <label for="loan_amount">Loan Amount:</label>
        <input type="number" id="loan_amount" name="loan_amount" value="{{ $registration->loan_amount }}">

        <button type="submit">Update</button>
        <a href="{{ route('reglist.index') }}">Back</a>
    </form>
</body>
</html>
