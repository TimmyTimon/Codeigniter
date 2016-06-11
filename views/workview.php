<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title><?php echo $title?></title>
    <style>
        body{background-color:grey;}
        h1{position:relative; color:blue;}
        </style>
</head>

        <h1><?php echo $heading?></h1>
        <p> <?php  echo $content ?></p>
        <form class="form-inline">
            <div class="form-group">
           State: <input id="mystates" type="text"  placeholder="Eastern State">
            </div>
            <div class="form-group">
           State: <input id="mystates1" type="text" placeholder="Eastern State">
            </div>
            <div class="form-group">
           State: <input id="mystates2" type="text" placeholder="Eastern State">
                </div>
            <div class="form-group">
           State: <input id="mystates3" type="text" placeholder="Eastern State">
            </div>
           <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        <p > <?php echo$content2?></p>
        <form class="form inline">
             <div class="form-group">
           State: <input id="mystatez" type="text" placeholder="Western State">
            </div>
            <div class="form-group">
           State: <input id="mystatez1" type="text" placeholder="Western State">
            </div>
            <div class="form-group">
           State: <input id="mystatez2" type="text" placeholder="Western State">
                </div>
            <div class="form-group">
           State: <input id="mystatez3" type="text" placeholder="Western State">
            </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
        <table class="table tabl-stripped">
<th>State</th><br/>
<th>State</th><br/>
<th>State</th><br/>
<th>State</th><br/>
<th>State</th><br/>
<th>State</th><br/>
<th>State</th><br/>
<th>State</th><br/>
<?php
if(!empty($showData)){
	foreach($showData as $row)
	{ ?>
<tr>
 
<td><?php echo $row->mystates; ?></td>
<td><?php echo $row->mystates1; ?></td>
<td><?php echo $row->mystates2; ?></td>
<td><?php echo $row->mytates3; ?></td>
<td><?php echo $row->mystatez; ?></td>
<td><?php echo $row->mystatez1; ?></td>
<td><?php echo $row->mystatez2; ?></td>
<td><?php echo $row->mystatez3; ?></td>
 
</tr>
<?php }} ?>
        </table>

</html>




