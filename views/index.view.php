<form class="w-full flex space-x-2 mt-6">
    <input
        type="text"
        class="border-4 border-stone-100 bg-stone-900 text-sm focus:outline-none px-2 py-1 w-full text-stone-100 placeholder-stone-500"
        placeholder="Search..."
        name="search"
    >
    <button
        type="submit"
        class="border-4 border-stone-100 bg-stone-800 px-4 py-1 text-stone-100 hover:bg-stone-700 hover-shadow"
    >
        🔍
    </button>
</form>

<section class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 mt-8">
    <?php global $movies;
        foreach ($movies as $movie): ?>
            <div class="p-4 border-4 border-stone-100 bg-stone-800 hover-shadow">
                <div class="flex space-x-4">
                    <div class="w-1/3 bg-stone-700 aspect-square flex items-center justify-center border-4 border-stone-100">
                        <span class="text-xs text-stone-500">No Image</span>
                    </div>
                    <div class="space-y-2 flex-1">
                        <a
                            href="/book?id=<?= $movie->id ?>"
                            class="font-bold text-stone-100 text-lg hover:underline"
                        >
                            <?= $movie->title ?>
                        </a>
                        <div class="text-stone-400 text-xs">
                            ★★★☆☆ (3 reviews)
                        </div>
                    </div>
                </div>
                <div class="text-sm mt-4 text-stone-300">
                    <?= $movie->description ?>
                </div>
            </div>
        <?php endforeach; ?>
</section>
