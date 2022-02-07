<?php 
require_once './header.php';
?>
<?php 
require_once './nav.php';
require_once './pagesData.php';
?>
<div class="section-container">
    <?php if(empty($_GET['pid'])): ?>
	<h1>'Bests of the best'</h1>
	<p>Proin iaculis purus consequat sem cure.</p>


<div class="best_list">
    <?php if(!empty($pagesData)): foreach($pagesData as $id => $value):?>

        <div class="item_best">
            <h3><a href="./page5.php?pid=<?php echo $id; ?>" <?php echo $value['name']; ?> </a></h3>
            <div class="auto"> <?php echo $value['auto']; ?> </div>
            <div class="png"> <img src=" <?php echo $value['png']; ?>"> </div>
            <div class="about"> <?php echo $value['aboutMe']; ?> </div>
        </div>

<?php endforeach; endif; ?>
</div>

<?php else:
require_once './best.php'; endif; ?>

</div>


<?php 
require_once './footer.php';
?>