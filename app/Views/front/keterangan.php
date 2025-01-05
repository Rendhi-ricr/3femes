<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keterangan Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <!-- Bagian Gambar -->
            <div class="col-md-6">
                <?php if ($gambar): ?>
                    <img src="<?= base_url('img/produk/' . esc($gambar)) ?>" alt="<?= esc($nama_produk) ?>" class="img-fluid rounded">
                <?php else: ?>
                    <img src="<?= base_url('img/produk/default.jpg') ?>" alt="Default Image" class="img-fluid rounded">
                <?php endif; ?>
            </div>

            <!-- Bagian Informasi Produk -->
            <div class="col-md-6">
                <h3><?= esc($nama_produk) ?></h3>
                <p>Harga: Rp <?= number_format($harga, 0, ',', '.') ?></p>

                <!-- Form Tambah ke Keranjang -->
                <form action="<?= base_url('keranjang/simpan') ?>" method="POST">
                    <input type="hidden" name="id_produk" value="<?= esc($id_produk) ?>">
                    <input type="hidden" name="nama_produk" value="<?= esc($nama_produk) ?>">
                    <input type="hidden" name="harga" value="<?= esc($harga) ?>">
                    <input type="hidden" id="kategori" value="<?= esc($kategori) ?>">

                    <!-- Pilihan Ukuran -->
                    <div class="mb-3" id="size-container" style="display: none;">
                        <label for="size" class="form-label">Pilih ukuran</label>
                        <select class="form-select" id="size" name="size">
                            <option value="50 gram" data-price="5000">50 gram - Rp 5,000</option>
                            <option value="100 gram" data-price="10000">100 gram - Rp 10,000</option>
                        </select>
                    </div>

                    <!-- Input Jumlah -->
                    <div class="mb-3">
                        <label for="qty" class="form-label">Qty</label>
                        <div class="input-group">
                            <button type="button" class="btn btn-outline-secondary" id="minus">-</button>
                            <input type="number" id="qty" name="qty" class="form-control text-center" value="1" min="1">
                            <button type="button" class="btn btn-outline-secondary" id="plus">+</button>
                        </div>
                    </div>

                    <!-- Total Harga -->
                    <div class="mb-3">
                        <h5>Total: Rp <span id="total"><?= number_format($harga, 0, ',', '.') ?></span></h5>
                    </div>

                    <!-- Tombol Tambah ke Keranjang -->
                    <button type="submit" class="btn btn-primary">Tambah ke Keranjang</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            const kategori = $("#kategori").val();

            // Tampilkan atau sembunyikan ukuran berdasarkan kategori
            if (kategori === "Keripik Pisang") {
                $("#size-container").show();
            } else {
                $("#size-container").hide();
            }

            // Fungsi untuk menghitung total
            function updateTotal() {
                const sizePrice = parseInt($("#size option:selected").data("price")) || 0;
                const qty = parseInt($("#qty").val());
                const total = (sizePrice || <?= esc($harga) ?>) * qty;
                $("#total").text(total.toLocaleString());
            }

            // Event Listener untuk perubahan ukuran atau jumlah
            $("#size, #qty").on("change", updateTotal);

            // Tombol plus dan minus
            $("#plus").click(function() {
                let qty = parseInt($("#qty").val());
                $("#qty").val(qty + 1).trigger("change");
            });

            $("#minus").click(function() {
                let qty = parseInt($("#qty").val());
                if (qty > 1) {
                    $("#qty").val(qty - 1).trigger("change");
                }
            });

            // Inisialisasi total saat halaman dimuat
            updateTotal();
        });
    </script>
</body>

</html>