<?php include 'inc/header.php'; ?>
<?php
$pageid = mysqli_real_escape_string($db->link, $_GET['pageid']);
if (!isset($pageid) || $pageid == NULL) {
    header("Location:404.php");
}else{
    $id = $pageid;
}
?>
<?php
    $query = "SELECT * FROM tbl_page WHERE id='$id'";
    $pages = $db->select($query);
    if ($pages) {
       while ($result = $pages->fetch_assoc()) { 
?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">			
				<h2><?php echo $result['name']; ?></h2>
				<?php echo $result['body']; ?>
			</div>
		</div>
<?php } } else {header("Location:404.php");} ?>

<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/footer.php'; ?>