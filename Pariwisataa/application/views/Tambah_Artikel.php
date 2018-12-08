<div class="contact-form">
                <div class="contact-form-title">
                </div>
                <form method="POST" action="./simpan_Artikel" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" name="ID_Artikel" class="form-control" placeholder="ID_Artikel">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="Judul_Artikel" class="form-control" placeholder="Judul_Artikel">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="Isi" class="form-control" placeholder="Isi">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="Penulis" class="form-control" placeholder="Penulis">
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