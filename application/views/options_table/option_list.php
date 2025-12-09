		<!-- Page Wrapper -->
        <div class="page-wrapper">
					
                    <!-- Page Content -->
                      <div class="content container-fluid">
                           <!-- Page Header -->
                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">Options Table</h3>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/dashboard">Dashboard</a></li>
                                            <li class="breadcrumb-item active">Mobile User Permissions</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->
                            <div class="row" style="margin-top: 10px;">
                            <div class="container">

  <!-- Button to Open the Modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    New Option
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Create new option</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post" id="create_option" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
  <label for="field_name">Option Name:</label>
  <input type="text" class="form-control" id="field_name" disabled>
</div>
          <div class="form-group">
          <span  style="color:red;">Note: value must not be 0 or empty</span><br>
  <label for="fied_value">Value:</label>
  <input type="text" class="form-control numeric" id="fied_value" onkeypress="return /[0-9a-zA-Z]/i.test(event.key)">
  

  <span id="fied_value_err" style="color:red;"></span>
</div>
          <div class="form-group">
  <label for="descr">Description:</label>
  <input type="text" class="form-control" id="descr">
</div>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="submit" id="submit" class="btn btn-info" >Submit</button>
        </div>
        
      </div>
    </div>
  </div>
  </form>
</div>
		<div class="col-sm-12">
			<div class="card mb-0">
				<div class="card-header">
					<h4 class="card-title mb-0">Option Table  List</h4>
				</div>
				<div class="card-body">	

					<div class="table-responsive">
                        <table class="datatable table table-stripped mb-0" id="dataTables-example">
							<thead>
								<tr>
								    <th>Sno</th>
									<th>Option Name</th>
									<th>Value</th>
									<th>Description</th>
									<th>Status</th>
                 <th>Action</th>
                 <th style="display:none"></td>

								</tr>
							</thead>
							<tbody>
								<?php
        $status = ['1' => 'ACTIVE', '0' => 'INACTIVE'];
        $sno = 1;
        foreach ($option_list as $key => $value) { ?>
								<tr>
									<td><?php echo $sno; ?></td>
									<td><?php echo $value->field_name; ?></td>
									<td><?php echo $value->field_value; ?></td>
									<td><?php echo $value->descr; ?></td>
                                    <td><?php echo $status[
                                        $value->options_status
                                    ]; ?></td>
                                    <td>   
  <a href="" class="btn btn btn-primary edit">Edit</a>
</td>
								<td style="display:none"><?php echo $value->id; ?></td>
								</tr>


  							<?php $sno++;}
        ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Data Tables -->                
    </div>
    <!-- The Modal -->
  <div class="modal fade" id="myModalupdate">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Update option</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <form method="post" id="update_option" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group" style="display:none">
  <label for="up_field_name">Option Name:</label>
  <input type="text" class="form-control" id="up_field_name"  >
</div>
          <div class="form-group">
          <span  style="color:red;">Note: value must not be 0 or empty</span><br>
  <label for="up_fied_value">Value:</label>
  <input type="text" class="form-control numeric" id="up_fied_value" disabled>
  

  <span id="up_fied_value_err" style="color:red;"></span>
</div>
          <div class="form-group">
  <label for="up_descr">Description:</label>
  <input type="text" class="form-control" id="up_descr" >
</div>

<div class="form-group">
  <label >Status:</label>
  <select class="form-control" id="up_options_status">
    <!-- <option vlaue='1'>Active</option>
    <option value='0'>Inactive</option> -->
  </select>
</div>

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" id="up_submit" class="btn btn-info" onclick="return update_form(this.value) ">Submit</button>
        </div>
        </div>
    </div>
  </div>
  </form>
	  
    <script>
//curent page url 
var url_string=window.location.href;
   //console.log(url_string);
 
 //searching params and sending values to text feilds
   var url = new URL(url_string);
    var field_name = url.searchParams.get("field_name");
    $('#field_name').val(field_name);
    //console.log(field_name)
    </script>
    <script type="text/javascript">
           // special characters are not allowed
        var specialKeys = new Array();
        specialKeys.push(8); //Backspace
        $(function () {
          //https://keycode.info/
            $(".numeric").bind("keypress", function (e) {
                var keyCode = e.which ? e.which : e.keyCode
                var ret = ((keyCode > 64 && keyCode < 91) || (keyCode > 96 && keyCode < 123) || keyCode == 8 || keyCode == 32 || (keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
              return ret;
            });
             $(".numeric").bind("paste", function (e) {
                return false;
            });
            $(".numeric").bind("drop", function (e) {
                return false;
            });
			 $(".numeric").bind("cut", function (e) {
                return false;
            });
			 $(".numeric").bind("copy", function (e) {
                return false;
            });
        });
    </script>
    <script>
    $(document).on('submit', '#create_option', function (e) {
      // preventing from page reload and default actions
      e.preventDefault();
      var f_name=$('#field_name').val();
      var f_val=$('#fied_value').val();
      var f_decr=$('#descr').val();
      f_val=f_val.trim();
      if (f_val == 0){
        $('#fied_value_err').html('pls enter a value');
      } else if(f_val ==''){
        $('#fied_value_err').html('space not allowed');
      }
      else{
              $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>Options_table_controller/option_create",
            data: {
              f_name: f_name,f_val:f_val,f_decr:f_decr
            },
            success: function(data) {
                console.log(data);
                if (data=='already exist')
                {
                  $('#fied_value_err').html('value already exist');
                }
                else{
                  location.reload();
                }
               
            }
        });
      }
      })
    </script>
    <script>
      function update_form(opt_val){
        var f_id=opt_val;
        var f_name=$('#up_field_name').val();
      var f_val=$('#up_fied_value').val();
      var f_decr=$('#up_descr').val();
      var f_status=$('#up_options_status :selected').val();
      console.log(opt_val)
      f_val=f_val.trim();
      if (f_val ==0){
        $('#up_fied_value_err').html('pls enter a value');
      } else if(f_val ==''){
        $('#up_fied_value_err').html('space not allowed');
      }
      else{
              $.ajax({
            type: "post",
            url: "<?php echo base_url(); ?>Options_table_controller/option_update",
            data: {
              f_name: f_name,f_val:f_val,f_decr:f_decr,f_status:f_status,f_id:f_id
            },
            success: function(data) {
                console.log(data);
                if (data=='already exist')
                {
                  $('#up_fied_value_err').html('value already exist');
                }
                else{
                  location.reload();
                }
            }
        });
      }
      }
    </script>
    <script>
      $('a.edit').on('click', function() {
    var myModal = $('#myModalupdate');
    $('#up_options_status option').remove();
    // now get the values from the table
    var up_field_name = $(this).closest('tr').find('td').eq(1).text();
    var up_fied_value = $(this).closest('tr').find('td').eq(2).text();
    var up_descr = $(this).closest('tr').find('td').eq(3).text();
    var up_options_status = $(this).closest('tr').find('td').eq(4).text();
    var up_id = $(this).closest('tr').find('td').eq(6).text();
    if (up_options_status=='ACTIVE')
    {
      $('#up_options_status').append('<option value="1" selected="selected">Active</option>');
      $('#up_options_status').append('<option value="0">Inactive</option>');

    }
    else{
      $('#up_options_status').append('<option value="1" >Active</option>');
      $('#up_options_status').append('<option value="0" selected="selected">Inactive</option>');
    }
    // and set them in the modal:
    $('#up_field_name', myModal).val(up_field_name);
    $('#up_fied_value', myModal).val(up_fied_value);
    $('#up_descr', myModal).val(up_descr);
    $('#up_submit', myModal).val(up_id);
    // and finally show the modal
    myModal.modal({ show: true });

    return false;
});
      </script>
</body>                  