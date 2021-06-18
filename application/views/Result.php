<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Result</h2>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>String 1</th>
        <th>String 2</th>
        <th>Option1</th>
          <th>Option2</th>
      </tr>
    </thead>
    <tbody>


      <tr>
        <td><?php echo $string1; ?></td>
        <td><?php echo $string2; ?></td>
        <td><?php if(!empty($opt1)){echo $opt1; }else{ echo "No String"; } ?></td>
        <td><?php if(!empty($opt2)){echo $opt2; }else{ echo "No String"; } ?></td>
      </tr>

      
    </tbody>
  </table>
  <p>*Option1: <span style="color:red">option1  contain all the characters which are present in string1 but NOT present in string2.</span></p> 
   <p>*Option2: <span style="color:red">option1  contain all the characters which are present in string2 but NOT present in string1.</span></p> 
   
<a href="<?php echo base_url(); ?>" class="btn btn-success" >Check Next String</a>
</div>
</body>
</html>
