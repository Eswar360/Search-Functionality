<?php include "core.php"; ?>
<!DOCTYPE html>
<html>
<head>
<title>ArtSearch</title>
<style>
body{margin:0;padding:0;font-family:Arial;background:#f4f4f4}
.box{max-width:600px;margin:60px auto;background:white;border-radius:12px;padding:25px;box-shadow:0 4px 12px rgba(0,0,0,0.1)}
.hd{text-align:center;font-size:28px;color:#444;margin-bottom:20px}
.inp{width:100%;padding:12px;font-size:17px;border-radius:8px;border:1px solid #ccc;margin-bottom:15px}
.btn{width:100%;padding:12px;background:#4b7bec;color:white;border:none;border-radius:8px;font-size:17px;cursor:pointer}
.item{margin-top:20px;padding:15px;border-bottom:1px solid #eee}
.t{font-size:20px;color:#333;margin-bottom:5px}
.d{font-size:15px;color:#666}
</style>
</head>
<body>

<div class="box">
<div class="hd">Search Art</div>
<form method="GET">
<input class="inp" name="q" placeholder="Type art name..." value="<?= isset($_GET['q'])?$_GET['q']:'' ?>">
<button class="btn">Search</button>
</form>

<?php
if(isset($_GET['q'])){
$q=$_GET['q'];
$stmt=$con->prepare("SELECT * FROM artlist WHERE atitle LIKE ?");
$like="%".$q."%";
$stmt->bind_param("s",$like);
$stmt->execute();
$res=$stmt->get_result();
while($r=$res->fetch_assoc()){
?>
<div class="item">
<div class="t"><?= $r['atitle'] ?></div>
<div class="d"><?= $r['adesc'] ?></div>
</div>
<?php }} ?>

</div>

</body>
</html>
