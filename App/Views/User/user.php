
 
    <main class="flex-1 flex flex-col h-full overflow-hidden relative">
        <header class="h-16 bg-surface-light dark:bg-surface-dark border-b border-slate-200 dark:border-slate-700 flex items-center justify-between px-6 shrink-0 z-10">
            <div class="flex-1 max-w-xl">
                <div class="relative group">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-accent transition-colors">search</span>
                    <input class="w-full bg-slate-50 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg py-2 pl-10 pr-4 text-sm text-slate-800 dark:text-white placeholder:text-slate-500 focus:ring-2 focus:ring-accent/20 focus:border-accent transition-all" placeholder="Search books, members, or ISBN..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-4">
                <button class="relative p-2 text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800 hover:text-primary rounded-lg transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-2 right-2 size-2 bg-rose-500 rounded-full border border-white dark:border-[#1e293b]"></span>
                </button>
            </div>
        </header>
        <div class="flex-1 overflow-y-auto p-6 lg:p-10 scroll-smooth">
            <div class="max-w-7xl mx-auto flex flex-col gap-8">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-800 dark:text-white tracking-tight">Dashboard Overview</h2>
                        <p class="text-slate-500 dark:text-slate-400 mt-1">Welcome back, here's what's happening at the library today.</p>
                    </div>
                    <button class="flex items-center gap-2 bg-accent hover:bg-teal-600 text-white px-5 py-2.5 rounded-lg font-semibold shadow-lg shadow-teal-500/20 transition-all active:scale-95">
                        <span class="material-symbols-outlined text-[20px]">add_circle</span>
                        <span>Issue Book</span>
                    </button>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm flex flex-col gap-4">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-blue-50 dark:bg-slate-700 rounded-lg text-primary">
                                <span class="material-symbols-outlined">library_books</span>
                            </div>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 dark:text-emerald-400 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span> 12%
                            </span>
                        </div>
                        <div>
                            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Books</p>
                            <h3 class="text-2xl font-bold text-slate-800 dark:text-white mt-1">12,450</h3>
                        </div>
                    </div>
                    <div class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm flex flex-col gap-4">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-slate-50 dark:bg-slate-700 rounded-lg text-slate-600 dark:text-slate-300">
                                <span class="material-symbols-outlined">person</span>
                            </div>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 dark:text-emerald-400 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span> 5%
                            </span>
                        </div>
                        <div>
                            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Members</p>
                            <h3 class="text-2xl font-bold text-slate-800 dark:text-white mt-1">3,200</h3>
                        </div>
                    </div>
                    <div class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm flex flex-col gap-4">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-teal-50 dark:bg-teal-900/20 rounded-lg text-accent">
                                <span class="material-symbols-outlined">outbound</span>
                            </div>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-emerald-600 bg-emerald-50 dark:bg-emerald-900/20 dark:text-emerald-400 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span> 2%
                            </span>
                        </div>
                        <div>
                            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Books Issued</p>
                            <h3 class="text-2xl font-bold text-slate-800 dark:text-white mt-1">450</h3>
                        </div>
                    </div>
                    <div class="bg-surface-light dark:bg-surface-dark p-6 rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm flex flex-col gap-4">
                        <div class="flex justify-between items-start">
                            <div class="p-2 bg-rose-50 dark:bg-rose-900/20 rounded-lg text-rose-500 dark:text-rose-400">
                                <span class="material-symbols-outlined">warning</span>
                            </div>
                            <span class="inline-flex items-center gap-1 text-xs font-semibold text-rose-600 bg-rose-50 dark:bg-rose-900/20 dark:text-rose-400 px-2 py-1 rounded-full">
                                <span class="material-symbols-outlined text-[14px]">trending_up</span> +1
                            </span>
                        </div>
                        <div>
                            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Overdue Returns</p>
                            <h3 class="text-2xl font-bold text-slate-800 dark:text-white mt-1">12</h3>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 flex flex-col bg-surface-light dark:bg-surface-dark rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm overflow-hidden">
                        <div class="p-6 border-b border-slate-200 dark:border-slate-700 flex justify-between items-center">
                            <h3 class="text-lg font-bold text-slate-800 dark:text-white">Recent Transactions</h3>
                            <button class="text-sm font-semibold text-accent hover:text-teal-700 transition-colors">View All</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left border-collapse">
                                <thead>
                                    <tr class="bg-slate-50/50 dark:bg-slate-800/50 border-b border-slate-200 dark:border-slate-700 text-xs uppercase text-slate-500 dark:text-slate-400 font-semibold tracking-wider">
                                        <th class="px-6 py-4">Book Title</th>
                                        <th class="px-6 py-4">Member</th>
                                        <th class="px-6 py-4">Date</th>
                                        <th class="px-6 py-4">Status</th>
                                        <th class="px-6 py-4 text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-200 dark:divide-slate-700">
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-10 bg-slate-200 rounded overflow-hidden shrink-0 shadow-sm">
                                                    <img alt="Book cover abstract" class="w-full h-full object-cover opacity-80 mix-blend-multiply" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAtptHvvGGSNOJMl3BguLEc2uVwWrtYYZfY0AFDaTYpcvKs-ChN24NKCdsTpgglcovuKm6TjclXqlfLY_8zhL7ETtxQxo8rt_AAhYbBCOJyux-WaJ4OcumD0fWOULmbXIMTiNMFDJ_azs0FMxR_OUDPgpdtNcxqF1kYw8iG3t8I2eLyx3AWgrxi1gElmLilf5mCplx9Sv07RNjzDQ5sZjGxk5XBU2EjFMIA7B_L-Q_v8Iwyb5SniwMl4G0cAN2-boT4irltt1wiAkw" />
                                                </div>
                                                <p class="text-sm font-medium text-slate-800 dark:text-white group-hover:text-primary transition-colors">The Great Gatsby</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">John Doe</td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 24, 2023</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100 dark:bg-blue-900/30 dark:text-blue-300 dark:border-blue-900/50">
                                                Issued
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-slate-400 hover:text-accent transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-10 bg-slate-200 rounded overflow-hidden shrink-0 shadow-sm">
                                                    <img alt="Book cover abstract" class="w-full h-full object-cover opacity-80 mix-blend-multiply" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBwVscttn3ODXKYrGuX-sa-GxNMVH5LkwSAafNpoohs9w4xPVzdPAcZQpR3R4PWUV1VAnkVpC7vhfjHvRk-wClvY7YqSEMRIM-TBjFFa4f-hR5wH1m5pgYbmx9UIrjSBRE6njgaTtPIh9t2OMUC5hvtrau5Le1WafZj0KBqOMHHOVTxifIED5ju9A2sfmo4zMlCZrGyHVDbf9jAUtqO13zKbDvsUqy_OdRx0V4HJF54dN7FYN6zPi2iHYN3ceC7E2s_oEpvnutCShU" />
                                                </div>
                                                <p class="text-sm font-medium text-slate-800 dark:text-white group-hover:text-primary transition-colors">To Kill a Mockingbird</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Sarah Smith</td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 23, 2023</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-rose-50 text-rose-700 border border-rose-100 dark:bg-rose-900/30 dark:text-rose-300 dark:border-rose-900/50">
                                                Overdue
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-slate-400 hover:text-accent transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-10 bg-slate-200 rounded overflow-hidden shrink-0 shadow-sm">
                                                    <img alt="Book cover abstract" class="w-full h-full object-cover opacity-80 mix-blend-multiply" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVAGAMLZdylBKEyzKLpciyz8LPafvszYkROClMIPsRsHBuSi8I4H_Xvlxe3bBAWZ9rDIYyFEjctu31FCaHuGFXSqwCv8dCuZ61dwgQPw0MFoVTKKCmE7VMVNxsvLM3cE7g57ho5vtlH-E_F_uRzVh-buDNBGAc4myfgreQwQLebuXpYt_dlJKdV0umF8n5lKwsAvkmtEqn9G-o1Z0QVp3-jnncRm78hFErMSLkY7lDIIQjmFp9srHobkQ7oiVt0t8fw7CYeF9iPjc" />
                                                </div>
                                                <p class="text-sm font-medium text-slate-800 dark:text-white group-hover:text-primary transition-colors">1984</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Mike Johnson</td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 22, 2023</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-700 border border-emerald-100 dark:bg-emerald-900/30 dark:text-emerald-300 dark:border-emerald-900/50">
                                                Returned
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-slate-400 hover:text-accent transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors group">
                                        <td class="px-6 py-4">
                                            <div class="flex items-center gap-3">
                                                <div class="w-8 h-10 bg-slate-200 rounded overflow-hidden shrink-0 shadow-sm">
                                                    <img alt="Book cover abstract" class="w-full h-full object-cover opacity-80 mix-blend-multiply" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCN4ywo2bDgkCAtItTWwXujisiiPytlVueDOa7dM4bgRhXAUN4bq_DosDBm1nUwaD7zm-_4KEVn7k5d_IY3biUDM81BOX-lj-Uw70iv4CH6YjtFfNhIFM7B_Yd2DhGSrFg9hWkfC1KvoYzj_j0DowVTysIyHysRWXLjf-AXVUlC_85mN3z0XP9tMalFDEOdPyzw2XT-9kjLQGdkjSJjrPnw4qICX4DnctpNv4YryZqpqU5LINA-OMV_9ncTqfiRUuEeIQvTKDVHdvE" />
                                                </div>
                                                <p class="text-sm font-medium text-slate-800 dark:text-white group-hover:text-primary transition-colors">Dune</p>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Emily Davis</td>
                                        <td class="px-6 py-4 text-sm text-slate-600 dark:text-slate-400">Oct 20, 2023</td>
                                        <td class="px-6 py-4">
                                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-50 text-blue-700 border border-blue-100 dark:bg-blue-900/30 dark:text-blue-300 dark:border-blue-900/50">
                                                Issued
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 text-right">
                                            <button class="text-slate-400 hover:text-accent transition-colors">
                                                <span class="material-symbols-outlined text-[20px]">more_vert</span>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="bg-surface-light dark:bg-surface-dark rounded-xl border border-slate-200 dark:border-slate-700 shadow-sm p-6 flex flex-col gap-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-lg font-bold text-slate-800 dark:text-white">Popular Categories</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Most borrowed genres this month</p>
                            </div>
                            <button class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                                <span class="material-symbols-outlined">more_horiz</span>
                            </button>
                        </div>
                        <div class="flex flex-col gap-5">
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between text-sm font-medium">
                                    <span class="text-slate-600 dark:text-slate-300">Fiction</span>
                                    <span class="text-slate-800 dark:text-white font-bold">45%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-primary rounded-full" style="width: 45%"></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between text-sm font-medium">
                                    <span class="text-slate-600 dark:text-slate-300">Science</span>
                                    <span class="text-slate-800 dark:text-white font-bold">25%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-slate-400 rounded-full" style="width: 25%"></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between text-sm font-medium">
                                    <span class="text-slate-600 dark:text-slate-300">History</span>
                                    <span class="text-slate-800 dark:text-white font-bold">15%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-slate-300 rounded-full" style="width: 15%"></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between text-sm font-medium">
                                    <span class="text-slate-600 dark:text-slate-300">Biography</span>
                                    <span class="text-slate-800 dark:text-white font-bold">10%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-accent rounded-full" style="width: 10%"></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex justify-between text-sm font-medium">
                                    <span class="text-slate-600 dark:text-slate-300">Technology</span>
                                    <span class="text-slate-800 dark:text-white font-bold">5%</span>
                                </div>
                                <div class="h-2 w-full bg-slate-100 dark:bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-slate-200 rounded-full" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-auto pt-4 border-t border-slate-100 dark:border-slate-700/50">
                            <button class="w-full py-2 text-sm text-accent font-semibold hover:bg-teal-50 dark:hover:bg-teal-900/10 rounded-lg transition-colors">
                                View Full Analytics
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
