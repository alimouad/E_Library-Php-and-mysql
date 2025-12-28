<div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
    <!-- Left Column: Input & Member Info (8 cols) -->
    <div class="lg:col-span-8 space-y-6">
        <!-- Transaction Area -->
        <div class="bg-white dark:bg-slate-900 shadow-sm rounded-xl border border-slate-200 dark:border-slate-800 flex flex-col h-auto">
            <!-- Book Input -->
            <div class="p-6 border-b border-slate-100 dark:border-slate-800 bg-slate-50/50 dark:bg-slate-900/50">
                <label class="block text-xl font-medium text-slate-700 dark:text-slate-300 mb-1">
                    Available Books
                </label>
            </div>
            <!-- Current Session List -->
            <div class="min-w-[1000px]">
                <table class="w-full ">
                    <thead>
                        <tr class="bg-slate-50 border-b border-border-light">
                            <th class="px-6 py-4 text-left text-text-secondary text-xs uppercase font-semibold tracking-wider w-20">Cover</th>
                            <th class="px-6 py-4 text-left text-text-secondary text-xs uppercase font-semibold tracking-wider">Title / ISBN</th>
                            <th class="px-6 py-4 text-left text-text-secondary text-xs uppercase font-semibold tracking-wider">Author</th>
                            <th class="px-6 py-4 text-left text-text-secondary text-xs uppercase font-semibold tracking-wider">Year</th>
                            <th class="px-6 py-4 text-left text-text-secondary text-xs uppercase font-semibold tracking-wider">Status</th>
                            <th class="px-6 py-4 text-right text-text-secondary text-xs uppercase font-semibold tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-border-light">
                        <?php if (!empty($books)): ?>
                            <?php foreach ($books as $book): ?>
                                <tr class="group hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="h-12 w-8 bg-slate-200 flex items-center justify-center rounded shadow-sm border border-border-light">
                                            <span class="material-symbols-outlined text-slate-400">book</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex flex-col">
                                            <span class="text-text-main font-medium text-sm"><?= htmlspecialchars($book['title']) ?></span>
                                            <span class="text-text-secondary text-xs mt-0.5 font-mono">ISBN-<?= htmlspecialchars($book['id']) ?></span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-text-secondary text-sm">
                                        <?= htmlspecialchars($book['author']) ?>
                                    </td>
                                    <td class="px-6 py-4 text-text-secondary text-sm">
                                        <?= htmlspecialchars($book['year']) ?>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <?php
                                            $status = $book['status'] ?? 'available';
                                            $dotColor = ($status === 'available') ? 'bg-emerald-500' : 'bg-amber-500';
                                            $textColor = ($status === 'available') ? 'text-emerald-700' : 'text-amber-700';
                                            ?>
                                            <div class="h-2 w-2 rounded-full <?= $dotColor ?>"></div>
                                            <span class="<?= $textColor ?> text-sm font-medium capitalize"><?= $status ?></span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <?php if ($book['status'] === 'available'): ?>
                                            <a href="/borrow?id=<?= $book['id'] ?>"
                                                class="bg-blue-600 text-sm text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition-colors">
                                                Borrow
                                            </a>
                                        <?php else: ?>
                                            <span class="text-gray-400">Currently Borrowed</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="px-6 py-10 text-center text-text-secondary">
                                    No books found in the library.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <?php if (isset($_SESSION['SUCCESS_MESSAGE'])): ?>
                <div id="flash-message" class="fixed top-5 right-5 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-xl z-50 flex items-center justify-between min-w-[300px] transition-opacity duration-500">
                    <span><?= htmlspecialchars($_SESSION['SUCCESS_MESSAGE']); ?></span>

                    <button onclick="closeFlash()" class="ml-4 text-green-900 hover:text-green-500 font-bold text-xl">
                        &times;
                    </button>
                </div>
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
            <?php endif; ?>
        </div>
    </div>
    <!-- Right Column: Sidebar (4 cols) -->
    <div class="lg:col-span-4 space-y-6">
        <!-- Quick Stats / Shortcuts -->
        <div class="grid grid-cols-1 gap-4">
            <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Total Books</p>
                        <h3 class="text-3xl font-bold mt-2 text-slate-800"><?= $totalBooks?></h3>
                    </div>
                    <div class="p-2 bg-blue-50 rounded-lg text-blue-600">
                        <span class="material-symbols-outlined">menu_book</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to close the message
    function closeFlash() {
        const el = document.getElementById('flash-message');
        el.style.opacity = '0';
        setTimeout(() => el.remove(), 500);
    }
    setTimeout(closeFlash, 5000);
</script>