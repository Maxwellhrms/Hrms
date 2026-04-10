// Common Ajax Start
function processFormData(formId, url) {
    // Get the form element
    const form = $(`#${formId}`);
    if (!form.length) {
        console.error("Form not found: ", formId);
        return;
    }

    // Collect form data
    const formData = form.serialize(); // Serializes form inputs into a query string

    // Send AJAX request
	$.ajax({
	    url: baseurl+url,
	    type: 'POST',
	    data: formData,
	    success: function (response) {
	        // console.log("Raw response:", response);
	        try {
	            const jsonResponse = JSON.parse(response); // Ensure it's valid JSON
	            // console.log(jsonResponse.message);
	            if(jsonResponse.error == 200){
	            	$("#response").html("<p style=color:green;>"+jsonResponse.message+"</p>");
	            }else{
	            	$("#response").html("<p style=color:red;>"+jsonResponse.message+"</p>");
	            }
	            
	        } catch (e) {
	            $("#response").html("<p style=color:red;> Unexpected response format! "+jsonResponse.message+"</p>");
	        }
	    },
	    error: function (xhr, status, error) {
	        $("#response").html("<p style=color:red;> An error occurred! "+xhr.responseText+"</p>");
	    }
	});

}
// Common Ajax End

function openpopup(formId = '', url, DBId = '',hidejosn = ''){
    mainurl = baseurl+url;
    $.ajax({
     url: mainurl,
     type: 'POST',
     data: {'id':DBId, 'jsonreject':hidejosn},
     success: function (data) {
        $('#popup_display').html(data);
        	if($('.select').length > 0) {
				$('.select').select2({
			        dropdownParent: $('.applymultiselect'),
			        width: '100%'
			    });
			}
			if($('.datetimepicker').length > 0) {
				$('.datetimepicker').datetimepicker({
					format: 'DD/MM/YYYY',
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

// function builddatatables(formId, url){
// 	console.log(formId);
// 	// Get the form element
//     const form = $(`#${formId}`);
//     if (!form.length) {
//         console.error("Form not found: ", formId);
//         return;
//     }
// 	// Collect form data
//     const formData = form.serialize(); // Serializes form inputs into a query string

//     mainurl = baseurl+url;
//     $.ajax({
//     url: mainurl,
//     type: 'POST',
//     data: formData,
//     success: function (data) {
// 	    $('#display_datatables').html(data);
// 			if($('.datatable').length > 0) {
// 			    var table = $('#example').DataTable( {
// 			        lengthChange: false,
// 			        buttons: [ 
// 			        	'copy',
// 			        	'excel', 
// 			        	{
// 		                    extend: 'pdfHtml5',
// 		                    orientation: 'landscape',
// 		                    pageSize: 'LEGAL'
// 		                },
// 			        	'colvis' 
// 			        	]
// 			    } );
			 
// 			    table.buttons().container()
// 			        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
// 			}

// 	    }
// 	});
// }

// function builddatatables(formId, url) {
//     console.log(formId);

//     // Get the form element
//     const form = $(`#${formId}`);
//     if (!form.length) {
//         console.error("Form not found: ", formId);
//         return;
//     }

//     // Collect form data
//     const formData = form.serialize();

//     // Make AJAX call
//     const mainurl = baseurl + url;
//     $.ajax({
//         url: mainurl,
//         type: 'POST',
//         dataType: 'json', // Expect JSON response
//         data: formData,
//         success: function (response) {
//             // Clear existing table
//             $('#display_datatables').empty();

//             if (!response.columns || !response.data) {
//                 console.error("Invalid response format");
//                 return;
//             }

//             // Build table HTML dynamically
//             let tableHtml = `<table id="example" class="datatable display nowrap" style="width:100%">
//                                 <thead><tr>`;
//             response.columns.forEach(col => {
//                 tableHtml += `<th>${col}</th>`;
//             });
//             tableHtml += `<th>Actions</th></tr></thead><tbody>`;

//             response.data.forEach(row => {
//                 tableHtml += `<tr>`;

//                 // Dynamically populate row data
//                 response.columns.forEach(col => {
//                     if (col === 'Name') {
//                         // Make "Name" column a clickable link
//                         tableHtml += `<td>
//                             <a href="/redirect-url?name=${encodeURIComponent(row[col])}" target="_blank">${row[col]}</a>
//                         </td>`;
//                     } else {
//                         tableHtml += `<td contenteditable="true">${row[col] || ''}</td>`;
//                     }
//                 });

//                 // Add an "Edit" button
//                 tableHtml += `
//                     <td>
//                         <button class="btn btn-primary edit-row-btn" data-row='${JSON.stringify(row)}'>Edit</button>
//                     </td>`;
//                 tableHtml += `</tr>`;
//             });

//             tableHtml += `</tbody></table>`;
//             $('#display_datatables').html(tableHtml);

//             // Initialize DataTables with export and column visibility options
//             const table = $('#example').DataTable({
//                 lengthChange: false,
//                 buttons: [
//                     'copy',
//                     'excel',
//                     {
//                         extend: 'pdfHtml5',
//                         orientation: 'landscape',
//                         pageSize: 'LEGAL'
//                     },
//                     'colvis'
//                 ]
//             });

//             table.buttons().container()
//                 .appendTo('#example_wrapper .col-md-6:eq(0)');

//             // Add event listener for edit buttons
//             $('.edit-row-btn').on('click', function () {
//                 const rowData = JSON.parse($(this).data('row'));
//                 console.log('Edit button clicked for row:', rowData);
//                 // Add custom edit logic here
//             });
//         },
//         error: function (xhr, status, error) {
//             console.error("AJAX error: ", error);
//         }
//     });
// }


// function buildDynamicTable(formId, url,displayid='') {
//     // Get the form element and serialize its data
//     const form = $(`#${formId}`);
//     if (!form.length) {
//         console.error("Form not found: ", formId);
//         return;
//     }
//     const formData = form.serialize();
//     var placeid = 'display_datatables';
//     if(displayid !=''){
//        placeid = formId+'display_datatables'; 
//     }
    
//     const rptid = `dynamicTable${formId}`;

//     // Build the AJAX request
//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: formData,
//         dataType: 'json', // Expect JSON response
//         success: function (response) {
//             // Validate the response structure
//             if (!response.columns || !response.data) {
//                 console.error("Invalid response format");
//                 return;
//             }

//             // Generate the table dynamically
//             let tableHtml = `<table id="${rptid}" class="table table-striped custom-table mb-0 datatable display nowrap" style="width:100%">
//                                 <thead>
//                                     <tr>`;

//             // Add columns to the table header
//             response.columns.forEach(col => {
//                 tableHtml += `<th>${col}</th>`;
//             });
//             tableHtml += `</tr></thead><tbody>`;

//             // Add data to the table body
//             response.data.forEach(row => {
//                 tableHtml += `<tr>`;
//                 response.columns.forEach(col => {
//                 	tableHtml += `<td>${row[col]}</td>`;
//                 });
//                 tableHtml += `</tr>`;
//             });

//             tableHtml += `</tbody></table>`;

//             // Replace the content of the display area with the table
//             $('#'+placeid).html(tableHtml);

//             // Initialize DataTables with export and column visibility options
//             const table = $(`#${rptid}`).DataTable({
//                 lengthChange: false,
//                 buttons: [
//                     'copy',
//                     'excel',
//                     {
//                         extend: 'pdfHtml5',
//                         orientation: 'landscape',
//                         pageSize: 'LEGAL'
//                     },
//                     'colvis'
//                 ]
//             });

//             // Append DataTable buttons to the wrapper
//             table.buttons().container()
//                  .appendTo(`#${rptid}_wrapper .col-md-6:eq(0)`);
//         },
//         error: function (xhr, status, error) {
//             console.error("AJAX error: ", error);
//         }
//     });
// }



function buildDynamicTable(formId, url, displayid = '') {
    // Get the form element
    const form = $(`#${formId}`);
    if (!form.length) {
        console.error("Form not found:", formId);
        return;
    }

    var placeid = 'display_datatables';
    if (displayid !== '') {
        placeid = formId + 'display_datatables';
    }

    const rptid = `dynamicTable${formId}`;

    // Create FormData object to support file uploads
    const formData = new FormData(form[0]);

    // Build the AJAX request
    $.ajax({
        url: url,
        type: 'POST',
        data: formData,
        dataType: 'json', // Expect JSON response
        contentType: false, // Prevent jQuery from setting content type
        processData: false, // Prevent data from being processed (needed for FormData)
        success: function (response) {
            // Check if 'error' key exists in response
            if ('error' in response && response.error !== 200) {
                alert(response.message ? response.message : "An unknown error occurred!");
                return false;
            }
            if ('error' in response && response.error == 200) {
                alert(response.message ? response.message : "An unknown error occurred!");
                return false;
            }


            // Validate the response structure
            if (!response.columns || !response.data) {
                console.error("Invalid response format");
                return;
            }

            // Generate the table dynamically
            let tableHtml = `<table id="${rptid}" class="table table-striped custom-table mb-0 datatable display nowrap" style="width:100%">
                                <thead>
                                    <tr>`;

            // Add columns to the table header
            response.columns.forEach(col => {
                tableHtml += `<th>${col}</th>`;
            });
            tableHtml += `</tr></thead><tbody>`;

            // Add data to the table body
            response.data.forEach(row => {
                tableHtml += `<tr>`;
                response.columns.forEach(col => {
                    tableHtml += `<td>${row[col]}</td>`;
                });
                tableHtml += `</tr>`;
            });

            tableHtml += `</tbody></table>`;

            // Replace the content of the display area with the table
            $('#' + placeid).html(tableHtml);

            // Initialize DataTables with export and column visibility options
            const table = $(`#${rptid}`).DataTable({
                lengthChange: false,
                buttons: [
                    'copy',
                    'excel',
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    },
                    'colvis'
                ]
            });

            // Append DataTable buttons to the wrapper
            table.buttons().container()
                .appendTo(`#${rptid}_wrapper .col-md-6:eq(0)`);
        },
        error: function (xhr, status, error) {
            // console.log(xhr);
            // console.log(status);
            // console.log(error);
            console.error("AJAX error:", error);
        }
    });
}




    // Function to handle selection logic
    function handleMultiSelect(selectElement) {
      const options = Array.from(selectElement.options); // Get all options
      const allOption = options.find(option => option.value === 'all'); // "All" option
      const selectedOptions = options.filter(option => option.selected); // Currently selected options

      if (allOption.selected) {
        // If "All" is selected, select all options
        options.forEach(option => (option.selected = true));
      } else {
        // If "All" is deselected, check if other options are selected
        const isAnySelected = selectedOptions.length > 0;
        if (!isAnySelected) {
          // If nothing else is selected, deselect everything
          options.forEach(option => (option.selected = false));
        } else {
          // Deselect "All" if other options are selected
          allOption.selected = false;
        }
      }

      // Update displayed selected items
      updateSelectedItems(selectElement);
    }

    // Function to update the displayed selected items
    function updateSelectedItems(selectElement) {
      const selectedValues = Array.from(selectElement.selectedOptions).map(option => option.text);
      const displayElement = document.getElementById('selectedItems');
      displayElement.textContent = selectedValues.length ? selectedValues.join(', ') : 'None';
    }
