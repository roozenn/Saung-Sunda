            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Admin Page</h1>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        

        <!-- Tabel On Going Reservation Start -->
        <section id="ongoing">
        <div class="container mt-5">
            <div class="text-center">
                <h2>On Going Reservation</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Jumlah Orang</th>
                            <th>Pesan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listOnGoingReservasi as $key => $value) {
                        ?>
                        <tr>
                            <td><?= $value->id ?></td>
                            <td><?= $value->name ?></td>
                            <td><?= $value->email ?></td>
                            <td><?= $value->date ?></td>
                            <td><?= $value->people ?></td>
                            <td><?= $value->request ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?= site_url('C_Reservasi/konfirmasiReservasi/'.$value->id) ?>" class="btn btn-sm btn-success ms-2 text-white">Konfirmasi</a>
                                    <a href="<?= site_url('C_Reservasi/batalkanReservasi/'.$value->id) ?>" class="btn btn-sm btn-danger ms-2 text-white">Batalkan</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </section>
        <!-- Tabel On Going Reservation End -->


        <!-- Tabel Done Reservation Start -->
        <section id="done">
        <div class="container mt-5">
            <div class="text-center">
                <h2>Reservation Confirmed</h2>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Tanggal</th>
                            <th>Jumlah Orang</th>
                            <th>Pesan</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listDoneReservasi as $key => $value) {
                        ?>
                        <tr>
                            <td><?= $value->id ?></td>
                            <td><?= $value->name ?></td>
                            <td><?= $value->email ?></td>
                            <td><?= $value->date ?></td>
                            <td><?= $value->people ?></td>
                            <td><?= $value->request ?></td>
                            <td>
                                <div class="d-flex">
                                    <a href="<?= site_url('C_Reservasi/closeReservasi/'.$value->id) ?>" class="btn btn-sm btn-success ms-2 text-white">Selesai</a>
                                </div>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        </section>
        <!-- Tabel Done Reservation End -->

        
        <!-- Tabel Menu Start -->
        <section id="sect_menu">
         <div id="menu" class="container-xxl py-5">
            <div class="container">
                <div  class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h2>Menu</h2>
                </div>
                <div  class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Menu</button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <form action="<?= site_url('C_Menu/addMenu') ?>" method="post" enctype="multipart/form-data">
                                <div class="modal-content text-dark">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Add Menu</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Foto</label>
                                            <input class="form-control" type="file" id="exampleFormControlInput1" name="foto">
                                        </div>
                                        <div class="mb-3"> 
                                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                            <input type="text" class="form-control" name="nama" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                            <input type="number" class="form-control" name="harga" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                                            <input type="number" class="form-control" name="jenis" id="exampleFormControlInput1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                            <input type="text" class="form-control" name="deskripsi" id="exampleFormControlInput1">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mt-4 mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Makanan</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0">Minuman</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- tabel 1 start -->
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <?php 
                                foreach ($listMakanan as $key => $value) {
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo base_url();?>/resources/img/<?=$value->foto?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$value->nama?></span>
                                                <span class="text-primary">RP. <?=number_format($value->harga,0,"",".")?></span>
                                            </h5>
                                            <small class="fst-italic"><?=$value->deskripsi?></small>
                                        </div>
                                        <div class="w-20 d-flex flex-column text-start ps-4">
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $value->id ?>">Edit</button>
                                            <div class="modal fade" id="staticBackdrop<?= $value->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <form action="<?= site_url('C_Menu/updateMenu/'.$value->id) ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-content text-dark">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Edit Menu</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php echo base_url();?>/resources/img/<?=$value->foto?>" alt="" style="width: 150px;">
                                                                    <br>
                                                                    <label for="exampleFormControlInput1" class="form-label">Abaikan Jika tidak mengganti foto</label>
                                                                    <input class="form-control" type="file" id="exampleFormControlInput1" name="foto" value="<?=$value->foto?>">
                                                                </div>
                                                                <div class="mb-3"> 
                                                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" value="<?= $value->nama ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                                                    <input type="number" class="form-control" name="harga" id="exampleFormControlInput1" value="<?= $value->harga ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                                                                    <input type="number" class="form-control" name="jenis" id="exampleFormControlInput1"  value="<?= $value->jenis ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                                                    <input type="text" class="form-control" name="deskripsi" id="exampleFormControlInput1"  value="<?= $value->deskripsi ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>                                  
                                            <a href="<?= site_url('C_Menu/deleteMenu/'.$value->id)?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger">Delete</a>          
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                        <!-- tabel 1 end-->
                        
                        <!-- tabel 2 start -->
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <?php 
                                foreach ($listMinuman as $key => $value) {
                                ?>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="<?php echo base_url();?>/resources/img/<?=$value->foto?>" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span><?=$value->nama?></span>
                                                <span class="text-primary">RP. <?=number_format($value->harga,0,"",".")?></span>
                                            </h5>
                                            <small class="fst-italic"><?=$value->deskripsi?></small>
                                        </div>
                                        <div class="w-20 d-flex flex-column text-start ps-4">
                                            <button class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $value->id ?>">Edit</button>
                                            <div class="modal fade" id="staticBackdrop<?= $value->id ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                    <form action="<?= site_url('C_Menu/updateMenu/'.$value->id) ?>" method="post" enctype="multipart/form-data">
                                                        <div class="modal-content text-dark">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5 text-dark" id="staticBackdropLabel">Edit Menu</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <img class="flex-shrink-0 img-fluid rounded" src="<?php echo base_url();?>/resources/img/<?=$value->foto?>" alt="" style="width: 150px;">
                                                                    <br>
                                                                    <label for="exampleFormControlInput1" class="form-label">Abaikan Jika tidak mengganti foto</label>
                                                                    <input class="form-control" type="file" id="exampleFormControlInput1" name="foto">
                                                                </div>
                                                                <div class="mb-3"> 
                                                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                                    <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" value="<?= $value->nama ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Harga</label>
                                                                    <input type="number" class="form-control" name="harga" id="exampleFormControlInput1" value="<?= $value->harga ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Jenis</label>
                                                                    <input type="number" class="form-control" name="jenis" id="exampleFormControlInput1"  value="<?= $value->jenis ?>">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
                                                                    <input type="text" class="form-control" name="deskripsi" id="exampleFormControlInput1"  value="<?= $value->deskripsi ?>">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>                                  
                                            <a href="<?= site_url('C_Menu/deleteMenu/'.$value->id)?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-sm btn-danger">Delete</a>          
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                        <!-- tabel 2 end-->
                    </div>
                </div>
            </div>
        </div>
        </section>
        <!-- Tabel Menu End -->
