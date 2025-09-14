<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-6 py-3 bg-gradient-to-r from-amber-600 to-amber-700 border border-transparent rounded-xl font-semibold text-sm text-white uppercase tracking-wide hover:from-amber-700 hover:to-amber-800 focus:from-amber-700 focus:to-amber-800 active:from-amber-800 active:to-amber-900 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 transition-all duration-300 transform hover:scale-105 shadow-lg hover:shadow-xl']) }}>
    {{ $slot }}
</button>
