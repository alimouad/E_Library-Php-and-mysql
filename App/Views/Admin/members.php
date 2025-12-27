  <header class="w-full px-8 py-6 flex items-center justify-between bg-surface border-b border-border-light z-10 shadow-sm">
      <div>
          <h2 class="text-text-main text-2xl font-bold tracking-tight">Book Management</h2>
          <p class="text-text-secondary text-sm mt-1">Manage Members </p>
      </div>
  </header>
  <div class="flex-1 overflow-y-auto px-8 py-8">
      <div class="rounded-xl border border-border-light bg-surface overflow-hidden shadow-sm">
          <div class="overflow-x-auto">
              <?php if (isset($_SESSION['SUCCESS_MESSAGE'])): ?>
                  <div id="flash-message" class="fixed top-5 right-5 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-xl z-50 flex items-center justify-between min-w-[300px] transition-opacity duration-500">
                      <span><?= htmlspecialchars($_SESSION['SUCCESS_MESSAGE']); ?></span>

                      <button onclick="closeFlash()" class="ml-4 text-green-900 hover:text-green-500 font-bold text-xl">
                          &times;
                      </button>
                  </div>
                  <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
              <?php endif; ?>
              <table class="w-full min-w-[1000px]">
                  <thead>
                      <tr class="bg-slate-50 border-b">
                          <th class="px-6 py-4 text-left">ID</th>
                          <th class="px-6 py-4 text-left">Full Name</th>
                          <th class="px-6 py-4 text-left">Email</th>
                          <th class="px-6 py-4 text-left">Role</th>
                          <th class="px-6 py-4 text-right">Actions</th>
                      </tr>
                  </thead>
                  <tbody class="divide-y">
                      <?php if (!empty($members)): ?>
                          <?php foreach ($members as $user): ?>
                              <tr class="hover:bg-slate-50">
                                  <td class="px-6 py-4 text-sm"><?= htmlspecialchars($user['id']) ?></td>
                                  <td class="px-6 py-4 text-sm font-medium"><?= htmlspecialchars($user['full_name']) ?></td>
                                  <td class="px-6 py-4 text-sm text-slate-600"><?= htmlspecialchars($user['email']) ?></td>
                                  <td class="px-6 py-4 text-sm">
                                      <span class="px-2 py-1 rounded-full bg-blue-100 text-blue-700 text-xs">
                                          <?= htmlspecialchars($user['role']) ?>
                                      </span>
                                  </td>
                                  <td class="px-6 py-4 text-right">
                                      <a href="/admin/members/delete?id=<?= $user['id'] ?>"
                                          onclick="return confirm('Are you sure you want to delete this book?')"
                                          class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light text-text-secondary hover:text-red-500 transition-all">
                                          <span class="material-symbols-outlined text-[20px]">delete</span>
                                      </a>
                                  </td>
                              </tr>
                          <?php endforeach; ?>
                      <?php else: ?>
                          <tr>
                              <td colspan="5" class="px-6 py-10 text-center">No members found.</td>
                          </tr>
                      <?php endif; ?>
                  </tbody>
              </table>
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