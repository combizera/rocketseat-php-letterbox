<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LetterBox</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-stone-950 text-stone-300">
<header class="bg-stone-900">
    <nav class="mx-auto max-w-screen-lg flex justify-between px-8 py-4">
        <a href="/index.php" class="font-bold text-xl tracking-wide">LetterBox</a>
        <ul class="flex space-x-4 font-bold">
            <li>
                <a href="/" class="text-lime-500">Explorar</a>
            </li>
            <?php //if(auth()): ?>
                <li>
                    <a href="/my-movies" class="hover:underline">My Movies</a>
                </li>
            <?php //endif; ?>
        </ul>
        <ul class="flex space-x-4">
            <?php //if(auth()): ?>
                <!--<li>-->
                <!--    <a href="/logout" class="hover:underline">-->
                <!--        <!--Olá, -->--><?php ////= auth()->name ?>
                <!--    </a>-->
                <!--</li>-->
                <li>
                    <a href="/logout" class="hover:underline">
                        Sair
                    </a>
                </li>

            <?php //else: ?>
                <li>
                    <a href="/login" class="hover:underline">
                        Fazer Login
                    </a>
                </li>
            <?php //endif; ?>
        </ul>
    </nav>
</header>


<main class="mx-auto max-w-screen-lg space-y-6">

</main>
</body>
</html>