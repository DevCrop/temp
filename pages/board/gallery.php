<?php include_once $_SERVER['DOCUMENT_ROOT'].'/inc/lib/base.class.php'; ?>

<!-- dev -->

<?php include_once $STATIC_ROOT.'/inc/layouts/head.php'; ?>

<!-- css, js  -->
<?php 
    include_once $STATIC_ROOT.'/inc/layouts/header.php';
    include_once $STATIC_ROOT.'/inc/shared/sub.visual.works.php';
?>



<!-- contents -->






<main class="no-board">
    <section class="no-pd-2xl--b">
        <div class="no-skin-gallery">
            <div class="no-container-xl">

                <div class="no-form-head">
                    <div class="no-form-head-top">
                        <div class="no-form-search__type_B">
                            <input type="text" name="search_term" id="search_term" placeholder="검색어를 입력해주세요">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <div class="no-form-head-bottom">
                        <div class="f fd-c no-gap-md">
                            <div class="f ai-c no-gap-xl">
                                <div class="no-form-group ">
                                    <h4 class="no-body-md">공연장</h4>
                                    <div class="no-form-radio ">
                                        <ul class="" id="no-theater-hook">
                                            <li>
                                                <label for="extra4_all" class="no-filing-btn">
                                                    <input type="radio" name="extra4" id="extra4_all" value="all"
                                                        checked>
                                                    <span>
                                                        <p>전체</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="extra4_1" class="no-filing-btn">
                                                    <input type="radio" name="extra4" id="extra4_1" value="신한카드홀">
                                                    <span>
                                                        <p>신한카드홀</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>


                                                <label for="extra_4_2" class="no-filing-btn">
                                                    <input type="radio" name="extra4" id="extra_4_2" value="마스터카드홀">
                                                    <span>
                                                        <p>마스터카드홀</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>

                                                <label for="extra_4_3" class="no-filing-btn">
                                                    <input type="radio" name="extra4" id="extra_4_3" value="NEMO">
                                                    <span>
                                                        <p>NEMO</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>

                                                <label for="extra_4_4" class="no-filing-btn">
                                                    <input type="radio" name="extra4" id="extra_4_4" value="이벤트">
                                                    <span>
                                                        <p>이벤트</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="no-form-group">
                                    <h4 class="no-body-md ">진행 현황</h4>
                                    <div class="no-form-radio " id="no-catg-hook">
                                        <ul class="">
                                            <li>
                                                <label for="category_no_all" class="no-filing-btn">
                                                    <input type="radio" name="category_no" id="category_no_all"
                                                        value="all">
                                                    <span>
                                                        <p>전체</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>

                                            <li>

                                                <label for="category_no_21" class="no-filing-btn">
                                                    <input type="radio" checked name="category_no" id="category_no_21"
                                                        value="21">
                                                    <span>
                                                        <p>진행 · 예정작</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>

                                            </li>
                                            <li>

                                                <label for="category_no_22" class="no-filing-btn">
                                                    <input type="radio" name="category_no" id="category_no_22"
                                                        value="22">
                                                    <span>
                                                        <p>종료작</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="f ai-c no-gap-xl">
                                <div class="no-form-group ">
                                    <h4 class=" no-body-md">장르</h4>
                                    <div class="no-form-radio  ">
                                        <ul class="" id="no-genre-hook">
                                            <li>
                                                <label for="extra1_all" class="no-filing-btn">
                                                    <input type="radio" name="extra1" id="extra1_all" value="all"
                                                        checked>
                                                    <span>
                                                        <p>전체</p>
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>

                                                <label for="extra_1_1" class="no-filing-btn">
                                                    <input type="radio" name="extra1" id="extra_1_1" value="콘서트">
                                                    <span>
                                                        콘서트
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>

                                                <label for="extra_1_2" class="no-filing-btn">
                                                    <input type="radio" name="extra1" id="extra_1_2" value="뮤지컬">
                                                    <span>
                                                        뮤지컬
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="extra_1_3" class="no-filing-btn">
                                                    <input type="radio" name="extra1" id="extra_1_3" value="팬미팅">
                                                    <!-- 수정된 id -->
                                                    <span>
                                                        팬미팅
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="extra_1_4" class="no-filing-btn">
                                                    <input type="radio" name="extra1" id="extra_1_4" value="공연">
                                                    <span>
                                                        공연
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                            <li>
                                                <label for="extra_1_5" class="no-filing-btn">
                                                    <input type="radio" name="extra1" id="extra_1_5" value="이벤트">
                                                    <span>
                                                        이벤트
                                                    </span>
                                                    <div class="no-filing-btn-circle"></div>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="no-form-group">
                                    <h4 class=" no-body-md">연도 선택</h4>
                                    <div class="no-date-wrap">
                                        <div class="no-date-box">
                                            <button class="no-date-btn" type="button">
                                                <div>
                                                    <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                                                    <span class="no-form-date-text">2025</span>
                                                </div>
                                                <i class="fa-regular fa-chevron-down"></i>
                                            </button>
                                            <ul class="no-date-list" data-lenis-prevent>
                                                <li>
                                                    <label for="date_2025">
                                                        <input type="radio" id="date_2025_" name="year" value="2025">
                                                        <span>2025</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2024">
                                                        <input type="radio" id="date_2024" name="year" value="2024">
                                                        <span>2024</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2023">
                                                        <input type="radio" id="date_2023" name="year" value="2023">
                                                        <span>2023</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2022">
                                                        <input type="radio" id="date_2022" name="year" value="2022">
                                                        <span>2022</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2021">
                                                        <input type="radio" id="date_2021" name="year" value="2021">
                                                        <span>2021</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2020">
                                                        <input type="radio" id="date_2020" name="year" value="2020">
                                                        <span>2020</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2019">
                                                        <input type="radio" id="date_2019" name="year" value="2019">
                                                        <span>2019</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2018">
                                                        <input type="radio" id="date_2018" name="year" value="2018">
                                                        <span>2018</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2017">
                                                        <input type="radio" id="date_2017" name="year" value="2017">
                                                        <span>2017</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2016">
                                                        <input type="radio" id="date_2016" name="year" value="2016">
                                                        <span>2016</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2015">
                                                        <input type="radio" id="date_2015" name="year" value="2015">
                                                        <span>2015</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2014">
                                                        <input type="radio" id="date_2014" name="year" value="2014">
                                                        <span>2014</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2013">
                                                        <input type="radio" id="date_2013" name="year" value="2013">
                                                        <span>2013</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2012">
                                                        <input type="radio" id="date_2012" name="year" value="2012">
                                                        <span>2012</span>
                                                    </label>
                                                </li>
                                                <li>
                                                    <label for="date_2011">
                                                        <input type="radio" id="date_2011" name="year" value="2011">
                                                        <span>2011</span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="cnt no-pd-xl--t">
                    <ul class="grid-col-4 no-gap-lg no-skin-gallery-wrap visible-smooth">
                        <?php for ($i = 1 ; $i < 12; $i++) :?>
                        <li class="no-skin-gallery-item">
                            <a href="#" data-cursor-text="See Project" data-cursor="-project">
                                <figure>
                                    <img src="<?=IMG_PATH?>/works/gallery_img_1.png" alt="">
                                </figure>
                                <div class="no-skin-gallery-item__txt no-pd-sm--t">
                                    <span>콘서트</span>
                                    <h3 class="no-heading-md">신한카드몰신한 신한카드몰신한 신한카드몰신한</h3>
                                    <div class="f ai-c fd-c no-gap-xs">
                                        <div class="tag">2024.10.01 - 10.01</div>
                                        <div class="tag">신한카드몰</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <?php endfor ;?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="no-filter-btn">
            <button type="button">
                <div>
                    <lord-icon src="https://cdn.lordicon.com/eskivvxw.json" stroke="bold" trigger="loop"
                        colors="primary:#ffffff,secondary:#ffffff">
                    </lord-icon>
                    <span class="no-form-filter-text">작품 필터 보기</span>
                </div>
            </button>
        </div>

    </section>
</main>


<!-- 모바일용 모달 입력 요소 -->
<div class="no-filter-modal mobile-form" data-lenis-prevent="">
    <div class="no-filter-modal-container">
        <div class="no-filter-modal-inner">
            <h2>검색 필터</h2>
            <div class="no-filter-modal-col">
                <div class="no-filter-modal-group">
                    <h4>연도 선택</h4>
                    <ul class="no-date-list-mb" data-lenis-prevent>
                        <li>
                            <label for="date_2025_mb" class="no-filing-btn active">
                                <input type="radio" name="year" id="date_2025_mb" value="2025" checked>
                                <span>
                                    <p>2025</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2024_mb" class="no-filing-btn">
                                <input type="radio" id="date_2024_mb" name="year" value="2024">
                                <span>
                                    <p>2024</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2023_mb" class="no-filing-btn">
                                <input type="radio" id="date_2023_mb" name="year" value="2023">
                                <span>
                                    <p>2023</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2022_mb" class="no-filing-btn">
                                <input type="radio" id="date_2022_mb" name="year" value="2022">
                                <span>
                                    <p>2022</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2021_mb" class="no-filing-btn">
                                <input type="radio" id="date_2021_mb" name="year" value="2021">
                                <span>
                                    <p>2021</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2020_mb" class="no-filing-btn">
                                <input type="radio" id="date_2020_mb" name="year" value="2020">
                                <span>
                                    <p>2020</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2019_mb" class="no-filing-btn">
                                <input type="radio" id="date_2019_mb" name="year" value="2019">
                                <span>
                                    <p>2019</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2018_mb" class="no-filing-btn">
                                <input type="radio" id="date_2018_mb" name="year" value="2018">
                                <span>
                                    <p>2018</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2017_mb" class="no-filing-btn">
                                <input type="radio" id="date_2017_mb" name="year" value="2017">
                                <span>
                                    <p>2017</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2016_mb" class="no-filing-btn">
                                <input type="radio" id="date_2016_mb" name="year" value="2016">
                                <span>
                                    <p>2016</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2015_mb" class="no-filing-btn">
                                <input type="radio" id="date_2015_mb" name="year" value="2015">
                                <span>
                                    <p>2015</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2014_mb" class="no-filing-btn">
                                <input type="radio" id="date_2014_mb" name="year" value="2014">
                                <span>
                                    <p>2014</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2013_mb" class="no-filing-btn">
                                <input type="radio" id="date_2013_mb" name="year" value="2013">
                                <span>
                                    <p>2013</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2012_mb" class="no-filing-btn">
                                <input type="radio" id="date_2012_mb" name="year" value="2012">
                                <span>
                                    <p>2012</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                        <li>
                            <label for="date_2011_mb" class="no-filing-btn">
                                <input type="radio" id="date_2011_mb" name="year" value="2011">
                                <span>
                                    <p>2011</p>
                                </span>
                                <div class="no-filing-btn-circle"></div>
                            </label>
                        </li>
                    </ul>


                </div>
                <div class="no-filter-modal-group">
                    <h4>진행 현황</h4>
                    <div class="no-form-radio " id="no-catg-hook_mb">
                        <ul>
                            <li>
                                <label for="category_no_all_mb" class="">
                                    <input type="radio" name="category_no" id="category_no_all_mb" value="all" checked>
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>전체</p>
                                    </span>
                                </label>
                            </li>

                            <li>
                                <label for="category_no_21_mb" class="">
                                    <input type="radio" checked name="category_no" id="category_no_21_mb" value="21">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>진행 · 예정작</p>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="category_no_22_mb" class="">
                                    <input type="radio" name="category_no" id="category_no_22_mb" value="22">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>종료작</p>
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="no-filter-modal-group">
                    <h4 class="no-body-md">공연장</h4>
                    <div class="no-form-radio ">
                        <ul class="" id="no-theater-hook">
                            <li>
                                <label for="extra4_all_mb" class="">
                                    <input type="radio" name="extra4" id="extra4_all_mb" value="all" checked="">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>전체</p>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra4_1_mb">
                                    <input type="radio" name="extra4" id="extra4_1_mb" value="신한카드홀">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>신한카드홀</p>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_4_2_mb">
                                    <input type="radio" name="extra4" id="extra_4_2_mb" value="마스터카드홀">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>마스터카드홀</p>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_4_3_mb">
                                    <input type="radio" name="extra4" id="extra_4_3_mb" value="NEMO">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>NEMO</p>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_4_4_mb" class="">
                                    <input type="radio" name="extra4" id="extra_4_4_mb" value="이벤트">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>이벤트</p>
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="no-filter-modal-group">
                    <h4 class="no-body-md">공연장</h4>
                    <div class="no-form-radio  ">
                        <ul class="" id="no-genre-hook">
                            <li>
                                <label for="extra1_all_mb">
                                    <input type="radio" name="extra1" id="extra1_all_mb" value="all" checked="">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        <p>전체</p>
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_1_1_mb">
                                    <input type="radio" name="extra1" id="extra_1_1_mb" value="콘서트">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        콘서트
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_1_2_mb">
                                    <input type="radio" name="extra1" id="extra_1_2_mb" value="뮤지컬">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        뮤지컬
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_1_3_mb">
                                    <input type="radio" name="extra1" id="extra_1_3_mb" value="팬미팅">
                                    <!-- 수정된 id -->
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        팬미팅
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_1_4_mb">
                                    <input type="radio" name="extra1" id="extra_1_4_mb" value="공연">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        공연
                                    </span>
                                </label>
                            </li>
                            <li>
                                <label for="extra_1_5_mb">
                                    <input type="radio" name="extra1" id="extra_1_5_mb" value="이벤트">
                                    <span>
                                        <div class="no-form-radio-circle"></div>
                                        이벤트
                                    </span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="no-filter-modal-close">
                <button class="no-filter-modal-close-btn ">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>
        </div>
        <div class="no-filter-modal-btn">
            <div class="no-filter-modal-reset-btn">
                <button type="button">
                    <i class="fa-regular fa-trash"></i>
                    Reset
                    <span class="no-filter-modal-state">1</span>
                </button>
            </div>
            <div class="no-filter-modal-submit-btn">
                <button type="button">
                    적용하기
                </button>
            </div>
        </div>
    </div>
</div>



<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>