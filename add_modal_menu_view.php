<div id="menuweb_tambah" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Tambah Menuweb</h4>
      </div>
      <form method=POST enctype='multipart/form-data' id="form_menuweb">
      <div class="modal-body">
        
      
                
                <div class='form-group'>
                <label for='password'>Nama Menu</label>
               <input type='text' name='nama_menu' class="form-control" >
                </div>
                 
                <div class='form-group'>
                <label for='emailaddress'>Link</label>
                <input type='text' name='link' class="form-control" >
                <span style="color:grey;font-size: 13px">jika tidak menu dropdown, isikan link : javascript:void(0)</span>
                </div>

                <div class='form-group'>
                <label for='emailaddress'>Menu Dropdown</label> 
                <br>
				<input type='radio' name='dropdown' id='cbx_menu1' value='Y' > Ya
						<input type='radio' name='dropdown' id='cbx_menu2' value='N'> Tidak
				</div>


				<div class='form-group'>
                <label for='emailaddress'>Urutan Menu</label>
                <input type='number' name='urutan' class="form-control" style="width:60px" min="1" max="10" >
                </div>
              
            </form>

      
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnsave_menuweb"><i class="fa fa-save"></i> Simpan</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i> Tutup</button>
      </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
