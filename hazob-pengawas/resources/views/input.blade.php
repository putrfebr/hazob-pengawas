<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/input.css">
</head>
<body>
<div class="container mt-4">
    <form action="{{ route('laporan.store') }}" method="POST">
        @csrf
        <fieldset>
            <legend>Silahkan Input Disini</legend>

            
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Nama Pelapor</label>
                        <input name="nama_pelapor" placeholder="Nama Pelapor" class="form-control" type="text" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No ID</label>
                        <input name="no_id" placeholder="No ID" class="form-control" type="text" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Posisi</label>
                        <select name="posisi" class="form-select" required>
                        <option value="">Silahkan Pilih</option>
                        <option>Safetyman</option>
                        <option>HSE Officer</option>
                        <option>HSE Coordinator</option>
                        <option>Foreman</option>
                        <option>Supervisor</option>
                        <option>Manager</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Divisi</label>
                        <input name="divisi" placeholder="Divisi" class="form-control" type="text" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal & Waktu</label>
                        <input name="datetime" placeholder="YYYY-MM-DD HH:MM" class="form-control" type="datetime-local" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lokasi</label>
                        <input name="lokasi" placeholder="Lokasi" class="form-control" type="text" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Golden Rules Violation</label>
                        <select name="golden" class="form-select" required>
                        <option value="">Silahkan Pilih</option>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Unsafe Action</label>
                        <select name="unsafe" class="form-select" required>
                        <option value="">Silahkan Pilih</option>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Safe Behaviour</label>
                        <select name="safe" class="form-select" required>
                        <option value="">Silahkan Pilih</option>
                        <option>Yes</option>
                        <option>No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Cuaca</label>
                        <select name="cuaca" class="form-select" required>
                            <option value="">Silahkan Pilih</option>
                            <option>Panas Terik</option>
                            <option>Panas</option>
                            <option>Mendung</option>
                            <option>Hujan Rintik</option>
                            <option>Hujan Deras</option>
                            <option>Badai</option>
                        </select>
                    </div>
                </div>

                <!-- Kolom Kanan (Deskripsi + Button) -->
                <div class="col-md-6 d-flex flex-column">
                    <div class="mb-3 flex-grow-1">
                        <label class="form-label">Apa yang kamu lihat?</label>
                        <textarea class="form-control" name="deskripsi" placeholder="Masukkan deskripsi di sini" rows="10" required></textarea>
                    </div>

                    <div class="mt-auto">
                        <button type="submit" class="btn btn-primary w-50">Kirim</button>
                        <script>
    function confirmSubmit() {
        return confirm('Apakah Anda yakin akan mengirim laporan ini?');
    }
</script>

                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>

<!-- Bootstrap Bundle (JS + Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- JustValidate (Alternatif untuk Bootstrap 5) -->
<script src="https://cdn.jsdelivr.net/npm/just-validate@2.0.0/dist/just-validate.production.min.js"></script>

<script src="{{ asset('js/input.js') }}"></script>

</body>
</html>
