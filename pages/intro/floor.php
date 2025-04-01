<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.nav.php';
?>


<!-- contents -->
<main class="no-sub ">
    <section class="no-sub-floor no-pd-2xl--y">
        <div class="no-sub-tab-container">
            <!---tab-->
            <div class="no-sub-tab no-section-title">
                <div class=" no-container-xl">
                    <div class="no-sub-tab-slider">
                        <ul class="swiper-wrapper">
                            <li class="swiper-slide">
                                <button type="button" class=" no-btn active no-btn__fill">
                                    신한카드홀
                                </button>
                            </li>
                            <li class="swiper-slide">
                                <button type="button" class=" no-btn no-btn__fill">
                                    마스터카드홀
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="no-pd-xl--t no-section-content">
            <div class="no-container-xl">
                <div class="no-sub-floor-tab-wrap">
                    <div class=" no-sub-tab-contents  ">
                        <ul>
                            <!----content-1--->
                            <li class="shinhan-card active">
                                <div class="f fd-c no-gap-lg">
                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>3F</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="practice"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    연습실
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="no-sub-floor-info-sub">
                                                        <h5 class="no-heading-md">편의시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="book"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    북파크라운지
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>2F</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main --pd-none">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="practice"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    카페필로스
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-modal-id="opera"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    오페라글라스 대여존
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>1F</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="seat"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    객석 3층
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <div class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    티켓박스
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="no-sub-floor-info-sub">
                                                        <h5 class="no-heading-md">편의시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="stageB"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    스테이지 B
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button type="button" data-modal-id="solo"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    솔로스 키친
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>LF</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main --pd-none">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="seat"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    객석 2층
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <div class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    VIP 룸
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>B1F</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="seat"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    객석 1층
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="no-sub-floor-info-sub">
                                                        <h5 class="no-heading-md">편의시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="storage"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    물품보관소
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>B2F ~ B3F</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main --pd-none">
                                                        <h5 class="no-heading-md">편의시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <div class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    지하주차장
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <!----content-2--->
                            <li class="master-card">
                                <div class="f fd-c no-gap-lg">
                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>LF</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main --pd-none">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <div class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    티켓박스
                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>B1F</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="seat"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    객석 2층
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="no-sub-floor-info-sub">
                                                        <h5 class="no-heading-md">편의시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="storage"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    물품보관소
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="no-sub-floor-box">
                                        <ul>
                                            <li>
                                                <div class="no-sub-floor-num no-heading-lg">
                                                    <span>B3F</span>
                                                </div>
                                                <div class="no-sub-floor-info-box">
                                                    <div class="no-sub-floor-info-main">
                                                        <h5 class="no-heading-md">공연시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="seat"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    객석 1층
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="no-sub-floor-info-sub">
                                                        <h5 class="no-heading-md">편의시설</h5>
                                                        <ul class="no-sub-floor-info-buttons">
                                                            <li>
                                                                <button type="button" data-modal-id="storage"
                                                                    class="no-btn-arrow no-btn-arrow__fill--blur  ">
                                                                    물품보관소
                                                                    <div>
                                                                        <i class="fa-regular fa-plus"
                                                                            aria-hidden="true"></i>
                                                                    </div>
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>



<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>