<?php 
require '../function.php';

$keyword = $_GET["keyword"];


$query = "SELECT * FROM stock
            WHERE
            nama_barang LIKE '%$keyword%' OR
            deskripsi LIKE '%$keyword%' OR
            stock LIKE '%$keyword%'
            ";
$stock = query($query);
?>


<table id="example" class="table table-striped" style="width:100%">
            <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Gadget</th>
                    <th>Deksripsi</th>
                    <th>Stock</th>
                    <th>Aksi</th>
                 </tr>
               </thead>
             <tbody>
                  <?php $i = 1; ?>
                  <?php foreach($stock as $row) :?>

                  <tr>
                    <td><?= $i;?></td>
                    <td><img src="img/<?= $row['gambar'];?>" width="75"></td>
                    <td><?= $row['nama_barang']; ?></td>
                    <td><?= $row['deskripsi']; ?></td>
                    <td><?= $row['stock']; ?></td>
                    <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$row['id_barang'];?>">
                      Edit
                    </button>
                    <input type="hidden" name="hapus" value="<?= $row['id_barang']; ?>">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$row['id_barang'];?>">
                      Delete
                    </button>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach ?>  
               </tbody>
          </table>
                            <!-- Link Modal Edit -->
                            <?php require '../edit.php';?>
                  <!-- Link Modal Delete -->
                  <?php require '../delete.php';?>
