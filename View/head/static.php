<link rel="stylesheet" href="<?= URI . 'css/style.css' ?>">
<link crossorigin="use-credentials" rel="manifest" href="<?= URI . 'fav/manifest.json' ?>">
<script>
    window.addEventListener('load', () => {
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register(<?= URI . 'js/sw.js' ?>);
        }
    })
</script>