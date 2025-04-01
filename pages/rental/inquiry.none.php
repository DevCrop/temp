<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
?>


<!-- contents -->
<main class="no-sub">
    <section class="no-sub-inquiry-new-none no-pd-2xl--y">
        <div class="no-container-lg">
            <div class="no-sub-inquiry-new-none__inner">
                <div class="no-sub-inquiry-new-none__box ">
                    <div class="title">
                        <h2 class="no-heading-lg no-section-title">
                            본 페이지는 신한카드홀(뮤지컬 전용 공연장) <br>
                            정기 대관 신청을 위한 페이지입니다.
                        </h2>
                        <div class="txt no-pd-xl--t no-section-content">
                            <p class="no-body-md --fw-regular">
                                그 외 공간(마스터카드홀, NEMO, 연습실)은 별도 공고 없이 수시 대관으로 진행되며,<br>
                                하단 담당자 정보 및 대관안내 페이지를 참고하시어 공간 별 담당자에게
                                직접 문의해 주시기 바랍니다. <br>
                                (메일 및 연락처)
                            </p>
                            <p class="no-body-md --fw-regular">
                                신한카드홀 정기 대관 신청을 희망하실 경우
                                <a href="/pages/board/board.list.php?board_no=8" class="dib --link-line">공지사항 공고문</a>
                                을
                                참고하시어, <br>
                                하단 [대관 신청하기] 버튼을 통해 신청해주시기 바랍니다.
                            </p>
                            <p class="no-body-md --fw-regular">
                                신청 후 수정은 불가하며, 부득이 내용 수정을 원할 경우 담당자 협의 후 재접수 바랍니다.
                            </p>
                        </div>
                        <div class="cnt no-pd-xl--t no-section-content">
                            <ul class="grid-col-2 no-gap-lg">
                                <li class="--card">
                                    <h4 class="no-heading-md">신한카드홀</h4>
                                    <div class="no-pd-sm--t no-body-md">
                                        <ul class="f fd-c  no-gap-xs">
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-phone"></i>
                                                <span>02 - 6399 - 7552</span>
                                            </li>
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>sujinkim@interparktriple.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="--card">
                                    <h4 class="no-heading-md">마스터카드홀</h4>
                                    <div class="no-pd-sm--t no-body-md">
                                        <ul class="f fd-c  no-gap-xs">
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-phone"></i>
                                                <span>02 - 6399 - 7515</span>
                                            </li>
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>baekws@interparktriple.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="--card">
                                    <h4 class="no-heading-md">NEMO</h4>
                                    <div class="no-pd-sm--t no-body-md">
                                        <ul class="f fd-c  no-gap-xs">
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-phone"></i>
                                                <span>02 - 6399 - 7481</span>
                                            </li>
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>dere.lee@interparktriple.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="--card">
                                    <h4 class="no-heading-md">연습실</h4>
                                    <div class="no-pd-sm--t no-body-md">
                                        <ul class="f fd-c  no-gap-xs">
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-phone"></i>
                                                <span>02 - 6399 -7552</span>
                                            </li>
                                            <li class="f ai-c no-gap-sm">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>sujinkim@interparktriple.com</span>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>

                        </div>
                        <div class="no-form-action no-pd-xl--t no-section-content">
                            <a href="./inquiry.php" class="no-btn-arrow no-btn-arrow__outline--white  dif">
                                대관 신청하기
                                <span>
                                    <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                    <i class="fa-regular fa-arrow-right" aria-hidden="true"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>