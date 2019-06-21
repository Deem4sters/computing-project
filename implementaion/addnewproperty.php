<?php
require_once('dashboardheader.php');
require_once('class/property.class.php');
$property = new property;

if(isset($_POST['addpropertysubmit']))
{
  $property = $property->save();
  if(is_integer($property))
  {
    $msg = 'Property Successfully Added';
  }
  else
  {
    $msg = 'Unsuccessful';
  }
}
?>

<div class="pageTitle">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <h1 class="page-heading">Property Adding</h1>
      </div>
      <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="#.">Home</a> / <span>Add New Property</span></div>
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
                    <label> Property Name:</label>
                  <input type="text" name="propertyname" class="form-control" placeholder="Property Name"  required>
                </div>


                    <div class="formrow">
                        <label>property Location</label>
                        <input type="text" name="propertylocation" class="form-control" placeholder="property Location" required>
                    </div>
               <div class="formrow">
           <label>propertydate:</label>
           <input type="date" name="propertydate" class="form-control" placeholder="property date" required>
           </div>

                    <div class="formrow">
                        <label>noofproperty:</label>
                        <input type="number"  class="form-control " placeholder="noofproperty" name="noofproperty" required>
                    </div>


                    <div class="formrow">
                        <label>Property Price:</label>
                        <input type="number"  name="propertyprice" class="form-control " placeholder="Price in Rupees"
                    </div>
                      <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" class="form-control" name="image" required>
                                        </div>
                    <br>
                     <form action="">
                      <input type="radio" name="negotiable" value="Negotiable"> Negotiable
                      <input type="radio" name="notnegotiable" value="Not Negotiable"> Not Negotiable
                    </form>

<br>
                  <br>
                    <div class="formrow">
                        <label>Phone Number</label>
                        <input type="number"  class="form-control " placeholder="Phone Number" name="phonenumber" required>
                    </div>


              <input type="submit" name="addpropertysubmit" id="submitbutton" class="btn" value="Add Property">

            </div>

              </form>
          </div>
		  </div>
      </div>

   </div>

 </div>

 <?php
include('footer.php');
?>
