<!-- Sorting/mengurutkan Ascending dan Descending -->

<style>
    .input-group i {
        font-size: 22px;
    }

</style>

<?php 
if (isset($_POST["gadget_naik"])) {
    $stock = query("SELECT * FROM stock ORDER BY nama_barang ASC;");
 }

if (isset($_POST["deskripsi_naik"])) {
    $stock = query("SELECT * FROM stock ORDER BY deskripsi ASC;");
 } 

if (isset($_POST["stock_naik"])) {
    $stock = query("SELECT * FROM stock ORDER BY stock ASC;");
 } 


if (isset($_POST["gadget_turun"])) {
    $stock = query("SELECT * FROM stock ORDER BY nama_barang DESC;");
 }

if (isset($_POST["deskripsi_turun"])) {
    $stock = query("SELECT * FROM stock ORDER BY deskripsi DESC;");
 } 

if (isset($_POST["stock_turun"])) {
    $stock = query("SELECT * FROM stock ORDER BY stock DESC;");
 } 

?>


<form action="" method="POST">
    <div class="container-urutan">
        <div class="col d-inline-flex">
         <div class="input-group me-3">
             <button class="btn btn dropdown-toggle" style="background-color:#E3BEC6 ;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-down-alt"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color:#E3BEC6 ;">
                    <li><button class="dropdown-item" name="gadget_naik" type="submit">Gadget</button></li>
                    <li><button class="dropdown-item" name="deskripsi_naik" type="submit">Deskripsi</button></li>
                    <li><button class="dropdown-item" name="stock_naik" type="submit">Stock</button></li>
                </ul>
         </div>
         <div class="input-group">
             <button class="btn btn-outline dropdown-toggle" style="background-color:#E3BEC6 ;" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-sort-down"></i>&nbsp;</button>
                <ul class="dropdown-menu" style="background-color:#E3BEC6 ;">
                    <li><button class="dropdown-item" name="gadget_turun" type="submit">Gadget</button></li>
                    <li><button class="dropdown-item" name="deskripsi_turun" type="submit">Deskripsi</button></li>
                    <li><button class="dropdown-item" name="stock_turun" type="submit">Stock</button></li>
                </ul>
         </div>
      </div>
 </div>
 </form>