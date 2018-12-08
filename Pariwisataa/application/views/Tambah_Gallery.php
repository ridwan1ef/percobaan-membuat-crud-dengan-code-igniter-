<div class="contact-form">
                <div class="contact-form-title">
                </div>
                <form  method="POST" action="./simpan_Gallery" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" name="ID_Gallery" class="form-control" placeholder="ID_Gallery">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="ID_Objek" class="form-control" placeholder="ID_Objek">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="Judul_Gambar" class="form-control" placeholder="Judul_Gambar">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="Keterangan_Gambar" class="form-control" placeholder="Keterangan_Gambar">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="file" name="Gambar" class="form-control" placeholder="Images">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn dorne-btn">Send</button>
                            <button type="reset" class="btn dorne-btn">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Map Area -->
        <div class="dorne-map-area equal-height">
            <div id="googleMap"></div>
        </div>
    </div>
    <!-- ***** Contact Area End ***** -->