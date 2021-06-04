<section id="hero" style="height: 70px;">
    
    <?php $this->load->view('templates/header');?>
    
</section>
<div class="container" style="margin-top: 30px; margin-bottom:30px;">
<div class="card">
    <div class="card-header text-center">
        Detail Tugas Akhir - <?= $topic['stud_name'];?>
    </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <tr>
                    <th scope="row">Judul Tugas Akhir</th>
                    <td><?= $topic['title']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Abstrak</th>
                    <td><?= $topic['abstract']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Nama</th>
                    <td><?= $topic['stud_name']; ?></td>
                </tr>
                <tr>
                    <th scope="row">NIM</th>
                    <td><?= $topic['nim']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Kelas</th>
                    <td><?= $topic['class']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Angkatan</th>
                    <td><?= $topic['year']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Status</th>
                    <td><?= $topic['status']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Dosen Pembimbing 1</th>
                    <td><?= $topic['spv1_name']; ?></td>
                </tr>
                <tr>
                    <th scope="row">Dosen Pembimbing 2</th>
                    <td><?= $topic['spv2_name']; ?></td>
                </tr>
                
            </table>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
            <button type="submit" class="btn btn-primary" onclick="goBack()">Kembali</button>
  </div>
</div>
</div>