<?php
require __DIR__ . '/inc/functions.inc.php'; 
$data = json_decode(file_get_contents(__DIR__ . '/../data/index.json'), true);
// var_dump($data);
?>

<?php require __DIR__ . '/views/header.inc.php'; ?>

<ul>
    <?php foreach($data as $country => $city): ?>
            <li>
                <a href="city.php?<?php echo http_build_query(['city' => $city['city']]) ?> ">
                    <?php echo e($city['city']); ?>,
                    <?php echo e($city['country']); ?>
                    (<?php echo e($city['flag']); ?>)
                </a>
            </li>
    <?php endforeach; ?>
</ul>


<?php require __DIR__ . '/views/footer.inc.php'; ?>