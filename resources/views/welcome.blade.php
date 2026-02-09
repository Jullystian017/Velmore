<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Velmore - Luxury Perfumes</title>

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
        <div class="bg-white/80 backdrop-blur-md border border-white/20 rounded-full px-6 py-4 shadow-sm">
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
                    <a href="/product"
                        class="block text-4xl font-bold text-gray-900 hover:text-orange-600 transition-colors">Product</a>
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
        <!-- Backdrop -->
        <div id="cart-backdrop"
            class="absolute inset-0 bg-black/20 backdrop-blur-sm opacity-0 transition-opacity duration-500"></div>

        <!-- Cart Content -->
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

            <!-- Empty Cart State -->
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

            <!-- Cart Footer (Sticky at bottom) -->
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

    <!-- Hero Section -->
    <main class="relative h-screen min-h-[800px] w-full flex items-center overflow-hidden">
        <!-- Background Image (Perfume on Right) -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/velmore-hero.png') }}" alt="Velmore Hero"
                class="w-full h-full object-cover object-right">
        </div>

        <!-- Overlay for better text readability (optional, but keep it subtle) -->
        <div class="absolute inset-0 bg-gradient-to-r from-orange-50/10 to-transparent pointer-events-none"></div>

        <div class="container mx-auto px-12 lg:px-24 relative z-10 flex flex-col justify-center h-full">
            <div class="max-w-2xl animate-fade-in-up">
                <h2 class="text-5xl lg:text-6xl font-bold leading-[1.1] text-gray-900 mb-6">
                    Amazing scent <br>
                    that reflects <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-orange-600">character</span>
                </h2>

                <p class="text-gray-600 text-base lg:text-lg max-w-lg mb-8 leading-relaxed">
                    Velmore delivers distinctive fragrances with an elegant, modern touch - made for those who stand
                    out.
                </p>

                <div class="flex items-center gap-4">
                    <a href="#"
                        class="bg-black text-white px-10 py-5 rounded-full font-semibold hover:bg-gray-800 transition-all shadow-xl shadow-black/10">
                        Discover collection
                    </a>
                    <a href="#"
                        class="bg-white/80 backdrop-blur-md text-gray-900 px-10 py-5 rounded-full font-semibold hover:bg-white transition-all border border-gray-100 shadow-sm">
                        Contact us
                    </a>
                </div>
            </div>
        </div>

        <!-- Floating Product Info Card (Bottom Right) -->
        <div class="absolute bottom-16 right-16 lg:right-24 z-20 animate-fade-in-up">
            <div class="bg-white/40 backdrop-blur-xl p-8 rounded-3xl border border-white/40 shadow-2xl max-w-[320px]">
                <div class="flex items-center gap-2 mb-4">
                    <span class="w-2 h-2 bg-orange-400 rounded-full"></span>
                    <span class="text-xs uppercase tracking-widest text-gray-600 font-bold">New</span>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-1">Velour Dark Gold</h3>
                <p class="text-gray-600 text-sm mb-6">Luxury, Richness, Warmth</p>
                <div class="text-3xl font-bold text-orange-600">
                    $ 120.00
                </div>
            </div>
        </div>
    </main>

    <!-- Collections Section -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-12">
            <!-- Section Header -->
            <div class="text-center mb-16 animate-fade-in-up">
                <span
                    class="inline-block px-4 py-1.5 bg-gray-100 rounded-full text-[10px] items-center uppercase tracking-[0.2em] font-bold text-gray-500 mb-6">
                    Our Collections
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                    Discover the fragrance <br>
                    with an unlimited collection
                </h2>
            </div>

            <!-- Collections Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Noir Collection -->
                <div class="group relative h-[500px] rounded-[2rem] overflow-hidden cursor-pointer animate-fade-in-up"
                    style="animation-delay: 0.1s;">
                    <img src="{{ asset('images/noir-collection.png') }}" alt="Noir Collection"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <div class="absolute top-6 left-6">
                        <span
                            class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-xs font-medium text-white border border-white/20">
                            30+ Perfume
                        </span>
                    </div>

                    <div class="absolute bottom-8 left-8 right-8 text-white">
                        <h3 class="text-3xl font-bold mb-3">Noir Collection</h3>
                        <p
                            class="text-white/80 text-sm leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            Bold, mysterious, and deeply captivating — made for those who dare to stand out.
                        </p>
                    </div>
                </div>

                <!-- Essence Collection -->
                <div class="group relative h-[500px] rounded-[2rem] overflow-hidden cursor-pointer animate-fade-in-up"
                    style="animation-delay: 0.2s;">
                    <img src="{{ asset('images/essence-collection.png') }}" alt="Essence Collection"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <div class="absolute top-6 left-6">
                        <span
                            class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-xs font-medium text-white border border-white/20">
                            25+ Perfume
                        </span>
                    </div>

                    <div class="absolute bottom-8 left-8 right-8 text-white">
                        <h3 class="text-3xl font-bold mb-3">Essence Collection</h3>
                        <p
                            class="text-white/80 text-sm leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            Fresh, clean, and effortlessly charming — designed for daily wear and instant confidence.
                        </p>
                    </div>
                </div>

                <!-- Botanica Collection -->
                <div class="group relative h-[500px] rounded-[2rem] overflow-hidden cursor-pointer animate-fade-in-up"
                    style="animation-delay: 0.3s;">
                    <img src="{{ asset('images/botanica-collection.png') }}" alt="Botanica Collection"
                        class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>

                    <div class="absolute top-6 left-6">
                        <span
                            class="px-4 py-2 bg-white/20 backdrop-blur-md rounded-full text-xs font-medium text-white border border-white/20">
                            40+ Perfume
                        </span>
                    </div>

                    <div class="absolute bottom-8 left-8 right-8 text-white">
                        <h3 class="text-3xl font-bold mb-3">Botanica Collection</h3>
                        <p
                            class="text-white/80 text-sm leading-relaxed opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                            Nature-inspired scents with botanical elegance — calming, earthy, and beautifully balanced.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Product Showcase -->
    <section class="py-24 bg-gray-50/50">
        <div class="container mx-auto px-6 lg:px-12">
            <!-- Section Header mit Nav -->
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12 animate-fade-in-up">
                <div>
                    <span
                        class="inline-block px-4 py-1.5 bg-white rounded-full text-[10px] items-center uppercase tracking-[0.2em] font-bold text-gray-400 mb-6 shadow-sm">
                        Popular Product
                    </span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-[1.2]">
                        Discover our best collection, <br>
                        in other words, many fans
                    </h2>
                    <p class="text-gray-500 mt-6 max-w-lg leading-relaxed">
                        We have four flagship products, which are the main ingredients in the creation of other
                        impressive perfume products.
                    </p>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex items-center gap-3 mt-8 md:mt-0">
                    <button
                        class="p-4 rounded-full border border-gray-200 bg-white hover:bg-gray-50 transition-colors shadow-sm group">
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-gray-900" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button
                        class="p-4 rounded-full border border-gray-200 bg-white hover:bg-gray-50 transition-colors shadow-sm group flex items-center gap-2 px-6">
                        <span class="text-sm font-semibold text-gray-600 group-hover:text-gray-900">Next</span>
                        <svg class="w-5 h-5 text-gray-600 group-hover:text-gray-900" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Product Display Card -->
            <div class="bg-white rounded-[3rem] overflow-hidden shadow-2xl shadow-gray-200/50 flex flex-col lg:flex-row animate-fade-in-up"
                style="animation-delay: 0.2s;">
                <!-- Product Image Area -->
                <div class="lg:w-1/2 relative bg-[#fdf8f4]">
                    <img src="{{ asset('images/botanica-collection.png') }}" alt="Mentha fresh path"
                        class="w-full h-full object-cover min-h-[400px]">
                    <!-- Subtle shadow/gradient inside image -->
                    <div class="absolute inset-0 shadow-[inset_0px_0px_100px_rgba(0,0,0,0.05)]"></div>
                </div>

                <!-- Product Details Area -->
                <div class="lg:w-1/2 p-12 lg:p-16 flex flex-col justify-center">
                    <div class="mb-2">
                        <h3 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-2">Mentha fresh path</h3>
                        <p class="text-gray-500 text-lg">Fig Leaf, Green Tea, Vetiver</p>
                    </div>

                    <p class="text-gray-500 my-8 leading-relaxed text-lg max-w-md">
                        Fresh and grounded. Mentha fresh path channels the calm energy of nature, refined into a scent
                        that's modern, and quietly captivating.
                    </p>

                    <!-- Fragrance Notes Table -->
                    <div class="border border-gray-100 rounded-2xl overflow-hidden mb-10">
                        <div class="grid grid-cols-3 text-center">
                            <div class="p-4 border-r border-gray-100 bg-gray-50/50">
                                <span class="text-[10px] uppercase tracking-widest text-gray-400 block mb-1">Base
                                    note</span>
                                <span class="text-sm font-bold text-gray-900">Lavender, Bergamot</span>
                            </div>
                            <div class="p-4 border-r border-gray-100">
                                <span class="text-[10px] uppercase tracking-widest text-gray-400 block mb-1">Middle
                                    note</span>
                                <span class="text-sm font-bold text-gray-900">Iris, White Tea</span>
                            </div>
                            <div class="p-4">
                                <span class="text-[10px] uppercase tracking-widest text-gray-400 block mb-1">Top
                                    note</span>
                                <span class="text-sm font-bold text-gray-900">Mint</span>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="text-4xl font-bold text-orange-600">$145.00</div>
                        <button
                            class="bg-black text-white px-10 py-5 rounded-full font-semibold hover:bg-gray-800 transition-all flex items-center gap-3 shadow-xl shadow-black/10">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                            </svg>
                            I want this
                        </button>
                    </div>
                </div>
            </div>
    </section>
    <!-- Dark About Section (Floating Ingredients) -->
    <section class="relative py-64 bg-[#0a0a0a] mt-24 overflow-hidden">
        <!-- Floating Botanical Images (Simulating ingredients) -->
        <div class="absolute inset-0 pointer-events-none">
            <!-- Top Left -->
            <div class="absolute top-[10%] left-[10%] w-40 h-40 lg:w-48 lg:h-48 animate-float"
                style="animation-delay: 0s;">
                <img src="https://images.unsplash.com/photo-1533228892403-516d3326759c?q=80&w=400&h=400&auto=format&fit=crop"
                    alt="Flower ingredient" class="w-full h-full object-cover rounded-3xl shadow-2xl opacity-60">
            </div>
            <!-- Middle Left -->
            <div class="absolute top-[40%] left-[5%] w-32 h-32 lg:w-40 lg:h-40 animate-float"
                style="animation-delay: 1.5s;">
                <img src="https://images.unsplash.com/photo-1596040033229-a9821ebd058d?q=80&w=400&h=400&auto=format&fit=crop"
                    alt="Spice ingredient" class="w-full h-full object-cover rounded-3xl shadow-2xl opacity-60">
            </div>
            <!-- Bottom Left -->
            <div class="absolute bottom-[15%] left-[12%] w-44 h-44 lg:w-56 lg:h-56 animate-float"
                style="animation-delay: 0.8s;">
                <img src="https://images.unsplash.com/photo-1518709268805-4e9042af9f23?q=80&w=400&h=400&auto=format&fit=crop"
                    alt="Rose ingredient" class="w-full h-full object-cover rounded-3xl shadow-2xl opacity-60">
            </div>

            <!-- Top Right -->
            <div class="absolute top-[5%] right-[15%] w-36 h-36 lg:w-44 lg:h-44 animate-float"
                style="animation-delay: 2s;">
                <img src="https://images.unsplash.com/photo-1557800636-894a64c1696f?q=80&w=400&h=400&auto=format&fit=crop"
                    alt="Citrus ingredient" class="w-full h-full object-cover rounded-3xl shadow-2xl opacity-60">
            </div>
            <!-- Bottom Right -->
            <div class="absolute bottom-[20%] right-[10%] w-48 h-48 lg:w-64 lg:h-64 animate-float"
                style="animation-delay: 0.5s;">
                <img src="https://images.unsplash.com/photo-1517260911058-0fcfd733702f?q=80&w=400&h=400&auto=format&fit=crop"
                    alt="Botanical ingredient" class="w-full h-full object-cover rounded-3xl shadow-2xl opacity-60">
            </div>
            <!-- Far Right -->
            <div class="absolute top-[45%] -right-12 w-48 h-48 lg:w-56 lg:h-56 animate-float"
                style="animation-delay: 2.5s;">
                <img src="https://images.unsplash.com/photo-1595165733531-f166f272fbd1?q=80&w=400&h=400&auto=format&fit=crop"
                    alt="Lavender ingredient" class="w-full h-full object-cover rounded-3xl shadow-2xl opacity-40">
            </div>
        </div>

        <!-- Center Content -->
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <div class="animate-fade-in-up">
                    <div
                        class="inline-flex items-center gap-2 px-6 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-sm mb-10">
                        <span
                            class="w-2 h-2 bg-orange-500 rounded-full animate-pulse shadow-[0_0_10px_rgba(249,115,22,0.5)]"></span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-white/80">50K+ customers are
                            satisfied with Velmore</span>
                    </div>

                    <h2 class="text-4xl lg:text-6xl font-bold text-white leading-tight mb-8">
                        Fragrance That Defines <br>
                        Your Identity
                    </h2>

                    <p class="text-gray-400 text-base lg:text-xl max-w-2xl mx-auto mb-14 leading-relaxed">
                        We create high-quality, affordable scents designed to empower students and young creators to
                        express confidence through every moment.
                    </p>

                    <a href="#"
                        class="inline-block bg-white text-black px-12 py-6 rounded-full font-bold text-lg hover:bg-gray-200 transition-all shadow-xl shadow-white/5">
                        Discover Our Brand
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Grid Section -->
    <section class="py-32 bg-white">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <!-- Header -->
            <div class="mb-20 animate-fade-in-up">
                <span
                    class="inline-block px-4 py-1.5 bg-gray-50 rounded-full text-[10px] items-center uppercase tracking-[0.2em] font-bold text-gray-400 mb-6 border border-gray-100">
                    OUR PRODUCTS
                </span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                    We know you love lots of <br>
                    scents, discover them now
                </h2>
            </div>

            <!-- Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16 mb-20">
                <!-- Product 1 -->
                <div class="group animate-fade-in-up" style="animation-delay: 0.1s;">
                    <div
                        class="relative aspect-square rounded-[2rem] overflow-hidden bg-gray-50 mb-6 group-hover:shadow-xl transition-all duration-500">
                        <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                            <span
                                class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-[10px] font-bold uppercase tracking-wider text-orange-500 shadow-sm border border-orange-100">
                                • New
                            </span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1541643600914-78b084683601?q=80&w=600&auto=format&fit=crop"
                            alt="Soléne Morning Ray"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Soléne Morning Ray</h3>
                        <p class="text-gray-400 text-sm mb-4">Warmth of sunrise, subtle femininity</p>
                        <div class="text-xl font-bold text-orange-600">$ 120.00</div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div
                        class="relative aspect-square rounded-[2rem] overflow-hidden bg-gray-50 mb-6 group-hover:shadow-xl transition-all duration-500">
                        <div class="absolute top-4 left-4 z-10 flex items-center gap-2">
                            <span
                                class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-[10px] font-bold uppercase tracking-wider text-orange-500 shadow-sm border border-orange-100">
                                • New
                            </span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1594035910387-fea477a45ed8?q=80&w=600&auto=format&fit=crop"
                            alt="Noxen Silent Sweet"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Noxen Silent Sweet</h3>
                        <p class="text-gray-400 text-sm mb-4">Strong, moody, sweet</p>
                        <div class="text-xl font-bold text-orange-600">$ 110.00</div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group animate-fade-in-up" style="animation-delay: 0.3s;">
                    <div
                        class="relative aspect-square rounded-[2rem] overflow-hidden bg-gray-50 mb-6 group-hover:shadow-xl transition-all duration-500">
                        <div class="absolute top-4 right-4 z-10">
                            <span
                                class="px-3 py-1 bg-black text-white rounded-full text-[10px] font-bold uppercase tracking-wider shadow-sm">
                                14% OFF
                            </span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1592945403244-b3fbafd7f539?q=80&w=600&auto=format&fit=crop"
                            alt="Salvia Morning Fresh"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Salvia Morning Fresh</h3>
                        <p class="text-gray-400 text-sm mb-4">Fresh, Strong, Masculine</p>
                        <div class="flex items-center gap-3">
                            <div class="text-xl font-bold text-orange-600">$ 150.00</div>
                            <div class="text-sm text-gray-300 line-through">$ 175.00</div>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group animate-fade-in-up" style="animation-delay: 0.4s;">
                    <div
                        class="relative aspect-square rounded-[2rem] overflow-hidden bg-gray-50 mb-6 group-hover:shadow-xl transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?q=80&w=600&auto=format&fit=crop"
                            alt="Elara Gentle Strong"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Elara Gentle Strong</h3>
                        <p class="text-gray-400 text-sm mb-4">Romantic, gentle, sweet</p>
                        <div class="text-xl font-bold text-orange-600">$ 100.00</div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="group animate-fade-in-up" style="animation-delay: 0.5s;">
                    <div
                        class="relative aspect-square rounded-[2rem] overflow-hidden bg-gray-50 mb-6 group-hover:shadow-xl transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1590736704728-f4730bb30770?q=80&w=600&auto=format&fit=crop"
                            alt="Eclipse Deep Night"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Eclipse Deep Night</h3>
                        <p class="text-gray-400 text-sm mb-4">Mysterious, powerful, dark energy</p>
                        <div class="text-xl font-bold text-orange-600">$ 99.00</div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="group animate-fade-in-up" style="animation-delay: 0.6s;">
                    <div
                        class="relative aspect-square rounded-[2rem] overflow-hidden bg-gray-50 mb-6 group-hover:shadow-xl transition-all duration-500">
                        <div class="absolute top-4 right-4 z-10">
                            <span
                                class="px-3 py-1 bg-[#4a342a] text-white rounded-full text-[10px] font-bold uppercase tracking-wider shadow-sm">
                                16% OFF
                            </span>
                        </div>
                        <img src="https://images.unsplash.com/photo-1616948055600-a1202ed353a7?q=80&w=600&auto=format&fit=crop"
                            alt="Lavelle Quiet Bloom"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-900 mb-1">Lavelle Quiet Bloom</h3>
                        <p class="text-gray-400 text-sm mb-4">Amber, violet leaf, bergamot</p>
                        <div class="flex items-center gap-3">
                            <div class="text-xl font-bold text-orange-600">$ 130.00</div>
                            <div class="text-sm text-gray-300 line-through">$ 155.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Button -->
            <div class="animate-fade-in-up">
                <a href="#"
                    class="inline-flex items-center gap-3 bg-black text-white px-8 py-5 rounded-full font-bold transition-all hover:bg-gray-800 shadow-xl shadow-black/10">
                    <span>Find more perfume</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- Testimonials Section -->
    <section class="py-32 bg-gray-50/30 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12 mb-16">
            <!-- Header -->
            <div class="text-center animate-fade-in-up">
                <span
                    class="inline-block px-4 py-1.5 bg-white rounded-full text-[10px] items-center uppercase tracking-[0.2em] font-bold text-gray-400 mb-6 shadow-sm border border-gray-100">
                    TESTIMONIALS
                </span>
                <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight">
                    What our customers say <br>
                    about our products
                </h2>
            </div>
        </div>

        <!-- Marquee Containers -->
        <div class="space-y-8">
            <!-- Row 1: Left -->
            <div class="flex overflow-hidden group">
                <div class="flex animate-marquee-left gap-8 py-4 whitespace-nowrap">
                    <!-- Card 1 -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"I'm in love with the
                                Botanica Collection. 'Lavelle Quiet Bloom' has this calming lavender touch."</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Rina Lestari</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Wellness
                                    Coach</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"Velmore completely changed
                                the way I feel about daily scents. 'Valencia Wild Grove' is fresh!"</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Sophia Martin</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Marketing
                                    Specialist</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"I usually don't wear
                                perfume, but 'Essence Collection' is so clean and light. Perfect!"</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Daniel Cho</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">UI/UX
                                    Designer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Duplicate Set -->
                    <!-- Card 1 Duplicate -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"I'm in love with the
                                Botanica Collection. 'Lavelle Quiet Bloom' has this calming lavender touch."</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Rina Lestari</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Wellness
                                    Coach</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 Duplicate -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"Velmore completely changed
                                the way I feel about daily scents. 'Valencia Wild Grove' is fresh!"</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Sophia Martin</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Marketing
                                    Specialist</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 Duplicate -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"I usually don't wear
                                perfume, but 'Essence Collection' is so clean and light. Perfect!"</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Daniel Cho</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">UI/UX
                                    Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row 2: Right -->
            <div class="flex overflow-hidden group">
                <div class="flex animate-marquee-right gap-8 py-4 whitespace-nowrap" style="animation-delay: -25s;">
                    <!-- Card 4 -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"The packaging is
                                beautiful, and the scent lasts long. 'Salvia Morning Fresh' gives a really earthy
                                vibe."</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Mark Evans</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">
                                    Photographer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"Velmore feels like a
                                luxury brand but at such a fair price. 'Flora Dew Veil' smells like fresh morning
                                air."</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Jessica Tan</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Content
                                    Creator</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"Every scent feels unique.
                                'Eclipse Deep Night' gives me a confident vibe — it's my go-to for evening events."
                            </p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Luca Ramos</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Art
                                    Director</p>
                            </div>
                        </div>
                    </div>
                    <!-- Duplicate Set -->
                    <!-- Card 4 Duplicate -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"The packaging is
                                beautiful, and the scent lasts long. 'Salvia Morning Fresh'."</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Mark Evans</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">
                                    Photographer</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 5 Duplicate -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"Velmore feels like a
                                luxury brand but at such a fair price. 'Flora Dew Veil'."</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Jessica Tan</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Content
                                    Creator</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 6 Duplicate -->
                    <div
                        class="w-[450px] flex-shrink-0 bg-white p-10 rounded-[2.5rem] shadow-sm shadow-gray-200/50 border border-gray-100 flex flex-col justify-between whitespace-normal">
                        <div>
                            <div class="flex gap-1 mb-6">@for($i = 0; $i < 5; $i++)<svg
                                class="w-4 h-4 text-orange-400 fill-current" viewBox="0 0 20 20">
                                <path
                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>@endfor</div>
                            <p class="text-gray-600 leading-relaxed mb-8 italic text-lg">"Every scent feels unique.
                                'Eclipse Deep Night' gives me a confident vibe!"</p>
                        </div>
                        <div class="flex items-center gap-4">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&h=150&auto=format&fit=crop"
                                class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 leading-none mb-1">Luca Ramos</h4>
                                <p class="text-[11px] font-bold uppercase tracking-widest text-gray-400">Art
                                    Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gray-50/30">
        <div class="container mx-auto px-6 lg:px-12">
            <div
                class="relative overflow-hidden rounded-[3rem] bg-[#1a1410] p-12 lg:p-24 text-center border border-white/5">
                <!-- Background Image -->
                <div class="absolute inset-0">
                    <img src="{{ asset('images/photo-1672848700906-2b8ca62639e4.avif') }}" alt="Velmore CTA Background"
                        class="w-full h-full object-cover">
                    <!-- Dark overlay for text readability -->
                    <div class="absolute inset-0 bg-black/60"></div>
                </div>

                <!-- Content -->
                <div class="relative z-10 max-w-3xl mx-auto space-y-10">
                    <div class="space-y-6">
                        <span
                            class="inline-block px-4 py-1.5 bg-white/5 backdrop-blur-md rounded-full text-[10px] items-center uppercase tracking-[0.2em] font-bold text-orange-200/60 border border-white/10">
                            JOIN THE JOURNEY
                        </span>
                        <h2 class="text-4xl lg:text-7xl font-bold text-white leading-[1.1] tracking-tight">
                            Begin Your <br>
                            <span class="text-orange-200">Fragrance Journey</span>
                        </h2>
                        <p class="text-xl text-gray-200 font-light leading-relaxed">
                            Discover scents that define your presence and elevate your everyday elegance. <br
                                class="hidden lg:block"> Our collections are crafted for those who appreciate
                            the finer details.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row items-center justify-center gap-6 pt-4">
                        <a href="#"
                            class="group relative px-10 py-5 bg-white text-black rounded-full font-bold overflow-hidden transition-all duration-500 hover:pr-14 hover:shadow-[0_0_30px_rgba(254,238,224,0.3)]">
                            <span class="relative z-10">Shop the Collection</span>
                            <svg class="absolute right-6 top-1/2 -translate-y-1/2 w-5 h-5 opacity-0 -translate-x-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-x-0"
                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>

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
                        <li><a href="#" class="hover:text-orange-500 transition-colors">Contact</a></li>
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
</body>

</html>