
<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Library Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet" />
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
                        "sans": ["manrope", "sans-serif"],
                        "display": ["manrope", "sans-serif"],
                        "body": ["manrope", "sans-serif"],
                    },
                },
            },
        }
    </script>
</head>

<body class="bg-background text-text-main antialiased selection:bg-primary selection:text-white overflow-hidden">
    <div class="flex h-screen w-full overflow-hidden gap-0">
        <?php require_once __DIR__ . '/../Views/Partials/sidebar.php' ?>
        <main class="flex-1 flex flex-col h-full overflow-y-auto bg-background relative scroll-smooth">
            <?php echo $content; ?>
        </main>
    </div>
</body>

</html>