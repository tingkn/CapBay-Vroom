<!DOCTYPE html>
<html>
<head>
    <title>Registration List</title>
    <link rel="stylesheet" href="css/style.css">
<header>
    <nav>
        <ul>
            <li><a href="/" class="logo">CapBay Auto</a></li>
        </ul>
    </nav>
</header>
</head>
<body>
    <div class="content">
        
        <h1>Registration List</h1>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form class="search" action="{{ route('reglist.index') }}" method="GET">
            <input type="text" class="form-control" id="search" name="search" placeholder="Search by name or ID">
        </form>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Down Payment (%)</th>
                    <th>Eligibility
                        <a class="sort-link" href="{{ route('reglist.index', ['sort' => 'eligible']) }}">&#x2191;</a>
                        <a class="sort-link" href="{{ route('reglist.index', ['sort' => 'not-eligible']) }}">&#x2193;</a>
                    </th>
                    <th>Purchase Status</th>
                    <th>Loan Amount (RM)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($registrations && $registrations->count() > 0)
                    @foreach($registrations as $registration)
                    <tr>
                        <td>{{ $registration->id }}</td>
                        <td>{{ $registration->name }}</td>
                        <td>{{ $registration->down_payment }}</td>
                        <td class="{{ $registration->eligibility ? 'eligible' : 'not-eligible' }}">
                            {{ $registration->eligibility ? 'Eligible' : 'Not Eligible' }}
                        </td>
                        <td>{{ $registration->purchase_status }}</td>
                        <td>{{ $registration->loan_amount }}</td>
                        <td>
                            <a class="sort-link" href="{{ route('reglist.edit',$registration->id) }}">View Details</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="7">No registrations found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
        <div class="pagination-container">
            {{ $registrations->links() }}
        </div>
    </div>
    <footer>
        <p>&copy; 2023 CapBay Auto. All rights reserved.</p>
    </footer>
</body>
</html>
