<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>LibManager Dashboard</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "primary": "#2b8cee",
                        "background": "#f8fafc", // Very light slate gray/white
                        "surface": "#ffffff", // Pure white for cards
                        "text-main": "#0f172a", // Slate 900 for high contrast text
                        "text-secondary": "#64748b", // Slate 500 for secondary text
                        "border-color": "#e2e8f0", // Slate 200 for borders
                    },
                    fontFamily: {
                        "sans": ["Inter", "sans-serif"],
                        "display": ["Inter", "sans-serif"],
                        "body": ["Inter", "sans-serif"],
                    },
                },
            },
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }

        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
    </style>
</head>

<body class="bg-background text-text-main antialiased selection:bg-primary selection:text-white overflow-hidden">
    <div class="flex h-screen w-full overflow-hidden">
        <aside class="hidden md:flex flex-col w-64 bg-surface border-r border-border-color h-full shrink-0 z-20">
            <div class="flex flex-col h-full p-4 justify-between">
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
                    <nav class="flex flex-col gap-2">
                        <a class="flex items-center gap-3 px-3 py-3 rounded-xl bg-primary text-white shadow-lg shadow-primary/30 transition-all hover:translate-x-1" href="#">
                            <span class="material-symbols-outlined fill-1">dashboard</span>
                            <p class="text-sm font-medium">Dashboard</p>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-slate-50 text-text-secondary hover:text-text-main transition-colors" href="#">
                            <span class="material-symbols-outlined">menu_book</span>
                            <p class="text-sm font-medium">Books</p>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-slate-50 text-text-secondary hover:text-text-main transition-colors" href="#">
                            <span class="material-symbols-outlined">group</span>
                            <p class="text-sm font-medium">Members</p>
                        </a>
                        <a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-slate-50 text-text-secondary hover:text-text-main transition-colors" href="#">
                            <span class="material-symbols-outlined">swap_horiz</span>
                            <p class="text-sm font-medium">Transactions</p>
                        </a>
                        <div class="h-px bg-border-color my-2 mx-3"></div>
                        <a class="flex items-center gap-3 px-3 py-3 rounded-xl hover:bg-slate-50 text-text-secondary hover:text-text-main transition-colors" href="#">
                            <span class="material-symbols-outlined">settings</span>
                            <p class="text-sm font-medium">Settings</p>
                        </a>
                    </nav>
                </div>
                <div class="flex items-center gap-3 px-3 py-3 rounded-xl border border-border-color bg-white mt-auto cursor-pointer hover:bg-slate-50 transition-colors shadow-sm">
                    <div class="bg-center bg-no-repeat bg-cover rounded-full size-8 bg-slate-200" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAyQ_jd85HF9V5Gmh4zZZez66-CtMWeCt9bxT8gxRujwK_atW3vkA7DKXeOBt_UiXT-hlsuTHlevmpAGdGiRzh80paIOhKzkYa4DaBaZYvUluMFv-2Q_8ZchHaPzgRQO2XdrJBrOA5QZFwcKnzI-usiTxMqLIbRgs2fHo3ycNu9x7QLT8fSm4y-xlvRWhYkdsjDclkI5KHnd0troQclB-TZiQbtog-C3d8glQ1gJYxLLiJgrX6MLRYhlNhzEVNxadv1AkV1VM4dniA");'></div>
                    <div class="flex flex-col">
                        <p class="text-text-main text-sm font-medium">Alex Morgan</p>
                        <p class="text-text-secondary text-xs">Head Librarian</p>
                    </div>
                </div>
            </div>
        </aside>
        <main class="flex-1 flex flex-col h-full overflow-y-auto bg-background relative scroll-smooth">
            <div class="md:hidden flex items-center justify-between p-4 bg-surface border-b border-border-color sticky top-0 z-20 shadow-sm">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">local_library</span>
                    <span class="text-text-main font-bold">LibManager</span>
                </div>
                <button class="text-text-main">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
            <div class="flex-1 w-full max-w-[1280px] mx-auto p-4 md:p-8 flex flex-col gap-8">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="flex flex-col gap-1">
                        <h2 class="text-text-main text-3xl md:text-4xl font-black leading-tight tracking-[-0.033em]">Dashboard</h2>
                        <p class="text-text-secondary text-base font-normal">Welcome back, Alex. Here's what's happening today.</p>
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
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2 rounded-2xl bg-surface border border-border-color shadow-sm p-6 flex flex-col gap-6">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-text-main text-lg font-bold">Circulation Trends</h3>
                                <p class="text-text-secondary text-sm">Transaction volume over last 30 days</p>
                            </div>
                            <div class="flex gap-2">
                                <button class="px-3 py-1 bg-slate-100 hover:bg-slate-200 rounded-lg text-xs text-text-secondary font-medium transition-colors">Weekly</button>
                                <button class="px-3 py-1 bg-primary text-white rounded-lg text-xs font-medium shadow-md shadow-primary/20">Monthly</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-4 flex-1">
                            <div class="flex items-baseline gap-2">
                                <span class="text-3xl font-bold text-text-main">2,145</span>
                                <span class="text-sm text-text-secondary">Transactions</span>
                            </div>
                            <div class="w-full h-48 relative mt-auto">
                                <svg class="w-full h-full overflow-visible" preserveAspectRatio="none" viewBox="0 0 500 150">
                                    <defs>
                                        <linearGradient id="gradientArea" x1="0" x2="0" y1="0" y2="1">
                                            <stop offset="0%" stop-color="#2b8cee" stop-opacity="0.2"></stop>
                                            <stop offset="100%" stop-color="#2b8cee" stop-opacity="0"></stop>
                                        </linearGradient>
                                    </defs>
                                    <path d="M0 150 L0 100 C50 100 50 40 100 40 C150 40 150 80 200 80 C250 80 250 20 300 20 C350 20 350 60 400 60 C450 60 450 30 500 30 L500 150 Z" fill="url(#gradientArea)"></path>
                                    <path d="M0 100 C50 100 50 40 100 40 C150 40 150 80 200 80 C250 80 250 20 300 20 C350 20 350 60 400 60 C450 60 450 30 500 30" fill="none" stroke="#2b8cee" stroke-linecap="round" stroke-width="3"></path>
                                </svg>
                            </div>
                            <div class="flex justify-between text-xs text-text-secondary font-medium px-1">
                                <span>Week 1</span>
                                <span>Week 2</span>
                                <span>Week 3</span>
                                <span>Week 4</span>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl bg-surface border border-border-color shadow-sm p-6 flex flex-col gap-6">
                        <div>
                            <h3 class="text-text-main text-lg font-bold">Genre Distribution</h3>
                            <p class="text-text-secondary text-sm">Inventory by category</p>
                        </div>
                        <div class="flex flex-col gap-5 justify-center flex-1">
                            <div class="flex flex-col gap-1">
                                <div class="flex justify-between text-xs font-medium">
                                    <span class="text-text-main">Fiction</span>
                                    <span class="text-text-secondary">45%</span>
                                </div>
                                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-primary w-[45%] rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="flex justify-between text-xs font-medium">
                                    <span class="text-text-main">Science &amp; Tech</span>
                                    <span class="text-text-secondary">25%</span>
                                </div>
                                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-indigo-500 w-[25%] rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="flex justify-between text-xs font-medium">
                                    <span class="text-text-main">History</span>
                                    <span class="text-text-secondary">20%</span>
                                </div>
                                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-emerald-500 w-[20%] rounded-full"></div>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1">
                                <div class="flex justify-between text-xs font-medium">
                                    <span class="text-text-main">Biography</span>
                                    <span class="text-text-secondary">10%</span>
                                </div>
                                <div class="w-full h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-orange-500 w-[10%] rounded-full"></div>
                                </div>
                            </div>
                        </div>
                        <button class="w-full py-2.5 rounded-lg border border-border-color text-sm font-medium text-text-secondary hover:bg-slate-50 hover:text-text-main transition-colors">
                            View Full Report
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-text-main text-xl font-bold">Recent Transactions</h3>
                        <a class="text-primary text-sm font-medium hover:underline" href="#">View All</a>
                    </div>
                    <div class="overflow-x-auto rounded-2xl bg-surface border border-border-color shadow-sm">
                        <table class="w-full text-left border-collapse">
                            <thead class="bg-slate-50 text-xs uppercase text-text-secondary font-semibold tracking-wider">
                                <tr>
                                    <th class="px-6 py-4 border-b border-border-color">Book Title</th>
                                    <th class="px-6 py-4 border-b border-border-color">Member</th>
                                    <th class="px-6 py-4 border-b border-border-color">Date Issued</th>
                                    <th class="px-6 py-4 border-b border-border-color">Status</th>
                                    <th class="px-6 py-4 border-b border-border-color text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-border-color text-sm">
                                <tr class="group hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-cover bg-center shrink-0 shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCNbrL9vxVY7yQFUobY7Sj44SxnIAVei8qDyasNq5aSDWBiupIGjX-h8mI6LEo_ZnBugr_jYOczujqBSzgDExCeTVHFQSaxndiUHnBc8hVSEapOHr4KjbPACFWJJ5iwnQqD3e093hT06pghO8wLhofTjIAXJ9v3dZ8sRp07-lLEfSznV2hblWKGnFHdYQ50C-2-_CaU_g_nikI4LpL_aGKbwTvPaz9CCMojl0TCzepLiSOKBb7Yh7yQ61aQUV-3MVh4PdhKh3RQoY0");'></div>
                                            <div class="flex flex-col">
                                                <span class="text-text-main font-medium">The Great Gatsby</span>
                                                <span class="text-text-secondary text-xs">F. Scott Fitzgerald</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBJrD8V2t6c4813d6yA8wdO7JCfhdg_q_8SKFGi1nbUkD4d3NIWgLpLCh0B24RpTJp3PL6F8pkbn5wC9vreQUByAi7M76gdlr_aD9FAQIo1V8JEvwnttaLdX_aJc7nxn8cAd71_aDxSwgVfFQ_ONygQdsETgAfYpnUGz3sS74BInUDm4XCPadOUb7gpYriiFK37MK75ZMr8hyn8mZdnWUJ30kFfGl2Kjgo0qZcv980_WKlZK4_yUcUGY4lNmgoTqsK0E72VrxXT_L0");'></div>
                                            <span class="text-text-main">John Doe</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-text-secondary">Oct 24, 2023</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-50 text-emerald-600 border border-emerald-200">
                                            Returned
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-text-secondary hover:text-text-main p-1 rounded hover:bg-slate-100">
                                            <span class="material-symbols-outlined text-xl">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-cover bg-center shrink-0 shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC0TF8SUkjjU2ya3VVA1iGTpw29Eq5Po8NyZdzFXkrWJZ0h2KT85QgmWScvgyXMZqGEVmnf0Ejo3u_A4u0IEOOnssR75ecWVQkA4RL9E6lh3a0MZ5nWprEe_tX7O0F2zyYeMDYHENgnC02v7keVs-H5p23Fly1TIJey5PRZ4vxBESZJjHOaziT1U2atkB4iLTXLvsBlt18uD_KPHWCwfYJshZgqjt6rp0YJrclLUiG9w4eQEFCtZ9O6p2dUvpXOtSKXy4rlQsyXyUM");'></div>
                                            <div class="flex flex-col">
                                                <span class="text-text-main font-medium">Sapiens: A Brief History</span>
                                                <span class="text-text-secondary text-xs">Yuval Noah Harari</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBcby_1A7gYvOTLHQ5FqL8RYYEKj_OF0pZaevjwpsfpYDjrlEmS3mJAT-NOpGpdMcjVG_A4FvTpI9nQs4FkoMYp747lIRKrMEJSS8ej9wITiNgvLUNp_bhjcKz8BjuXEV7CpFLtoc4sXea8oPaH6OI5Y4r08KIbLp9lLLUhwQvJ8zf2jgC917eYNerTI_O5vYLw_uxXhJGcDbIfOQEZ6qE1YMjUc7GTT6e1PXHhH0j2TH7HvNTXyIMy7FbrqDzaqiWlf2AN9_-_Jvw");'></div>
                                            <span class="text-text-main">Jane Smith</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-text-secondary">Oct 22, 2023</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-orange-50 text-orange-600 border border-orange-200">
                                            Borrowed
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-text-secondary hover:text-text-main p-1 rounded hover:bg-slate-100">
                                            <span class="material-symbols-outlined text-xl">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                                <tr class="group hover:bg-slate-50 transition-colors">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="size-10 rounded bg-cover bg-center shrink-0 shadow-sm" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCAcikP8sWHPQfUjMoajticlCoEujM6zF5DAG1WEEb58YrrrFVICeP2FFML1tJjadpTLllNi73CbTWEilP2XWR7cfs6cC30b3BzvstTvDVqddDwEppnrs89uD3uU6o9FHlTJJ4wpA-ogzdKazWUdbCo92wws2SVFCr_KBqLe8A4DZCBmcGr-B7ISf63ObYM75gMw_zeMTznpO36XA5kKeJktY6tlCxVJrlBh1WdR-s9-lEqETR8PB1TyE-a6f7vOtr6SKLNBcyYhTA");'></div>
                                            <div class="flex flex-col">
                                                <span class="text-text-main font-medium">Designing Data-Intensive</span>
                                                <span class="text-text-secondary text-xs">Martin Kleppmann</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <div class="size-6 rounded-full bg-slate-200 bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBZrl0apFnZqAl1Csydi91cfF42g7osPhJdlIILmUIhwjp_vBHSrfsqPCeB2TZpy3U7-45F88AKDQg9TkcMmhXdycjBSOt5RC7R2SejWUy7H3y6SYBK6rSRCSc2My02HHcR8Wdy1NRx36HDxHEVc9I52yo2jaCwzCN6WWJr9B6xZDJv6QqSpFUk2FxNaVqMJKdX8FbQKPrydQ_3amHV8SRthLr9qmUyO2OsS_8U7LUicLbPBy2NIX7wAt67D4o1Cm1wftdGB3JtQCo");'></div>
                                            <span class="text-text-main">Robert Fox</span>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-text-secondary">Sep 15, 2023</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-50 text-red-600 border border-red-200">
                                            Overdue
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button class="text-text-secondary hover:text-text-main p-1 rounded hover:bg-slate-100">
                                            <span class="material-symbols-outlined text-xl">more_vert</span>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="py-6 flex justify-center">
                    <p class="text-text-secondary text-sm">© 2023 LibManager Inc. All rights reserved.</p>
                </div>
            </div>
        </main>
        <button class="fixed bottom-8 right-8 size-14 bg-primary hover:bg-blue-600 text-white rounded-full shadow-xl shadow-primary/30 flex items-center justify-center transition-transform hover:scale-105 group z-50">
            <span class="material-symbols-outlined text-2xl group-hover:rotate-90 transition-transform duration-300">add</span>
        </button>
    </div>

</body>

</html>