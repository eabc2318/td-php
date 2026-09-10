<?php
require_once 'utils.php';

start_page('Date en php');
?>

<h1><br><strong>Date format anglais</strong><br></h1>

<?php
$jour = date('l F d, 2005'); 
?>

<p><?php echo $jour;?></p>


<?php
end_page();
?>