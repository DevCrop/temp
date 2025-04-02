const componentBlocks = document.querySelectorAll(".no-temp-block");

componentBlocks.forEach((block) => {
  const url = block.dataset.url;

  const iframe = block.querySelector("iframe");

  iframe.addEventListener("load", () => {
    const iframeDoc = iframe.contentDocument || iframe.contentWindow.document;

    // CSS 넣기
    const link = iframeDoc.createElement("link");
    link.rel = "stylesheet";
    link.href = "/resource/css/style.css";
    iframeDoc.head.appendChild(link);

    // JS 넣기
    const script = iframeDoc.createElement("script");
    script.src = `${url}/index.js`;
    iframeDoc.body.appendChild(script);
  });
});

class TabManager {
  constructor(container) {
    this.container = container;
    this.tabButtons = container.querySelectorAll(".no-code-buttons button");
    this.tabContents = container.querySelectorAll(".no-code-body-item");
    this.copyButton = container.querySelector(".no-code-copy button");
    this.toast = new Toast();
    this.activeTabIndex = 0;

    this.init();
  }

  init() {
    this.tabButtons.forEach((button, index) => {
      button.addEventListener("click", () => {
        this.activateTab(index);
      });
    });

    if (this.copyButton) {
      this.copyButton.addEventListener("click", () => {
        this.copyActiveCode();
      });
    }

    this.activateTab(0);
  }

  activateTab(index) {
    this.activeTabIndex = index;

    this.tabButtons.forEach((btn, i) => {
      btn.classList.toggle("active", i === index);
    });

    this.tabContents.forEach((content, i) => {
      content.style.display = i === index ? "block" : "none";
    });
  }

  copyActiveCode() {
    const activeContent = this.tabContents[this.activeTabIndex];
    if (!activeContent) return;

    const codeElement = activeContent.querySelector("code");
    const codeText = codeElement?.innerText;

    if (codeText) {
      navigator.clipboard.writeText(codeText).then(() => {
        this.toggleClickedClass();
        this.toast.show();
      });
    }
  }

  toggleClickedClass() {
    if (!this.copyButton) return;

    this.copyButton.classList.add("clicked");

    setTimeout(() => {
      this.copyButton.classList.remove("clicked");
    }, 1000);
  }
}

class Toast {
  constructor(
    selector = ".no-code-copy-toast",
    activeClass = "copied",
    duration = 3000
  ) {
    this.toast = document.querySelector(selector);
    this.activeClass = activeClass;
    this.duration = duration;
  }

  show() {
    if (!this.toast) return;

    this.toast.classList.add(this.activeClass);

    clearTimeout(this._timeout);
    this._timeout = setTimeout(() => {
      this.toast.classList.remove(this.activeClass);
    }, this.duration);
  }
}

class App {
  constructor() {}

  static initTabs() {
    const codeBlocks = document.querySelectorAll(".no-code-block");
    codeBlocks.forEach((block) => {
      new TabManager(block);
    });
  }
}

// 실행
document.addEventListener("DOMContentLoaded", () => {
  App.initTabs();
});
