<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>test task</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body>
    <h1>Candidates List</h1>
    <table border="1">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Job title</th>
            <th>Company</th>
            <th>Start date</th>
            <th>End date</th>
        </thead>
        <tbody>
            @foreach($candidates as $candidate)
            <tr>
                <td rowspan="4">{{ $candidate->first_name }} {{ $candidate->last_name }}</td>
                <td rowspan="4">{{ $candidate->email }}</td>
                @foreach($candidate->jobs as $job)
            <tr>
                <td>{{ $job->job_title }}</td>
                <td>{{ $job->company_name }}</td>
                <td>{{ $job->started_at }}</td>
                <td>{{ $job->ended_at }}</td>
            </tr>
            @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</body>