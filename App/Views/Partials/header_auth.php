<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] dark:border-slate-800 bg-white dark:bg-[#1A2633] px-10 py-3">
    <div class="flex items-center gap-4 text-[#0d141b] dark:text-white">
        <div class="size-8 text-primary">
            <span class="material-symbols-outlined !text-[32px]">local_library</span>
        </div>
        <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Library Management System</h2>
    </div>

    <?php 
        $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); 
        // Logic to determine link text and destination
        $link_text = ($current == '/register') ? 'Login' : 'Register';
        $link_url = ($current == '/register') ? '/login' : '/register';
    ?>

    <nav>
        <ul class="flex space-x-6">
            <?php if(in_array($current, ['/register', '/login'])): ?>
                <li>
                    <a href="<?= $link_url ?>" 
                       class="flex items-center justify-center rounded-lg h-10 px-5 bg-primary/10 text-primary hover:bg-primary/20 transition-all text-sm font-bold tracking-[0.015em]">
                        <?= $link_text ?>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</header>