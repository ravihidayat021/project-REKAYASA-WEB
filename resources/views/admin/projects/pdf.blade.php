<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Projects</title>
</head>
<body>
    <h1>Data Projects</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Title</th>
                <th>Technology</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $index => $project)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    @if ($project->image)
                    <img src="{{ public_path('images/'.$project->image) }}" alt="{{ $project->title }}"
                        style="max-width: 100px;">
                    @else
                    <span class="text-muted">No Image</span>
                    @endif
                </td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->teknologi }}</td>
                <td>{{ Str::limit($project->description, 50) }}</td>
                <td>{{ $project->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>