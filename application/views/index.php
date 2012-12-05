<link rel="stylesheet" href="<?php echo base_url(); ?>ckeditor/sample.css" media="all" type="text/css" />
<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/ckeditor.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/config.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>ckeditor/styles.js" ></script>


<script>
    $(document).ready(function() {
              
        $("#loading").hide();
              
        $("#loading").ajaxStart(function(){           
            $(this).show();
        }).ajaxComplete(function(){
            $(this).hide();
        });
       
        function save_description(form_data){     
            var url = "<?php echo site_url('/home/update_description'); ?>";
            $.ajax({
                url : url,
                async : false,
                type : "POST",           
                data:  form_data,
                success : function(data){
                    alert(jQuery.parseJSON(data).msg);
                },
                error : function(data){
                    alert(jQuery.parseJSON(data).msg);
                }                
            });
        }
      
       
        $('#column1-description').submit(function(){
            var form_data = {
                description: $('#column1-editable-description').text(),
                id:$('#column1-id').val()
            };   
            save_description( form_data);
            return false;
        });
        
        $('#column2-description').submit(function(){
            var form_data = {
                description: $('#column2-editable-description').text(),
                id:$('#column2-id').val()
            };   
            save_description(form_data);
            return false;
        });
        
        $('#column1-image').submit(function(e){     
            var form_data = {               
                content_id:$('#column1-id').val(),
                id:$('#column1-image-id').val(),
                file_element_id : 'file1'
            };   
            e.preventDefault();
            var url = "<?php echo site_url('/home/upload_image'); ?>";
            $.ajaxFileUpload({
                url :url,
                secureuri : false,
                fileElementId :'file1',              
                cache : false,
                data  : form_data,
                dataType : 'json',
                success  : function (data){
                    if(data.status != 'error'){
                        $('#column1-image-src').attr('src','<?php echo base_url() ?>'+data.img_path);
                    }else{
                        alert(data.msg);
                    }
                } 
                
            });
            return false;
        });   
        
        $('#column2-image').submit(function(e){     
            var form_data = {               
                content_id:$('#column2-id').val(),
                id:$('#column2-image-id').val(),
                file_element_id : 'file2'
            };   
            e.preventDefault();
            var url = "<?php echo site_url('/home/upload_image'); ?>";
            $.ajaxFileUpload({
                url :url,
                secureuri : false,
                fileElementId :'file2',              
                cache : false,
                data  : form_data,
                dataType : 'json',
                success  : function (data){
                    if(data.status != 'error'){
                        $('#column2-image-src').attr('src','<?php echo base_url() ?>'+data.img_path);
                    }else{
                        alert(data.msg);
                    }
                } 
                
            });
            return false;
        });   
        
       
    });
</script>
<div id="loading"><img src="<?php echo base_url('images/loading.gif'); ?>"/></div>
<?php foreach ($contents as $content): ?>
    <?php if ($content->div_id == 'three-column1'): ?>    
        <div id="three-column1">   
            <input type="hidden" id="column1-id" value="<?php echo $content->id; ?>"/>        

            <img src="<?php echo base_url($content->location . $content->filename); ?>" alt="no-image" id="column1-image-src"/>                    
            <form id="column1-image" method="post"  >
                <input type="hidden" id="column1-image-id" value="<?php echo $content->image_id; ?>"/>
                <input type="file" id="file1" name="file1">
                <input value="Save" type="submit" />               
            </form>

            <div contenteditable="true" > 
                <h4><?php echo $content->title; ?></h4>
            </div>
            <form id="column1-description" >    
                <div contenteditable="true" id="column1-editable-description"> 
                    <p><?php echo $content->description; ?></p>     
                    <input value="Save" type="submit" />
                </div>
            </form>   
        </div>
    <?php endif; ?>
    <?php if ($content->div_id == 'three-column2'): ?>
        <div id="three-column2">
            <input type="hidden" id="column2-id" value="<?php echo $content->id; ?>"/>          

            <img src="<?php echo base_url($content->location . $content->filename); ?>" alt="no-image" id="column2-image-src" />                    
            <form id="column2-image" method="post"  >
                <input type="hidden" id="column2-image-id" value="<?php echo $content->image_id; ?>"/>
                <input type="file" id="file2" name="file2">
                <input value="Save" type="submit" />               
            </form>

            <div contenteditable="true" > 
                <h4><?php echo $content->title; ?></h4>
            </div>
            <form id="column2-description">    
                <div contenteditable="true" id="column2-editable-description" > 
                    <p><?php echo $content->description; ?></p>     
                    <input value="Save" type="submit"  />
                </div>
            </form>   
        </div>       
    <?php endif; ?>
<?php endforeach; ?>

<div id="three-column3"> 
    <div id="col3-title">
        <h3>Join us</h3>
        <p>
            <a target="_blank" title="LDS Facebook" href="https://www.facebook.com/lightningdigitalsignage">Facebook</a>
            |
            <a target="_blank" title="LDS Twitter" href="https://twitter.com/LDigitalSignage">Twitter</a>
        </p>
    </div>
</div>

