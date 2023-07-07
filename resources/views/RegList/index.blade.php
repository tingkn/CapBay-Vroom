<!DOCTYPE html>
<html>
<head>
    <title>Registration List</title>
    <!-- Add your CSS stylesheets or include a CSS file -->
</head>
<body>
    <a href="/">Home</a>
    <h1>Registration List</h1>

    @if(session('success'))
        <div style="color: green; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('reglist.index') }}" method="GET">
        <div class="form-group">
            <input type="text" class="form-control" id="search" name="search" placeholder="Search...">
        </div>
    </form>

    <table>
        <thead>
            <tr>
            <a href="{{ route('reglist.index', ['sort' => 'eligible']) }}">Sort by Eligible</a>
<a href="{{ route('reglist.index', ['sort' => 'not-eligible']) }}">Sort by Not Eligible</a>

                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Preferred Date</th>
                <th>Preferred Time</th>
                <th>Down Payment (%)</th>
                <th>Eligibility</th>
                <th>Purchase Status</th>
                <th>Loan Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
            <tr>
                <td>{{ $registration->id }}</td>
                <td>{{ $registration->name }}</td>
                <td>{{ $registration->email }}</td>
                <td>{{ $registration->phone }}</td>
                <td>{{ $registration->address }}</td>
                <td>{{ $registration->preferred_date }}</td>
                <td>{{ $registration->preferred_time }}</td>
                <td>{{ $registration->down_payment }}</td>
                <td>{{ $registration->eligibility ? 'Eligible' : 'Not Eligible' }}</td>
                <td>{{ $registration->purchase_status }}</td>
                <td>{{ $registration->loan_amount }}</td>
                <td>
                    <a href="{{ route('reglist.edit',$registration->id) }}">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $registrations->links() !!}
</body>
</html>
