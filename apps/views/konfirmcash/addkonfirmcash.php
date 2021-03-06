<br/>
<br/>
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/datepicker/datepicker3.css">


<!-- bootstrap datepicker -->
<script src="<?php echo base_url();?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>
     

    <div class="row">
    <div class="col-md-1 col-xs-0">
    </div>
    <div class="col-md-10 col-xs-12">
<div class="box box-danger">


<div class="box-header">
<h3 class="box-title">Form Pembayaran via Cash</h3>
</div>
<div class="box-body">

<form id="form_submit" name="form_submit" enctype="multipart/form-data" method="post" action="<?php echo $form_action;?>">



 <table class="table">

        




            <tr>
                <td width="30%"><strong>Tagihan</strong>
                </td>
                <td>
                    #<?php echo $data['id_tagihan'];?> - <?php echo $data['nama_kategori_pembayaran'];?> <?php echo $data['nama_jenis_semester'];?> <?php echo $data['tahun_akademik'];?>
                </td>
            </tr>

            <tr>
                <td width="30%"><strong> Mahasiswa</strong>
                </td>
                <td>
                   <?php echo $data['nama_lengkap'];?> (<?php echo $data['nama_prodi'];?> - <?php echo $data['nama_jenjang'];?>)                  
                </td>
            </tr>

             <tr>
                <td width="30%"><strong> Nomor Transaksi</strong>
                </td>
                <td>
                  <input type="text" class="form-control" name="no_transaksi" readonly="" value="Otomatis">
                </td>
            </tr>

               <tr>
                <td width="30%"><strong> Metode Pembayaran</strong>
                </td>
                <td>
                   <select name="jenis_pembayaran" id="jenis_pembayaran" class="form-control">
                   <option value ="Langsung">Bayar Langsung</option>
                   <!--
                   <option value ="Beasiswa">Beasiswa</option>
                   <option value ="Bank">Transfer Bank</option>
                   -->
                   </select>                  
                </td>
            </tr>


            <tr>
                <td width="30%"><strong> Atas Nama Pengirim / Penyetor</strong>
                </td>
                <td>
                    
                        <div class="form-group">  
                        <div class="input-group">
                        <div class="input-group-addon">
                        <i class="fa fa-users"></i>
                        </div>
                       <input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim" value="" placeholder="Masukkan Nama Pengirim / Atas Nama Rekening Pengirim">
                        </div>
                        </div>

                </td>
            </tr>
            <tr>
                <td><strong>Tanggal Bayar</strong></td>
                <td>  <div class="form-group">  
                        <div class="input-group">
                        <div class="input-group-addon">
                        <i class="fa fa-calendar-check-o"></i>
                        </div>
                       <input type="text" name="tgl_transfer" class="form-control" id="tgl_transfer" value="" placeholder="Masukkan Tanggal Cth. 15/02/2017">
                        </div>
                        </div></td>
            </tr>
            <tr>
                <td><strong>Bank</strong></td>
                <td><div class="form-group">  
                        <div class="input-group">
                        <div class="input-group-addon">
                        <i class="fa fa-bank"></i>
                        </div>
                        <select name="bank_pengirim" id="bank_pengirim" class="form-control">
                        
                        <?php foreach($bank as $databank){?>
                        <option value ="<?php echo $databank['id_bank'];?>"><?php echo $databank['nama_bank'];?></option>
                       <?php } ?>
                        </select>

                        </div>
                        </div></td>
            </tr>
            <tr>
                <td><strong>Jumlah Bayar</strong></td>
                <td>
                <div class="form-group">  
                        <div class="input-group">
                        <div class="input-group-addon">
                        Rp.
                        </div>
                       <input type="number" value=""  name="jumlah_bayar" class="form-control" id="jumlah_bayar" placeholder="Masukkan Nominal Jumlah Bayar Contoh 500000">
                        </div>
                        <span class="small"><em>Tanpa menggunakan titik.</em></span>
                        </div>
                        </td>
            </tr>
            <!--
            <tr>
                
                <td><strong>Upload Bukti Pembayaran</strong></td>
                <td>
                <?php if(!empty($data['gambar_bukti'])){ ?>
              
                <ul class="mailbox-attachments clearfix">
                 <li>
                  <span class="mailbox-attachment-icon has-img"><img src="<?php echo pmb_url();?>public/images/buktitransfer/<?php echo $data['gambar_bukti'];?>" alt="404"></span>

                  <div class="mailbox-attachment-info">
                    <a href="<?php echo pmb_url();?>public/images/buktitransfer/<?php echo $data['gambar_bukti'];?>" target="_BLANK" class="mailbox-attachment-name"><i class="fa fa-camera"></i> <?php echo $data['gambar_bukti'];?></a>
                        <span class="mailbox-attachment-size">
                          1 MB
                          <a href="<?php echo pmb_url();?>public/images/buktitransfer/<?php echo $data['gambar_bukti'];?>" target="_BLANK" class="btn btn-default btn-xs pull-right"><i class="fa fa-cloud-download"></i></a>
                        </span>
                  </div>
                </li>
                </ul>

                <?php } ?>
                    
                    <div class="form-group">  
                        <div class="input-group">
                        <div class="input-group-addon">
                       <i class="fa fa-image"></i>
                        </div>
                       <input type="file" name="gambar_bukti" id="gambar_bukti" class="form-control"  placeholder="Klik untuk Upload File">
                        </div>
                        </div>


                </td>
            </tr>

              <tr>
                <td><strong>Status</strong></td>
                <td>

                    
                  <div class="form-group">                   
                  <div class="btn-group" data-toggle="buttons">
                  <label class="btn btn-danger" id="statusY">
                  <input type="radio" name="status_konfirm" id="status_konfirm" value="Y" autocomplete="off"><i class="fa fa-check-circle-o"></i> Sudah Konfirmasi
                  </label>
                  <label class="btn btn-danger" id="statusT">
                  <input type="radio" name="status_konfirm" id="status_konfirm" value="T" autocomplete="off" ><i class="fa fa-times-circle"></i> Batal Konfirmasi
                  </label>

                  <label class="btn btn-danger" id="statusM">
                  <input type="radio" name="status_konfirm" id="status_konfirm" value="M" autocomplete="off" ><i class="fa fa-spinner"></i> Menunggu Konfirmasi
                  </label>


                  </div>
                  </div>
                </td>
            </tr>
             -->
       
            <input type="hidden" name="id_tagihan" id="id_tagihan" value="<?php echo $data['id_tagihan'];?>" >
                
            </table>

                <br/>
                  <div id="loading" style="text-align: center"></div>
                      
                  <div align="center">

                        <button type="submit" id="simpandata" name="simpandata" class="btn btn-primary btn-lg"><i class="fa fa-sign-in"></i> Simpan</button>
                        
                        <a href="<?php echo base_url().$controller;?>/detailpembayaran/<?php echo $data['id_tagihan'];?>" class="btn btn-warning btn-lg"><i class="fa fa-arrow-circle-left"></i> Kembali</a>

                      
                        </div>

                        </form>
                   
</div>
</div>
</div>
<div class="col-md-2 col-xs-0">
</div>
</div>

    <script>        
    jQuery('#tgl_transfer').datepicker({
    autoclose: true,
    format: 'dd/mm/yyyy'
    });
    </script>
            
    <script>


  jQuery(function () {
  jQuery("input[name='status_konfirm']").change(function(){
  var status=$('input[name=status_konfirm]:checked').val();

   if(status=="Y"){
   document.getElementById("statusY").setAttribute("class", "btn btn-success active");
   document.getElementById("statusT").setAttribute("class", "btn btn-danger");   
   document.getElementById("statusM").setAttribute("class", "btn btn-danger");   
   }else if(status=="M"){
   document.getElementById("statusM").setAttribute("class", "btn btn-success active");
   document.getElementById("statusT").setAttribute("class", "btn btn-danger");     
   document.getElementById("statusY").setAttribute("class", "btn btn-danger"); 
   }else{
   document.getElementById("statusT").setAttribute("class", "btn btn-success active");
   document.getElementById("statusY").setAttribute("class", "btn btn-danger");  
   document.getElementById("statusM").setAttribute("class", "btn btn-danger"); 
   }
 
  });
  });


    </script>