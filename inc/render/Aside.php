<?php

class Aside
{
    protected ?string $targetDirname;

    public function __construct(?string $targetDirname = null)
    {
        $this->targetDirname = $targetDirname;
    }

    public function render(): string
    {
        $list = $this->renderList(ASIDE_PATH);
        return "
        <div class='no-temp-aside'>
            <div class='no-temp-aside-container'>
                <div class='of-s'>
                    <aside class='no-temp-aside-wrap'>
                        {$list}
                    </aside>
                </div>
            </div>
        </div>";
    }

    protected function renderList(string $path): string
    {
        $items = $this->renderItems($path);
        if (!$items) return '';

        return "
        <div class='no-temp-aside-list'>
            <ul class='no-temp-aside-item'>
                {$items}
            </ul>
        </div>";
    }

    protected function renderItems(string $path): string
    {
        $items = scandir($path);
        if (!$items) return '';
    
        $html = '';
    
        foreach ($items as $item) {
            if ($item === '.' || $item === '..') continue;
    
            $fullPath = $path . DIRECTORY_SEPARATOR . $item;
            if (is_dir($fullPath)) {
                $subItems = $this->renderItems($fullPath);
    
                // 💡 여기서 data-name 추가
                $html .= "<li><button type='button' class='no-temp-button' data-name='{$item}'>{$item}</button>";
    
                if ($subItems) {
                    $html .= "<ul class='no-temp-aside-item'>{$subItems}</ul>";
                }
    
                $html .= "</li>";
            }
        }
    
        return $html;
    }
    
}