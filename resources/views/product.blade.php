<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products - Velmore</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 overflow-x-hidden font-sans">
    <!-- Navigation -->
    <nav class="fixed top-6 left-1/2 -translate-x-1/2 z-[60] w-[95%] max-w-7xl">
        <div class="bg-white/80 backdrop-blur-md border border-gray-100 rounded-full px-6 py-4 shadow-sm">
            <div class="flex items-center justify-between">
                <!-- Hamburger Menu Toggle -->
                <button id="menu-toggle" class="p-1 hover:opacity-70 transition-opacity cursor-pointer relative z-10">
                    <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path id="menu-icon-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8M4 18h16" />
                    </svg>
                </button>

                <!-- Centered Logo -->
                <div class="absolute left-1/2 -translate-x-1/2">
                    <a href="/">
                        <h1 class="text-2xl font-bold tracking-[0.1] text-gray-900">VELMORE</h1>
                    </a>
                </div>

                <!-- Shopping Bag Toggle -->
                <button id="cart-toggle" class="p-1 hover:opacity-70 transition-opacity cursor-pointer relative z-10">
                    <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                    <!-- Cart Badge -->
                    <span
                        class="absolute -top-1 -right-1 bg-orange-600 text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold">0</span>
                </button>
            </div>
        </div>
    </nav>

    <!-- Navigation Side Menu -->
    <div id="side-menu" class="fixed inset-0 z-[70] hidden">
        <!-- Backdrop -->
        <div id="menu-backdrop"
            class="absolute inset-0 bg-black/20 backdrop-blur-sm opacity-0 transition-opacity duration-500"></div>

        <!-- Menu Content -->
        <div id="menu-content"
            class="absolute top-0 left-0 h-full w-full max-w-sm bg-white shadow-2xl -translate-x-full transition-transform duration-500 ease-out p-12 flex flex-col justify-between">
            <div>
                <div class="flex items-center justify-between mb-16">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900">VELMORE</h2>
                    <button id="menu-close" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <nav class="space-y-8">
                    <a href="/"
                        class="block text-4xl font-bold text-gray-900 hover:text-orange-600 transition-colors">Home</a>
                    <a href="/about"
                        class="block text-4xl font-bold text-gray-900 hover:text-orange-600 transition-colors">About</a>
                    <a href="/product" class="block text-4xl font-bold text-orange-600 transition-colors">Product</a>
                    <a href="/contact"
                        class="block text-4xl font-bold text-gray-900 hover:text-orange-600 transition-colors">Contact</a>
                </nav>
            </div>

            <div class="space-y-6">
                <div class="pt-8 border-t border-gray-100">
                    <p class="text-sm text-gray-500 mb-4 font-medium uppercase tracking-widest">Follow us</p>
                    <div class="flex gap-6">
                        <a href="#"
                            class="text-gray-900 hover:text-orange-600 transition-colors font-semibold">Instagram</a>
                        <a href="#"
                            class="text-gray-900 hover:text-orange-600 transition-colors font-semibold">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Shopping Cart Modal -->
    <div id="cart-modal" class="fixed inset-0 z-[70] hidden">
        <div id="cart-backdrop"
            class="absolute inset-0 bg-black/20 backdrop-blur-sm opacity-0 transition-opacity duration-500"></div>
        <div id="cart-content"
            class="absolute top-0 right-0 h-full w-full max-w-md bg-white shadow-2xl translate-x-full transition-transform duration-500 ease-out p-8 flex flex-col">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-2xl font-bold text-gray-900">Your Cart</h2>
                <button id="cart-close" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                    <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex-1 flex flex-col items-center justify-center text-center p-8">
                <div class="w-24 h-24 bg-gray-50 rounded-full flex items-center justify-center mb-6">
                    <svg class="w-10 h-10 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Cart is empty</h3>
                <p class="text-gray-500 mb-8">Looks like you haven't added anything to your cart yet.</p>
                <button class="bg-black text-white px-8 py-4 rounded-full font-bold hover:bg-gray-800 transition-all">
                    Start Shopping
                </button>
            </div>
            <div class="pt-8 border-t border-gray-100">
                <div class="flex items-center justify-between mb-6">
                    <span class="text-gray-500 font-medium">Subtotal</span>
                    <span class="text-2xl font-bold text-gray-900">$0.00</span>
                </div>
                <button
                    class="w-full bg-black text-white py-5 rounded-full font-bold hover:bg-gray-800 transition-all shadow-xl shadow-black/10 disabled:opacity-50 disabled:cursor-not-allowed"
                    disabled>
                    Checkout Now
                </button>
            </div>
        </div>
    </div>

    <!-- Collection Hero -->
    <header class="pt-40 pb-20 bg-white border-b border-gray-100">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="max-w-3xl animate-fade-in-up">
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-orange-600 block mb-4">The
                    Collection</span>
                <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6">
                    Discover Your <br> Signature Scent
                </h1>
                <p class="text-gray-500 text-lg leading-relaxed">
                    Explore our curated range of luxury fragrances, each meticulously crafted to evoke a unique emotion
                    and tell a personal story.
                </p>
            </div>
        </div>
    </header>

    <!-- Product Grid & Filters -->
    <section class="py-20">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Filters Sidebar -->
                <aside class="lg:w-64 space-y-12 shrink-0 animate-fade-in-up">
                    <div>
                        <h4 class="text-xs font-bold uppercase tracking-[0.2em] text-gray-900 mb-8">Scent Profile</h4>
                        <div class="space-y-4">
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox" name="scent" value="floral" class="hidden filter-checkbox">
                                <span
                                    class="w-5 h-5 border border-gray-300 rounded flex items-center justify-center transition-colors group-hover:border-orange-500 checkbox-ui">
                                    <svg class="w-3.5 h-3.5 text-white opacity-0 transition-opacity" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-gray-500 group-hover:text-gray-900 transition-colors font-medium">Floral</span>
                            </label>
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox" name="scent" value="woody" class="hidden filter-checkbox">
                                <span
                                    class="w-5 h-5 border border-gray-300 rounded flex items-center justify-center transition-colors group-hover:border-orange-500 checkbox-ui">
                                    <svg class="w-3.5 h-3.5 text-white opacity-0 transition-opacity" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-gray-500 group-hover:text-gray-900 transition-colors font-medium">Woody</span>
                            </label>
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox" name="scent" value="fresh" class="hidden filter-checkbox">
                                <span
                                    class="w-5 h-5 border border-gray-300 rounded flex items-center justify-center transition-colors group-hover:border-orange-500 checkbox-ui">
                                    <svg class="w-3.5 h-3.5 text-white opacity-0 transition-opacity" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-gray-500 group-hover:text-gray-900 transition-colors font-medium">Fresh</span>
                            </label>
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox" name="scent" value="oriental" class="hidden filter-checkbox">
                                <span
                                    class="w-5 h-5 border border-gray-300 rounded flex items-center justify-center transition-colors group-hover:border-orange-500 checkbox-ui">
                                    <svg class="w-3.5 h-3.5 text-white opacity-0 transition-opacity" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-gray-500 group-hover:text-gray-900 transition-colors font-medium">Oriental</span>
                            </label>
                        </div>
                    </div>

                    <div class="pt-10 border-t border-gray-100">
                        <h4 class="text-xs font-bold uppercase tracking-[0.2em] text-gray-900 mb-8">Intensity</h4>
                        <div class="space-y-4">
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox" name="intensity" value="light" class="hidden filter-checkbox">
                                <span
                                    class="w-5 h-5 border border-gray-300 rounded flex items-center justify-center transition-colors group-hover:border-orange-500 checkbox-ui">
                                    <svg class="w-3.5 h-3.5 text-white opacity-0 transition-opacity" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-gray-500 group-hover:text-gray-900 transition-colors font-medium">Light</span>
                            </label>
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox" name="intensity" value="medium" class="hidden filter-checkbox">
                                <span
                                    class="w-5 h-5 border border-gray-300 rounded flex items-center justify-center transition-colors group-hover:border-orange-500 checkbox-ui">
                                    <svg class="w-3.5 h-3.5 text-white opacity-0 transition-opacity" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-gray-500 group-hover:text-gray-900 transition-colors font-medium">Medium</span>
                            </label>
                            <label class="flex items-center group cursor-pointer">
                                <input type="checkbox" name="intensity" value="bold" class="hidden filter-checkbox">
                                <span
                                    class="w-5 h-5 border border-gray-300 rounded flex items-center justify-center transition-colors group-hover:border-orange-500 checkbox-ui">
                                    <svg class="w-3.5 h-3.5 text-white opacity-0 transition-opacity" fill="none"
                                        stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M5 13l4 4L19 7" />
                                    </svg>
                                </span>
                                <span
                                    class="ml-4 text-gray-500 group-hover:text-gray-900 transition-colors font-medium">Bold</span>
                            </label>
                        </div>
                    </div>
                </aside>

                <!-- Grid -->
                <div class="flex-1">
                    <div id="product-grid" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-x-8 gap-y-16">
                        <!-- Product 1 -->
                        <div class="product-card animate-fade-in-up" data-scent="floral" data-intensity="medium">
                            <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-100 group mb-8">
                                <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?q=80&w=1000&auto=format&fit=crop"
                                    alt="Noir Essence"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-x-4 bottom-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                    <button
                                        class="w-full bg-white text-black py-4 rounded-2xl font-bold shadow-xl hover:bg-black hover:text-white transition-all">
                                        Quick Add
                                    </button>
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-gray-900 shadow-sm">
                                    Floral
                                </div>
                            </div>
                            <div class="px-2">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-gray-900 tracking-tight">Noir Essence</h3>
                                    <span class="text-gray-900 font-bold">$125.00</span>
                                </div>
                                <p class="text-gray-400 text-sm font-medium">Eau de Parfum • 50ml</p>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card animate-fade-in-up" data-scent="woody" data-intensity="bold"
                            style="animation-delay: 0.1s;">
                            <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-100 group mb-8">
                                <img src="https://images.unsplash.com/photo-1594035910387-fea47794261f?q=80&w=1000&auto=format&fit=crop"
                                    alt="Oud Horizon"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-x-4 bottom-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                    <button
                                        class="w-full bg-white text-black py-4 rounded-2xl font-bold shadow-xl hover:bg-black hover:text-white transition-all">
                                        Quick Add
                                    </button>
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-gray-900 shadow-sm">
                                    Woody
                                </div>
                            </div>
                            <div class="px-2">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-gray-900 tracking-tight">Oud Horizon</h3>
                                    <span class="text-gray-900 font-bold">$180.00</span>
                                </div>
                                <p class="text-gray-400 text-sm font-medium">Extrait de Parfum • 100ml</p>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card animate-fade-in-up" data-scent="fresh" data-intensity="light"
                            style="animation-delay: 0.2s;">
                            <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-100 group mb-8">
                                <img src="https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?q=80&w=1000&auto=format&fit=crop"
                                    alt="Azure Mist"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-x-4 bottom-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                    <button
                                        class="w-full bg-white text-black py-4 rounded-2xl font-bold shadow-xl hover:bg-black hover:text-white transition-all">
                                        Quick Add
                                    </button>
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-gray-900 shadow-sm">
                                    Fresh
                                </div>
                            </div>
                            <div class="px-2">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-gray-900 tracking-tight">Azure Mist</h3>
                                    <span class="text-gray-900 font-bold">$95.00</span>
                                </div>
                                <p class="text-gray-400 text-sm font-medium">Eau de Toilette • 50ml</p>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="product-card animate-fade-in-up" data-scent="oriental" data-intensity="bold"
                            style="animation-delay: 0.3s;">
                            <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-100 group mb-8">
                                <img src="https://images.unsplash.com/photo-1523293182086-7651a899d37f?q=80&w=1000&auto=format&fit=crop"
                                    alt="Velvet Rose"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-x-4 bottom-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                    <button
                                        class="w-full bg-white text-black py-4 rounded-2xl font-bold shadow-xl hover:bg-black hover:text-white transition-all">
                                        Quick Add
                                    </button>
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-gray-900 shadow-sm">
                                    Oriental
                                </div>
                            </div>
                            <div class="px-2">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-gray-900 tracking-tight">Velvet Rose</h3>
                                    <span class="text-gray-900 font-bold">$145.00</span>
                                </div>
                                <p class="text-gray-400 text-sm font-medium">Eau de Parfum • 50ml</p>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="product-card animate-fade-in-up" data-scent="floral" data-intensity="light"
                            style="animation-delay: 0.4s;">
                            <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-100 group mb-8">
                                <img src="https://images.unsplash.com/photo-1563170351-be82bc888bb4?q=80&w=1000&auto=format&fit=crop"
                                    alt="Bloom Scent"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-x-4 bottom-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                    <button
                                        class="w-full bg-white text-black py-4 rounded-2xl font-bold shadow-xl hover:bg-black hover:text-white transition-all">
                                        Quick Add
                                    </button>
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-gray-900 shadow-sm">
                                    Floral
                                </div>
                            </div>
                            <div class="px-2">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-gray-900 tracking-tight">Bloom Scent</h3>
                                    <span class="text-gray-900 font-bold">$110.00</span>
                                </div>
                                <p class="text-gray-400 text-sm font-medium">Eau de Toilette • 100ml</p>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="product-card animate-fade-in-up" data-scent="woody" data-intensity="medium"
                            style="animation-delay: 0.5s;">
                            <div class="relative aspect-[3/4] rounded-[2rem] overflow-hidden bg-gray-100 group mb-8">
                                <img src="https://images.unsplash.com/photo-1547887538-e3a2f32cb1cc?q=80&w=1000&auto=format&fit=crop"
                                    alt="Cedar Path"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                <div
                                    class="absolute inset-x-4 bottom-4 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                    <button
                                        class="w-full bg-white text-black py-4 rounded-2xl font-bold shadow-xl hover:bg-black hover:text-white transition-all">
                                        Quick Add
                                    </button>
                                </div>
                                <div
                                    class="absolute top-4 right-4 bg-white/80 backdrop-blur-sm px-3 py-1.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-gray-900 shadow-sm">
                                    Woody
                                </div>
                            </div>
                            <div class="px-2">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="text-xl font-bold text-gray-900 tracking-tight">Cedar Path</h3>
                                    <span class="text-gray-900 font-bold">$135.00</span>
                                </div>
                                <p class="text-gray-400 text-sm font-medium">Eau de Parfum • 50ml</p>
                            </div>
                        </div>
                    </div>

                    <!-- No Results -->
                    <div id="no-results" class="hidden py-32 text-center">
                        <div class="w-20 h-20 bg-gray-50 rounded-full flex items-center justify-center mx-auto mb-8">
                            <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">No products found</h3>
                        <p class="text-gray-500">Try selecting different filter options</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-white pt-24 pb-12 border-t border-gray-100">
        <div class="container mx-auto px-6 lg:px-12">
            <!-- Top: Navigation Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-10">
                <!-- Brand column -->
                <div class="lg:col-span-2">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 bg-[#1a1410] rounded-xl flex items-center justify-center">
                            <svg class="w-6 h-6 text-orange-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.64.32a4 4 0 01-2.573.345l-2.387-.477a2 2 0 00-1.022.547l-1.162 1.163a2 2 0 01-1.778.547l-1.574-.315a2 2 0 01-1.569-2.316l.163-1.144A2 2 0 015.6 11.2a4 4 0 002.3-2.3 2 2 0 011.49-1.49 4 4 0 002.3-2.3 2 2 0 011.49-1.49l1.144-.163a2 2 0 012.316 1.569l.315 1.574a2 2 0 01-.547 1.778l-1.163 1.162z" />
                            </svg>
                        </div>
                        <span class="text-2xl font-bold tracking-tight text-gray-900 font-display">Velmore</span>
                    </div>
                    <p class="text-gray-500 leading-relaxed mb-8 pr-4">
                        Your Trusted Partner for Innovative Fragrance Solutions That Nourish Your Senses and Transform
                        Your Presence.
                    </p>
                    <!-- Social Icons -->
                    <div class="flex items-center gap-4">
                        <a href="#"
                            class="w-10 h-10 rounded-full bg-[#A3E635] flex items-center justify-center text-white transition-transform hover:scale-110">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-gray-900 transition-all hover:bg-gray-50">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                            </svg>
                        </a>
                        <a href="#"
                            class="w-10 h-10 rounded-full border border-gray-100 flex items-center justify-center text-gray-900 transition-all hover:bg-gray-50">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 4-8 4z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <!-- Navigation sets -->
                <div>
                    <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-widest text-xs">Company</h4>
                    <ul class="space-y-4 text-gray-500">
                        <li><a href="/about" class="hover:text-orange-500 transition-colors">Our Story</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Our Mission</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Our Vision</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Meet Our Team</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-widest text-xs">Collections</h4>
                    <ul class="space-y-4 text-gray-500">
                        <li><a href="/product" class="hover:text-orange-500 transition-colors">All Products</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Noir Collection</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Essence Series</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Botanica</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-gray-900 mb-6 uppercase tracking-widest text-xs">Help</h4>
                    <ul class="space-y-4 text-gray-500">
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Shipping</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Returns</a></li>
                        <li><a href="#" class="hover:text-orange-500 transition-colors">FAQ</a></li>
                        <li><a href="/contact" class="hover:text-orange-500 transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Middle: Watermark & Email Pill -->
            <div class="relative py-4 flex flex-col items-center justify-center">
                <h2
                    class="text-6xl md:text-8xl lg:text-[15rem] font-bold text-gray-200/60 select-none pointer-events-none font-display text-center leading-none">
                    VELMORE
                </h2>
                <div class="absolute inset-0 flex items-center justify-center">
                    <a href="mailto:info@velmore.com"
                        class="px-8 py-4 bg-[#0a0a0a] text-white rounded-full font-bold shadow-xl shadow-gray-200/50 transition-transform hover:scale-105 active:scale-95 border border-white/10">
                        Email us at info@velmore.com
                    </a>
                </div>
            </div>

            <!-- Bottom: Copyright Bar -->
            <div
                class="pt-10 border-t border-gray-100 flex flex-col md:flex-row items-center justify-between gap-6 text-[13px] text-gray-400 font-medium font-sans">
                <p>© Copyright 2026 Velmore</p>
                <div class="flex items-center gap-8">
                    <a href="#" class="hover:text-gray-900 transition-colors">Terms of Service</a>
                    <p>All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <style>
        .filter-checkbox:checked+.checkbox-ui {
            background-color: #ea580c;
            border-color: #ea580c;
        }

        .filter-checkbox:checked+.checkbox-ui svg {
            opacity: 1;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
    </style>
</body>

</html>