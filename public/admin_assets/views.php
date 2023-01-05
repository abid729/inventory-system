

<!-- working start here -->

        <!-- fee_types start here-->

        

          <div class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                <?php echo $lang['fee_types']; ?>
                
              </h1>
              
              <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
              </div>
              
            </div>

            <div class="card bcard h-auto">

                <table id="datatable" data-page-length='100' class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
                  <!-- add `collapsed` by default ... it will be removed by default -->
                  <!-- thead with .sticky-nav -->
                  <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
                    <tr>
                      <th class="td-toggle-details border-0 bgc-white shadow-sm">
                        <i class="fa fa-angle-double-down ml-2"></i>
                      </th>

                      <th style="text-align: center; width: 5%" class="border-0 bgc-white pl-3 pl-md-4 shadow-sm">
                        <?php echo $lang['s_no']; ?>
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['name']; ?>
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['description']; ?>
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['type']; ?>
                      </th>
                       <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['effect']; ?>
                      </th>
                       <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['refundable']; ?>
                      </th>
                       <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['for']; ?>
                      </th>
                       <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['amount_type']; ?>
                      </th>
                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['amount']; ?>
                      </th>
                      <th class="border-0 bgc-white shadow-sm w-2 ">
                        <i class="fa fa-cog text-blue-m1 text-120"></i>
                      </th>

                    </tr>
                  </thead>

                  <tbody class="pos-rel">
                  <?php 
                    $srno=1;
                    $stmt = mysqli_query($cc,"SELECT * FROM bma_fee_types
                    WHERE ft_deleted = '0'
                    AND ft_ins_code  = '$ins_code'
                    ");
                  // set the resulting array to associative
                    while($row = mysqli_fetch_array($stmt)){
                    $ft_id = $row['ft_id'];
                    $ft_name = $row['ft_name'];
                    $ft_desc = $row['ft_desc'];
                    $ft_effect = $row['ft_effect'];
                    $ft_type = $row['ft_type'];
                    $ft_for = $row['ft_for'];
                    $ft_amt_type = $row['ft_amt_type'];
                    $ft_amount = $row['ft_amount'];
                    $ft_refund = $row['ft_refund'];
                    ?>
                    <tr class="d-style bgc-h-default-l4">
                     
                      <td class="td-toggle-details pos-rel">
                        <!-- this empty table cell will show the `+` sign which toggles the hidden cells in responsive (collapsed) mode -->

                        <div class="position-lc h-95 ml-1px border-l-3 ">
                          <!-- this decorative highlight border will be shown only when table is collapsed (responsive) -->
                        </div>
                      </td>
                      <td style="text-align: center;" class="pl-3 pl-md-4  pos-rel">
                         <?php echo $srno;
                            $srno++; ?>
                       
                      </td>

                      <td>
                        <span class="text-105">
                       <?php echo $ft_name;?>
                        </span>
                      </td>

                      <td class="text-grey">
                       <?php echo $ft_desc;?>
                      </td>

                      <td class="text-600 text-grey-d1">
                        <?php 
                             echo $fd_type = $DB_Functions->fn_GetFeeTypeDesc($ft_type,1);
                              ?>
                      </td>
                       <td class="text-600 text-grey-d1">
                       <?php 
                            echo $ft_effect = $DB_Functions->fn_GetFeeTypeDesc($ft_effect,0);
                              ?>
                      </td>
                       <td class="text-600 text-grey-d1">
                        
                           <?php echo $ft_refund = $DB_Functions->fn_GetFeeTypeDesc($ft_refund,3);
                              ?>
                      </td>
                       <td class="text-600 text-grey-d1">
                       <?php echo $ft_for = $DB_Functions->fn_GetFeeTypeDesc($ft_for,2);
                              ?>
                      </td>
                        <td class="text-600 text-grey-d1">
                      <?php if($ft_amt_type=='0')
                              echo "Lum Sum";
                            elseif($ft_amt_type=='1')
                              echo "%age";

                            ?>
                      </td>
                        <td class="text-600 text-grey-d1" style="text-align: right;">
                       <?php echo $ft_amount;
                            ?>
                      </td>
                      <td class="align-middle">
                        <div class='d-none d-lg-flex'>
                                <a href="html/edit.php?page_type=<?php echo $page_type_id.",".$ft_id?>" data-rel="tooltip"  title="<?php echo $lang['edit_record']; ?>"  class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-success btn-a-lighter-success">
                                  <i class="fa fa-pencil-alt"></i>
                                </a>

                                <a data-rel="tooltip"  title="<?php echo $lang['delete_record']; ?>" href=javascript:confirmDelete("html/delete.php?page_type=<?php echo $page_type_id.",".$ft_id?>") class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                  <i class="fa fa-trash-alt"></i>
                                </a>
                          </div>
                          <div class='d-lg-none'>
                                 <a href="html/edit.php?page_type=<?php echo $page_type_id.",".$ft_id?>" data-rel="tooltip"  title="<?php echo $lang['edit_record']; ?>"  class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-success btn-a-lighter-success">
                                  <i class="fa fa-pencil-alt"></i>
                                </a>

                                <a data-rel="tooltip"  title="<?php echo $lang['delete_record']; ?>" href=javascript:confirmDelete("html/delete.php?page_type=<?php echo $page_type_id.",".$ft_id?>") class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                  <i class="fa fa-trash-alt"></i>
                                </a>
                          </div>
                        </td>
                    </tr>
                  <?php }
                   ?>
                </tbody>
                </table>
            </div>
          </div>
        <?php } ?>

          <!-- fee_types End-->


  <!-- class_section_fee start here-->

        <?php if($page_type_id == "class_section_fee"){?>

          <div class="page-content container container-plus">
            <div class="page-header mb-2 pb-2 flex-column flex-sm-row align-items-start align-items-sm-center py-25 px-1">
              <h1 class="page-title text-primary-d2 text-140">
                <?php echo $lang['class_section_fee']; ?>
                
              </h1>
              
              <div class="page-tools mt-3 mt-sm-0 mb-sm-n1">
                <!-- dataTables search box will be inserted here dynamically -->
              </div>
              
            </div>

            <div class="card bcard h-auto">

                <table id="datatable" data-page-length='100' class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
                  <!-- add `collapsed` by default ... it will be removed by default -->
                  <!-- thead with .sticky-nav -->
                  <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
                    <tr>
                      <th class="td-toggle-details border-0 bgc-white shadow-sm">
                        <i class="fa fa-angle-double-down ml-2"></i>
                      </th>

                      <th style="text-align: center; width: 5%" class="border-0 bgc-white pl-3 pl-md-4 shadow-sm">
                        <?php echo $lang['s_no']; ?>
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['name']; ?>
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['fee_types']; ?>
                      </th>

                      <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">
                        <?php echo $lang['amount']; ?>
                      </th>
                       <th style="text-align: center;" class="border-0 bgc-white shadow-sm w-2 ">
                        <i class="fa fa-cog text-blue-m1 text-120"></i>
                      </th>
                      </tr>
                  </thead>

                  <tbody class="pos-rel">
                  <?php 
                    $srno=1;
                      $stmt = mysqli_query($cc,"SELECT * FROM bma_class_feemst 
                        WHERE fm_ins_code = '$ins_code' 
                        AND fm_sb_code = '$sb_online' 
                        AND fm_shf_code = '$shf_online' 
                        AND fm_status = 0 
                        AND fm_default = 0");
                        // set the resulting array to associative
                        while($row = mysqli_fetch_array($stmt)){
                        $fm_id      = $row['fm_id'];
                        $fm_cs_code = $row['fm_cs_code'];
                        $fm_ft_id   = $row['fm_ft_id'];
                        $fm_amount  = $row['fm_amount'];
                          ?>
                    <tr class="d-style bgc-h-default-l4">
                     
                      <td class="td-toggle-details pos-rel">
                        <!-- this empty table cell will show the `+` sign which toggles the hidden cells in responsive (collapsed) mode -->

                        <div class="position-lc h-95 ml-1px border-l-3 ">
                          <!-- this decorative highlight border will be shown only when table is collapsed (responsive) -->
                        </div>
                      </td>
                      <td style="text-align: center;" class="pl-3 pl-md-4  pos-rel">
                         <?php echo $srno;
                            $srno++; ?>
                       
                      </td>

                      <td>
                        <span class="text-105">
                      <?php  echo $cs_name = $DB_Functions->fn_GetClassSectionDesc($ins_code,
                              $sb_online,$shf_online,$fm_cs_code);?>
                        </span>
                      </td>

                      <td class="text-grey">
                      <?php echo $fm_ft_name = $DB_Functions-> fn_GetFeeTypeName($fm_ft_id);?>
                      </td>

                      <td class="text-600 text-grey-d1">
                        <?php echo $fm_amount;?>
                      </td>
                       
                      <td class="align-middle">
                        <div class='d-none d-lg-flex'>
                                <a href="html/edit.php?page_type=<?php echo $page_type_id.",".$fm_id?>" data-rel="tooltip"  title="<?php echo $lang['edit_record']; ?>"  class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-success btn-a-lighter-success">
                                  <i class="fa fa-pencil-alt"></i>
                                </a>

                                <a data-rel="tooltip"  title="<?php echo $lang['delete_record']; ?>" href=javascript:confirmDelete("html/delete.php?page_type=<?php echo $page_type_id.",".$fm_id?>") class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                  <i class="fa fa-trash-alt"></i>
                                </a>
                          </div>
                          <div class='d-lg-none'>
                                <a href="html/edit.php?page_type=<?php echo $page_type_id.",".$fm_id?>" data-rel="tooltip"  title="<?php echo $lang['edit_record']; ?>"  class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-success btn-a-lighter-success">
                                  <i class="fa fa-pencil-alt"></i>
                                </a>

                                <a data-rel="tooltip"  title="<?php echo $lang['delete_record']; ?>" href=javascript:confirmDelete("html/delete.php?page_type=<?php echo $page_type_id.",".$fm_id?>") class="mx-2px btn radius-1 border-2 btn-xs btn-brc-tp btn-light-secondary btn-h-lighter-danger btn-a-lighter-danger">
                                  <i class="fa fa-trash-alt"></i>
                                </a>
                          </div>
                        </td>
                    </tr>
                  <?php }
                   ?>
                </tbody>
                </table>
            </div>
          </div>
        <?php } ?>

    <!-- class_section_fee End-->



        <!-- End Working -->

        <?php include "asides.php"; ?>

<!-- 
*****************************************************
***************************************************** 
******  Footer And Js Includes Start From Here ******
*****************************************************
*****************************************************
-->
<?php include "footer_files.php"; ?>

<!-- 
*****************************************************
***************************************************** 
******    Footer And Js Includes Till Here     ******
*****************************************************
*****************************************************
-->



    <script type="text/javascript">
      function confirmDelete(delUrl) {
      bootbox.confirm({
        title: "<?php echo $lang['delete_confirmation'];?>",
        message: "<?php echo $lang['are_you_sure_you_want_to_delete_this'];?>",
        //size: "medium",
        buttons: {
        cancel: {
        label: '<i class="fa fa-times"></i> <?php echo $lang['cancel'];?>'
        },
        confirm: {
        label: '<i class="fa fa-check"></i> <?php echo $lang['confirm'];?>'
        }
        },
        callback: function (result) {
        if(result)
        document.location = delUrl
        }
        });
    }
    </script>
    <script type="text/javascript">
                //Iftikhar Functions
        function submit_unhold(sm_id,type){
  //alert("hel");
        $.ajax({
            type:'POST',
            url:'html/submit_unhold.php',
            data:'sm_id='+sm_id+'&type='+type,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
              success:function(response){
                //alert(response);

                  if(response == 'ok'){
                     window.location.href = "index.php";
                  }
                  else
                    alert("Some Sale In Progress. Please check POS, Refresh");

                  $('.submitBtn').removeAttr("disabled");
                  $('.modal-body').css('opacity', '');
              }
        });
    
}

function show_authdisc(discount_id,discount_name) {
       document.getElementById("discount_name").value = discount_name;
       document.getElementById("discount_key").value = discount_id;
       // alert();
       $.ajax({
       type: 'post',
       url: 'html/show_authdisc.php',
       data: {
       discount_id: discount_id
       },
       success: function (response) {
        //alert(response);
        document.getElementById("authorized_users").innerHTML=response;
      
         }
         });
      
      }
      function submitAuthDisc() {
        // alert("aa");

       var emp_code =document.getElementById("emp_code").value;
       var discount_id =document.getElementById("discount_key").value;
       if(emp_code !=""){
       $.ajax({
       type: 'post',
       url: 'html/submit_authdisc.php',
       data: {
        discount_id: discount_id,emp_code:emp_code
       },
       success: function (response) {
        $("#modalAuthDisc .close").click();
        //document.getElementById("authorized_users").innerHTML=response;
      
         }
         });
      }else{
        bootbox.alert("Please Select User");
      }
      
      }
      </script>
    <script type="text/javascript">
        function submit_qty_transfer(val,row_id) {
          // if(parseInt(ptrnsfr_dummy_qty_transfer)>parseInt(val)){
          // document.getElementById(row_id).value = "0";
          // alert(val);
          $.ajax({        
              type: 'post',
              url: 'html/submit_deal_price.php',
              data: {deal_id: row_id, deal_selling_price: val  
              },
              success: function (response) {
                bootbox.alert({
          message: "Deal Selling Price Successfully Updated",
          backdrop: true
          });
            }
          });
        //}
      //  else{
      //  $.ajax({        
      //        type: 'post',
      //        url: 'submit_qty_transfer.php',
      //        data: {ptrnsfr_dummy_id: row_id, ptrnsfr_dummy_qty_transfer: ptrnsfr_dummy_qty_transfer  
      //        },
      //        success: function (response) {
      //          location.reload();
      //      }
      //    });
      // }
    }

          function confirm_refund(sm_id,type){

        bootbox.prompt({
          title: "Admin Password",
          inputType: 'password',

          callback: function (result) {
             if(result)
                  {
                    var sm_return_reason = document.getElementById("sm_return_reason").value;
                    var sm_refund_reason = document.getElementById("sm_refund_reason").value;

            
                   $.ajax({
                       type: 'post',
                       url: 'html/submit_refund.php',
                       data: {
                        sm_id:sm_id,sm_return_reason:sm_return_reason,admin_password:result,return_type:type,refund_reason:sm_refund_reason
                       },
                       success: function (response) {
                        window.location.href = "html/views.php?page_type=sale_return,Record Updated Successfully";
                        } 
                      });
                        
                      
          }

}
          });

}
   
    </script>


   <?php include('popup_model_hold.php') ?>
   <?php include('popup_authdisc.php') ?>
  <?php include('modeldayclose.php') ?>
  </body>

</html>