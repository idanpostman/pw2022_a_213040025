
<!-- Modal -->
<div class="modal fade" id="edit<?=$row['id_barang'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit data gadget</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
                  <!-- Agar nama Gambar lama tidak berubah -->
                  <input type="hidden" name="gambarLama" value="<?= $row['gambar']; ?>">
                  <input type="text" name="nama_barang" value="<?= $row['nama_barang'];  ?>" placeholder="Nama Gadget" class="form-control" required> 
                  <br>
                  <input type="text" name="deskripsi" value="<?=  $row['deskripsi'];   ?>" placeholder="Deskripsi Gadget" class="form-control" required> 
                  <br>
                    <img src="img/<?= $row['gambar'];?>" width="40"> <br>
                    <input type="file" name="gambar" class="form-control">
                  <br>
                  <input type="hidden" name="idb" value="<?= $row['id_barang']; ?>">
                     <div class="modal-footer">
                       <button type="submit" name="updatebarang" class="btn btn" style="background-color:#E3BEC6 ;">Submit</button> 
                     </div>
               </form>
            </div> 
          </div>
        </div>
      </div>