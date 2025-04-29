<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>EVENT</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-cover bg-center text-white min-h-screen" style="background-image: url('img/background.jpg');">
    <div class="text-center text-3xl font-bold font-mono py-5">
        <a href="dasboard.php" class="no-underline text-white">>>────୨Mlakurasoৎ────<<</a>
    </div>

    <div class="container mx-auto px-4">
        <div class="bg-white bg-opacity-80 p-6 rounded-lg shadow-lg">
            <h3 class="text-center text-2xl font-semibold text-black mb-6">📅 Daftar Event Coming Soon</h3>

            <div class="flex justify-between mb-4">
                <a href="event_going.php" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600 transition">
                    ⬅️ Event Berlangsung
                </a>
                <button type="button" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition" data-modal-target="tambahDataModal">
                    ➕ TAMBAH DATA EVENT
                </button>
            </div>

            <!-- Tabel Event -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 text-center text-black rounded">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-4 py-2">NO</th>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">NAMA</th>
                            <th class="px-4 py-2">LOKASI</th>
                            <th class="px-4 py-2">WAKTU</th>
                            <th class="px-4 py-2">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'koneksi.php';
                        $query = mysqli_query($koneksi, "SELECT * FROM event");
                        $no = 1;
                        while ($data = mysqli_fetch_assoc($query)) {
                        ?>
                            <tr class="border-t border-gray-300">
                                <td class="px-4 py-2"><?php echo $no++; ?></td>
                                <td class="px-4 py-2"><?php echo $data['id']; ?></td>
                                <td class="px-4 py-2"><?php echo $data['nama']; ?></td>
                                <td class="px-4 py-2"><?php echo $data['lokasi']; ?></td>
                                <td class="px-4 py-2"><?php echo $data['waktu']; ?></td>
                                <td class="px-4 py-2 space-x-2">
                                    <button class="bg-green-600 text-white px-3 py-1 rounded hover:bg-green-700 transition"
                                            onclick="openEditModal(<?= $data['id'] ?>, '<?= $data['nama'] ?>', '<?= $data['lokasi'] ?>', '<?= $data['waktu'] ?>')">
                                        ✏️ Edit
                                    </button>
                                    <a href="hapus_event.php?id=<?= $data['id']; ?>" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 transition">
                                        🗑️ Delete
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit -->
    <!-- Buat sendiri dengan Alpine.js atau modal custom jika ingin interaktif -->

    <script>
        function openEditModal(id, nama, lokasi, waktu) {
            // Buat fungsi custom atau gunakan Alpine.js/modal Tailwind
            alert("Modal Edit: " + nama); // ganti ini dengan modal logic sesuai kebutuhanmu
        }
    </script>
</body>
</html>
