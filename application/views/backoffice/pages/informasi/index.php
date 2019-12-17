<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item active" style="cursor:pointer" id="mgeneral" onClick='event.preventDefault();changeShow(this);'>Struktur Organisasi</li>
            <li class="list-group-item" style="cursor:pointer" id="mdetail" onClick='event.preventDefault();changeShow(this);'>Divisi</li>
            <li class="list-group-item" style="cursor:pointer" id="mfaq" onClick='event.preventDefault();changeShow(this);'>Akreditasi</li>
            <li class="list-group-item" style="cursor:pointer" id="msejarah" onClick='event.preventDefault();changeShow(this);'>Sejarah</li>
            <li class="list-group-item" style="cursor:pointer" id="mvm" onClick='event.preventDefault();changeShow(this);'>Visi & Misi</li>
            <li class="list-group-item" style="cursor:pointer" id="mbl" onClick='event.preventDefault();changeShow(this);'>Budaya & Logo</li>
            <li class="list-group-item" style="cursor:pointer" id="mlh" onClick='event.preventDefault();changeShow(this);'>Landasan Hukum</li>

        </ul>
    </div>
    <div class="col-md-9" >
        <div class="box-content" id="general">
            <h4 class="box-title">
                Struktur Organisasi
            </h4>
            <div class="table-responsive">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                    <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                    <input type="hidden" name="picture" id="picture" require>
                    <img src="" id="preview" alt="" width="100%">
                </div>

                <h4 style='font-weight:700'>keterangan:</h4>
                <div class="form-group">
                    <label for="price">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <div class="form-group">
                    <label for="price">Deskripsi</label>
                    <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <a href="#" class="btn btn-success" onClick="return runClick(event,'descriptions',null)">Simpan perubahan</a>
            </div>
        </div>

        <div class="box-content" id="detail" style='display:none'>
            <h4 class="box-title">
                Divisi
            </h4>
            <div class="table-responsive">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                    <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                    <input type="hidden" name="picture" id="picture" require>
                    <img src="" id="preview" alt="" width="100%">
                </div>

                <h4 style='font-weight:700'>keterangan:</h4>
                <div class="form-group">
                    <label for="price">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <div class="form-group">
                    <label for="price">Deskripsi</label>
                    <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <a href="#" class="btn btn-success" onClick="return runClick(event,'descriptions',null)">Simpan perubahan</a>
            </div>
        </div>

        <div class="box-content" id="faq" style='display:none'>
            <h4 class="box-title mb-3">
                Akreditasi
            </h4>
            <div class="table-responsive">
                <div class="table-responsive">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                    <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                    <input type="hidden" name="picture" id="picture" require>
                    <img src="" id="preview" alt="" width="100%">
                </div>

                <h4 style='font-weight:700'>keterangan:</h4>
                <div class="form-group">
                    <label for="price">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <div class="form-group">
                    <label for="price">Deskripsi</label>
                    <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <a href="#" class="btn btn-success" onClick="return runClick(event,'descriptions',null)">Simpan perubahan</a>
            </div>

            </div>
        </div>

        <div class="box-content" id="sejarah" style='display:none'>
            <h4 class="box-title mb-3">
                Sejarah
            </h4>
            <div class="table-responsive">
                <div class="table-responsive">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                    <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                    <input type="hidden" name="picture" id="picture" require>
                    <img src="" id="preview" alt="" width="100%">
                </div>

                <h4 style='font-weight:700'>keterangan:</h4>
                <div class="form-group">
                    <label for="price">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <div class="form-group">
                    <label for="price">Deskripsi</label>
                    <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <a href="#" class="btn btn-success" onClick="return runClick(event,'descriptions',null)">Simpan perubahan</a>
            </div>

            </div>
        </div>

        <div class="box-content" id="vm" style='display:none'>
            <h4 class="box-title mb-3">
                Visi & Misi
            </h4>
            <div class="table-responsive">
                <div class="table-responsive">
                <!-- <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                    <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                    <input type="hidden" name="picture" id="picture" require>
                    <img src="" id="preview" alt="" width="100%">
                </div> -->

                <h4 style='font-weight:700'>keterangan:</h4>
                <div class="form-group">
                    <label for="price">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <div class="form-group">
                    <label for="price">Deskripsi</label>
                    <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <a href="#" class="btn btn-success" onClick="return runClick(event,'descriptions',null)">Simpan perubahan</a>
            </div>

            </div>
        </div>
        
        <div class="box-content" id="bl" style='display:none'>
            <h4 class="box-title mb-3">
                Budaya & Logo
            </h4>
            <div class="table-responsive">
                <div class="table-responsive">
                <div class="form-group">
                    <label for="">Logo</label>
                    <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                    <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                    <input type="hidden" name="picture" id="picture" require>
                    <img src="" id="preview" alt="" width="100%">
                </div>

                <h4 style='font-weight:700'>keterangan:</h4>
                <div class="form-group">
                    <label for="price">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <div class="form-group">
                    <label for="price">Deskripsi</label>
                    <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <a href="#" class="btn btn-success" onClick="return runClick(event,'descriptions',null)">Simpan perubahan</a>
            </div>

            </div>
        </div>

        <div class="box-content" id="lh" style='display:none'>
            <h4 class="box-title mb-3">
                Landasan Hukum
            </h4>
            <div class="table-responsive">
                <div class="table-responsive">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" id="file2" class="form-control" onchange="readURL(this,'preview')">
                    <small id="err-picture" style="display:none" class="form-text text-danger">.</small>
                    <input type="hidden" name="picture" id="picture" require>
                    <img src="" id="preview" alt="" width="100%">
                </div>

                <h4 style='font-weight:700'>keterangan:</h4>
                <div class="form-group">
                    <label for="price">Judul</label>
                    <input type="text" name="judul" id="judul" class="form-control">
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <div class="form-group">
                    <label for="price">Deskripsi</label>
                    <textarea name="caption" class="form-control" id="caption" cols="30" rows="10"></textarea>
                    <small id="err-caption" style="display:none" class="form-text text-danger">.</small>
                </div>
                <a href="#" class="btn btn-success" onClick="return runClick(event,'descriptions',null)">Simpan perubahan</a>
            </div>

            </div>
        </div>
    </div>

</div>