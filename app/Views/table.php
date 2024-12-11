<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>Data Table</h2>

<table style="width:100%">
  <tr>
    <th>Nama Barang</th>
    <th>Kode </th>
    <th>Stok</th>
  </tr>
  <?php
      
      foreach ($data as $nelson ) {
?>
  <tr>
    <td><?= $nelson->nama_brg ?></td>
    <td><?= $nelson->kode_brg ?></td>
    <td><?= $nelson->stok ?></td>
  </tr>
  <?php } ?>
</table>

</body>
</html>

