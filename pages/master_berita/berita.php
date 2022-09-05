<div class="container-fluid px-4">
    <h1 class="mt-4">Master Berita</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Master Berita</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <svg class="svg-inline--fa fa-table me-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="table" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M448 32C483.3 32 512 60.65 512 96V416C512 451.3 483.3 480 448 480H64C28.65 480 0 451.3 0 416V96C0 60.65 28.65 32 64 32H448zM224 256V160H64V256H224zM64 320V416H224V320H64zM288 416H448V320H288V416zM448 256V160H288V256H448z"></path>
            </svg><!-- <i class="fas fa-table me-1"></i> Font Awesome fontawesome.com -->
            DataTable Example
        </div>
        <div class="card-body">
            <a href="index.php?page=add_berita" class="btn btn-primary mb-3">Tambah Data Berita</a>
            <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">

                <div class="dataTable-container">
                    <table id="datatablesSimple" class="dataTable-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Tanggal</th>
                                <th>Kategori</th>
                                <th>Isi</th>
                                <th>Gambar</th>
                                <th>Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include "connection.php";
                            // * semua kolom database
                            // menampilkan beberapa kolom contohnya : SELECT judul,isi FROM berita
                            $select = "SELECT * FROM berita";
                            // eksekusi query select jika error maka tampilan error database nya 
                            $query = mysqli_query($conn, $select) or die(mysqli_error($conn));

                            $no = 1;
                            // lakukan perulangan 
                            while ($row = mysqli_fetch_array($query)) {

                            ?>
                                <tr>
                                    <td><?=$no++ ?></td>
                                    <td><?=$row['judul'] ?></td>
                                    <td><?=$row['tanggal'] ?></td>
                                    <td><?=$row['kategori'] ?></td>
                                    <td><?= substr ($row['isi'],0,250) ?></td>
                                    <td> <img src="images/<?= $row['gambar'] ?>" alt="gambar produk" width="100" height="100"></td>
                                    <td>
                                        <a class="btn btn-warning mb-2" href="index.php?page=edit_berita&id_berita=<?php echo $row['id_berita'] ?>"><i class="fa-solid fa-pen-to-square"></i>  Edit</a><br>
                                        <a class="btn btn-danger " href="actions/delete_berita.php?id_berita=<?php echo $row['id_berita'] . '&gambar=' . $row['gambar'] ?>"><i class="fa-solid fa-trash-can"></i>   Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>