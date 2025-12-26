  <div class="flex-1 w-full max-w-full mx-auto p-4 md:p-8 flex flex-col gap-8">
      <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
          <div class="flex flex-col gap-1">
              <h2 class="text-text-main text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Dashboard</h2>
              <p class="text-text-secondary text-base font-normal">Welcome back, Admin. Here's what's happening today.</p>
          </div>
          <div class="w-full md:max-w-md">
              <label class="flex flex-col h-12 w-full group">
                  <div class="flex w-full flex-1 items-stretch rounded-xl h-full border border-border-color focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20 transition-all bg-surface overflow-hidden shadow-sm">
                      <div class="text-text-secondary flex border-none bg-transparent items-center justify-center pl-4 pr-2">
                          <span class="material-symbols-outlined">search</span>
                      </div>
                      <input class="flex w-full min-w-0 flex-1 resize-none overflow-hidden text-text-main focus:outline-0 focus:ring-0 border-none bg-transparent focus:border-none h-full placeholder:text-text-secondary/70 px-2 text-sm font-normal leading-normal" placeholder="Search ISBN, Title, or Member ID..." />
                  </div>
              </label>
          </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
          <div class="flex flex-col gap-2 rounded-2xl p-6 bg-surface border border-border-color shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                  <p class="text-text-secondary text-sm font-semibold uppercase tracking-wider">Total Books</p>
                  <div class="size-10 rounded-full bg-blue-50 flex items-center justify-center text-blue-600">
                      <span class="material-symbols-outlined text-xl">library_books</span>
                  </div>
              </div>
              <div class="flex items-end gap-3 mt-2">
                  <p class="text-text-main tracking-tight text-3xl font-bold leading-none">12,450</p>
                  <p class="text-emerald-600 text-sm font-bold flex items-center mb-1">
                      <span class="material-symbols-outlined text-base">trending_up</span> 1.2%
                  </p>
              </div>
          </div>
          <div class="flex flex-col gap-2 rounded-2xl p-6 bg-surface border border-border-color shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                  <p class="text-text-secondary text-sm font-semibold uppercase tracking-wider">Active Members</p>
                  <div class="size-10 rounded-full bg-purple-50 flex items-center justify-center text-purple-600">
                      <span class="material-symbols-outlined text-xl">groups</span>
                  </div>
              </div>
              <div class="flex items-end gap-3 mt-2">
                  <p class="text-text-main tracking-tight text-3xl font-bold leading-none">3,200</p>
                  <p class="text-emerald-600 text-sm font-bold flex items-center mb-1">
                      <span class="material-symbols-outlined text-base">trending_up</span> 5.4%
                  </p>
              </div>
          </div>
          <div class="flex flex-col gap-2 rounded-2xl p-6 bg-surface border border-border-color shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                  <p class="text-text-secondary text-sm font-semibold uppercase tracking-wider">Books Issued</p>
                  <div class="size-10 rounded-full bg-orange-50 flex items-center justify-center text-orange-600">
                      <span class="material-symbols-outlined text-xl">local_shipping</span>
                  </div>
              </div>
              <div class="flex items-end gap-3 mt-2">
                  <p class="text-text-main tracking-tight text-3xl font-bold leading-none">450</p>
                  <p class="text-orange-600 text-sm font-bold flex items-center mb-1">
                      <span class="material-symbols-outlined text-base">trending_down</span> -2.1%
                  </p>
              </div>
          </div>
          <div class="flex flex-col gap-2 rounded-2xl p-6 bg-surface border border-border-color shadow-sm hover:shadow-md transition-shadow">
              <div class="flex items-center justify-between">
                  <p class="text-text-secondary text-sm font-semibold uppercase tracking-wider">Overdue Returns</p>
                  <div class="size-10 rounded-full bg-red-50 flex items-center justify-center text-red-600">
                      <span class="material-symbols-outlined text-xl">warning</span>
                  </div>
              </div>
              <div class="flex items-end gap-3 mt-2">
                  <p class="text-text-main tracking-tight text-3xl font-bold leading-none">12</p>
                  <p class="text-red-600 text-sm font-bold flex items-center mb-1">
                      <span class="material-symbols-outlined text-base">priority_high</span> Action Needed
                  </p>
              </div>
          </div>
      </div>
  </div>