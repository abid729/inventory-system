
$('input.example').on('change', function() {
	
    $('input.example').not(this).prop('checked', false);  
});


  $(document).ready(function(){

    $(document).on("click", "#option1", function() { 
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
	  var status =this.value;
	  var nameArr = status.split(',');
	  var status1 =nameArr[0];
	  var menu_id =nameArr[1];
	  var usersRole =nameArr[2];
	
	  $.ajax({
        url: "/update_permissions",
        type: "POST",
        data:{
			menu_id: menu_id,
		    status: status1,
		    usersRole: usersRole,
			  },
        cache: false,
		dataType: 'JSON',
        success: function(data){
			$("#id-toast-primary").css("display", "block");
			$("#id-toast-primary").css("height", "50px");
			$("#id-toast-primary").html("Permission Updated Successfully!");
			$("#id-toast-primary").fadeOut(2000);
		}
    });

	}); 
});
function validateNumbersWithDash(key) {
				var character_code = (key.which) ? key.which : event.key_Code
				if (character_code > 31 && (character_code < 48 || character_code > 57) && (character_code < 44 || character_code > 45)) {
				alert("Only Numbers  Are Allowed!");
				return false;
				}
				{
				return true;
				}
			}
			function validateNumbers(key) {
				var character_code = (key.which) ? key.which : event.key_Code
				if (character_code > 31 && (character_code < 48 || character_code > 57)) {
				bootbox.alert("Only Numbers  Are Allowed!");
				return false;
				}
				{
				return true;
				}
			}
			function validateNumbersWithDecimal(key) {
				var character_code = (key.which) ? key.which : event.key_Code
				if (character_code > 31 && (character_code < 46 || character_code > 57)) {
				bootbox.alert("Only Numbers With Decimals Are Allowed!");
				return false;
				}
				{
				return true;
				}
			}
			function validateAlphabets(evt) {
			    evt = (evt) ? evt : event;
			    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
			        ((evt.which) ? evt.which : 0));
			    if (charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 45 || charCode > 46) &&
			        (charCode < 97 || charCode > 122)) {
			        bootbox.alert("Please Enter Alphabets Only");
			        return false;
			    }
			    return true;
			}
			function validateDates() {
			        alert("Please Enter Alphabets Only");
			    }
			function fetch_parentinfo(val) {
			    $.ajax({
			        type: 'post',
			        url:  'fetch_parentinfo.php',
			        data: {
			            get_option: val
			        },
			        success: function (response) {
			            var par_id = response.split(",")[0];
			            var par_name = response.split(",")[1];
			            var par_contact1 = response.split(",")[2];
			             var par_contact2 = response.split(",")[3];
			            var par_address = response.split(",")[4];
			            if(par_id !=undefined)
				           	document.getElementById("par_id").value = par_id;
				        else
				           	document.getElementById("par_id").value = "";

				        if(par_name !=undefined)
				            document.getElementById("par_name").value = par_name;
				        else
				        	document.getElementById("par_name").value = "";

				        if(par_contact1 !=undefined)
				            document.getElementById("par_contact1").value = par_contact1;
				        else
				        	document.getElementById("par_contact1").value = "";

				        if(par_contact2 !=undefined)
				            document.getElementById("par_contact2").value = par_contact2;
				        else
				        	document.getElementById("par_contact2").value = "";

				        if(par_address !=undefined) 	
				         	document.getElementById("par_address").value = par_address;
				         else
				         	document.getElementById("par_address").value = "";
				        }
				    });
		    	}
		    	
		
