<!-- Main Content Area -->
<main class="layout-container flex grow flex-col justify-center items-center py-10 px-4 sm:px-6">
    <!-- Registration Card -->
    <div class="layout-content-container flex flex-col w-full max-w-[540px] bg-white dark:bg-[#1A2632] rounded-xl shadow-lg border border-[#e7edf3] dark:border-slate-800 overflow-hidden">
        <div class="p-8 sm:p-10">
            <!-- Header -->
            <div class="flex flex-col items-center text-center mb-8">
                <h1 class="text-[#0d141b] dark:text-white tracking-tight text-[28px] sm:text-[32px] font-bold leading-tight mb-2">Create your account</h1>
                <p class="text-slate-500 dark:text-slate-400 text-base font-normal leading-normal max-w-xs">Manage your books, loans, and reservations easily.</p>
            </div>
            <!-- Divider -->
            <div class="relative flex py-2 items-center mb-6">
                <div class="flex-grow border-t border-slate-200 dark:border-slate-700"></div>
                <span class="flex-shrink-0 mx-4 text-slate-400 text-xs font-semibold uppercase tracking-wider">Register with email</span>
                <div class="flex-grow border-t border-slate-200 dark:border-slate-700"></div>
            </div>
            <?php if (isset($data['errors']['DatabaseErr'])): ?>
                <div class="mb-4 p-3 rounded bg-red-50 text-red-700 text-sm border border-red-200">
                    <?= htmlspecialchars($data['errors']['DatabaseErr']) ; ?>
                </div>
            <?php endif; ?>
            <!-- Form -->
            <form class="flex flex-col gap-5" action="" method="POST" novalidate>
                <!-- Full Name -->
                <div class="flex flex-col gap-2">
                    <label class="text-[#0d141b] dark:text-slate-200 text-sm font-semibold leading-normal" for="name">Full Name</label>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/30 border border-[#cfdbe7] dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 focus:border-primary h-12 placeholder:text-[#4c739a]/60 dark:placeholder:text-slate-500 p-4 text-sm font-normal leading-normal transition-all"
                        id="name"
                        name="name"
                        placeholder="Enter your full name"
                        type="text"
                        value="<?= isset($data['name']) ? htmlspecialchars($data['name']) : '' ?>" />
                    <?php if (isset($data['errors']['NameErr'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['NameErr']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Email -->
                <div class="flex flex-col gap-2">
                    <label class="text-[#0d141b] dark:text-slate-200 text-sm font-semibold leading-normal" for="email">Email Address</label>
                    <input
                        class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/30 border border-[#cfdbe7] dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 focus:border-primary h-12 placeholder:text-[#4c739a]/60 dark:placeholder:text-slate-500 p-4 text-sm font-normal leading-normal transition-all"
                        id="email"
                        name="email"
                        placeholder="name@example.com"
                        type="email"
                        value="<?= isset($data['email']) ? htmlspecialchars($data['email']) : '' ?>" />
                    <?php if (isset($data['errors']['EmailErr'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['EmailErr']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Password -->
                <div class="flex flex-col gap-2 relative">
                    <label class="text-[#0d141b] dark:text-slate-200 text-sm font-semibold leading-normal" for="password">Password</label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/30 border border-[#cfdbe7] dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 focus:border-primary h-12 placeholder:text-[#4c739a]/60 dark:placeholder:text-slate-500 p-4 pr-12 text-sm font-normal leading-normal transition-all"
                            id="password"
                            name="password"
                            placeholder="Create a password"
                            type="password" />
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors flex items-center justify-center" type="button" onclick="togglePassword()">
                            <span class="material-symbols-outlined text-[20px]" id="toggleIcon">visibility</span>
                        </button>
                    </div>
                    <?php if (isset($data['errors']['PasswordErr'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['PasswordErr']) ?></p>
                    <?php endif; ?>
                </div>
                <!-- Confirm Password -->
                <div class="flex flex-col gap-2 relative">
                    <label class="text-[#0d141b] dark:text-slate-200 text-sm font-semibold leading-normal" for="password">Password</label>
                    <div class="relative">
                        <input
                            class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141b] dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/30 border border-[#cfdbe7] dark:border-slate-700 bg-slate-50 dark:bg-slate-900/50 focus:border-primary h-12 placeholder:text-[#4c739a]/60 dark:placeholder:text-slate-500 p-4 pr-12 text-sm font-normal leading-normal transition-all"
                            id="confirm_password"
                            name="password_confirmation"
                            placeholder="Confirm a password"
                            type="password" />
                        <button class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors flex items-center justify-center" type="button" onclick="togglePassword()">
                            <span class="material-symbols-outlined text-[20px]" id="toggleIcon">visibility</span>
                        </button>
                    </div>
                    <?php if (isset($data['errors']['PasswordErr'])): ?>
                        <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['PasswordErr']) ?></p>
                    <?php endif; ?>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="flex mt-4 w-full cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-4 bg-primary hover:bg-blue-600 active:bg-blue-700 text-white text-base font-bold leading-normal tracking-[0.015em] transition-all shadow-md hover:shadow-lg transform active:scale-[0.98]">
                    <span class="truncate">Create Account</span>
                </button>

                <!-- Terms -->
                <p class="text-xs text-center text-slate-500 dark:text-slate-400 mt-2 leading-relaxed">
                    By creating an account, you agree to our <br class="hidden sm:block" />
                    <a class="text-primary hover:text-blue-600 hover:underline transition-colors" href="/terms">Terms of Service</a> and
                    <a class="text-primary hover:text-blue-600 hover:underline transition-colors" href="/privacy">Privacy Policy</a>.
                </p>
            </form>
        </div>
        <!-- Card Footer -->
        <div class="bg-slate-50 dark:bg-slate-900/30 p-4 border-t border-[#e7edf3] dark:border-slate-800 text-center">
            <p class="text-sm text-slate-600 dark:text-slate-400">
                Already have an account?
                <a class="font-bold text-primary hover:text-blue-600 hover:underline ml-1 transition-colors" href="/login">Log in</a>
            </p>
        </div>
    </div>
</main>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.textContent = 'visibility_off';
        } else {
            passwordInput.type = 'password';
            toggleIcon.textContent = 'visibility';
        }
    }
</script>