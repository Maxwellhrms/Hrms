

function getcompanybasedprojectsandemployees(){
    var clientid = $('#common_client').val();
    var previouslyseleted = '';
    mainurl = baseurl+'cms/getprojectsbasedonclientfilter';
    $.ajax({
     url: mainurl,
     type: 'POST',
     data: {'clientid':clientid, 'previouslyprojectseleted':previouslyseleted},
     success: function (data) {
        // $(".project_select").each(function() {
        //     $(this).remove();
        // });
        $('#common_project').html(data);
     }
    });
}

function getdashboardbasedonproject(){
   var clientid = $('#common_client').val();
   var project = $('#common_project').val();
   if(project !=''){
       mainurl2 = baseurl+'cms/projectlist';
       $.ajax({
        url: mainurl2,
        type: 'POST',
        data: {'clientid':clientid, 'projectid':project},
        success: function (data) {
           $('#display_adminprojectdetails').html(data);
    var table = $('#datatable').DataTable( {
        lengthChange: false,
        buttons: [ 'excel', 'colvis' ]
    } );
 
    table.buttons().container()
        .appendTo( '#datatable_wrapper .col-md-6:eq(0)' );
        }
       });
   }
}


$("form#addnewproject").submit(function(e) {
    e.preventDefault(); 
    var addprojectclient = $("#addprojectclient").val();
    if (addprojectclient.trim() == "") {
        alert('Please Select Client Project');
        return false;
    }

    var addclientproject = $("#addclientproject").val();
    if (addclientproject.trim() == "") {
        alert('Please Enter Client Project Name');
        return false;
    }

    var addclientprojectshortcode = $("#addclientprojectshortcode").val();
    if (addclientprojectshortcode.trim() == "") {
        alert('Please Enter Client Project Short Code');
        return false;
    }
      var formData = new FormData(this);
      mainurl = baseurl+'cms/saveclientprojectinfo';
      $.ajax({
         url: mainurl,
         type: 'POST',
         data: formData,
         success: function (data) {
        var result = $.parseJSON(data);
              // console.log(data);
         if(result.respone == 200){
            alert('Successfully');
            setTimeout(function(){
               window.location.reload();
            }, 100); 
         } else {
            alert('Failed To Save Please TryAgain Later');
         }
         },
         cache: false,
         contentType: false,
         processData: false
      });      
});

function deleteprojectcmsinfobyid(projectid,status){
    var confirmSubmit = confirm('Are you sure you want to ' + status);
    if (!confirmSubmit) {
        return false;
    }
    mainurl = baseurl+'cms/deleteprojectcmsinfobyid';
    $.ajax({
     url: mainurl,
     type: 'POST',
     data: {'id':projectid, 'status':status},
     success: function (data) {
        var result = $.parseJSON(data);
         if(result.respone == 200){
            alert('Successfully');
            setTimeout(function(){
               window.location.reload();
            }, 100); 
         } else {
            alert('Failed To Save Please TryAgain Later');
         }
     }
    }); 
}



function addpaymentsinfo(paymentprojectid,paymentcompanyid,id){
    mainurl = baseurl+'cms/getpaymentsinfodetails';
    $.ajax({
     url: mainurl,
     type: 'POST',
     data: {'id':id,'paymentprojectid':paymentprojectid,'paymentcompanyid':paymentcompanyid},
     success: function (data) {
        $('#project_payments_display').html(data);
        if($('.datetimepicker').length > 0) {
            $('.datetimepicker').datetimepicker({
                format: 'DD-MM-YYYY',
                icons: {
                    up: "fa fa-angle-up",
                    down: "fa fa-angle-down",
                    next: 'fa fa-angle-right',
                    previous: 'fa fa-angle-left'
                }
            });
        }
     }
    }); 
}

$("form#add_paymentdeatils").submit(function(e) {
    e.preventDefault(); 
    // console.log(paymentprojectid + paymentcompanyid); return false;
    var amountcrediteddata = $("#amountcrediteddata").val();
    if (amountcrediteddata.trim() == "") {
        alert('Please Select Credited Date');
        return false;
    }

    var amountprocessed = $("#amountprocessed").val();
    if (amountprocessed.trim() == "") {
        alert('Please Enter Amount Processed');
        return false;
    }

    var amountcredited = $("#amountcredited").val();
    if (amountcredited.trim() == "") {
        alert('Please Enter Amount Credited');
        return false;
    }


    var creditedto = $("#creditedto").val();
    if (creditedto.trim() == "") {
        alert('Please Enter Credited To');
        return false;
    }

    var creditedbankname = $("#creditedbankname").val();
    if (creditedbankname.trim() == "") {
        alert('Please Enter Credited Bank Name');
        return false;
    }

    var creditedbanknamerefrence = $("#creditedbanknamerefrence").val();
    if (creditedbanknamerefrence.trim() == "") {
        alert('Please Enter Credited Bank Refrence');
        return false;
    }

    var creditedbankifsc = $("#creditedbankifsc").val();
    if (creditedbankifsc.trim() == "") {
        alert('Please Enter Credited Bank IFSC');
        return false;
    }
      var formData = new FormData(this);
      mainurl = baseurl+'cms/savepaymentsinfo';
      $.ajax({
         url: mainurl,
         type: 'POST',
         data: formData,
         success: function (data) {
        var result = $.parseJSON(data);
              // console.log(data);
         if(result.respone == 200){
            alert('Successfully');
            setTimeout(function(){
               window.location.reload();
            }, 100); 
         } else {
            alert('Failed To Save Please TryAgain Later');
         }
         },
         cache: false,
         contentType: false,
         processData: false
      });      
});

function gettaxes(){
    var am = $('#amountprocessed').val();
    var ta = $('#amounttaxpercent').val();
    var taxmount = (am * ta) / 100;
    $('#amounttax').val(taxmount);
    var total = am - taxmount;
    $('#amountcredited').val(total);
}