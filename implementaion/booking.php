<?php
require_once('header.php');
require_once('class/booking.class.php');
$booking = new booking;

if(isset($_POST['bookingsubmit']))
{
  $booking = $booking->save();
  if(is_integer($booking))
  {
    $msg = 'Booking Successful';
  }
  else
  {
    $msg = 'Booking Unsuccessful';
  }
}
?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Property Booking</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Property Booking</span></div>
      </div>
    </div>
  </div>
</div>
<!-- Page Title End -->
<div class="listpgWraper">
  <div class="container">
    <div class="row">

        <div class="userccount">
        <div class="tab-content">
        <form action="" method="post">
            <?php if(isset($msg))
            echo $msg;
           ?>
         <div id="wsell" class="formpanel tab-pane fade in active">
         <div class="formrow">
         <label>Email:</label>
         <input type="email" name="email" class="form-control" placeholder="email" required>
         </div>

           <div class="formrow">
                    <label> Phone Number:</label>
                  <input type="number" name="phonenumber" class="form-control" placeholder="Phone Number" required>
                </div>
          <div class="formrow">
                    <label> Property Name:</label>
                  <input type="text" name="propertyname" class="form-control" placeholder="Product Name"  required>
                </div>


                    <div class="formrow">
                        <label>Property Location</label>
                        <input type="text" name="propertylocation" class="form-control" placeholder="propertylocation" required>
                    </div>


                    <div class="formrow">
                        <label>noofproperty:</label>
                        <input type="number"  class="form-control " placeholder="Product Quantity" name="noofproperty" required>
                    </div>


                    <div class="formrow">
                        <label>Property Price:</label>
                        <input type="number"  class="form-control " placeholder="Negotiable through manual communication" name="propertyprice" required>
                    </div>

              <input type="submit" name="bookingsubmit"id="submitbutton" class="btn" value="Book">

            </div>

              </form>
          </div>
		  </div>
      </div>

   </div>
<?php
include('footer.php');
?>
