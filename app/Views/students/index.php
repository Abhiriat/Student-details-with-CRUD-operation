<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
if(session()->getFlashdata('status')){
  ?>
<div class="alert alert-primary" role="alert">
  <strong>hey</strong><?=session()->getFlashdata('status')?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php
}

?>

<div class="container">
  <h2>Data Table</h2>
  <a href="<?= base_url('students/create')?>" class='btn btn-info btn-sm float -end '>Add</a>            
  <table class="table">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>phone</th>
        <th>URN</th>
        <th>Regular/Reappear</th>
        <th>Course code</th>
        <th>Branch code</th>
        <th>Semester</th>
        <th>Leet/Not Leet</th>
        <th>6 Month Training</th>
        <th>Action</th>
      </tr>

    </thead>
    <tbody>
    <tbody>
    <?php if ($students): ?>
        <?php foreach ($students as $row): ?>
        <tr>
        
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['URN']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['Regular']; ?></td>
            <td><?php echo $row['course_code']; ?></td>
            <td><?php echo $row['branch_code']; ?></td>
            <td><?php echo $row['semester']; ?></td>
            <td><?php echo $row['leet']; ?></td>
            <td><?php echo $row['training']; ?></td>
            <td>
            <a href='<?=base_url("students/edit/{$row['name']}")?>' class='btn btn-warning btn-sm'>Edit</a>
                <a href="<?= base_url('students/delete/'.$row['name'])?>" class='btn btn-danger btn-sm'>Delete</a>



            </td>
        </tr>
        <?php endforeach; ?>
    <?php endif; ?>
</tbody>

    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>