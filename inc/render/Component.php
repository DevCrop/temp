<?php

class Component {

    protected ?string $targetDirname; 
    protected string $title; 
    
    public function __construct(?string $targetDirname = null, string $title = '')
    {
        $this->targetDirname = $targetDirname; 
        $this->title = $title; 
    }
    
    public function render(): string
    {
        $title = $this->renderTitle(); 
        $iframe = $this->renderIframe(); 
        $codeTab = $this->renderCodeTab();
    
    
        $content = $title . $iframe . $codeTab;
    
        return "
            <div class='no-temp-block' data-name='".basename($this->targetDirname)."' data-url='".ASIDE_URL.DS.trim($this->targetDirname, '/')."'>
                {$content}
            </div>";

    }
    
    
    public function renderTitle(): string 
    {
        return "<h2 class='no-heading-sm no-pd-xs--b'>{$this->title}</h2>"; 
    }
    
    public function renderIframe(): string 
    {
        return "<div class='no-iframe-block'>
            <iframe src='".ASIDE_URL.DS.trim($this->targetDirname, '/')."'></iframe>
        </div>";
    }
    
    
    public function hasCodeFiles(): bool
    {
        $dir = ASIDE_PATH . DS . trim($this->targetDirname, '/');
        return file_exists($dir . DS . 'index.php') ||
               file_exists($dir . DS . 'index.scss') ||
               file_exists($dir . DS . 'index.js');
    }
    
    public function renderCodeTab(): string 
    {
        $tabs = [];
        $codes = [];
    
        if (file_exists(ASIDE_PATH . DS . trim($this->targetDirname, '/') . DS . 'index.php')) {
            $tabs[] = "<li><button type='button' data-code='html'>html</button></li>";
            $codes[] = "
                <div class='no-code-body-item'>
                    <pre class='prettyprint'><code>".$this->getHtml()."</code></pre>
                </div>";
        }
    
        if (file_exists(ASIDE_PATH . DS . trim($this->targetDirname, '/') . DS . 'index.scss')) {
            $tabs[] = "<li><button type='button' data-code='scss'>scss</button></li>";
            $codes[] = "
                <div class='no-code-body-item'>
                    <pre class='prettyprint'><code>".$this->getScss()."</code></pre>
                </div>";
        }
    
        if (file_exists(ASIDE_PATH . DS . trim($this->targetDirname, '/') . DS . 'index.js')) {
            $tabs[] = "<li><button type='button' data-code='js'>js</button></li>";
            $codes[] = "
                <div class='no-code-body-item'>
                    <pre class='prettyprint'><code>".$this->getJs()."</code></pre>
                </div>";
        }
    
        if (empty($tabs)) return ''; 
    
        return "
            <div class='no-code-block'>
                <div class='no-code-header'>
                    <ul>
                        <li class='no-code-buttons'>
                            <ul>".implode('', $tabs)."</ul>
                        </li>
                        <li class='no-code-copy'>
                            <button type='button'>
                                <i class='fa-regular fa-copy'></i>
                                <i class='fa-regular fa-check'></i>
                            </button>
                        </li>
                    </ul>
                    <div class='no-code-info'>
                        ".$this->getCodePath()."
                    </div>
                </div>          
                <div class='no-code-body'>".implode('', $codes)."</div>
            </div>
        ";
    }
    
    private function getCodePath(): string
    {
        return ASIDE_URL . DS . trim($this->targetDirname, '/');
    }
    
    
    private function getContent(string $filename): string 
    {
        return htmlspecialchars(file_get_contents(ASIDE_PATH.DS.trim($this->targetDirname, '/').DS.trim($filename, '/')));
    }
    
    
    private function getHtml(): string 
    {
        return $this->getContent('index.php');
    }
    
    private function getScss(): string 
    {
        return $this->getContent('index.scss');
    }
    
    private function getJs(): string 
    {
        return $this->getContent('index.js');
    }
    }

    