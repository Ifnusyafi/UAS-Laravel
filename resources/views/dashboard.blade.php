<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Admin Page</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="/assets/css/main.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center">Charts</h2>

        <div class="row">
            <!-- Gender Chart -->
            <div class="col-md-6">
                <canvas id="genderChart" width="400" height="200"></canvas>
            </div>

            <!-- Other Stats -->
            <div class="col-md-6">
                <h4>Jumlah Pasien Berdasarkan Jenis Kelamin</h4>
                <ul>
                    <li>Male: {{ $maleCount }}</li>
                    <li>Female: {{ $femaleCount }}</li>
                </ul>
            </div>
        </div>

        <hr>

        <h4 class="mt-4">Daftar Pasien</h4>

        <!-- Tambahkan Tombol untuk Menambah Data Pasien -->
        <a href="{{ route('pasien.create') }}" class="btn btn-primary mb-3">Tambah Pasien</a>

        <!-- Tabel Daftar Pasien -->
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasien as $p)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                    <td>{{ $p->tanggal_lahir }}</td>
                    <td>{{ $p->alamat }}</td>
                    <td>{{ $p->no_hp }}</td>
                    <td>
                        <a href="{{ route('pasien.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('pasien.destroy', $p->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <!-- Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('genderChart').getContext('2d');
        var genderChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Male', 'Female'],
                datasets: [{
                    label: 'Gender Distribution',
                    data: [{{ $maleCount }}, {{ $femaleCount }}],
                    backgroundColor: ['#36A2EB', '#FF6384'],
                    hoverOffset: 4
                }]
            }
        });
    </script>

</body>

</html>
