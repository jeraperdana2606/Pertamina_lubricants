<section id="Kebersihan">
    <div class="container">
        <table class="table caption-top">
            <h3>Alat Kebersihan
            </h3>
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <?php foreach($ak as $u) { ?>
            <tbody>
                <tr>
                    <td><?= $u->No ?></td>
                    <td><?= $u->Nama ?></td>
                    <td><?= $u->Jumlah ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <a class="btn btn-primary" href="<?= base_url('welcome/lihat_kendaraan')?>" role="button">Kendaraan</a>
        <a class="btn btn-primary" href="<?= base_url('welcome/lihat_waqaf')?>" role="button">Waqaf</a>

    </div>

</section>