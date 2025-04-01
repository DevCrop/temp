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
    <section class="no-sub-fac no-pd-2xl--y">

        <!---tab-->
        <div class="no-sub-tab no-section-title">
            <div class="no-container-xl">
                <div class="no-sub-tab-slider">
                    <ul class="swiper-wrapper">
                        <li class="swiper-slide">
                            <button type="button" class="no-btn no-btn__fill active" data-id="fnb">
                                F&B
                            </button>
                        </li>
                        <li class="swiper-slide">
                            <button type="button" class="no-btn no-btn__fill" data-id="service">
                                공연장서비스
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="no-sub-fac-contents no-sub-tab-contents no-section-content">
            <ul>
                <!----content-1--->
                <li class="fnb" id="fnb">
                    <div class="no-container-xl">
                        <!--cnt---->
                        <div class="cnt no-pd-xl--t ">
                            <div class="no-pd-lg--b">
                                <div class="no-sub-tab-contents__info no-position-padding ">
                                    <div class="no-sub-tab-contents__title">
                                        <div class="no-sub-fac-logo">
                                            <h2 class="no-heading-lg">스테이지B</h2>
                                        </div>
                                        <a href="https://map.naver.com/p/entry/place/132236039?lng=127.0022708&lat=37.5408327&placePath=%2Fbooking%3Fentry%3Dplt&entry=plt&searchType=place&c=15.00,0,0,0,dh"
                                            class="no-btn-arrow no-btn-arrow__fill--primary  " target="_blank">
                                            자세히 보기
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="no-sub-tab-contents__desc">
                                        <ul>
                                            <li>
                                                <h5 class="no-heading-md">
                                                    외식과 문화가 공존하는 예술의 공간
                                                </h5>
                                            </li>
                                            <li>
                                                <p class="no-body-md">
                                                    다양한 고품질 식재료로 완성된 트렌디한 메뉴를 선보이는 이탈리안 비스트로입니다.
                                                    천연 조미료와 산지에서 공수한 신선한 제철 재료를 사용하여 맛과 건강을 모두 충족시키는 브런치와 다이닝을 제공합니다.
                                                    미식의 예술과 문화적 풍요로움이 조화를 이루는 특별한 경험을 만나보세요.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="no-pd-lg--t --card-wrap">
                                <ul class="grid-col-3 no-gap-lg ">
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>위치</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>신한카드홀 1층 / 객석 3층</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>영업시간</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            화요일 - 일요일 <br>
                                                            11 : 30 - 20 : 00
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            <b class="no-clr-text-primary">매주 월요일 휴무</b>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-regular fa-timer"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>문의</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>02 - 6399 - 7545</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="no-pd-lg--t">
                                <div class="swiper no-sub-tab-contents-slider fnb-swiper">
                                    <ul class="swiper-wrapper">
                                        <?php for ($i = 1; $i < 4 ; $i++) :?>
                                        <li class="swiper-slide">
                                            <figure>
                                                <img src="<?=IMG_PATH?>/sub/fnb_stage_b_img_<?=$i?>.jpg" alt="">
                                            </figure>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                    <div class="swiper-button-next swiper-button">
                                        <i class="fa-light fa-arrow-right-long"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="fa-light fa-arrow-left-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----cnt--->
                        <div class="cnt no-pd-xl--t">
                            <div class="no-pd-lg--b">
                                <div class="no-sub-tab-contents__info no-position-padding">
                                    <div class="no-sub-tab-contents__title">
                                        <div class="no-sub-fac-logo">
                                            <h2 class="no-heading-lg">솔로스 키친</h2>
                                        </div>
                                        <a href="https://map.naver.com/p/entry/place/267265992?lng=127.0029308&lat=37.5402956&placePath=%2Fhome&entry=plt&searchType=place&c=15.00,0,0,0,dh"
                                            class="no-btn-arrow no-btn-arrow__fill--primary  " target="_blank">
                                            자세히 보기
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="no-sub-tab-contents__desc no-body-lg">
                                        <ul>
                                            <li>
                                                <h5 class="no-heading-md">
                                                    간편하면서도 풍성한 한 끼를 위한 특별한 공간
                                                </h5>
                                            </li>
                                            <li>
                                                <p class="no-body-md">
                                                    1인 고객을 위해 설계된 오리엔탈 푸드 전문점으로,
                                                    다양한 트렌디한 메뉴를 통해 간편하면서도 푸짐한 식사를 제공합니다.
                                                    혼자서도 여유롭게 즐길 수 있는 맛있고 세련된 미식 경험을 선사합니다.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="no-pd-lg--t --card-wrap">
                                <ul class="grid-col-3 no-gap-lg ">
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>위치</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>신한카드홀 1층 / 객석 3층</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>영업시간</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            화요일 - 금요일 <br>
                                                            12 : 00 - 21 : 30
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            토요일 - 금요일 <br>
                                                            12 : 00 - 20 : 30
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            <b class="no-clr-text-primary">매주 월요일 휴무</b>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-regular fa-timer"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>문의</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>02 - 6399 - 7544</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="no-pd-lg--t">
                                <div class="swiper no-sub-tab-contents-slider fnb-swiper">
                                    <ul class="swiper-wrapper">
                                        <?php for ($i = 1; $i < 3 ; $i++) :?>
                                        <li class="swiper-slide">
                                            <figure>
                                                <img src="<?=IMG_PATH?>/sub/fnb_solos_img_<?=$i?>.jpg" alt="">
                                            </figure>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                    <div class="swiper-button-next swiper-button">
                                        <i class="fa-light fa-arrow-right-long"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="fa-light fa-arrow-left-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----cnt--->
                        <div class="cnt no-pd-xl--t">
                            <div class="no-pd-lg--b">
                                <div class="no-sub-tab-contents__info no-position-padding">
                                    <div class="no-sub-tab-contents__title">
                                        <div class="no-sub-fac-logo">
                                            <h2 class="no-heading-lg">카페 필로스 & 베이커리</h2>
                                        </div>
                                        <a href="https://map.naver.com/p/search/%EC%B9%B4%ED%8E%98%20%ED%95%84%EB%A1%9C%EC%8A%A4/place/960061966?placePath=?entry=pll&from=nx&fromNxList=true&searchType=place&c=15.00,0,0,0,dh"
                                            class="no-btn-arrow no-btn-arrow__fill--primary  " target="_blank">
                                            자세히 보기
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="no-sub-tab-contents__desc no-body-lg">
                                        <ul>
                                            <li>
                                                <h5 class="no-heading-md">
                                                    이색적인 원두와 갓 구운 베이커리가 어우러지는 특별한 공간
                                                </h5>
                                            </li>
                                            <li>
                                                <p class="no-body-md">
                                                    독특한 풍미의 원두로 완성된 카페 메뉴와 신선하게 구워낸 베이커리를 만날 수 있는 곳입니다.
                                                    남산의 정취를 느끼며 공연과 함께 여유를 즐길 수 있는 테라스 카페로,
                                                    감각적인 맛과 분위기를 모두 경험해보세요.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="no-pd-lg--t --card-wrap">
                                <ul class="grid-col-3 no-gap-lg ">
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>위치</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>신한카드홀 2층</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>영업시간</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            화요일 - 금요일 <br>
                                                            11 : 00 - 20 : 00
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <p>
                                                            <b class="no-clr-text-primary">매주 월요일 휴무</b>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-regular fa-timer"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>문의</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>070 - 7724 - 0698</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="no-pd-lg--t">
                                <div class="swiper no-sub-tab-contents-slider fnb-swiper">
                                    <ul class="swiper-wrapper">
                                        <?php for ($i = 1; $i < 5 ; $i++) :?>
                                        <li class="swiper-slide">
                                            <figure>
                                                <img src="<?=IMG_PATH?>/sub/fnb_philos_img<?=$i?>.jpg" alt="">
                                            </figure>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                    <div class="swiper-button-next swiper-button">
                                        <i class="fa-light fa-arrow-right-long"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="fa-light fa-arrow-left-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----cnt--->
                        <div class="cnt no-pd-xl--t">
                            <div class="no-pd-lg--b">
                                <div class="no-sub-tab-contents__info no-position-padding">
                                    <div class="no-sub-tab-contents__title">
                                        <div class="no-sub-fac-logo">
                                            <h2 class="no-heading-lg">북파크라운지</h2>
                                        </div>
                                        <a href="https://map.naver.com/p/entry/place/1174718905?lng=127.0024193&lat=37.5409711&placePath=%2Fhome&searchType=place&c=15.00,0,0,0,dh"
                                            class="no-btn-arrow no-btn-arrow__fill--primary  " target="_blank">
                                            자세히 보기
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="no-sub-tab-contents__desc no-body-lg">
                                        <ul>
                                            <li>
                                                <h5 class="no-heading-md">
                                                    블루스퀘어에서 만나는 아늑한 복합 문화 공간
                                                </h5>
                                            </li>
                                            <li>
                                                <p class="no-body-md">
                                                    3,000여 권의 큐레이션 도서와 감각적인 카페 메뉴가 어우러진 특별한 공간입니다.
                                                    편안하고 따뜻한 분위기 속에서 독서와 휴식을 동시에 즐길 수 있는 북파크 라운지는 일상의 작은 여유를 선사합니다.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="no-pd-lg--t --card-wrap">
                                <ul class="grid-col-3 no-gap-lg ">
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>위치</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>신한카드홀 3층</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>영업시간</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            화요일 - 일요일 <br>
                                                            11 : 30 - 21 : 00
                                                        </p>
                                                    </li>

                                                    <li>
                                                        <p>
                                                            <b class="no-clr-text-primary">
                                                                매주 월요일 휴무 <br>
                                                                주말 및 공휴일 라스트오더 19시
                                                            </b>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-regular fa-timer"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>문의</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>0507 - 1312 - 0539</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="no-pd-lg--t">
                                <div class="swiper no-sub-tab-contents-slider fnb-swiper">
                                    <ul class="swiper-wrapper">
                                        <?php for ($i = 1; $i < 4 ; $i++) :?>
                                        <li class="swiper-slide">
                                            <figure>
                                                <img src="<?=IMG_PATH?>/sub/fnb_book_img_<?=$i?>.jpg" alt="">
                                            </figure>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                    <div class="swiper-button-next swiper-button">
                                        <i class="fa-light fa-arrow-right-long"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="fa-light fa-arrow-left-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!----cnt--->
                        <div class="cnt no-pd-xl--t">
                            <div class="no-pd-lg--b">
                                <div class="no-sub-tab-contents__info no-position-padding">
                                    <div class="no-sub-tab-contents__title">
                                        <div class="no-sub-fac-logo">
                                            <h2 class="no-heading-lg">카페 드 블루</h2>
                                        </div>
                                        <a href="https://map.naver.com/p/search/%EC%B9%B4%ED%8E%98%20%EB%93%9C%20%EB%B8%94%EB%A3%A8/place/1089116606?placePath=?entry=pll&from=nx&fromNxList=true&searchType=place&c=15.00,0,0,0,dh"
                                            class="no-btn-arrow no-btn-arrow__fill--primary  " target="_blank">
                                            자세히 보기
                                            <span>
                                                <i class="fa-regular fa-arrow-right"></i>
                                                <i class="fa-regular fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="no-sub-tab-contents__desc ">
                                        <ul>
                                            <li>
                                                <h5 class="no-heading-md">
                                                    다양한 소품과 스페셜 메뉴로 <br>
                                                    공연의 여운을 즐길 수 있는 감성 가득한 뮤지컬 갤러리 카페입니다.
                                                </h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="no-pd-lg--t --card-wrap">
                                <ul class="grid-col-3 no-gap-lg ">
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>위치</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>블루스퀘어 지상 주차장 옆 고가 하부</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>영업시간</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>
                                                            월요일<br>
                                                            10 : 00 - 19 : 00
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p>
                                                            화요일 - 일요일<br>
                                                            08 : 00 - 20 : 00
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-regular fa-timer"></i>
                                        </div>
                                    </li>
                                    <li class="--card">
                                        <div class="--card-txt">
                                            <h3>문의</h3>
                                            <div class="--card-info">
                                                <ul>
                                                    <li>
                                                        <p>070 - 4647 - 1585</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="--card-icon">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="no-pd-lg--t">
                                <div class="swiper no-sub-tab-contents-slider fnb-swiper">
                                    <ul class="swiper-wrapper">
                                        <?php for ($i = 1; $i < 4 ; $i++) :?>
                                        <li class="swiper-slide">
                                            <figure>
                                                <img src="<?=IMG_PATH?>/sub/fnb_blue_img_<?=$i?>.jpg" alt="">
                                            </figure>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                    <div class="swiper-button-next swiper-button">
                                        <i class="fa-light fa-arrow-right-long"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="fa-light fa-arrow-left-long"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <!----content-2--->
                <li class="else" id="service">
                    <div class="no-container-xl">
                        <!--cnt---->
                        <div class="cnt no-pd-xl--t">
                            <div class="">
                                <h2 class="no-heading-lg">오페라글라스 사전예약</h2>
                                <p class="no-pd-sm--t no-body-lg">
                                    <b class="no-clr-text-secondary ">신한카드홀</b> 공연관람객 대상 사전예약을 통해 오페라글라스를 대여할
                                    수 있습니다.
                                </p>
                            </div>
                            <!--
                            <div class="no-pd-lg--t">
                                <div class="swiper no-sub-tab-contents-slider fnb-swiper">
                                    <ul class="swiper-wrapper">
                                        <?php for ($i = 1; $i < 3 ; $i++) :?>
                                        <li class="swiper-slide">
                                            <figure>
                                                <img src="<?=IMG_PATH?>/sub/oprea_glass_img_<?=$i?>.jpg" alt="">
                                            </figure>
                                        </li>
                                        <?php endfor; ?>
                                    </ul>
                                    <div class="swiper-button-next swiper-button">
                                        <i class="fa-light fa-arrow-right-long"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="fa-light fa-arrow-left-long"></i>
                                    </div>
                                </div>
                            </div>-->
                            <div class="no-pd-lg--t">
                                <div class="--box-wrap">
                                    <ul>
                                        <li class="--box">
                                            <div class="--box-info ">
                                                <ul class="">
                                                    <li class="">
                                                        <div class="--box-info-title no-heading-md no-heading-md">
                                                            <h3>대여방법</h3>
                                                        </div>
                                                        <div class="--box-info-desc">
                                                            <ul class="f fd-c no-gap-sm">
                                                                <li>
                                                                    <p class="no-body-md">
                                                                        <a href="#" class="--link-line dib">인터파크
                                                                            티켓사이트</a>
                                                                        를 통한 사전 예약 후 현장 수령
                                                                        시, 실물 티켓, 오페라글라스 예약 내역서 확인 및 예약자 신분증 보관 후
                                                                        이용
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="--box-info-title no-heading-md ">
                                                            <h3>이용금액</h3>
                                                        </div>
                                                        <div class="--box-info-desc">
                                                            <ul class="f fd-c no-gap-sm">
                                                                <li>
                                                                    <p class="no-body-md">
                                                                        5,000원
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="--box-info-title no-heading-md">
                                                            <h3>수령위치</h3>
                                                        </div>
                                                        <div class="--box-info-desc">
                                                            <ul class="f fd-c no-gap-sm">
                                                                <li>
                                                                    <p class="no-body-md">
                                                                        신한카드홀 건물 2층 오페라글라스 대여 부스
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="--box-info-title no-heading-md">
                                                            <h3>수령 가능시간</h3>
                                                        </div>
                                                        <div class="--box-info-desc">
                                                            <ul class="f fd-c no-gap-sm">
                                                                <li>
                                                                    <p class="no-body-md">
                                                                        공연 시작 1시간 전 ~ 공연 시간 10분 전
                                                                    </p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="--box-info-title no-heading-md">
                                                            <h3>예약하기</h3>
                                                        </div>
                                                        <div class="--box-info-desc-link">
                                                            <ul class="">
                                                                <li class="">
                                                                    <a href="https://kko.kakao.com/1CpMV_T2tQ"
                                                                        target="_blank"
                                                                        class="no-btn-arrow no-btn-arrow__outline--white  dif">
                                                                        현재 공연 글라스 예약하기
                                                                        <span>
                                                                            <i class="fa-regular fa-arrow-right"
                                                                                aria-hidden="true"></i>
                                                                            <i class="fa-regular fa-arrow-right"
                                                                                aria-hidden="true"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="">
                                                                    <a href="https://kko.kakao.com/1CpMV_T2tQ"
                                                                        target="_blank"
                                                                        class="no-btn-arrow no-btn-arrow__outline--white  dif">
                                                                        차기 공연 글라스 예약하기
                                                                        <span>
                                                                            <i class="fa-regular fa-arrow-right"
                                                                                aria-hidden="true"></i>
                                                                            <i class="fa-regular fa-arrow-right"
                                                                                aria-hidden="true"></i>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="--box-notice">
                                                <div class="--box-info">
                                                    <ul class="">
                                                        <li class="">
                                                            <div class="--box-info-title no-heading-md">
                                                                <h3>주의사항</h3>
                                                            </div>
                                                            <div class="--box-info-desc --box-notice-desc">
                                                                <ul class="no-body-md">
                                                                    <li>
                                                                        <p>
                                                                            현장 대여 수량은 공연시작 2시간 전부터 오페라글라스 대여 부스에서
                                                                            확인하실 수
                                                                            있습니다.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            당일 공연 관람자에 한해 본 서비스를 이용할 수 있으며, <br>
                                                                            예약자 신분증 및
                                                                            증빙서류(실물 티켓 및 오페라글라스 예약 내역서) 미지참 시 수령
                                                                            불가합니다.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            사전예약은 공연 당일 3시간 전까지 가능합니다.
                                                                        </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            파손 및 분실의 경우 고객 부담금이 발생합니다.
                                                                        </p>
                                                                    </li>
                                                                </ul>
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
                        <!--cnt---->
                        <div class="cnt no-pd-2xl--t">
                            <div class="">
                                <h2 class="no-heading-lg">물품보관소</h2>
                                <p class="no-pd-sm--t no-body-lg">
                                    보다 편안한 공연 관람을 위해 물품보관 서비스를 운영합니다.
                                </p>
                            </div>
                            <!--
                            <div class="no-pd-lg--t">
                                <div class="swiper no-sub-tab-contents-slider fnb-swiper">
                                    <ul class="swiper-wrapper">
                                        <li class="swiper-slide">
                                            <figure>
                                                <img src="<?=IMG_PATH?>/sub/storage_img_1.jpg" alt="">
                                            </figure>
                                        </li>
                                    </ul>
                                    <div class="swiper-button-next swiper-button">
                                        <i class="fa-light fa-arrow-right-long"></i>
                                    </div>
                                    <div class="swiper-button-prev swiper-button">
                                        <i class="fa-light fa-arrow-left-long"></i>
                                    </div>
                                </div>
                            </div>-->
                            <div class="no-pd-lg--t">
                                <div class="--box-wrap">
                                    <ul>
                                        <li class="--box">
                                            <div class="--box-info ">
                                                <ul class="">
                                                    <li class="">
                                                        <div class="--box-info-title no-heading-md">
                                                            <h3>위치</h3>
                                                        </div>
                                                        <div class="--box-info-desc">
                                                            <ul class="f fd-c no-gap-xs">
                                                                <li>
                                                                    <ul class="">
                                                                        <li>
                                                                            <span class="no-body-md">
                                                                                신한카드홀
                                                                            </span>
                                                                        </li>

                                                                        <li>
                                                                            <p class="no-body-base">
                                                                                객석 1층(B1) 물품보관소
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <ul class="">
                                                                        <li>
                                                                            <span class="no-body-md">
                                                                                마스터카드홀
                                                                            </span>
                                                                        </li>

                                                                        <li>
                                                                            <p class="no-body-base">
                                                                                객석 1층(B3) 안내데스트 및 객석 1,2층(B1,B3) 물품보관함
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="">
                                                        <div class="--box-info-title no-heading-md">
                                                            <h3>운영시간</h3>
                                                        </div>
                                                        <div class="--box-info-desc">
                                                            <ul class="f fd-c no-gap-xs">
                                                                <li>
                                                                    <ul class="">
                                                                        <li>
                                                                            <span class="no-body-md">
                                                                                신한카드홀
                                                                            </span>
                                                                        </li>

                                                                        <li>
                                                                            <p class="no-body-base">
                                                                                공연 시작 1시간 전 ~ 공연 종료 후 15분 / 각 공연 사이 미운영
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li>
                                                                    <ul class="">
                                                                        <li>
                                                                            <span class="no-body-md">
                                                                                마스터카드홀
                                                                            </span>
                                                                        </li>

                                                                        <li>
                                                                            <p class="no-body-baase">
                                                                                로비 개방 시 ~ 공연 종료 후 15분 / 공연별 상이
                                                                            </p>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="no-pd-lg--t">
                                                <div class="--box-notice">
                                                    <div class="--box-info">
                                                        <ul class="">
                                                            <li class="">
                                                                <div class="--box-info-title no-heading-md">
                                                                    <h3>주의사항</h3>
                                                                </div>
                                                                <div class="--box-info-desc --box-notice-desc">
                                                                    <ul class="">
                                                                        <li>
                                                                            <p class="no-body-md">
                                                                                공연 관람객에 한하여 실물 티켓 확인 후 물품 보관이 가능합니다.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>
                                                                                음식물, 꽃다발의 경우 당일 수령 하지 않을 경우 운영시간 이후
                                                                                폐기합니다.
                                                                            </p>
                                                                        </li>
                                                                        <li>
                                                                            <p>
                                                                                고가의 물품(현금, 유가 증권, 귀금속 등), 귀중품은 개인 소지해
                                                                                주시고, 파손 및 분실 시 책임지지 않습니다.
                                                                            </p>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
            </ul>
        </div>

    </section>
</main>



<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>