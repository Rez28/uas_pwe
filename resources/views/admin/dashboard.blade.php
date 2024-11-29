@include('components.header') <!-- Memanggil header -->

@section('title', 'Admin Dashboard') <!-- Judul halaman -->

<!-- Sidebar -->
<div class="sidenav" id="sidebar">
    <a href="#" class="nav-item mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
            class="bi bi-speedometer2 me-2" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4z" />
            <path d="M3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707z" />
            <path
                d="M2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zM9.5 10a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H10a.5.5 0 0 1-.5-.5z" />
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A8 8 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
        </svg>
        <h5 class="nav-text "> Dashboard </h5>
    </a>
    <a href="#" class="nav-item py-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-person-gear" viewBox="0 0 16 16">
            <path
                d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1zm3.63-4.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
        </svg>
        <h5 class="nav-text">Manajemen Kontingen</h5>
    </a>
    <a href="#" class="nav-item mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-person-vcard" viewBox="0 0 16 16">
            <path
                d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4m4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5M9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8m1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5" />
            <path
                d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96q.04-.245.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 1 1 12z" />
        </svg>
        <h5 class="nav-text">Manajemen Atlet</h5>
    </a>
    <a href="#" class="nav-item  mb-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-columns-gap" viewBox="0 0 16 16">
            <path
                d="M6 1v3H1V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1zm14 12v3h-5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zM6 8v7H1V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1zm14-6v7h-5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z" />
        </svg>
        <h5 class="nav-text"> Kategori Tanding/Seni</h5>
    </a>
    <a href="#" class="nav-item">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0" />
            <path
                d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z" />
            <path
                d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z" />
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567" />
        </svg>
        <h5 class="nav-text">Pembayaran</h5>
    </a>
</div>



<!-- Main Content -->
<main class="main-page-specific col-md-9 col-lg-10 p-4">
    <h1 class="mb-4 text-primary">Dashboard Admin</h1>

    <!-- Statistik Kartu & Kartu Informasi -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <h5 class="card-title">Total Kontingen</h5>
                    <p class="card-text fs-4 text-success">20 Kontingen</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <h5 class="card-title">Total Atlet</h5>
                    <p class="card-text fs-4 text-warning">150 Atlet</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <h5 class="card-title">Total Pembayaran</h5>
                    <p class="card-text fs-4 text-info">Rp 25.000.000</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik & Statistik -->
    <div class="row">
        <!-- Grafik Pendaftaran Atlet -->
        <div class="col-md-8 mb-4">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <h5 class="card-title">Grafik Pendaftaran Atlet</h5>
                    <canvas id="athleteRegistrationChart" style="height: 300px;"></canvas>
                </div>
            </div>
        </div>

        <!-- Statistik Pembayaran -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <h5 class="card-title">Statistik Pembayaran</h5>
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Lunas
                            <span class="badge bg-success rounded-pill">80%</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Belum Lunas
                            <span class="badge bg-danger rounded-pill">20%</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mb-4">
        <div class="col-md-6">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <h5 class="card-title">Quick Actions</h5>
                    <form action="#">
                        <div class="mb-3">
                            <label for="quickMessage" class="form-label">Send Message</label>
                            <input type="text" class="form-control" id="quickMessage"
                                placeholder="Type a message...">
                        </div>
                        <button type="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow-lg border-light rounded">
                <div class="card-body">
                    <h5 class="card-title">Notifications</h5>
                    <ul class="list-group">
                        <li class="list-group-item">
                            New athlete registration: 5 new entries
                        </li>
                        <li class="list-group-item">
                            10 payments pending review
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Grafik Placeholder
    const ctx = document.getElementById('athleteRegistrationChart').getContext('2d');
    const athleteChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Jumlah Atlet',
                data: [10, 20, 30, 40, 50],
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>
<script>
    const sidenav = document.querySelector('.sidenav');

    sidenav.addEventListener('mouseenter', () => {
        sidenav.classList.remove('collapsed'); // Hilangkan kelas collapsed
        sidenav.style.width = '250px'; // Kembalikan ke ukuran penuh
    });

    sidenav.addEventListener('mouseleave', () => {
        sidenav.classList.add('collapsed'); // Tambahkan kelas collapsed
        sidenav.style.width = '60px'; // Ubah ke ukuran kecil
    });
</script>

@include('components.footer_tutup') <!-- Memanggil footer -->
