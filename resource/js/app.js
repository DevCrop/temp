document.querySelectorAll(".no-code-block code").forEach((codeEl) => {
  const raw = codeEl.innerHTML;
  codeEl.textContent = raw; 
});


  document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('.no-code-buttons button');
    const codeItems = document.querySelectorAll('.no-code-body-item');
    const iframe = document.getElementById('html-preview');

    buttons.forEach(button => {
      button.addEventListener('click', () => {
        const selectedCode = button.getAttribute('data-code');

        // 코드 보기 탭 처리
        codeItems.forEach(item => {
          item.style.display = item.getAttribute('data-code') === selectedCode ? 'block' : 'none';
        });

        buttons.forEach(btn => {
          btn.classList.toggle('active', btn === button);
        });

        // HTML 코드 iframe에 렌더링
        if (selectedCode === 'html' && iframe) {
          const htmlCodeEl = document.querySelector('.no-code-body-item[data-code="html"] code');
          const htmlContent = htmlCodeEl.textContent.trim();
          iframe.srcdoc = htmlContent;
        }
      });
    });

    // 첫 번째 버튼 자동 클릭
    buttons[0]?.click();
  });