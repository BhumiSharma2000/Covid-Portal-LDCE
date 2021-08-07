<!DOCTYPE html>
<html lang="en">
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
<?php include "header.php"?>
  <SECTION style="margin: 50px">
     <img src="img/3.jpg" width="50%" height="400px" style="margin-left: 320px;margin-top: 50px">
     <div class="container">
        <div class="row">
         <form class="form-horizontal login_validator" action="insert2.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
          <?php
          if(isset($id))
          {
            $id=$_GET['flag'];
            if($id==1)
            {
                ?><h1> Data Enter Successfully</h1>
                <?php
            }
          }
          ?>
                                <div class="row">
                                    <div class="col-12">
                                      <table border="1" class="zui-table" width="100%">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                               <tr><td> <label for="u-name" class="col-form-label">Project Name*</label></td>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    
                                                  <td>  <input type="text" name="pname" class="form-control" placeholder="Enter Project Title ..." required></td>
                                                </div>
                                            </div></tr>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                               <tr><td> <label for="u-name" class="col-form-label">Leader Name*</label></td>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                   
                                                   <td> <input type="text" name="lname" class="form-control" placeholder="Enter Name ..." required></td>
                                                </div>
                                            </div>
                                          </tr>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                               <tr><td> <label for="email" class="col-form-label">Leader Email*</label></td>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                   
                                                  <td>  <input type="text" name="lemail" class="form-control" placeholder="Enter Email ..."></td>
                                                </div>
                                            </div></tr>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                               <tr><td> <label for="pwd" class="col-form-label">Leader Contact*</label></td>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <td>   <input type="number" name="lno" class="form-control" placeholder="Enter contact ..."> </td>  </tr>                                         
                                            </div>
                                        </div>
                                      </div>
                                       <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                               <tr><td> <label for="pwd" class="col-form-label">Upload Abstract*</label></td>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                     <td>  <input type="file" id="profile-img" name="abstract"  class="form-control" placeholder="" class="btn btn-warning fileinput-exists" style="width: 300px">    </td>                                        
                                            </div>
                                        </div>
                                      </tr>
                                      </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                               <tr><td> <label for="pwd" class="col-form-label">Upload Video*</label></td>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <td>   <input type="file" id="profile-img" name="image"  class="form-control" placeholder="" class="btn btn-warning fileinput-exists" style="width: 300px">   </td>                                         
                                            </div>
                                        </div>
                                      </tr>
                                      </div> 
                                        
                                        
                                     <div class="form-group row m-t-25">
                                          <tr>
                                            <div class="col-lg-3 text-lg-right">
                                                 <td> </td>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                   
                                                  <td> <button class="btn btn-success btn-tone m-r-5" type="submit" name="submit">
                                                    <i class="fa fa-user"></i>
                                                   Submit
                                                </button> <button class="btn btn-danger btn-tone m-r-5" type="reset" id="clear">
                                                    <i class="fa fa-refresh"></i>
                                                    Reset
                                                </button></td>
                                                </div>
                                            </div></tr>
                                        
                                        </div>
                                    </div>

                                </div>
                              </table>
                            </form>  

        
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