 
 <style>
	.spre_ing{
	padding-bottom:10px !important;
	}
	</style>
 
 
 <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
		<div class="box-header spre_ing">
              <h3 class="box-title">Add Service</h3>
            </div>
          <!-- general form elements -->
          <div class="box box-primary">
            
        <p>
            <?php $x=$this->Session->flash(); ?>
                    <?php if($x){ ?>
                    <div class="alert success">
                        <span class="icon"></span>
                    <strong>Success!</strong><?php echo $x; ?>
                    </div>
                    <?php } ?>
        </p>
        <div class="row">
         
  <div class="box-body"> 
            <div class="col-md-12">                
               <?php echo $this->Form->create('Service',array('id'=>'tab','type'=>'file')); ?>
  <div class="box-body"> 
                 <?php 
                    echo $this->Form->input('category_id', ['options' => $Category, 'label' => 'Category:', 'class' => 'form-control','id' => "parentcat", 'empty' => 'Choose category','required']);?> 
                                               
                                               
					<div class="form-group">
                        <label>Sub Category</label>
                         <select name="data[Product][sub_catid]" class="form-control" id="subcat">
                         </select>
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="data[Service][name]" class="form-control span12">                        
                    </div>
					<div class="form-group">
                        <label>Price</label>
                        <input type="number" name="data[Service][price]" class="form-control span12">                        
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="8" cols="6" name="data[Service][description]"  id="edi" ></textarea>
                    </div>

                    <input type="hidden" name="data[Service][created]" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <input type="hidden" name="data[Service][status]" value="1">

               <div class="box-footer">
    <?= $this->Form->button(__('Submit'),array('class'=>'btn btn-success')) ?>
</div>
</div>
    <?= $this->Form->end() ?>

</div>
</div>


</div>
</div>
</div>
</div>
</div>
</section>
    
   <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/tinymce/4.1.6/tinymce.min.js"></script>
    <!--script type="text/javascript">
    tinymce.init({
             selector: "textarea",
             plugins : "media"
    });
    </script-->
	<script>
tinymce.init({
selector: 'textarea',
plugins: [
"code", "charmap", "link"
],
toolbar: [
"undo redo | styleselect | bold italic | link | alignleft aligncenter alignright | charmap code" | "media"
]
});
</script>
<script>
   $(document).on('ready', function() {      
   $('#parentcat').on('change',function(){
                    $.ajax({
			type: "POST",
			url: "http://rakhi.crystalbiltech.com/service/admin/services/subcat",
			data: {
				id: $(this).val() 
			},
			dataType: "json",
			success: function(data) {
                         var  html = '';  
			 jQuery.each(data, function (index, value) {
                                html += '<option value="'+value.SubCategory.id+'">'+value.SubCategory.name+'</option>';
                                }); 
                        $('#subcat').html(html); 
			},
			error: function() {   
				alert('Error');
			}
		});
   }); 
     }); 
     
       

</script> 
	
	
	