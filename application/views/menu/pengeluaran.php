<section id="pengeluaran">
    <div class="container">
        <table class="table caption-top">
            <h3>Pengeluaran Per-Periode
            </h3>
            <caption>List of users</caption>
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Saldo Bank</th>
                    <th scope="col">Saldo Cash</th>
                    <th scope="col">Dana Keluar</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Total Saldo</th>
                </tr>
            </thead>
            <?php foreach($keluar as $u) { ?>
            <tbody>
                <tr>
                    <td><?= $u->Tanggal ?></td>
                    <td><?= $u->SaldoBank ?></td>
                    <td><?= $u->SaldoCash ?></td>
                    <td><?= $u->DanaKeluar ?></td>
                    <td><?= $u->Keterangan ?></td>
                    <td><?= $u->TotalSaldo ?></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </div>
</section>