<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LetterBox</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace; /* Tipografia forte */
        }
        .hover-shadow {
            box-shadow: 6px 6px 0 black; /* Sombras sólidas e secas */
        }
        .hover-shadow:hover {
            box-shadow: 10px 10px 0 black; /* Efeito de movimento */
        }
    </style>
</head>
<body class="bg-stone-900 text-stone-100">
<header class="bg-stone-800 border-b-4 border-stone-100">
    <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
        <a href="/index.php" class="font-bold text-2xl tracking-wide hover-shadow text-stone-100">LetterBox</a>
        <ul class="flex space-x-4 font-bold text-lg">
            <li>
                <a href="/" class="hover:underline">Explore</a>
            </li>
            <?php //if(auth()): ?>
            <li>
                <a href="/my-movies" class="hover:underline">My Movies</a>
            </li>
            <?php //endif; ?>
        </ul>
        <ul class="flex space-x-4 text-lg">
            <?php //if(auth()): ?>
            <li>
                <a href="/logout" class="hover:underline">Logout</a>
            </li>
            <?php //else: ?>
            <li>
                <a href="/login" class="hover:underline">Login</a>
            </li>
            <?php //endif; ?>
        </ul>
    </nav>
</header>

<main class="mx-auto max-w-screen-lg space-y-8 mt-8">
    <section class="bg-stone-800 border-4 border-stone-100 p-6 hover-shadow">
        <h1 class="text-3xl font-extrabold mb-4 text-stone-100">
            Welcome to LetterBox
        </h1>
        <p class="text-lg">
            Keep track of your favorite movies and explore new ones. A space for movie lovers.
        </p>
    </section>
    <section class="grid grid-cols-2 gap-4">
        <div class="bg-stone-700 p-4 border-4 border-stone-100 hover-shadow">
            <h2 class="font-bold text-xl mb-2">Featured Movie</h2>
            <p class="text-sm">
                Check out what's trending and don't miss the latest releases.
            </p>
        </div>
        <div class="bg-stone-700 p-4 border-4 border-stone-100 hover-shadow">
            <h2 class="font-bold text-xl mb-2">My Collections</h2>
            <p class="text-sm">
                Create personalized lists and share them with your friends.
            </p>
        </div>
    </section>
</main>
</body>
</html>
