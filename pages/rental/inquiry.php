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
    <section class="no-sub-inquiry no-pd-2xl--y">
        <div class="no-container-lg">
            <div class="no-form-container">
                <div class="no-form-row">
                    <div class="no-form-group">
                        <label for="performance_name" class="no-form-label">
                            <span class="no-form-text">
                                공연명
                            </span>
                            <div class="no-form-control">
                                <input type="text" name="performance_name" id="performance_name"
                                    placeholder="공연명을 입력해주세요">
                            </div>
                        </label>
                    </div>
                    <div class="no-form-group">
                        <label for="organization_name" class="no-form-label">
                            <span class="no-form-text">
                                단체 (공연제작사)명
                            </span>
                            <div class="no-form-control">
                                <input type="text" name="organization_name" id="organization_name"
                                    placeholder="단체 혹은 공연제작사의 이름을 입력해주세요">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="no-form-row">

                    <div class="no-form-group">
                        <label for="manager_name" class="no-form-label">
                            <span class="no-form-text">
                                담당자명
                            </span>
                            <div class="no-form-control">
                                <input type="text" name="manager_name" id="manager_name" placeholder="담당자명을 입력해주세요">
                            </div>
                        </label>
                    </div>
                    <div class="no-form-group">
                        <label for="phone" class="no-form-label">
                            <span class="no-form-text">
                                담담자 연락처
                            </span>
                            <div class="no-form-control">
                                <input type="text" name="phone" id="phone" placeholder="담당자 연락처를 입력해주세요">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="no-form-group">
                    <label for="email" class="no-form-label">
                        <span class="no-form-text">
                            담담자 이메일
                        </span>
                        <div class="no-form-control">
                            <input type="email" name="email" id="email" placeholder="담당자 이메일를 입력해주세요">
                        </div>
                    </label>
                </div>
                <div class="no-form-group">
                    <label for="contents" class="no-form-label">
                        <span class="no-form-text">
                            내용
                        </span>
                        <div class="no-form-control">
                            <textarea name="contents" id="contents" placeholder="전하고자하는 내용을 입력해주세요"></textarea>
                        </div>

                    </label>
                </div>
                <!--
                <div class="no-form-group">
                    <label for="file_attach" class="no-form-label f ai-c jc-sb">
                        <span class="no-form-text">
                            첨부파일
                        </span>
                        <div class="no-form-file">
                            <div class="fake-field-file">Attach file</div>
                            <div aria-label="Attach file" class="btn">파일첨부
                                <input type="file" name="file_attach" id="file_attach" class="field-file" />
                            </div>
                        </div>
                    </label>
                </div>-->


                <div class="no-form-row">
                    <div class="no-form-group">
                        <p class="no-form-text no-pd-sm--b">
                            스팸방지문자
                        </p>
                        <div class="no-form-captcha">
                            <div class="no-form-captcha__box">
                                <div class="no-form-captcha__img">
                                    <img src="<?=IMG_PATH?>/sub/captcha.n.png" alt="captcha">
                                </div>
                                <input type="text" name="r_captcha" id="r_captcha" maxlength="5"
                                    placeholder="스팸방지 5자리를 입력해 주세요." autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="no-form-group">
                        <p class="no-form-text no-pd-sm--b">
                            개인정보처리방침 동의
                        </p>
                        <div class="no-form-checkbox">
                            <label for="chk">
                                <input type="checkbox" name="chk" id="chk">
                                <span>
                                    <p>개인정보처리방침에 동의합니다.</p>
                                    <div>
                                        <div class="no-form-checkbox__box">
                                            <i class="fa-regular fa-check" aria-hidden="true"></i>
                                        </div>
                                    </div>
                                </span>

                            </label>
                            <button type="button" class="no-modal-privacy-btn" data-modal-id="privacy">[보기]</button>
                        </div>
                    </div>
                </div>

                <!--
                <div class="no-form-group">
                    <div class="f jc-sb md-fd-c-rev no-gap-md">
                        <div class="f no-gap-lg md-fd-c">
                            <span class="no-form-text ">
                                첨부파일
                            </span>
                            <div class="--file-info">
                                <ul>
                                </ul>
                            </div>
                        </div>

                        <label for="file_attach" class="no-form-label ">
                            <div class="f fd-c ai-fe">
                                <div class="no-form-file">
                                    <i class="fa-solid fa-folder-arrow-up"></i>
                                    <div class="fake-field-file">파일업로드하기</div>
                                    <input type="file" id="file_attach" class="field-file" multiple />
                                </div>
                                <div class="no-form-feedback">
                                    <i class="fa-solid fa-circle-info"></i>
                                    <span>파일당 10mb 이하 · 첨부 파일은 최대 10개 </span>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>-->

                <div>
                    <p class="no-form-text no-pd-sm--b">
                        파일첨부
                    </p>
                    <div class="f fd-c no-gap-sm">
                        <div class="no-form-group">
                            <label for="file_attach_1" class="no-form-label">
                                <div class="no-form-file no-file-control">
                                    <!-- 파일 입력 텍스트 필드 -->
                                    <input type="text" class="no-fake-file" id="file_attach_1_txt"
                                        placeholder="파일을 선택해주세요." readonly disabled>
                                    <!-- 파일 업로드 박스 -->
                                    <div class="no-file-box">
                                        <input type="file" id="file_attach_1" class="file_attach_1" multiple
                                            onchange="document.getElementById('file_attach_1_txt').value = this.value">
                                        <button type="button" class="no-btn no-btn--main">파일찾기</button>
                                    </div>
                                </div>

                            </label>
                        </div>
                        <div class="no-form-group">
                            <label for="file_attach_1" class="no-form-label">
                                <div class="no-form-file no-file-control">
                                    <!-- 파일 입력 텍스트 필드 -->
                                    <input type="text" class="no-fake-file" id="file_attach_1_txt"
                                        placeholder="파일을 선택해주세요." readonly disabled>
                                    <!-- 파일 업로드 박스 -->
                                    <div class="no-file-box">
                                        <input type="file" id="file_attach_1" class="file_attach_1" multiple
                                            onchange="document.getElementById('file_attach_1_txt').value = this.value">
                                        <button type="button" class="no-btn no-btn--main">파일찾기</button>
                                    </div>
                                </div>

                            </label>
                        </div>
                        <div class="no-form-group">
                            <label for="file_attach_1" class="no-form-label">
                                <div class="no-form-file no-file-control">
                                    <!-- 파일 입력 텍스트 필드 -->
                                    <input type="text" class="no-fake-file" id="file_attach_1_txt"
                                        placeholder="파일을 선택해주세요." readonly disabled>
                                    <!-- 파일 업로드 박스 -->
                                    <div class="no-file-box">
                                        <input type="file" id="file_attach_1" class="file_attach_1" multiple
                                            onchange="document.getElementById('file_attach_1_txt').value = this.value">
                                        <button type="button" class="no-btn no-btn--main">파일찾기</button>
                                    </div>
                                </div>

                            </label>
                        </div>
                    </div>
                    <!-- 파일 업로드 정보 -->
                    <div class="no-form-feedback">
                        <i class="fa-solid fa-circle-info"></i>
                        <span>파일당 10mb 이하 · 첨부 파일은 최대 3개까지 가능합니다.</span>
                    </div>
                </div>



            </div>
            <div class="no-form-action --full">
                <button type="button" class="no-btn no-btn__fill--primary --form-radius">전송하기</button>
            </div>
        </div>
    </section>
</main>

<?php
    include_once $STATIC_ROOT.'/inc/layouts/footer.php';
    ?>