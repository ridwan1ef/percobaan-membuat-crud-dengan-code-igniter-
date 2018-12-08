<div class="contact-form">
                <div class="contact-form-title">
                </div>
                        <form method="POST" action="../Edit_Objek_Wisata_proses" enctype="multipart/form-data">
                        <input type="hidden" name="ID_Objek" value="<?php echo $objek_wisata['ID_Objek'];?>">
                        <input type="hidden" name="foto_lama" value="<?php echo $objek_wisata['Gambar'];?>">
        
                    <div class="col-12 col-md-6">
                        <h3>Nama</h3>
                            <input type="text" name="Nama" value="<?php echo $objek_wisata['Nama'];?>" class="form-control" >
                    </div>
                      <h5>Alamat</h5>
                    <div class="col-12 col-md-6">
                            <input type="text" name="Alamat" <?php echo $objek_wisata['Alamat'];?> class="form-control" >
                    </div>
                      <h5>Jam Buka</h5>
                    <div class="col-12 col-md-6">
                            <input type="time" name="Jam_Buka"  value="<?php echo $objek_wisata['Jam_Buka'];?>"class="form-control" >
                    </div>
                      <h5>Jam Tutup</h5>
                    <div class="col-12 col-md-6">
                            <input type="time" name="Jam_Tutup" value="<?php echo $objek_wisata['Jam_Tutup'];?>"class="form-control" >
                    </div>
                    <h4>Rating</h4>
                    <div class="col-12 col-md-6">
                            <input name="rating" value="<?php echo $objek_wisata['Rating'];?>" class="form-control" id="Message"  ></textarea>
                    </div>
                    <h5>Keterangan Objek Wisata</h5>
                    <div class="col-12 col-md-6">
                            <textarea name="Keterangan_Objek_Wisata" value="<?php echo $objek_wisata['Keterangan_Objek_Wisata'];?>" class="form-control" id="Message" ></textarea>
                    </div>
                    <h5>Gambar</h5>
                    <div class="col-12 col-md-6">
                            <input type="file" name="Gambar" class="form-control" >
                            <img src="<?php echo base_url().'images/'.$objek_wisata['Gambar'];?>"width="50%" height="60">
                    </div><br /><br /><br />
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