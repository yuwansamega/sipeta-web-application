<section id="hero" style="height: 350px;">
<?php $this->load->view('templates/header');?>

<section id="content">
<div class="dummy" style="margin-top:50px;">
    
</div>
        <hr>
        <h1 class="pt-3">SISTEM INFORMASI PENCARIAN TUGAS AKHIR</h1>
        <p class="py-2">Website ini merupakan pusat data informasi tugas akhir 
        mahasiswa dimana disini menyediakan layanan pencarian 
        data tugas akhir bagi dosen dan mahasiswa teknik informatika fasilkom universitas sriwijaya.</p>
        <div class="container" style="height:40px; width:40px;">
            
        </div>
    
</section>

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







