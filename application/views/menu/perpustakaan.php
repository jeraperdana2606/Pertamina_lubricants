<section id="Perpustakaan">
    <div class="container">
        <table class="table caption-top">
            <h3>Perpustakaan
            </h3>
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jumlah</th>
                </tr>
            </thead>
            <?php foreach($perpustakaan as $u) { ?>
            <tbody>
                <tr>
                    <td><?= $u->No ?></td>
                    <td><?= $u->Nama ?></td>
                    <td><?= $u->Jumlah ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>

</section>