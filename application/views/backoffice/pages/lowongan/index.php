<div class="box-content">
    <h4 class="box-title">
    <div class="row">
        <div class="col-md-3 float-right">
            <a href="#" class="btn btn-primary btn-sm float-right" id="tambah">Tambah Lowongan Pekerjaan</a>
        </div>
    </div>
    </h4>
    <!-- /.box-title -->
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>#</th>
    			<th>Nama</th> 
    			<th>Username</th> 
    			<th>Level</th> 
    			<th>Status</th> 
    			<th>Dibuat pada</th> 
    			<th>Tanggal Perubahan</th> 
    		</tr> 
    	</thead> 
    	<tbody id="tbl_lowongan"> 
    	</tbody> 
    </table>
    <div class="row">
    <div class="col-md-12">
            <nav class="float-right" aria-label="Page navigation example">
                    <ul class="pagination">
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="form-berita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addBerita">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="title" require>
                        <input type="hidden" name="idItem" id="idItem">
                        <small id="err-title" style="display:none" class="form-text text-danger">.</small>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="category" value="0">
                    </div>
                    <div class="form-group">
                        <label for="price">Deskripsi</label>
                        <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                        <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                        <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                        <input type="hidden" name="picture" id="picture" require>
                        <img src="" id="preview" alt="" width="100%">
                    </div>
                </div>
                    <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn_simpan">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal" id="form-kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Create Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addBerita">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" class="form-control" id="titleKategori" require>
                        <input type="hidden" name="idItem" id="idItemKategori">
                        <small id="err-title" style="display:none" class="form-text text-danger">.</small>
                    </div>
                </div>
                    <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn_simpan_kategori">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>