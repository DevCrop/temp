<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.view.php';
?>
<main class="no-board-view no-board-view-default">
    <section class="no-pd-xl--y ">
        <div class="no-container-xl">

            <div class="no-board-view-body">
                <div class="no-board-view-title">
                    <h3 class="no-heading-md">공연 테스트입니다.</h3>
                    <span class="no-body-xl">1970.01.01</span>
                </div>
                <div class="no-board-view-content no-pd-xl--t no-pd-lg--b  ">
                    <div>
                        <p>테스트입니다. 내용을 마음대로 입력해주세요.</p>
                    </div>
                </div>
            </div>

            <div class="no-pd-xl--t --flex-center">
                <a href="/pages/community/qna.php" class="no-btn no-btn__fill --radius-thin">
                    목록으로
                </a>
            </div>
        </div>
    </section>


    <?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>