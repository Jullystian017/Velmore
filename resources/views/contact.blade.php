<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact - Velmore</title>

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
                    <a href="/product"
                        class="block text-4xl font-bold text-gray-900 hover:text-orange-600 transition-colors">Product</a>
                    <a href="/contact" class="block text-4xl font-bold text-orange-600 transition-colors">Contact</a>
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

    <!-- Contact Hero -->
    <header class="pt-40 pb-20 bg-white">
        <div class="container mx-auto px-6 lg:px-12 text-center">
            <div class="max-w-3xl mx-auto animate-fade-in-up">
                <span class="text-xs font-bold uppercase tracking-[0.3em] text-orange-600 block mb-4">Get In
                    Touch</span>
                <h1 class="text-5xl lg:text-7xl font-bold text-gray-900 leading-tight mb-8">
                    Connect with <br> Velmore
                </h1>
                <p class="text-gray-500 text-lg leading-relaxed max-w-2xl mx-auto">
                    Whether you have a question about our scents, your order, or just want to say hello, we'd love to
                    hear from you.
                </p>
            </div>
        </div>
    </header>

    <!-- Contact Section -->
    <section class="py-24">
        <div class="container mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-20">
                <!-- Contact Form -->
                <div class="animate-fade-in-up">
                    <form action="#" method="POST" class="space-y-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                            <div class="relative group">
                                <label for="name"
                                    class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-2 block group-focus-within:text-black transition-colors">Name</label>
                                <input type="text" id="name" name="name" placeholder="Elias Velmore"
                                    class="w-full bg-transparent border-b border-gray-200 py-3 focus:outline-none focus:border-black transition-all placeholder:text-gray-300 font-medium">
                            </div>
                            <div class="relative group">
                                <label for="email"
                                    class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-2 block group-focus-within:text-black transition-colors">Email
                                    Address</label>
                                <input type="email" id="email" name="email" placeholder="elias@velmore.com"
                                    class="w-full bg-transparent border-b border-gray-200 py-3 focus:outline-none focus:border-black transition-all placeholder:text-gray-300 font-medium">
                            </div>
                        </div>
                        <div class="relative group">
                            <label for="subject"
                                class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-2 block group-focus-within:text-black transition-colors">Subject</label>
                            <input type="text" id="subject" name="subject" placeholder="General Inquiry"
                                class="w-full bg-transparent border-b border-gray-200 py-3 focus:outline-none focus:border-black transition-all placeholder:text-gray-300 font-medium">
                        </div>
                        <div class="relative group">
                            <label for="message"
                                class="text-xs font-bold uppercase tracking-widest text-gray-400 mb-2 block group-focus-within:text-black transition-colors">Message</label>
                            <textarea id="message" name="message" rows="5" placeholder="Share your thoughts with us..."
                                class="w-full bg-transparent border-b border-gray-200 py-3 focus:outline-none focus:border-black transition-all placeholder:text-gray-300 font-medium resize-none"></textarea>
                        </div>
                        <button type="submit"
                            class="bg-black text-white px-12 py-5 rounded-full font-bold hover:bg-gray-800 transition-all shadow-xl shadow-black/10 flex items-center gap-4 group">
                            <span>Send Message</span>
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                </div>

                <!-- Contact Info -->
                <div class="space-y-16 animate-fade-in-up" style="animation-delay: 0.2s;">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                        <!-- Address -->
                        <div class="space-y-4">
                            <div
                                class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-50">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h4 class="text-sm font-bold uppercase tracking-widest text-gray-900">Visit Us</h4>
                            <p class="text-gray-500 leading-relaxed font-medium">
                                123 Scent Garden Drive<br>
                                Paris, France 75001
                            </p>
                        </div>

                        <!-- Email -->
                        <div class="space-y-4">
                            <div
                                class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-50">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h4 class="text-sm font-bold uppercase tracking-widest text-gray-900">Email Us</h4>
                            <p class="text-gray-500 leading-relaxed font-medium">
                                info@velmore.com<br>
                                support@velmore.com
                            </p>
                        </div>

                        <!-- Phone -->
                        <div class="space-y-4">
                            <div
                                class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-50">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <h4 class="text-sm font-bold uppercase tracking-widest text-gray-900">Call Us</h4>
                            <p class="text-gray-500 leading-relaxed font-medium">
                                +33 (0) 1 23 45 67 89<br>
                                Mon-Fri, 9am - 6pm CET
                            </p>
                        </div>

                        <!-- Social -->
                        <div class="space-y-4">
                            <div
                                class="w-12 h-12 bg-white rounded-2xl flex items-center justify-center shadow-sm border border-gray-50">
                                <svg class="w-6 h-6 text-orange-600" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.668-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                                </svg>
                            </div>
                            <h4 class="text-sm font-bold uppercase tracking-widest text-gray-900">Follow</h4>
                            <p class="text-gray-500 leading-relaxed font-medium">
                                @velmore.official<br>
                                #VelmoreEssence
                            </p>
                        </div>
                    </div>

                    <!-- Map/Visual Element -->
                    <div class="aspect-video w-full rounded-[3rem] overflow-hidden bg-gray-100 relative group">
                        <img src="https://images.unsplash.com/photo-1554941068-a252680d25d9?q=80&w=1200&auto=format&fit=crop"
                            alt="Velmore Boutique"
                            class="w-full h-full object-cover grayscale transition-transform duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-black/20 group-hover:bg-black/10 transition-colors"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span
                                class="px-8 py-3 bg-white text-black font-bold rounded-full shadow-2xl opacity-0 group-hover:opacity-100 transition-opacity">Explore
                                Boutique</span>
                        </div>
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