<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 rounded-md
        bg-[#F4F4F5] dark:bg-gray-800 hover:bg-[#2C56A6] dark:hover:bg-gray-700 focus:bg-[#4F74BB] dark:focus:bg-[#4F74BB]
        font-semibold text-sm text-zinc-950 dark:text-gray-300 tracking-widest shadow hover:text-[#EFF0FF] dark:hover:text-[#EFF0FF] hover:stroke-[#EFF0FF] 
        focus:outline-none focus:ring-1 focus:ring-[#D6D7D8] focus:ring-offset-2 dark:focus:ring-offset-gray-800 
        disabled:opacity-25 transition ease-in-out duration-10']) }}>
    {{ $slot }}
</button>
