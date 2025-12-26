

<body class="font-display bg-background-light dark:bg-background-dark text-[#0d141b] dark:text-white transition-colors duration-200">
    <div class="relative flex min-h-screen flex-col overflow-x-hidden">
        <!-- Top Navigation -->
        <header class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#e7edf3] dark:border-gray-800 bg-white dark:bg-[#1a2632] px-6 py-3 lg:px-10">
            <div class="flex items-center gap-4">
                <div class="size-8 text-primary">
                    <span class="material-symbols-outlined text-3xl">local_library</span>
                </div>
                <h2 class="text-lg font-bold leading-tight tracking-[-0.015em] dark:text-white">Library Manager</h2>
            </div>
            <div class="hidden flex-1 justify-end gap-8 md:flex">
                <nav class="flex items-center gap-6 lg:gap-9">
                    <a class="text-sm font-medium leading-normal text-[#0d141b] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Dashboard</a>
                    <a class="text-sm font-medium leading-normal text-primary" href="#">Books</a>
                    <a class="text-sm font-medium leading-normal text-[#0d141b] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Members</a>
                    <a class="text-sm font-medium leading-normal text-[#0d141b] dark:text-gray-300 hover:text-primary dark:hover:text-primary transition-colors" href="#">Settings</a>
                </nav>
                <div class="flex items-center gap-3">
                    <button class="flex items-center justify-center rounded-full bg-primary/10 p-2 text-primary hover:bg-primary/20">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                    <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ring-2 ring-white dark:ring-gray-700" data-alt="User profile avatar" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCplrOx1ew9mC7V3EOWo3J0YG_fl8szcsgtj9gOd8n-hpkh9oZd7-H1V8d1G5Z4JiYGq_NosLALlBznH6D4SNCqF7rEJAEzLVxrIrXxZKjlynJUQNwW000s-oLuoVtA_9SiDFPqF4cQvSQMdpFsVivDDW1EXj1yEVssznjvQyjXbbJeEqxCY26-YuOT060MHzxl_GcgOVX5Ta3w4ubl0RPpu0pjUOUsVTbV3EpYa16ty8ndR1EJhA2-eyPixCzbMbpEJtTyIMiIiiY");'></div>
                </div>
            </div>
            <!-- Mobile Menu Icon -->
            <button class="md:hidden flex items-center text-[#0d141b] dark:text-white">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </header>
        <div class="layout-container flex h-full grow flex-col">
            <main class="flex flex-1 justify-center py-5 px-4 md:px-10 lg:px-40">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <!-- Breadcrumbs -->
                    <nav class="flex flex-wrap gap-2 px-4 py-2 text-sm">
                        <a class="text-[#4c739a] font-medium hover:text-primary transition-colors" href="#">Dashboard</a>
                        <span class="text-[#4c739a] font-medium">/</span>
                        <a class="text-[#4c739a] font-medium hover:text-primary transition-colors" href="#">Books</a>
                        <span class="text-[#4c739a] font-medium">/</span>
                        <span class="text-[#0d141b] dark:text-white font-medium">Add New Book</span>
                    </nav>
                    
              
                </div>
            </main>
        </div>
    </div>
</body>

</html>