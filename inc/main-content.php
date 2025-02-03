<h3><?php echo basename(__FILE__) ?></h3>

<?php include 'parts/tp-vid-thumb.php'; ?>


<style>
.flex-row {
  display: flex;
}
.flex-row article {
  flex: 1;
  flex-direction: row;
}
</style>
<section class="flex-row">

<?php
for ($i = 0; $i < 4; $i++) {
  include 'parts/tp-vid-thumb.php';
}
?>

</section>
