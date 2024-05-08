<section id="infaq">
    <div class="container">
        <table class="table caption-top">
            <h3>Infaq / Sadaqah
            </h3>
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Dari</th>
                    <th scope="col">Dana Masuk</th>
                    <th scope="col">Keterangan</th>
                </tr>
            </thead>
            <?php foreach($infaq as $u) { ?>
            <tbody>
                <tr>
                    <td><?= $u->Tanggal ?></td>
                    <td><?= $u->Dari ?></td>
                    <td><?= $u->DanaMasuk ?></td>
                    <td><?= $u->Keterangan ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</section>