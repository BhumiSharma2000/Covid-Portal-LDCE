<!DOCTYPE html>
<html lang="en">
<?php include "connection.php"?>
<?php include "header.php"?>
<head>
<style type="text/css">.zui-table {
    border: solid 1px #DDEEEE;
    border-collapse: collapse;
    border-spacing: 0;
    font: normal 13px Arial, sans-serif;
}
.zui-table thead th {
    background-color: #DDEFEF;
    border: solid 1px #DDEEEE;
    color: #336B6B;
    padding: 10px;
    text-align: left;
    text-shadow: 1px 1px 1px #fff;
}
.zui-table tbody td {
    border: solid 1px #DDEEEE;
    color: #333;
    padding: 10px;
    text-shadow: 1px 1px 1px #fff;
}</style></head>
 <img src="img/1.jpg" width="50%" style="margin-left: 320px;margin-top: 50px">
  <SECTION style="margin: 50px">
     <div class="container">
      
        <div class="row">
          <div class="col-md-12">
          <table border="1" class="zui-table" width="100%">

            <tr></tr>
            <tr style="text-align:  center; font-size: 18px">
<B>
              <td ><b >No.</b></td>
              <td><b>Project Name</b></td>
              <td><b>Name</b></td>
              <td><b>Abstract</b></td>
              <td><b>Video</b></td>
            </tr>
            <?php

                $a="SELECT * FROM data";
                $b=mysqli_query($con,$a);
                
                while($c=mysqli_fetch_array($b))
                {
                  ?>
                  <tr>
                    
                    <td><?php echo $c['no.'];?></td>
                    <td><?php echo $c['Project_name'];?></td>
                    <td><?php echo $c['name'];?></td>
                    <td><a href="<?php echo $c['Abstract'];?>" target="_blank">View</a></td>
                    <td><a href="<?php echo $c['Video'];?>" target="_blank">View</a></td>
                  </tr>
            <?php
                }
            ?>
            

          </table>
        
      </div>
      <div class="col-md-6">
       
      </div>
    </div>
  </SECTION>
 
  <!--/ banner-->


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
<?php include "footer.php"?>