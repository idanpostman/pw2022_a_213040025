<!-- Modal Halaman Hapus-->
<div class="modal fade" id="delete<?= $row['id_barang'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Hapus Barang</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" method="POST" autocomplete="off">
                  Apakah Anda yakin ingin menghapus <?=$row['nama_barang']; ?> ?
                  <input type="hidden" name="idb" value="<?=$row['id_barang'];?>">
                  <br>
                  <br>
                     <div class="modal-footer">
                       <button type="submit" name="hapusbarang" class="btn btn-danger">YA</button> 
                     </div>
               </form>
            </div> 
          </div>
        </div>
      </div>