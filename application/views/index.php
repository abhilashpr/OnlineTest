<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2><a href="<?php echo base_url(); ?>" >Online Test 1</a></h2>
  <form class="form-horizontal" action="<?php echo base_url(); ?>Welcome/FindTheString" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="str1">Enter String 1:</label>
      <div class="col-sm-10">
        <input required="" style="text-transform:uppercase" type="text" class="form-control" id="str1" placeholder="Enter Any String" name="str1">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="str2">Enter String 2:</label>
      <div class="col-sm-10">          
        <input required="" style="text-transform:uppercase" type="text" class="form-control" id="str2" placeholder="Enter Any String" name="str2">
      </div>
    </div>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
   <h2><a href="<?php echo base_url(); ?>/CallApis" >Online Test 2</a></h2>
</div>

</body>
</html>
