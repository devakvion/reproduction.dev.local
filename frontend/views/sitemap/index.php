<?= '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc><?= $host ?></loc>
        <changefreq>daily</changefreq>
        <priority>1</priority>
    </url>

    <?php foreach ($problems AS $category): ?>
        <?php foreach ($category->solutions AS $problem): ?>

            <url>
                <loc><?= $host ?>/<?= $category->slug ?>/<?= $problem->slug ?></loc>
                <changefreq>daily</changefreq>
                <priority>0.5</priority>
            </url>
        <?php endforeach; ?>
    <?php endforeach; ?>

    <?php foreach ($products AS $product): ?>

        <url>
            <loc><?= $host ?>/nashi_produkty/<?= $product->slug ?></loc>
            <changefreq>daily</changefreq>
            <priority>0.5</priority>
        </url>
    <?php endforeach; ?>

    <url>
        <loc><?= $host; ?>/novosti</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc><?= $host; ?>/statyi</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>

    <?php foreach ($articles AS $article): ?>

        <url>
            <loc><?= $host ?>/statyi/<?= $article->slug ?></loc>
            <changefreq>daily</changefreq>
            <priority>0.5</priority>
        </url>
    <?php endforeach; ?>

    <url>
        <loc><?= $host; ?>/specialist</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc><?= $host; ?>/otzyvy</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= $host; ?>/vopros-otvet</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= $host; ?>/gde_kupit</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= $host; ?>/kontakty</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>
    <url>
        <loc><?= $host; ?>/poisk</loc>
        <changefreq>daily</changefreq>
        <priority>0.5</priority>
    </url>
</urlset>