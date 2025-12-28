  <aside class="hidden md:flex flex-col w-[400px] bg-surface border-r border-border-color h-full shrink-0 z-20">
      <div class="flex flex-col h-full p-6 justify-between">
          <div class="flex flex-col gap-6">
              <div class="flex items-center gap-3 px-2">
                  <div class="bg-center bg-no-repeat bg-cover rounded-full size-10 bg-primary/10 flex items-center justify-center text-primary">
                      <span class="material-symbols-outlined text-2xl">local_library</span>
                  </div>
                  <div class="flex flex-col">
                      <h1 class="text-text-main text-lg font-bold leading-tight tracking-tight">LibManager</h1>
                      <p class="text-text-secondary text-xs font-normal">Admin Console</p>
                  </div>
              </div>
              <?php $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>

              <nav class="flex flex-col gap-2">
                  <?php $isActive = ($current === '/adminhome'); ?>
                  <a href="/adminhome"
                      class="flex items-center gap-3 px-3 py-3 rounded-xl transition-all hover:translate-x-1 
       <?= $isActive ? 'bg-primary text-white shadow-lg shadow-primary/30' : 'hover:bg-slate-50 text-text-secondary hover:text-text-main' ?>">
                      <span class="material-symbols-outlined <?= $isActive ? 'fill-1' : '' ?>">dashboard</span>
                      <p class="text-md font-medium">Dashboard</p>
                  </a>

                  <?php $isActive = ($current === '/admin/books'); ?>
                  <a href="/admin/books"
                      class="flex items-center gap-3 px-3 py-3 rounded-xl transition-all hover:translate-x-1 
       <?= $isActive ? 'bg-primary text-white shadow-lg shadow-primary/30' : 'hover:bg-slate-50 text-text-secondary hover:text-text-main' ?>">
                      <span class="material-symbols-outlined <?= $isActive ? 'fill-1' : '' ?>">menu_book</span>
                      <p class="text-md font-medium">Books</p>
                  </a>

                  <?php $isActive = ($current === '/admin/members'); ?>
                  <a href="/admin/members"
                      class="flex items-center gap-3 px-3 py-3 rounded-xl transition-all hover:translate-x-1 
       <?= $isActive ? 'bg-primary text-white shadow-lg shadow-primary/30' : 'hover:bg-slate-50 text-text-secondary hover:text-text-main' ?>">
                      <span class="material-symbols-outlined <?= $isActive ? 'fill-1' : '' ?>">group</span>
                      <p class="text-md font-medium">Members</p>
                  </a>

                  
                  <div class="h-px bg-border-color my-2 mx-3"></div>

                  
              </nav>
          </div>
          <div class="flex items-center gap-3 px-3 py-3 rounded-xl border border-border-color bg-white mt-auto cursor-pointer hover:bg-slate-50 transition-colors shadow-sm">
              <div class="bg-center bg-no-repeat bg-cover rounded-full size-8 bg-slate-200" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAyQ_jd85HF9V5Gmh4zZZez66-CtMWeCt9bxT8gxRujwK_atW3vkA7DKXeOBt_UiXT-hlsuTHlevmpAGdGiRzh80paIOhKzkYa4DaBaZYvUluMFv-2Q_8ZchHaPzgRQO2XdrJBrOA5QZFwcKnzI-usiTxMqLIbRgs2fHo3ycNu9x7QLT8fSm4y-xlvRWhYkdsjDclkI5KHnd0troQclB-TZiQbtog-C3d8glQ1gJYxLLiJgrX6MLRYhlNhzEVNxadv1AkV1VM4dniA");'></div>
              <div class="flex flex-col">
                  <p class="text-text-main text-md font-medium">Admin</p>
                  <p class="text-text-secondary text-xs"><?= $_SESSION['user_name']  ?></p>
              </div>
              <a href="/logout"
                  onclick="return confirm('Are you sure you want to log out?')"
                  class="flex items-center gap-2 px-4 py-2 text-sm font-medium text-red-600 bg-red-50 hover:bg-red-100 rounded-lg transition-colors border border-red-100">
                  <span class="material-symbols-outlined text-[18px]">logout</span>
                  <span>Logout</span>
              </a>
          </div>
      </div>
  </aside>