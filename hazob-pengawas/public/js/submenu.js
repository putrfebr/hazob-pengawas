document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".toggle-menu");

    dropdowns.forEach(dropdown => {
        dropdown.addEventListener("click", function (e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;

            // Tutup semua submenu lain
            document.querySelectorAll(".submenu").forEach(menu => {
                if (menu !== submenu) {
                    menu.classList.remove("show");
                }
            });

            // Tampilkan atau sembunyikan submenu
            submenu.classList.toggle("show");
        });
    });

    // Klik di luar submenu untuk menutupnya
    document.addEventListener("click", function (e) {
        if (!e.target.closest(".dropdown")) {
            document.querySelectorAll(".submenu").forEach(menu => {
                menu.classList.remove("show");
            });
        }
    });
});