<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <h2 class='text-center my-5'>REGISTRATION FORM</h2>
    <form class="row g-3 border" action="<?php echo site_url('Home/student_record');?>" method="POST">
  <div class="col-md-6">
    <label for="name" class="form-label">Firstname</label>
    <input type="text" name='name' class="form-control" id="name">
  <!-- </div>
  <div class="col-md-6">
    <label for="lname" class="form-label">Lastname</label>
    <input type="text" name="lname" class="form-control" id="inputEmail4">
  </div> -->
  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
<!--   
  <div class="col-12">
    <label for="Address" name="Address" class="form-label">Address</label>
    <input type="text" class="form-control" name="Address" id="Address" placeholder="1234 Main St">
  </div> -->
  <!-- <div class="col-12">
    <label for="Address2" class="form-label">Address 2</label>
    <input type="text" class="form-control"  name="Address2" id="Address2" placeholder="Apartment, studio, or floor">
  </div>
   -->
  <div class="col-md-2">
    <label for="URN" class="form-label">URN </label>
    <input type="text" name="URN" class="form-control" id="URN">
  </div>
  
  <div class="col-md-2">
    <label for="phone" class="form-label">phone </label>
    <input type="number" name="phone" class="form-control" id="phone">
  </div>
  <!-- <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="radio" value="Regular"id="Regular" name="usertype">
      <label class="form-check-label" for="gridCheck1">
        Regular
      </label>
    </div>
    <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="radio" value="Hosteler" id="Hosteler"  name="usertype">
      <label class="form-check-label" for="gridCheck">
        Hosteler 
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
    </div>
    
</body>
</html>