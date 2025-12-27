  <header class="w-full px-8 py-6 flex items-center justify-between bg-surface border-b border-border-light z-10 shadow-sm">
      <div>
          <h2 class="text-text-main text-2xl font-bold tracking-tight">Book Management</h2>
          <p class="text-text-secondary text-sm mt-1">Manage library inventory</p>
      </div>
      <div class="flex gap-3">
          <button class="flex items-center justify-center gap-2 h-10 px-6 rounded-lg bg-primary text-white hover:bg-primary-hover shadow-lg shadow-blue-500/20 transition-all">
              <span class="material-symbols-outlined text-sm">add</span>
              <span id="add_book_btn" class="text-sm font-bold">Add New Book</span>
          </button>
      </div>
  </header>
  <div class="flex-1 overflow-y-auto px-8 py-8">
      <div class="rounded-xl border border-border-light bg-surface overflow-hidden shadow-sm">
          <div class="overflow-x-auto">
              <table class="w-full min-w-[1000px]">
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
                                      <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                          <a href="/admin/books/edit?id=<?= $book['id'] ?>" class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light text-text-secondary hover:text-text-main">
                                              <span class="material-symbols-outlined text-[20px]">edit</span>
                                          </a>
                                          <a href="/admin/books/delete?id=<?= $book['id'] ?>"
                                              onclick="return confirm('Are you sure you want to delete this book?')"
                                              class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light text-text-secondary hover:text-red-500 transition-all">
                                              <span class="material-symbols-outlined text-[20px]">delete</span>
                                          </a>
                                      </div>
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
          <!-- <div class="px-6 py-4 border-t border-border-light flex items-center justify-between bg-white">
              <p class="text-sm text-text-secondary">Showing <span class="text-text-main font-medium">1</span> to <span class="text-text-main font-medium">5</span> of <span class="text-text-main font-medium">124</span> results</p>
              <div class="flex items-center gap-2">
                  <button class="p-2 rounded-lg text-text-secondary hover:text-text-main hover:bg-element-hover disabled:opacity-50 transition-colors">
                      <span class="material-symbols-outlined text-sm">chevron_left</span>
                  </button>
                  <button class="h-8 w-8 rounded-lg bg-primary text-white text-sm font-medium flex items-center justify-center shadow-sm">1</button>
                  <button class="h-8 w-8 rounded-lg text-text-secondary hover:bg-element-hover hover:text-text-main text-sm font-medium flex items-center justify-center transition-colors">2</button>
                  <button class="h-8 w-8 rounded-lg text-text-secondary hover:bg-element-hover hover:text-text-main text-sm font-medium flex items-center justify-center transition-colors">3</button>
                  <span class="text-text-secondary text-sm">...</span>
                  <button class="h-8 w-8 rounded-lg text-text-secondary hover:bg-element-hover hover:text-text-main text-sm font-medium flex items-center justify-center transition-colors">8</button>
                  <button class="p-2 rounded-lg text-text-secondary hover:text-text-main hover:bg-element-hover transition-colors">
                      <span class="material-symbols-outlined text-sm">chevron_right</span>
                  </button>
              </div>
          </div> -->

          <?php if (isset($_SESSION['SUCCESS_MESSAGE'])): ?>
              <div id="flash-message" class="fixed top-5 right-5 bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-lg shadow-xl z-50 flex items-center justify-between min-w-[300px] transition-opacity duration-500">
                  <span><?= htmlspecialchars($_SESSION['SUCCESS_MESSAGE']); ?></span>

                  <button onclick="closeFlash()" class="ml-4 text-green-900 hover:text-green-500 font-bold text-xl">
                      &times;
                  </button>
              </div>
              <?php unset($_SESSION['SUCCESS_MESSAGE']); ?>
          <?php endif; ?>
          <!-- Overlay Background -->
          <div id="add_book_overlay" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-40 transition-opacity" onclick="closeAddBookForm()"></div>

          <!-- Popup Modal -->
          <div id="add_book_container" class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 w-full max-w-2xl max-h-[90vh] overflow-y-auto rounded-xl bg-white shadow-2xl ring-1 ring-black/5">


              <form action="" method="POST" novalidate>
                  <?php if (isset($data["errors"]["Error"])): ?>
                      <div class="mb-4 p-3 rounded bg-red-50 text-red-700 text-sm border border-red-200">
                          <?= $data["errors"]["Error"]; ?>
                      </div>
                  <?php endif; ?>
                  <!-- Header -->
                  <div class="sticky top-0 z-10 border-b border-[#e7edf3] bg-white px-6 py-4 flex items-center justify-between">
                      <h3 class="text-lg font-semibold text-gray-900">Add New Book</h3>
                      <button type="button" onclick="closeAddBookForm()" class="text-gray-400 hover:text-gray-600 transition-colors">
                          <span class="material-symbols-outlined text-2xl">close</span>
                      </button>
                  </div>

                  <!-- Form Content -->
                  <div class="p-6">
                      <div class="flex flex-col gap-5">

                          <!-- Title -->
                          <div class="flex flex-col gap-2">
                              <label class="text-sm font-medium text-[#0d141b]">Book Title <span class="text-red-500">*</span></label>
                              <input
                                  type="text"
                                  name="title"
                                  required
                                  class="form-input w-full rounded-lg text-[#0d141b] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] bg-white focus:border-primary h-11 placeholder:text-[#9CA3AF] px-4 text-sm transition-shadow"
                                  placeholder="e.g. The Great Gatsby" />
                          </div>
                          <?php if (isset($data['errors']['titleErr'])): ?>
                              <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['titleErr']) ?></p>
                          <?php endif; ?>

                          <!-- Author & ISBN Row -->
                          <div class="flex flex-col gap-5">
                              <div class="flex flex-col gap-2">
                                  <label class="text-sm font-medium text-[#0d141b]">Author <span class="text-red-500">*</span></label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                          <span class="material-symbols-outlined text-gray-400 text-[18px]">person</span>
                                      </div>
                                      <input
                                          type="text"
                                          name="author"
                                          required
                                          class="form-input w-full rounded-lg text-[#0d141b] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] bg-white focus:border-primary h-11 placeholder:text-[#9CA3AF] pl-10 pr-4 text-sm transition-shadow"
                                          placeholder="e.g. F. Scott Fitzgerald" />
                                  </div>
                              </div>
                          </div>
                          <?php if (isset($data['errors']['authorErr'])): ?>
                              <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['authorErr']) ?></p>
                          <?php endif; ?>
                          <!-- Publication Year -->
                          <div class="flex flex-col gap-2">
                              <label class="text-sm font-medium text-[#0d141b]">Publication Year</label>
                              <input
                                  name="publication_year"
                                  class="form-input w-full rounded-lg text-[#0d141b] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] bg-white focus:border-primary h-11 placeholder:text-[#9CA3AF] px-4 text-sm transition-shadow"
                                  max="2099"
                                  min="1000"
                                  placeholder="YYYY"
                                  type="number" />
                          </div>
                          <?php if (isset($data['errors']['yearErr'])): ?>
                              <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['yearErr']) ?></p>
                          <?php endif; ?>
                          <!-- Description -->
                          <div class="flex flex-col gap-2">
                              <label class="text-sm font-medium text-[#0d141b]">Description (Optional)</label>
                              <textarea
                                  name="description"
                                  class="form-textarea w-full rounded-lg text-[#0d141b] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] bg-white focus:border-primary placeholder:text-[#9CA3AF] p-4 text-sm resize-y transition-shadow"
                                  placeholder="Brief summary of the book..."
                                  rows="3"></textarea>
                          </div>
                          <?php if (isset($data['errors']['publication_year'])): ?>
                              <p class="text-red-500 text-xs mt-1"><?= htmlspecialchars($data['errors']['publication_year']) ?></p>
                          <?php endif; ?>
                      </div>
                  </div>

                  <!-- Footer Actions -->
                  <div class="sticky bottom-0 flex items-center justify-end gap-3 border-t border-[#e7edf3] bg-gray-50 px-6 py-4">
                      <button type="button" onclick="closeAddBookForm()" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors">
                          Cancel
                      </button>
                      <button type="submit" class="px-6 py-2 rounded-lg bg-primary text-white text-sm font-medium hover:bg-blue-600 transition-colors shadow-sm">
                          Add Book
                      </button>
                  </div>
              </form>
          </div>


      </div>
  </div>

  <script>
      function openAddBookForm() {
          document.getElementById('add_book_overlay').classList.remove('hidden');
          document.getElementById('add_book_container').classList.remove('hidden');
          document.body.style.overflow = 'hidden';
      }

      function closeAddBookForm() {
          document.getElementById('add_book_overlay').classList.add('hidden');
          document.getElementById('add_book_container').classList.add('hidden');
          document.body.style.overflow = '';
      }

      // Close on Escape key
      document.addEventListener('keydown', function(e) {
          if (e.key === 'Escape') {
              closeAddBookForm();
          }
      });

      let add_book_container = document.querySelector('#add_book_container')
      let add_book_btn = document.querySelector('#add_book_btn')
      add_book_btn.addEventListener('click', openAddBookForm)


      // Function to close the message
      function closeFlash() {
          const el = document.getElementById('flash-message');
          el.style.opacity = '0';
          setTimeout(() => el.remove(), 500);
      }
      setTimeout(closeFlash, 5000);
  </script>