<div class="contact-form">
                <div class="contact-form-title">
                </div>
                <form method="POST" action="./simpan_Objek_Wisata" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" name="ID_Objek" class="form-control" placeholder="ID_Objek">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="Nama" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="text" name="Alamat" class="form-control" placeholder="Your Address">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="time" name="Jam_Buka" class="form-control" placeholder="Open">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="time" name="Jam_Tutup" class="form-control" placeholder="Close">
                        </div>
                        <div class="col-12 col-md-6">
                            <input name="rating" class="form-control" id="Message"  placeholder="rating"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <textarea name="Keterangan_Objek_Wisata" class="form-control" id="Message" placeholder="Keterangan"></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="file" name="Gambar" class="form-control" placeholder="Images">
                        </div>
                        <div class="col-12 col-md-6">
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