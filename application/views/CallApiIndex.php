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
<h2><a  >Online Test 2</a></h2>
  <form class="form-horizontal" action="<?php echo base_url(); ?>CallApis/CallApi_fn" method="POST">
    <div class="form-group">
      <label class="control-label col-sm-2" for="str1">CallApi 1:</label>
      <div class="col-sm-10">
        <button type="submit" name="api_one" class="btn btn-success">Click</button>
      </div>
    </div>
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="str1">CallApi2:</label>
      <div class="col-sm-10">
        <button name="api_two" type="submit" class="btn btn-success">Click</button>
      </div>
    </div>
  

    <div class="form-group">
      <label class="control-label col-sm-2" for="str1">CallApi 3:</label>
      <div class="col-sm-10">
        <button  name="api_three" type="submit" class="btn btn-success">Click</button>
      </div>
    </div>
  
    
    
  </form>
   <h3>Output:<?php if(!empty($result)){ echo $result; }else{ echo ""; } ?></h3>
</div>

</body>
</html>
