<div class="p-6">
    <h2 class="text-2xl font-bold mb-4">My Borrowing History</h2>
     <?php if (isset($_SESSION['SUCCESS_MESSAGE'])): ?>
                <div id="flash-message" class="fixed top-5 right-5 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-xl z-50 flex items-center justify-between min-w-[300px] transition-opacity duration-500">
                    <span><?= htmlspecialchars($_SESSION['SUCCESS_MESSAGE']); ?></span>

                    <button onclick="closeFlash()" class="ml-4 text-green-900 hover:text-green-500 font-bold text-xl">
                        &times;
                    </button>
                </div>
                <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
            <?php endif; ?>
    <div class="bg-white rounded-xl shadow overflow-hidden">
        <table class="w-full text-left">
            <thead>
                <tr class="bg-gray-50 border-b">
                    <th class="px-6 py-4 font-semibold">Book Title</th>
                    <th class="px-6 py-4 font-semibold">Author</th>
                    <th class="px-6 py-4 font-semibold">Borrowed On</th>
                    <th class="px-6 py-4 font-semibold">Returned On</th>
                    <th class="px-6 py-4 font-semibold">Status</th>
                    <th class="px-6 py-4 font-semibold text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y">
                <?php if (!empty($history)): ?>
                    <?php foreach ($history as $record): ?>
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4"><?= htmlspecialchars($record['title']) ?></td>
                            <td class="px-6 py-4"><?= htmlspecialchars($record['author']) ?></td>
                            <td class="px-6 py-4"><?= date('M d, Y', strtotime($record['borrowDate'])) ?></td>
                            <td class="px-6 py-4">
                                <?= $record['returnDate'] ? date('M d, Y', strtotime($record['returnDate'])) : '<span class="text-gray-400 italic text-sm">Not returned yet</span>' ?>
                            </td>
                            <td class="px-6 py-4">
                                <?php if ($record['returnDate']): ?>
                                    <span class="text-green-600 bg-green-100 px-2 py-1 rounded-full text-xs font-medium">Returned</span>
                                <?php else: ?>
                                    <span class="text-blue-600 bg-blue-100 px-2 py-1 rounded-full text-xs font-medium">Active</span>
                                <?php endif; ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <?php if (empty($record['returnDate'])): ?>

                                    <?php if (isset($record['borrowId']) && isset($record['bookId'])): ?>
                                        <a href="/return?borrow_id=<?= $record['borrowId'] ?>&book_id=<?= $record['bookId'] ?>"
                                            onclick="return confirm('Do you want to return this book?')"
                                            class="bg-amber-500 hover:bg-amber-600 text-white px-3 py-1.5 rounded-lg text-sm transition-all">
                                            Give Back
                                        </a>
                                    <?php else: ?>
                                        <span class="text-xs text-red-500">Missing Data</span>
                                    <?php endif; ?>

                                <?php else: ?>
                                    <span class="text-gray-400 text-sm italic">Returned</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" class="px-6 py-10 text-center text-gray-500 italic">
                            You haven't borrowed any books yet.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
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