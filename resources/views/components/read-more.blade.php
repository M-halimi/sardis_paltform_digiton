<!-- resources/views/components/read-more.blade.php -->
<div class="max-w-md mx-auto">
    <p id="description" class="line-clamp-1 text-sm text-gray-700">
        {{ $slot }}
    </p>
    <button id="readMoreBtn" class="text-blue-600 hover:underline mt-2">
        Lire plus
    </button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const btn = document.getElementById('readMoreBtn');
        const description = document.getElementById('description');

        btn.addEventListener('click', () => {
            if (description.classList.contains('line-clamp-1')) {
                description.classList.remove('line-clamp-1');
                btn.textContent = 'Lire moins';
            } else {
                description.classList.add('line-clamp-1');
                btn.textContent = 'Lire plus';
            }
        });
    });
</script>
