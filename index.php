<?php include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/lib/base.class.php'; ?>

<?php include_once $STATIC_ROOT . '/inc/layouts/head.php'; ?>
<?php include_once $STATIC_ROOT . '/inc/layouts/header.php'; ?>

<?php
    $components = [
        new Component('components/header/single-header', 'Single Header'),
        new Component('components/header/full-header', 'Full Header'),
        new Component('components/footer/normal-footer', 'Normal Footer'),
        new Component('components/buttons/normal-button', 'Normal Button'),
        new Component('components/buttons/arrow-button', 'Arrow Button'),
        new Component('components/buttons/filling-button', 'Filling Button'),
    ];
?>
<!-----INTRO---->


<div class="no-temp-container">

    <!-- ASIDE -->
    <?php
        $aside = new Aside('layouts', 'Layouts'); 
        echo $aside->render();
    ?>
    <!-- CONTENTS -->
    <div class="no-temp-contents">
        <div class="no-temp-contents-wrap">
            <?php 
            foreach ($components as $component) {
                    echo $component->render();
                }
            ?>
        </div>
    </div>
</div>

<div class="no-code-copy-toast">
    <i class="fa-solid fa-circle-check"></i>
    Copied to clipboard
</div>


<?php include_once $STATIC_ROOT . '/inc/layouts/footer.php'; ?>