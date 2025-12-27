    <!-- Top Navigation -->
    <header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex justify-between">
                    <div class="flex items-center gap-4 text-[#0d141b] dark:text-white">
                        <div class="size-8 text-primary">
                            <span class="material-symbols-outlined !text-[32px]">local_library</span>
                        </div>
                        <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Library Management System</h2>
                    </div>

                </div>
                <?php $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>

                <nav aria-label="Global" class="hidden sm:ml-8 sm:flex sm:space-x-8">

                    <?php $isActive = ($current === '/'); ?>
                    <a href="/"
                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors
       <?= $isActive
            ? 'border-primary text-primary'
            : 'border-transparent text-slate-500 hover:border-slate-300 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200' ?>"
                        <?= $isActive ? 'aria-current="page"' : '' ?>>
                        Available Books
                    </a>

                    <?php $isActive = ($current === '/history'); ?>
                    <a href="/history"
                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors
       <?= $isActive
            ? 'border-primary text-primary'
            : 'border-transparent text-slate-500 hover:border-slate-300 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200' ?>"
                        <?= $isActive ? 'aria-current="page"' : '' ?>>
                        History
                    </a>

                    <?php $isActive = ($current === '/profile'); ?>
                    <a href="/profile"
                        class="inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium transition-colors
       <?= $isActive
            ? 'border-primary text-primary'
            : 'border-transparent text-slate-500 hover:border-slate-300 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200' ?>"
                        <?= $isActive ? 'aria-current="page"' : '' ?>>
                        Profile
                    </a>

                </nav>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="relative flex items-center gap-2">
                            <img alt="Librarian Profile" class="h-8 w-8 rounded-full object-cover border border-slate-200 dark:border-slate-700" data-alt="Female librarian portrait smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBb7uHxcBfHO05IEbv7NXJOLb5Ba1EZs6y6sGJgdQnnx9qrGzxi3evyU3E3RJPjQs5njWecEvp4ucsEi2BBipW8i_fdiD5iLV0MjpZ1lmulUOaYpsSA--PDfR8uEZz_9Yo9H_6eHw-oO1aYZ0DgLAa4ioJOR6U6e6Ds3s5c-GM-aaE-kRgrbYdWNSy7nZQbqCWcRK6BVV6RA6H_jTlZZpe_6hCAWrt6y9qDaiZTfe7pbc7a5fZHrCETWQSece29CAZMlIgfPW0_VEY" />
                            <span class="text-md uppercase font-medium text-slate-700 dark:text-slate-300 hidden md:block">
                                <?= htmlspecialchars($_SESSION['user_name'] ?? 'Guest') ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>