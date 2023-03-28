<?php

session_start();

require_once ('db.php');

$id = $_SESSION['id'];
$sql="SELECT * FROM akun WHERE id='$id'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

?>

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/lib/bootstrap/css/bootstrap-grid.min.css" rel="stylesheet">
  <link href="/lib/bootstrap/css/bootstrap-reboot.min.css" rel="stylesheet">

  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-ui.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/jquery/jquery.js" type='text/javascript'></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.min.js"></script>

<table class="table table-borderless table-sm">
              <tbody>
                <tr>
                  <th scope="row"></th>
                  <td>Selamat <b><?php echo "" . $row['first_name'] . " " . $row['last_name']. ".";?></b>Tanda tangan berhasil ditambahkan</td>
                </tr>
              </tbody>
            </table>