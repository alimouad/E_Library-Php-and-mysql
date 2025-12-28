<main class="flex-1 flex items-center justify-center p-6 md:p-12">
    <div class="w-full max-w-[1000px] h-full min-h-[600px] bg-white dark:bg-[#1A2633] rounded-xl shadow-lg flex overflow-hidden border border-[#e7edf3] dark:border-slate-800">
        <!-- Left Side: Login Form -->
        <div class="w-full lg:w-1/2 p-8 md:p-12 flex flex-col justify-center">
            <div class="max-w-[400px] mx-auto w-full">
                <!-- Header Section -->
                <div class="flex flex-col gap-3 mb-8">
                    <h1 class="text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em] text-[#0d141b] dark:text-white">Welcome Back</h1>
                    <p class="text-[#4c739a] dark:text-slate-400 text-base font-normal leading-normal">Please sign in to your library account.</p>
                </div>

                <?php if (isset($data['errors']['LoginErr'])): ?>
                    <div class="mb-4 p-3 rounded bg-red-50 text-red-700 text-sm border border-red-200">
                        <?= htmlspecialchars($data['errors']['LoginErr']); ?>
                    </div>
                <?php endif; ?>
                <!-- Form -->
                <form class="flex flex-col gap-5" action="" method="POST" novalidate>
                    <!-- Email Input -->
                    <label class="flex flex-col w-full">
                        <p class="text-[#0d141b] dark:text-slate-200 text-sm font-medium leading-normal pb-2">Email Address</p>
                        <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] dark:border-slate-600 bg-slate-50 dark:bg-slate-800 focus:border-primary h-12 placeholder:text-[#97aab9] p-[15px] text-base font-normal leading-normal transition-all" placeholder="user@library.com" type="email" name="email" value="" />
                        <?php if (isset($data['errors']['EmailErr'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['EmailErr']) ?></p>
                    <?php endif; ?>
                    </label>
                    <!-- Password Input -->
                    <label class="flex flex-col w-full">
                        <div class="flex justify-between items-center pb-2">
                            <p class="text-[#0d141b] dark:text-slate-200 text-sm font-medium leading-normal">Password</p>
                        </div>
                        <div class="relative flex w-full flex-1 items-stretch rounded-lg group">
                            <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] dark:border-slate-600 bg-slate-50 dark:bg-slate-800 focus:border-primary h-12 placeholder:text-[#97aab9] p-[15px] pr-10 text-base font-normal leading-normal transition-all" placeholder="Enter your password" name="password" type="password" value="" />
                            <button class="absolute right-3 top-1/2 -translate-y-1/2 text-[#4c739a] hover:text-primary transition-colors flex items-center justify-center" type="button">
                                <span class="material-symbols-outlined !text-[20px]">visibility</span>
                            </button>
                        </div>
                        <?php if (isset($data['errors']['PasswordErr'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['PasswordErr']) ?></p>
                    <?php endif; ?>
                    </label>
                    <!-- Submit Button -->
                    <button class="mt-2 flex w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-primary hover:bg-blue-600 text-white text-base font-bold leading-normal tracking-[0.015em] transition-colors shadow-sm" type="submit">
                        <span class="truncate">Sign In</span>
                    </button>
                </form>
                <!-- Footer Link -->
                <div class="mt-8 text-center">
                    <p class="text-[#4c739a] text-sm">
                        Don't have an account?
                        <a class="font-bold text-primary hover:text-blue-700 transition-colors" href="/register">Register here</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Right Side: Image/Hero -->
        <div class="hidden lg:flex w-1/2 bg-slate-50 dark:bg-slate-900 relative">
            <div class="absolute inset-0 w-full h-full">
                <div class="w-full h-full bg-center bg-no-repeat bg-cover" data-alt="Modern library interior with rows of books and warm lighting" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAJ6jPpiAk7ZFle6W6rzV4REHbpLB9DAOy-sUS3yUxGhG3nHkdBiyKNr1oD3TbMzlm_z0y5yE_Ep3FvI5TYQY-iV9syDRRribhvW7aeKlTatZpRWF1_ykfxF97WCA3kkDT4VNa9jDgi196N5A1UwRQSJCL2vOcqTJmiSbfSLmmjtvwcQ02soL7NXFXmbiiyJgIeZTh4XF2qzwzBTT8TLqytQ6BTnl0W4JDSMlkAiiXw6LXDNNaKPlTM4tSzzE9SFv9JAEd8VcFtFRY");'>
                </div>
                <!-- Overlay for text readability if needed, or just aesthetic tint -->
                <div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            </div>
            <!-- Quote or Welcome Message on Image -->
            <div class="absolute bottom-12 left-12 right-12 text-white z-10">
                <div class="mb-4 inline-flex items-center justify-center w-12 h-12 rounded-full bg-white/20 backdrop-blur-sm border border-white/30">
                    <span class="material-symbols-outlined text-white">auto_stories</span>
                </div>
                <h3 class="text-2xl font-bold mb-2">Access knowledge anywhere.</h3>
                <p class="text-white/80 font-medium leading-relaxed">Manage your library resources efficiently and discover a world of information at your fingertips.</p>
            </div>
        </div>
    </div>
</main>