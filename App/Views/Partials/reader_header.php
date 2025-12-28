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
                        class="inline-flex items-center px-1 pt-1 border-b-2 text-md font-medium transition-colors
       <?= $isActive
            ? 'border-primary text-primary'
            : 'border-transparent text-slate-500 hover:border-slate-300 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200' ?>"
                        <?= $isActive ? 'aria-current="page"' : '' ?>>
                        Available Books
                    </a>

                    <?php $isActive = ($current === '/history'); ?>
                    <a href="/history"
                        class="inline-flex items-center px-1 pt-1 border-b-2 text-md font-medium transition-colors
       <?= $isActive
            ? 'border-primary text-primary'
            : 'border-transparent text-slate-500 hover:border-slate-300 hover:text-slate-700 dark:text-slate-400 dark:hover:text-slate-200' ?>"
                        <?= $isActive ? 'aria-current="page"' : '' ?>>
                        History
                    </a>



                </nav>
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <div class="relative flex items-center gap-2">
                            <a href="/profile" class="flex pointer items-center gap-3">
                                <img alt="Librarian Profile" class="h-8 w-8 rounded-full object-cover border border-slate-200 dark:border-slate-700" data-alt="Female librarian portrait smiling" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBb7uHxcBfHO05IEbv7NXJOLb5Ba1EZs6y6sGJgdQnnx9qrGzxi3evyU3E3RJPjQs5njWecEvp4ucsEi2BBipW8i_fdiD5iLV0MjpZ1lmulUOaYpsSA--PDfR8uEZz_9Yo9H_6eHw-oO1aYZ0DgLAa4ioJOR6U6e6Ds3s5c-GM-aaE-kRgrbYdWNSy7nZQbqCWcRK6BVV6RA6H_jTlZZpe_6hCAWrt6y9qDaiZTfe7pbc7a5fZHrCETWQSece29CAZMlIgfPW0_VEY" />
                                <span class="text-md uppercase font-medium text-slate-700 dark:text-slate-300 hidden md:block">

                                    <?= htmlspecialchars($_SESSION['user_name'] ?? 'Guest') ?>
                                </span>
                            </a>
                            <a href="/logout"
                                onclick="return confirm('Are you sure you want to log out?')"
                                class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors border border-red-100">
                                <span class="material-symbols-outlined text-[18px]">logout</span>
                                <span>Logout</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>