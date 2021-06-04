<section id="hero" style="height: 70px;">
    
    <?php $this->load->view('templates/header');?>
    
</section>

<section id="contentsearch">
<hr>

<h1 class="pt-2"style="font-size:36px;">Cari Disini</h1>

<p>Anda bisa langsung cari data dibawah ini.</p>
</section>


<section id="search">
<form action="<?= base_url('Home/search'); ?>" method="post">
<div class="row justify-content-md-center">

    <div class="col-auto px-5 text-light">

        <label for="basic-url" class="form-label">Fitur</label>
        <select class="form-select" aria-label="Default select example" style="width : 200px;" name="categories" >
            <option value="all">Semua</option>
            <option value="title">Judul</option>
            <option value="abstract">Abstrak</option>
            <option value="nim">NIM</option>
            <option value="stud_name">Nama</option>
            <option value="year">Angkatan</option>
            <option value="class">Kelas</option>
            <option value="status">Status</option>
            <option value="research_area">Bidang Riset</option>
            <option value="supervisor">Pembimbing</option>
        </select>

    </div>

    <div class="col-auto px-5 text-light">
        <label for="basic-url" class="form-label">Kata Kunci</label>

        <input type="text" class="form-control" placeholder="Kata Kunci..." aria-label="Username"
            style="width : 200px;" name="keyword">
    </div>


    <div class="col-auto mt-4 pt-2 px-5">
        <button type="submit" class="btn btn-light mb-3" style="width:200px;" name="search">
        Cari</button>
    </div>
</div>
</form>

</section>

<div class="container">
    <?php if($num_rows <= 0) { ?>
        <div class="alert alert-danger" role="alert">
            Data dengan kata kunci <?= $keyword; ?> tidak ditemukan.
        </div>
    <?php } elseif ($num_rows>0){?>
    <h5><?= "Hasil pencarian dengan kata kunci '".$keyword."' : ".$num_rows; ?></h5>
    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <th scope="col">No</th>
                <th scope="col">Judul Tugas Akhir</th>
                <th scope="col">NIM - Nama</th>
                <th scope="col">Kelas - Angkatan</th>
                <th scope="col">Dosen Pembimbing 1</th>
                <th scope="col">Dosen Pembimbing 2</th>
              
                <?php  $i = 1; foreach ($topic as $t) : ?>
                    <tr>
                        <td><?= $i++ ; ?></td>
                        <td><a href="<?= base_url();?>Home/detail_topic/<?= $t['id']?>"><?= $t['title']; ?></a></td>
                        <td><?= $t['nim']." - ".$t['stud_name']; ?></td>
                        <td><?= $t['class']." - ".$t['year']; ?></td>
                        <td><?= $t['spv1_name']; ?></td>
                        <td><?= $t['spv2_name']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <?php } ?>
    
</div>

<div class="ghost" style="height:111px;">
    
</div>





