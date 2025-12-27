<div class="max-w-4xl mx-auto py-10 px-4 sm:px-6 lg:px-8">
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="bg-slate-50 border-b border-slate-200 px-6 py-4">
            <h3 class="text-lg font-medium text-slate-900">Profile Information</h3>
            <p class="mt-1 text-sm text-slate-500">View and manage your account details.</p>
        </div>

        <div class="p-6 space-y-6">
            <div class="flex items-center gap-6">
                <div class="h-24 w-24 rounded-full bg-primary flex items-center justify-center text-white text-3xl font-bold shadow-inner">
                    <?= strtoupper(substr($user['full_name'], 0, 1)) ?>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-slate-800"><?= htmlspecialchars($user['full_name']) ?></h2>
                    <p class="text-slate-500"><?= htmlspecialchars($user['role']) ?> • Member since <?= date('M Y', strtotime($user['created_at'] ?? 'now')) ?></p>
                </div>
            </div>

            <hr class="border-slate-100">

            <form action="/account/update" method="POST" class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                <div class="sm:col-span-3">
                    <label for="full_name" class="block text-sm font-medium text-slate-700">Full Name</label>
                    <div class="mt-1">
                        <input type="text" name="full_name" id="full_name" value="<?= htmlspecialchars($user['full_name']) ?>" 
                               class="block w-full rounded-md border-slate-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label for="email" class="block text-sm font-medium text-slate-700">Email address</label>
                    <div class="mt-1">
                        <input type="email" name="email" id="email" value="<?= htmlspecialchars($user['email']) ?>" 
                               class="block w-full rounded-md border-slate-300 shadow-sm focus:border-primary focus:ring-primary sm:text-sm">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <label class="block text-sm font-medium text-slate-700 text-opacity-50">Account Role</label>
                    <div class="mt-1">
                        <input type="text" value="<?= htmlspecialchars($user['role']) ?>" readonly 
                               class="block w-full rounded-md border-slate-200 bg-slate-50 text-slate-500 cursor-not-allowed sm:text-sm">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>