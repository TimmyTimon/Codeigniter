<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
     
        <title>State Info</title>
        <style>.bg{color:red;}
        ol{list-style-type:none;}
        #container{margin:0 auto; width:1000px;}
        #maincontainer{float:left; width:1000px; background-color:white;}
        #content{padding:20px; clear:left; float:left; display:inline; background-color:whitesmoke; width:500px;}
        #header{background-color:blue; padding:10px; text-align:center; background-image:url("state2.jpg");}
        #footer{background-color:blue;text-align:center; padding:20px;clear:left;}
        #sidebar{ width:300%; float:right; padding:15px; margin:auto; display:inline; color:black;}
        </style>
       
    </head>
    <body>
        <div id="container">
            <div id="header" class="jumbotron">
                <h1 class="text-center bg"> The United States!</h1>
            </div>
            <img src="<?php echo base_url();?>images/state2.jpg" alt=""/>
               <div id="maincontainer">
                <div class="row">
                    <div class="col-md-8">
                <p><?php echo $info;?></p>
        
                <br>
                <br>
       <div class="panel panel-danger">
  <div class="panel-heading">The Eastern States include</div>
  <div class="panel-body">
    <ol>
  <li>New York</li>
  <li>New Jersey</li>
  <li>Florida</li>
  <li>Ohio</li>
        </ol>
  </div>
</div>
                <br>
                <br>
      <div class="panel panel-primary">
  <div class="panel-heading">The Western States include</div>
  <div class="panel-body">
    <ol>
   <li>California</li>
    <li>Texas</li>
    <li>Oklahoma</li>
    <li>Kansas</li>
        </ol>
  </div>
</div>  
                <br>
                <br>
        <p> <?php echo $info2?></p>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="stateinfo" class="col-sm-2 control-label"> State</label>
                <div class="col-sm-10">
            <input type="text"  id="state" placeholder="State" name="state">
            </div>
            </div>
            <br>
            <div class="form-group">
                <label for="gfanme" class="col-sm-2 control-label"> Governor First name </label>
                <div class="col-sm-10">
            <input type="text"  id="fname" placeholder="First Name" name="fname">
            </div>
            </div>
            <br>
            <div class="form-group">
             <label for="glanme" class="col-sm-2 control-label"> Governor Last name </label>
             <div class="col-sm-10">
            <input type="text" id="lname" placeholder="Last Name" name="lname">
            </div>
            </div>
            <br>
            <div class="form-group">
                <label for="steam" class="col-sm-2 control-label"> Sports Team </label>
             <div class="col-sm-10">
            <input type="text" id="team" placeholder="Team" name="team">
            </div>
            </div>
            <br>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        <br>
        <div class="row">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="images/state2.jpg" alt="" width='180' height='250'>
    </a>
  </div>
  ...
</div>
        <br>
        <table class="table table-condensed">
            <tr>
            <th>ID</th><br>
            <th>State</th><br>
            <th>First Name</th><br>
            <th>Last Name</th><br>
            <th> Team</th><br>
            </tr>
            
            <?php
  //          echo "<pre>";
            
//            print_r($showdata);die;
            
            foreach($showdata as $row){
              ?>
<tr>
 <td><?php echo$row['ID']; ?></td>
<td><?php echo $row['STATE']; ?></td>
<td><?php echo $row['Fname']; ?></td>
<td><?php echo $row['lname']; ?></td>
<td><?php echo $row['team']; ?></td>
</tr>
<?php } ?> 
            </table>
            <br>
                    </div>
                    <div class="col-md-4">
                <h3>Major News</h3>
            <ol>
                <li><span class="label label-success">New</span> <a href="http://www.wsj.com/articles/poll-finds-hillary-clinton-leads-donald-trump-despite-email-report-1468760582#" target="_blank"> Hillary Clinton leads Trump in latest polls</a></li>
                <li><span class="label label-success">New</span> <a href="http://www.cbc.ca/news/politics/three-amigos-agreements-list-1.3658050" target="_blank">Obama meets with Canadian and Mexico leaders</a></li>
                <li><span class="label label-success">New</span> <a href="http://www.newsmax.com/Newsfront/pentagon-cost-cut-f-35/2016/07/11/id/738062/" target="_blank">Pentagon to cut costs on F35 fighter jets</a></li>
            </ol>
                    </div>
                <div id="footer">
            <p>Copyright (C)2016 Timothy Wanga</p>
        </div>
            </div>
        </div>
        </div>
           <script src="//code.jquery.com/jquery-3.0.0.min.js"></script>
           <script>
             $(document).ready(function(){
                 $("state").keyup(function(){
                     var search=(this).val();
                     var datastring=search;
                     if(search!==''){
                         $.ajax({
                             type:"POST",
                             url:"dbscript.php",
                             data:datastring,
                             success:function(html)
                         });
                     }
                     return false;
                 });
                 
                     });
                     </script>
    </body>