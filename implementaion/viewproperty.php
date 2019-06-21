<?php


require_once('header.php');

require_once('class/property.class.php');

$property = new property();

$res = $property->retrieve();


?>
<!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                    </div>

                </div>



                                <tbody>
                                    <?php foreach ($res as $k=>$fn) { ?>
<div class="container-fluid">
  <h1>Hello World!</h1>
  <div class="row">
    <div class="col-sm-3 col-sm-3" style="background-color:lightblue;">
      <p><img src="assets/images/welcome-bg.jpg"></p>

    </div>
    <div class="col-sm-3 col-sm-3" style="background-color:white;"><h>Property Details</h>
        <br>
        <br>



                                       <div>PropertyName:<?php echo $fn->propertyname; ?></div>
                                        <br>

                                            <div> PropertyLocation<?php echo $fn->propertylocation; ?></div>
                                            <br>
                                             <div> propertyDate<?php echo $fn->propertydate; ?></div>
                                             <br>
                                              <div>noofproperty <?php echo $fn->noofproperty; ?></div>
                                              <br>
                                               <div> PropertyPrice<?php echo $fn->propertyprice; ?></div>
    </div>
     <div class="col-sm-3 col-sm-3" style="background-color:lightblue;">

 <a href="edituser.php? id=<?php echo $r->id; ?>" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Order</a>

 <br>
  <br>
<label>Product Review:<textarea name="productreview" placeholder="Please leave your review here"></textarea><button name="reviewsubmitbutton">SubmitReview</button></label>
 <button class="btn btn-warning"><i class="fa fa-phone"> :<?php echo $fn->productprice; ?></i> </a>
    </div>
  </div>
</div>







                                    </tr>
                                <?php } ?>
                                </tbody>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->






<?php
require_once('footer.php');
?>
 <!-- DataTables JavaScript -->

    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>

    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>

    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

      <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
