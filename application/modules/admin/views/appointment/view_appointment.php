<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/top_bar'); ?>

<style type="text/css">

.imagePreview {
    width: 100%;
    height: 180px;
    background-position: center center;
  background:url();
  background-color:#fff;
    background-size: cover;
  background-repeat:no-repeat;
    display: inline-block;
  box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
.btn-primary_upload
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}
</style>

<div class="container-fluid">
    <div class="row">

        <?php $this->load->view('include/side_bar'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-0">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom page-title-div px-3">
                <h5 class="title_page">Dashboard > Test Types > View Appointment > <?=$obj->AppoinmentNo?></h5>
            </div>
            

            <div class="row mx-3">
                <div class="col-md-12">
                    <?=$this->session->flashdata('notification')?>
                    <div class="card card_backgroud">
                      <div class="card-header d-flex justify-content-between align-items-center"><label class="card-title">Patient Details</label>
                    <!-- <a href="<?=base_url()?>admin/Create-User" class="btn btn-primary">Add User</a> -->
                      </div>
                      
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="usr">Full Name</label>
                                        <input type="text" disabled=""  required="" value="<?=$obj->FullName?>"  class="form-control" id="usr">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="usr">Email </label>
                                        <input type="text" disabled=""  required="" value="<?=$obj->Email?>"  class="form-control" id="usr">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="usr">Phone Number </label>
                                        <input type="text" disabled=""  required="" value="<?=$obj->Phone?>"  class="form-control" id="usr">
                                      </div>
                                    </div>
                                    
                                    </div>
                                    <!-- <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="usr">Description</label>
                                        <textarea class="form-control" name="form[Description]"><?=$obj->Description?></textarea>
                                      </div>
                                    </div> -->
                                    
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                      <!-- <div class="card-footer">
                        <button type="submit" class="btn btn btn-primary">Save</button>
                      </div> -->
                      
                    </div>
                    <div class="card card_backgroud mt-5 mb-5">
                      <div class="card-header d-flex justify-content-between align-items-center"><label class="card-title">Appointment Detais</label>
                    
                      </div>
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Appointment No:</label>
                                    <input type="text"disabled=""  required="" value="<?=$obj->AppoinmentNo?>" name="form[Price]" class="form-control" id="usr">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Test:</label>
                                    <input type="text" disabled=""  required="" value="<?=$obj->TestTitle?>" name="form[Price]" class="form-control" id="usr">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Date:</label>
                                    <input type="text" disabled=""  required="" value="<?=$obj->AppoinmentDate?>" name="form[Price]" class="form-control" id="usr">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Time:</label>
                                    <input type="text" disabled=""  required="" value="<?=$obj->Time?>" name="form[Price]" class="form-control" id="usr">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Price:</label>
                                    <input type="text" disabled="" required="" value="<?=number_format($obj->Price,2)?>" name="form[Price]" class="form-control" id="usr">
                                </div>
                            </div>
                            <?php 
                        $hidden = array('AppoinmentId' => $obj->AppoinmentId);
                        echo form_open_multipart('admin/appointment/upload_report', '', $hidden);
                        ?>
                        <div class="col-md-6">
                            
                            <?php if ($obj->Status==1): ?>
                                <?php if ($this->session->user->UserType==1||$this->session->user->UserType==2): ?>
                                <div class="custom-file">
                                <label for="usr">Report:</label>
                                <input type="file" required="" name="report">  
                            </div>
                            <?php endif ?>
                            <?php else: ?>
                                
                                <a target="_blank" class="btn btn-primary" href="<?=base_url()?>media/reports/<?=$obj->Report?>">View Report</a>
                                
                            <?php endif ?>
                      </div>
                  </div>
                      <div class="card-footer">
                        <?php if ($this->session->user->UserType==1||$this->session->user->UserType==2): ?>
                        <?php if ($obj->Status==1): ?>
                            <button type="submit" class="btn btn btn-primary">Save</button>
                        <?php endif ?>
                        <?php endif ?>
                      </div>
                    </div>
                    <!-- <div class="card-footer">
                        <button type="submit" class="btn btn btn-primary">Save</button>
                      </div> -->
                    <?= form_close() ?> 
                </div>
            </div>
        </main>
    </div>
</div>
<?php $this->load->view('include/page_footer'); ?>
<?php $this->load->view('include/footer'); ?>
<script type="text/javascript">
    $(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
    $(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
            var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        // if (charCode == 46) {

        // } else {
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
        // }

        return true;
    }
    $( document ).ready(function() {

    var Image = '';
        Image = '<?=$obj->Image?>';
    if (Image) {
        $('#Image_div').css("background-image", "url('<?=base_url()?>media/image/"+Image+"')");
    }

   
   

});
function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if(charCode==46){

        }else{
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        }

        return true;
}
function check_is_discount(){
    // alert('ela');
    if($('#IsDiscount').is(':checked')){
        $("#percentage_div").css("display", "block");
        $("#start_date_div").css("display", "block");
        $("#end_date_div").css("display", "block");

    }else{
        $("#percentage_div").css("display", "none");
        $("#start_date_div").css("display", "none");
        $("#end_date_div").css("display", "none");
    } 
}
$('#datepicker11').datepicker({
    format: 'yyyy-mm-dd'
});
$('#datepicker12').datepicker({
    format: 'yyyy-mm-dd'
});
$( document ).ready(function() {
    check_is_discount();
});
</script>




