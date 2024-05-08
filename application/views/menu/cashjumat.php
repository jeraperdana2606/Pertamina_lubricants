<section id="cashjumat">
    <div class="container">
        <table class="table caption-top">
            <h3>Keuangan Jum'at
            </h3>
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Dana Masuk</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <?php foreach($jumat as $u) { ?>
            <tbody>
                <tr>
                    <td><?= $u->Tanggal ?></td>
                    <td><?= $u->DanaMasuk ?></td>
                    <td><?= $u->Keterangan ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</section>