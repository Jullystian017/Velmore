<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About - Velmore</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white overflow-x-hidden font-sans">
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
                    <a href="/about" class="block text-4xl font-bold text-orange-600 transition-colors">About</a>
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

    <!-- Shopping Cart Modal (Same as Welcome) -->
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

    <!-- Hero Section -->
    <main class="relative h-[80vh] min-h-[600px] w-full flex items-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1557827999-c0bb00bbee13?q=80&w=1176&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="Luxury Perfume Ingredients" class="w-full h-full object-cover">
            <!-- Overlay -->
            <div class="absolute inset-0 bg-white/10 backdrop-blur-[1px]"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-white/5 via-transparent to-white"></div>
        </div>

        <div class="container mx-auto px-6 lg:px-12 relative z-10 text-center">
            <div class="max-w-4xl mx-auto animate-fade-in-up">
                <h1 class="text-6xl lg:text-8xl font-bold text-orange-600 leading-[1.1] mb-8 tracking-tight">
                    Behind the <br>
                    <span class="text-white/100 bg-clip-text">Essence</span>
                </h1>
                <p class="text-gray-700 text-lg lg:text-xl max-w-2xl mx-auto leading-relaxed font-medium">
                    Velmore was founded with a simple yet ambitious goal: to create high-quality, distinctive fragrances
                    that empower individuals to express their unique character.
                </p>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-12 left-1/2 -translate-x-1/2 z-10 animate-bounce">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </main>

    <!-- History & Vision -->
    <section class="py-32 bg-white relative overflow-hidden">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
                <div class="relative animate-fade-in-up">
                    <div class="aspect-[4/5] rounded-[3rem] overflow-hidden shadow-2xl relative z-10">
                        <img src="https://images.unsplash.com/photo-1595165733531-f166f272fbd1?q=80&w=1200&auto=format&fit=crop"
                            alt="Craftsmanship" class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative Elements -->
                    <div
                        class="absolute -top-12 -left-12 w-64 h-64 bg-orange-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse">
                    </div>
                    <div class="absolute -bottom-12 -right-12 w-64 h-64 bg-gray-50 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-pulse"
                        style="animation-delay: 1s;"></div>

                    <!-- Floating Card -->
                    <div
                        class="absolute -bottom-10 -right-10 bg-white/80 backdrop-blur-xl p-8 rounded-3xl border border-white shadow-2xl z-20 max-w-[240px] hidden md:block">
                        <p class="text-xs font-bold uppercase tracking-widest text-orange-500 mb-2 font-sans">Quality
                            First</p>
                        <p class="text-gray-900 font-bold text-lg leading-tight">Hand-picked natural ingredients only.
                        </p>
                    </div>
                </div>

                <div class="space-y-10 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <span class="text-xs font-bold uppercase tracking-[0.3em] text-orange-600 block">The Velmore
                        Standard</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        A legacy of <br>
                        meticulous craft.
                    </h2>
                    <p class="text-gray-500 text-lg leading-relaxed">
                        Every bottle of Velmore's perfume is a result of meticulous craftsmanship. We source the finest
                        ingredients from around the world to ensure that every spray delivers an unforgettable
                        experience.
                    </p>

                    <div class="grid grid-cols-2 gap-12 pt-8 border-t border-gray-100">
                        <div>
                            <h4 class="text-4xl font-bold text-gray-900 mb-2">100+</h4>
                            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Unique Scents</p>
                        </div>
                        <div>
                            <h4 class="text-4xl font-bold text-gray-900 mb-2">50K+</h4>
                            <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Happy Clients</p>
                        </div>
                    </div>

                    <div class="pt-8">
                        <a href="#" class="inline-flex items-center gap-4 group">
                            <span
                                class="w-12 h-12 rounded-full border border-gray-200 flex items-center justify-center group-hover:bg-black group-hover:border-black transition-all">
                                <svg class="w-5 h-5 text-gray-900 group-hover:text-white transition-colors" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </span>
                            <span class="text-gray-900 font-bold tracking-tight">Read our process</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-32 bg-gray-50/30">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="text-center max-w-2xl mx-auto mb-24 animate-fade-in-up">
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-orange-600 block mb-4">Values</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6">What We Stand For</h2>
                <p class="text-gray-500 text-lg leading-relaxed">
                    Our foundation is built on three pillars that guide everything we do, from sourcing to shipping.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Value Card 1 -->
                <div
                    class="group p-12 rounded-[3rem] bg-white border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 animate-fade-in-up">
                    <div
                        class="w-20 h-20 bg-orange-50 rounded-3xl flex items-center justify-center mb-10 group-hover:bg-orange-600 transition-colors duration-500">
                        <svg class="w-10 h-10 text-orange-600 group-hover:text-white transition-colors duration-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 tracking-tight">Quality First</h3>
                    <p class="text-gray-500 leading-relaxed text-lg">
                        We never compromise on ingredients. Our scents are long-lasting and safe for all skin types.
                    </p>
                </div>

                <!-- Value Card 2 -->
                <div class="group p-12 rounded-[3rem] bg-white border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 animate-fade-in-up"
                    style="animation-delay: 0.1s;">
                    <div
                        class="w-20 h-20 bg-orange-50 rounded-3xl flex items-center justify-center mb-10 group-hover:bg-orange-600 transition-colors duration-500">
                        <svg class="w-10 h-10 text-orange-600 group-hover:text-white transition-colors duration-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 tracking-tight">Timeless Design</h3>
                    <p class="text-gray-500 leading-relaxed text-lg">
                        From the bottle to the fragrance, we blend classic elegance with modern minimalist design.
                    </p>
                </div>

                <!-- Value Card 3 -->
                <div class="group p-12 rounded-[3rem] bg-white border border-gray-100 hover:shadow-2xl hover:-translate-y-2 transition-all duration-500 animate-fade-in-up"
                    style="animation-delay: 0.2s;">
                    <div
                        class="w-20 h-20 bg-orange-50 rounded-3xl flex items-center justify-center mb-10 group-hover:bg-orange-600 transition-colors duration-500">
                        <svg class="w-10 h-10 text-orange-600 group-hover:text-white transition-colors duration-500"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-6 tracking-tight">Customer Delight</h3>
                    <p class="text-gray-500 leading-relaxed text-lg">
                        Your satisfaction is our priority. We are committed to providing the best fragrance experience.
                    </p>
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
</body>

</html>