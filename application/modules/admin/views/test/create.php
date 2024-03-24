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
                <h5 class="title_page">Dashboard > Test Types > <?=($obj->TestTypeId)?"Edit":"Create"?> Test</h5>
            </div>
            

            <div class="row mx-3">
                <div class="col-md-12">
                    <?=$this->session->flashdata('notification')?>
                    <div class="card card_backgroud">
                      <div class="card-header d-flex justify-content-between align-items-center"><label class="card-title">Test Details</label>
                    <!-- <a href="<?=base_url()?>admin/Create-User" class="btn btn-primary">Add User</a> -->
                      </div>
                      <?php 
                        $hidden = array('TestId' => $obj->TestId);
                        echo form_open_multipart('admin/test/save_form', '', $hidden);
                        ?>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-8">
                                  <div class="row">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="usr">Test Title:</label>
                                        <input type="text" required="" value="<?=$obj->TestTitle?>" name="form[TestTitle]" class="form-control" id="usr">
                                      </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-6">
                                         <div class="form-group">
                                          <label for="usr">Test Category</label>
                                          <select required="" name="form[TestTypeId]" class="form-control" id="sel1">
                                            <option value="">Select Test Category</option>
                                            <?php foreach ($test_type as $k => $va): ?>
                                                <option <?=($va->TestTypeId==$obj->TestTypeId)?"selected":""?> value="<?=$va->TestTypeId?>"><?=$va->TestTitle?></option>
                                            <?php endforeach ?>
                                            
                                            
                                          </select>
                                        </div> 
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="usr">Description</label>
                                        <textarea class="form-control" name="form[Description]"><?=$obj->Description?></textarea>
                                      </div>
                                    </div>
                                    
                                  </div>
                              </div>
                              <div class="col-md-4 imgUp">

                                <label for="usr">Image</label>
                               
                                <label style="color: #a1a1a1"><!-- (800px X 472px) --></label>
                                    <div id="Image_div" class="imagePreview">

                                    </div>
                                    <!-- <img src="<?=base_url()?>media/image/blog/<?=$blog->Thumbnail?>"> -->
                                        <label class="btn btn-primary btn-primary_upload">Upload
                                            <input type="file" name="Image" <?php if (!$obj->TestTypeId) {
                                          echo "required=\"\"";
                                        } ?> class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
                                </div>
                          </div>
                      </div>
                      <!-- <div class="card-footer">
                        <button type="submit" class="btn btn btn-primary">Save</button>
                      </div> -->
                      
                    </div>
                    <div class="card card_backgroud mt-5 mb-5">
                      <div class="card-header d-flex justify-content-between align-items-center"><label class="card-title">Pricing</label>
                    <!-- <a href="<?=base_url()?>admin/Create-User" class="btn btn-primary">Add User</a> -->
                      </div>
                      <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="usr">Price:</label>
                                    <input type="text" required="" onkeypress="return isNumber(event);" value="<?=$obj->Price?>" name="form[Price]" class="form-control" id="usr">
                                </div>
                            </div>
                            <div class="col-md-6">
                                    <label for="usr"></label>
                                    <div class="form-check">
                                      <label class="form-check-label">
                                        <input type="checkbox" onclick="check_is_discount();" class="form-check-input" <?=($obj->IsDiscount==1)?"checked":""?> name="form[IsDiscount]" id="IsDiscount" value="1">Is Discount:
                                      </label>
                                    </div>
                            </div>
                            <div id="percentage_div" style="display: none;" class="col-md-4">
                                <div class="form-group">
                                    <label for="usr">Discount Percentage (%):</label>
                                    <input type="text" onkeypress="return isNumber(event);" value="<?=$obj->Percentage?>" name="form[Percentage]" class="form-control" id="usr">
                                </div>
                            </div>
                            <div  id="start_date_div" style="display: none;" class="col-md-4">
                                <div class="form-group">
                                    <label for="usr">Discount Start Date:</label>
                                    <input type="text"  value="<?=$obj->StartDate?>" name="form[StartDate]" class="form-control" id="datepicker11">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="end_date_div" style="display: none;" class="form-group">
                                    <label for="usr">Discount End Date:</label>
                                    <input type="text" value="<?=$obj->EndDate?>" name="form[EndDate]" class="form-control" id="datepicker12">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn btn-primary">Save</button>
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




