<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UNPAM - Profile Mahasiswa</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>
        body {
            background-color: #f5f6f8;
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #0d6efd;
        }

        .navbar-brand {
            font-size: 20px;
            font-weight: 500;
        }

        /* Card */
        .profile-card {
            width: 550px;
            max-width: 90%;
            margin: 25px auto 50px;
            border: none;
            border-radius: 5px;
            background-color: white;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
        }

        /* Bagian atas card */
        .profile-header {
            text-align: center;
            padding: 25px 20px 20px;
        }

        /* Foto */
        .profile-image {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid white;
            box-shadow: 0 0 0 1px #ddd;
            margin-bottom: 15px;
        }

        .profile-title {
            font-size: 21px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        /* Status */
        .status-badge {
            font-size: 12px;
            padding: 5px 10px;
            border-radius: 6px;
        }

        /* Bagian data */
        .profile-body {
            border-top: 1px solid #ddd;
            padding: 18px 30px;
        }

        .data-row {
            text-align: center;
            margin-bottom: 18px;
            font-size: 15px;
        }

        .data-row:last-child {
            margin-bottom: 0;
        }

        .data-label {
            font-weight: bold;
            margin-right: 4px;
        }

        /* Footer */
        footer {
            margin-top: auto;
            border-top: 1px solid #ddd;
            background-color: white;
            text-align: center;
            padding: 20px;
            color: #333;
            font-size: 14px;
        }

        /* Responsive */
        @media (max-width: 600px) {

            .profile-card {
                width: 90%;
            }

            .navbar-brand {
                font-size: 17px;
            }

            .profile-body {
                padding: 18px 15px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-custom navbar-dark">
        <div class="container">
            <span class="navbar-brand">
                UNPAM - Profile Mahasiswa
            </span>
        </div>
    </nav>


    <!-- CONTENT -->
    <main class="container">

        <div class="card profile-card">

            <!-- HEADER PROFILE -->
            <div class="profile-header">

                <img
                    src="{{ asset('ravi.hidayat.jpeg') }}"
                    alt="Foto {{ $mahasiswa['nama'] }}"
                    class="profile-image"
                >

                <h2 class="profile-title">
                    Profile Mahasiswa
                </h2>

                <span class="badge bg-success status-badge">
                    {{ $mahasiswa['status'] }}
                </span>

            </div>


            <!-- DATA MAHASISWA -->
            <div class="profile-body">

                <div class="data-row">
                    <span class="data-label">Nama:</span>
                    {{ $mahasiswa['nama'] }}
                </div>

                <div class="data-row">
                    <span class="data-label">NIM:</span>
                    {{ $mahasiswa['nim'] }}
                </div>

                <div class="data-row">
                    <span class="data-label">Prodi:</span>
                    {{ $mahasiswa['prodi'] }}
                </div>

                <div class="data-row">
                    <span class="data-label">Email:</span>
                    {{ $mahasiswa['email'] }}
                </div>

                <div class="data-row">
                    <span class="data-label">Kampus:</span>
                    {{ $mahasiswa['kampus'] }}
                </div>

            </div>

        </div>

    </main>


    <!-- FOOTER -->
    <footer>
        © 2026 UNPAM. All rights reserved.
    </footer>


    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>

</html>