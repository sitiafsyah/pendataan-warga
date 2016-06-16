<?php include('../_partials/top.php') ?>

<h1 class="page-header">Data Kartu Keluarga</h1>
<?php include('_partials/menu.php') ?>

<?php include('data-index.php') ?>

<table class="table table-striped table-condensed table-hover" id="datatable">
  <thead>
    <tr>
      <th>#</th>
      <th>Nomor KK</th>
      <th>Kepala Keluarga</th>
      <th>NIK Kepala</th>
      <th>Jml. Anggota</th>
      <th>Alamat</th>
      <th>RT</th>
      <th>RW</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data_kartu_keluarga as $kartu_keluarga) : ?>
    <tr>
      <td><?php echo $kartu_keluarga['id_keluarga'] ?></td>
      <td><?php echo $kartu_keluarga['nomor_keluarga'] ?></td>
      <td><?php echo $kartu_keluarga['nama_warga'] ?></td>
      <td><?php echo $kartu_keluarga['nik_warga'] ?></td>
      <td>???</td>
      <td><?php echo $kartu_keluarga['alamat_keluarga'] ?></td>
      <td><?php echo $kartu_keluarga['rt_keluarga'] ?></td>
      <td><?php echo $kartu_keluarga['rw_keluarga'] ?></td>
      <td>
        <!-- Single button -->
        <div class="btn-group pull-right">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
          <span class="caret"></span>
          </button>
          <ul class="dropdown-menu pull-right" role="menu">
            <li>
              <a href="show.php?id_keluarga=<?php echo $kartu_keluarga['id_keluarga'] ?>"><span class="glyphicon glyphicon-sunglasses"></span> Detail</a>
            </li>
            <li>
              <a href="edit-anggota.php"><span class="glyphicon glyphicon-list"></span> Ubah Anggota</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="edit.php"><span class="glyphicon glyphicon-edit"></span> Ubah</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#"><span class="glyphicon glyphicon-trash"></span> Hapus</a>
            </li>
          </ul>
        </div>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>

<br><br>

<div class="well">
  <dl class="dl-horizontal">
    <dt>Total Kartu Keluarga</dt>
    <dd>20 keluarga</dd>
  </dl>
</div>

<?php include('../_partials/bottom.php') ?>
