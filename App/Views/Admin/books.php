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
                      <tr class="group hover:bg-slate-50 transition-colors">
                          <td class="px-6 py-4">
                              <div class="h-12 w-8 bg-center bg-cover rounded shadow-sm border border-border-light" data-alt="Cover of The Great Gatsby" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCB9KojGL_cTXAq0-w5z0oebyG8Rk65C_hAYVVio4qNJHxsiLYGIUZH29ccu8-ruu-jOfs7B7bmkM3k8MZX5cIhn8Ki8vfIO8dsoo-j7G3DClerKONvSvctQoHtZ-7QfJyGAldDHFR350Q10CTg5DLLxMRk09MD-rtOYMy_jipKd8fLsQr8YAqMC2LejVqVMTNFPAN2rxqLRl6B1kJ64qTLIEvxeOSRClVgluzBGvmIJQzVz9qiUPiV6aDx6t7kC1RifyqlegNUp1A");'></div>
                          </td>
                          <td class="px-6 py-4">
                              <div class="flex flex-col">
                                  <span class="text-text-main font-medium text-sm">The Great Gatsby</span>
                                  <span class="text-text-secondary text-xs mt-0.5 font-mono">978-3-16-148410-0</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-text-secondary text-sm">F. Scott Fitzgerald</td>

                          <td class="px-6 py-4 text-text-secondary text-sm">1925</td>
                          <td class="px-6 py-4">
                              <div class="flex items-center gap-2">
                                  <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                                  <span class="text-emerald-700 text-sm font-medium">Available (12)</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-right">
                              <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-text-main transition-all">
                                      <span class="material-symbols-outlined text-[20px]">edit</span>
                                  </button>
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-red-500 transition-all">
                                      <span class="material-symbols-outlined text-[20px]">delete</span>
                                  </button>
                              </div>
                          </td>
                      </tr>
                      <tr class="group hover:bg-slate-50 transition-colors">
                          <td class="px-6 py-4">
                              <div class="h-12 w-8 bg-center bg-cover rounded shadow-sm border border-border-light" data-alt="Cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBCxl2LpSnoD8f9nPZyS8SPZyQ3ASXjF5Z1KPFuNjTYR76Y1tuw8vUqNpSKCbItTVD85d6JG4nrFIGLHAF9fBmtziU6HpNm2f0NeZNJ8ziRTPKiRs-l02snLc0s1cIglKOFiXOzY-6W8IVVMbmzUDbXk-Vk5rHnVj3mXH21sOyXgvyb5Qzho2XluDR8s-vvVlP2IfvRXAzWFiM6G5UJ7-3rtdrgtHZ6ItYowUGAV9LpMx5ADjfy3j_jsRECttsb1XPCML0kWTrMwM4");'></div>
                          </td>
                          <td class="px-6 py-4">
                              <div class="flex flex-col">
                                  <span class="text-text-main font-medium text-sm">Introduction to Algorithms</span>
                                  <span class="text-text-secondary text-xs mt-0.5 font-mono">978-0-262-03384-8</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-text-secondary text-sm">T.H. Cormen</td>
                          <td class="px-6 py-4 text-text-secondary text-sm">2009</td>
                          <td class="px-6 py-4">
                              <div class="flex items-center gap-2">
                                  <div class="h-2 w-2 rounded-full bg-amber-500"></div>
                                  <span class="text-amber-700 text-sm font-medium">Checked Out</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-right">
                              <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-text-main transition-all">
                                      <span class="material-symbols-outlined text-[20px]">edit</span>
                                  </button>
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-red-500 transition-all">
                                      <span class="material-symbols-outlined text-[20px]">delete</span>
                                  </button>
                              </div>
                          </td>
                      </tr>
                      <tr class="group hover:bg-slate-50 transition-colors">
                          <td class="px-6 py-4">
                              <div class="h-12 w-8 bg-center bg-cover rounded shadow-sm border border-border-light" data-alt="Cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAvc9fXrapuRqofyH-B6UgE__eQBTod24TenH9C9RcX25F2rxPJnHMpz_hIVfwf93JklmI-iCIWjrucnL7WEwX4llbQlJRPHiWYr5FTvoOTZoLjmILPsm22sAjlEsRZkPgfmGbaqeMGcAZFvVeFTGZUNTRAa6lYB9LjQmjb0Kn91gHehLfIQ_rtERf9kICF8acWHv-kwKCGhgzcYe3seVOXnZ8BhUamfsyk7NOihmUMtYnbxtrwl46TF7HXOLjRZaGTfdZWIeCcvv8");'></div>
                          </td>
                          <td class="px-6 py-4">
                              <div class="flex flex-col">
                                  <span class="text-text-main font-medium text-sm">1984</span>
                                  <span class="text-text-secondary text-xs mt-0.5 font-mono">978-0-452-28423-4</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-text-secondary text-sm">George Orwell</td>
                          <td class="px-6 py-4 text-text-secondary text-sm">1949</td>
                          <td class="px-6 py-4">
                              <div class="flex items-center gap-2">
                                  <div class="h-2 w-2 rounded-full bg-red-500"></div>
                                  <span class="text-red-700 text-sm font-medium">Lost</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-right">
                              <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-text-main transition-all">
                                      <span class="material-symbols-outlined text-[20px]">edit</span>
                                  </button>
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-red-500 transition-all">
                                      <span class="material-symbols-outlined text-[20px]">delete</span>
                                  </button>
                              </div>
                          </td>
                      </tr>
                      <tr class="group hover:bg-slate-50 transition-colors">
                          <td class="px-6 py-4">
                              <div class="h-12 w-8 bg-center bg-cover rounded shadow-sm border border-border-light" data-alt="Cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC5nPsD4j6pkJZTKuzywqx7OJ3zfDcfk-bG6IfVqUdxmEc9X5i8Zwbj4Lvl5eglSdRrQM5TrKS2MDjkSbghRo392hcOjCilIsOAbUKblFWcLYLZntt1mFnKBxRRQGoyzIVCQLAjgd7VqkB9CEWef_IWBU1uX0EKZiK22PzLe5Xf9WXZOTvaicWActifz7TYwx7c6PNKClMpLMCUhkOJnOyoRAOcPyhgDjXGbY_xRcYJMpV3Uplu6xS4-tTsBFnvrnbhJdCRmE3FPAA");'></div>
                          </td>
                          <td class="px-6 py-4">
                              <div class="flex flex-col">
                                  <span class="text-text-main font-medium text-sm">Sapiens</span>
                                  <span class="text-text-secondary text-xs mt-0.5 font-mono">978-0-06-231609-7</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-text-secondary text-sm">Yuval Noah Harari</td>
                          <td class="px-6 py-4 text-text-secondary text-sm">2011</td>
                          <td class="px-6 py-4">
                              <div class="flex items-center gap-2">
                                  <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                                  <span class="text-emerald-700 text-sm font-medium">Available (8)</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-right">
                              <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-text-main transition-all">
                                      <span class="material-symbols-outlined text-[20px]">edit</span>
                                  </button>
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-red-500 transition-all">
                                      <span class="material-symbols-outlined text-[20px]">delete</span>
                                  </button>
                              </div>
                          </td>
                      </tr>
                      <tr class="group hover:bg-slate-50 transition-colors">
                          <td class="px-6 py-4">
                              <div class="h-12 w-8 bg-center bg-cover rounded shadow-sm border border-border-light" data-alt="Cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAZKM_iCKlS7iPSHkcpIm1KGXHgYNRb3nZOSXtGlCuSPEuYix2e8BH4jZlWh39MUcGmNqTzFeXfYwd0pxy0_RIqP7yc9dWgIiGDTFYm9Z3PaanQLSJSJZkRRVaBuwHf0HIVlkmN5P94GfeuKcMJNyfi0nbtfDP9kNd2u7Wl36ecdnJNYymIe3e6Tuhj926N-G-kxLFaZUkNCcIkUYHNGRnJk2F3hsTJcWPpt-l3N0PcdGrLNcnWXIChrjq7dIDd_k3d207-tSLMZZs");'></div>
                          </td>
                          <td class="px-6 py-4">
                              <div class="flex flex-col">
                                  <span class="text-text-main font-medium text-sm">Clean Code</span>
                                  <span class="text-text-secondary text-xs mt-0.5 font-mono">978-0-13-235088-4</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-text-secondary text-sm">Robert C. Martin</td>
                          <td class="px-6 py-4 text-text-secondary text-sm">2008</td>
                          <td class="px-6 py-4">
                              <div class="flex items-center gap-2">
                                  <div class="h-2 w-2 rounded-full bg-emerald-500"></div>
                                  <span class="text-emerald-700 text-sm font-medium">Available (5)</span>
                              </div>
                          </td>
                          <td class="px-6 py-4 text-right">
                              <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-text-main transition-all">
                                      <span class="material-symbols-outlined text-[20px]">edit</span>
                                  </button>
                                  <button class="p-1.5 rounded-md hover:bg-white border border-transparent hover:border-border-light shadow-none hover:shadow-sm text-text-secondary hover:text-red-500 transition-all">
                                      <span class="material-symbols-outlined text-[20px]">delete</span>
                                  </button>
                              </div>
                          </td>
                      </tr>
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

          <!-- Overlay Background -->
          <div id="add_book_overlay" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-40 transition-opacity" onclick="closeAddBookForm()"></div>

          <!-- Popup Modal -->
          <div id="add_book_container" class="hidden fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 w-full max-w-2xl max-h-[90vh] overflow-y-auto rounded-xl bg-white shadow-2xl ring-1 ring-black/5">
              <form action="" method="POST" novalidate>
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
                                  name="title"
                                  required
                                  class="form-input w-full rounded-lg text-[#0d141b] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] bg-white focus:border-primary h-11 placeholder:text-[#9CA3AF] px-4 text-sm transition-shadow"
                                  placeholder="e.g. The Great Gatsby" />
                          </div>

                          <!-- Author & ISBN Row -->
                          <div class="flex flex-col gap-5">
                              <div class="flex flex-col gap-2">
                                  <label class="text-sm font-medium text-[#0d141b]">Author <span class="text-red-500">*</span></label>
                                  <div class="relative">
                                      <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                          <span class="material-symbols-outlined text-gray-400 text-[18px]">person</span>
                                      </div>
                                      <input
                                          name="author"
                                          required
                                          class="form-input w-full rounded-lg text-[#0d141b] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] bg-white focus:border-primary h-11 placeholder:text-[#9CA3AF] pl-10 pr-4 text-sm transition-shadow"
                                          placeholder="e.g. F. Scott Fitzgerald" />
                                  </div>
                              </div>
                          </div>

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

                          <!-- Description -->
                          <div class="flex flex-col gap-2">
                              <label class="text-sm font-medium text-[#0d141b]">Description (Optional)</label>
                              <textarea
                                  name="description"
                                  class="form-textarea w-full rounded-lg text-[#0d141b] focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-[#cfdbe7] bg-white focus:border-primary placeholder:text-[#9CA3AF] p-4 text-sm resize-y transition-shadow"
                                  placeholder="Brief summary of the book..."
                                  rows="3"></textarea>
                          </div>
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
      
  </script>