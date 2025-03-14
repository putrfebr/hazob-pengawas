document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    if (!form) {
        console.error('Form tidak ditemukan!');
        return;
    }

    const validation = new JustValidate(form);

    validation
        .addField('[name="nama_pelapor"]', [
            { rule: 'required', errorMessage: 'Harap isi nama pelapor' },
            { rule: 'minLength', value: 2, errorMessage: 'Minimal 2 karakter' },
        ])
        .addField('[name="no_id"]', [{ rule: 'required', errorMessage: 'Harap isi No ID' }])
        .addField('[name="divisi"]', [{ rule: 'required', errorMessage: 'Harap isi Divisi' }])
        .addField('[name="datetime"]', [{ rule: 'required', errorMessage: 'Harap isi tanggal & waktu' }])
        .addField('[name="lokasi"]', [{ rule: 'required', errorMessage: 'Harap isi lokasi' }])
        .addField('[name="golden"]', [{ rule: 'required', errorMessage: 'Harap isi Golden Rules Violation' }])
        .addField('[name="unsafe"]', [{ rule: 'required', errorMessage: 'Harap isi Unsafe Action' }])
        .addField('[name="safe"]', [{ rule: 'required', errorMessage: 'Harap isi Safe Behaviour' }])
        .addField('[name="cuaca"]', [{ rule: 'required', errorMessage: 'Harap pilih Cuaca' }])
        .addField('[name="deskripsi"]', [
            { rule: 'required', errorMessage: 'Harap isi deskripsi' },
            { rule: 'minLength', value: 10, errorMessage: 'Minimal 10 karakter' },
        ])
        .onSuccess(function (event) {
            event.preventDefault(); // Mencegah pengiriman otomatis

            if (confirm('Apakah yakin sudah benar?')) {
                form.submit(); // Kirim form
            }
        });
});
