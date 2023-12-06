<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#2D349A] dark:bg-[#2D349A] border border-transparent rounded-md text-xs text-white dark:text-gray-800 tracking-widest hover:bg-[#2C56A6] dark:hover:bg-[#2C56A6] focus:bg-[#4F74BB] dark:focus:bg-[#4F74BB] active:bg-[#4F74BB] dark:active:bg-[#4F74BB] focus:outline-none focus:ring-1 focus:ring-[#4F74BB] focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
