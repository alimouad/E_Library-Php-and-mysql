  <div class="flex-1 w-full max-w-full mx-auto p-4 md:p-8 flex flex-col gap-8">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
          <div class="flex flex-col gap-1">
              <h2 class="text-text-main text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Dashboard</h2>
              <p class="text-text-secondary text-base font-normal">Welcome back, Admin. Here's what's happening today.</p>
          </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
              <div class="flex justify-between items-start">
                  <div>
                      <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Total Books</p>
                      <h3 class="text-3xl font-bold mt-2 text-slate-800"><?= number_format($stats['total_books']) ?></h3>
                  </div>
                  <div class="p-2 bg-blue-50 rounded-lg text-blue-600">
                      <span class="material-symbols-outlined">menu_book</span>
                  </div>
              </div>
          </div>

          <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
              <div class="flex justify-between items-start">
                  <div>
                      <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Active Members</p>
                      <h3 class="text-3xl font-bold mt-2 text-slate-800"><?= number_format($stats['active_members']) ?></h3>
                  </div>
                  <div class="p-2 bg-purple-50 rounded-lg text-purple-600">
                      <span class="material-symbols-outlined">group</span>
                  </div>
              </div>
          </div>

          <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100">
              <div class="flex justify-between items-start">
                  <div>
                      <p class="text-xs font-bold text-slate-500 uppercase tracking-wider">Books Issued</p>
                      <h3 class="text-3xl font-bold mt-2 text-slate-800"><?= number_format($stats['books_issued']) ?></h3>
                  </div>
                  <div class="p-2 bg-orange-50 rounded-lg text-orange-600">
                      <span class="material-symbols-outlined">local_shipping</span>
                  </div>
              </div>
          </div>
      </div>
  </div>