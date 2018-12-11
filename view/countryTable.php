<!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Country</th>
      <th scope="col">Continent</th>
    </tr>
  </thead>
  <tbody>
   <?php 
   include_once $_SERVER['DOCUMENT_ROOT']."/server/getCountry.php";
   foreach($country as $countryItem):?>
    <tr>
      <th scope="row"><?php echo $countryItem['id']; ?></th>
      <td><?php echo $countryItem['name']; ?></td>
      <td><?php echo $countryItem['continent']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>