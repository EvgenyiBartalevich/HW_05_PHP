<?php if (!empty($_GET['pid']) && !empty($pagesData)):
$value = $pagesData[$_GET['pid']];
?>


    <h3><a href="./page5.php?pid=<?php echo $id; ?>" <?php echo $value['name']; ?> </a></h3>
    <div class="auto"> <?php echo $value['auto']; ?> </div>
    <div class="png"> <img src=" <?php echo $value['png']; ?>"> </div>
    <div class="about"> <?php echo $value['aboutMe']; ?> </div>
    
<

    <?php endif; ?>