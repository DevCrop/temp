function headerFull() {
  const header = document.getElementById("no-header-full");
  console.log(header);

  if (!header) {
    return;
  }

  // INIT
  if (window.scrollY > 80) {
    header.classList.add("shadow");
  } else {
    header.classList.remove("shadow");
  }

  //SCROLL EVENT
  window.addEventListener("scroll", function () {
    if (window.scrollY > 80) {
      header.classList.add("shadow");
    } else {
      header.classList.remove("shadow");
    }
  });

  const HeaderDOM = {
    menu: header.querySelector(".no-header-menu"),
    gnb: header.querySelectorAll(".no-header-gnb>li"),
    gnbItem: header.querySelectorAll(".no-header-gnb>li>div>a"),
    mobileBtn: header.querySelector(".no-header-btn"),
    lnb: header.querySelectorAll(".no-header-lnb"),
    plus: header.querySelectorAll(".no-header-gnb>li>a>i"),
  };

  const mqDeck = window.matchMedia("screen and (min-width: 1024px)");
  const mqMobile = window.matchMedia("screen and (max-width: 1024px)");

  // 이벤트 핸들러 정의
  const headerMouseEnter = function () {
    header.classList.add("visible");
  };

  const headerMouseLeave = function () {
    header.classList.remove("visible");
  };

  const gnbClickHandler = function () {
    const gnbItem = this;
    // 모든 gnb의 ul에서 visible 클래스 제거
    HeaderDOM.gnb.forEach((item) => {
      const siblingUl = item.querySelector("ul");
      if (siblingUl && item !== gnbItem) {
        siblingUl.classList.remove("visible");
      }
      const plusIcon = item.querySelector("a>i");
      if (plusIcon && item !== gnbItem) {
        plusIcon.classList.remove("active");
      }
    });

    // 현재 클릭한 gnb의 ul에만 visible 클래스 토글
    const currentUl = gnbItem.querySelector("ul");
    if (currentUl) {
      currentUl.classList.toggle("visible");
    }

    // 현재 클릭한 gnb의 plus 아이콘에 active 클래스 토글
    const currentPlusIcon = gnbItem.querySelector("a>i");
    if (currentPlusIcon) {
      currentPlusIcon.classList.toggle("active");
    }
  };

  function setupDeckEvents() {
    header.addEventListener("mouseenter", headerMouseEnter);
    header.addEventListener("mouseleave", headerMouseLeave);
  }

  function removeDeckEvents() {
    header.removeEventListener("mouseenter", headerMouseEnter);
    header.removeEventListener("mouseleave", headerMouseLeave);
  }

  function setupGnbClickEvents() {
    HeaderDOM.gnb.forEach((gnbItem) => {
      gnbItem.addEventListener("click", gnbClickHandler);
    });
  }

  function removeGnbClickEvents() {
    HeaderDOM.gnb.forEach((gnbItem) => {
      gnbItem.removeEventListener("click", gnbClickHandler);
    });
  }

  HeaderDOM.mobileBtn.addEventListener("click", function () {
    this.classList.toggle("x");
    header.classList.toggle("visible");
    HeaderDOM.menu.classList.toggle("visible");
    document.querySelector("body").classList.toggle("of-h");
  });

  document.addEventListener("mousedown", function (event) {
    if (!header.contains(event.target)) {
      HeaderDOM.gnb.forEach((el) => {
        const siblingUl = el.querySelector("ul");
        if (siblingUl) {
          siblingUl.classList.remove("visible");
        }
        el.classList.remove("active");
        const plusIcon = el.querySelector("a>i");
        if (plusIcon) {
          plusIcon.classList.remove("active");
        }
      });
    }
  });

  function initialize() {
    if (mqDeck.matches) {
      setupDeckEvents();
      removeGnbClickEvents();
    } else if (mqMobile.matches) {
      removeDeckEvents();
      setupGnbClickEvents();
    }
  }

  initialize();

  // 미디어 쿼리 상태 변경 시 이벤트 재설정
  mqMobile.addEventListener("change", initialize);
  mqDeck.addEventListener("change", initialize);
}

headerFull();
