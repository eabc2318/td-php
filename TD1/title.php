<?php
function start_page($title): void
{
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
<?php
}

function end_page(): void
{
?>
</body>
</html>
<?php
}


start_page('Test');
?>

<hr><br><strong>Test</strong><br><hr>

<?php
end_page();
?>