"use client";

import { useState } from "react";
import Image from "next/image";
import { Search, SlidersHorizontal, ShoppingBag, Heart } from "lucide-react";

const categories = ["All", "International", "Local Brand", "Decants", "Full Bottle"];

const products = [
  {
    name: "Dior Sauvage",
    category: "International",
    scents: "Raw, fresh, and noble. The ultimate designer statement.",
    price: "$12.00",
    image: "/velmore-hero2.png",
    badge: "Student Fav",
    notes: { top: "Bergamot", middle: "Sichuan Pepper", base: "Ambroxan" }
  },
  {
    name: "HMNS Orgasm",
    category: "Local Brand",
    scents: "The best-selling floral fruity amber from Indonesia.",
    price: "$8.00",
    image: "/essence-collection.png",
    badge: "Best Seller",
    notes: { top: "Red Apple", middle: "Rose", base: "Amber" }
  },
  {
    name: "Versace Eros",
    category: "International",
    scents: "Vibrant, intense, and glowing. Perfect for night outs.",
    price: "$10.00",
    image: "/noir-collection.png",
    badge: "Trending",
    notes: { top: "Mint", middle: "Green Apple", base: "Vanilla" }
  },
  {
    name: "Alchemist Pink Powder",
    category: "Local Brand",
    scents: "Elegant powdery scent for a clean and classy vibe.",
    price: "$9.00",
    image: "/product-noxen.png",
    notes: { top: "Pink Pepper", middle: "Rose", base: "Musk" }
  },
  {
    name: "Bleu de Chanel",
    category: "International",
    scents: "Timeless, woody, and aromatic. A true blue fragrance.",
    price: "$15.00",
    originalPrice: "$18.00",
    image: "/product-salvia.png",
    badge: "Top Decant",
    notes: { top: "Lemon", middle: "Mint", base: "Sandalwood" }
  },
  {
    name: "Mykonos Aphrodite",
    category: "Local Brand",
    scents: "Sweet peach and white florals for an enchanting aura.",
    price: "$6.50",
    image: "/product-lavelle.png",
    notes: { top: "Peach", middle: "Jasmine", base: "Vanilla" }
  },
  {
    name: "Dior Addict",
    category: "International",
    scents: "Heady and intoxicating floral with a warm vanilla base.",
    price: "$14.00",
    image: "/product-elara.png",
    notes: { top: "Mandarin", middle: "Jasmine", base: "Vanilla" }
  },
  {
    name: "HMNS Alpha",
    category: "Local Brand",
    scents: "Clean, fresh, and energizing green scent.",
    price: "$7.00",
    image: "/product-solene.png",
    notes: { top: "Citrus", middle: "Green Tea", base: "Cedarwood" }
  },
];

export default function ProductPage() {
  const [activeCategory, setActiveCategory] = useState("All");

  const filteredProducts = activeCategory === "All" 
    ? products 
    : products.filter(p => p.category === activeCategory);

  return (
    <main className="flex min-h-screen flex-col items-center bg-[#fdfdfd] pt-32 px-6 md:px-12 lg:px-24">
      {/* Catalog Header */}
      <section className="w-full max-w-7xl mb-16">
        <div className="flex flex-col md:flex-row md:items-end justify-between gap-8 mb-12">
          <div>
            <span className="mb-4 inline-block rounded-full bg-neutral-100 px-4 py-1.5 text-[11px] font-bold uppercase tracking-widest text-neutral-500">
              The Catalog
            </span>
            <h1 className="text-5xl font-bold tracking-tight text-neutral-900 sm:text-7xl lg:text-[76px] leading-[1.1]">
              Find your signature<br />scent today
            </h1>
          </div>
          <div className="flex items-center space-x-4">
            <div className="relative group">
              <Search className="absolute left-4 top-1/2 -translate-y-1/2 h-4 w-4 text-neutral-400" />
              <input 
                type="text" 
                placeholder="Search..." 
                className="rounded-full border border-neutral-100 bg-white py-4 pl-12 pr-6 text-sm font-medium shadow-sm transition-all focus:border-neutral-900 focus:outline-none w-64"
              />
            </div>
          </div>
        </div>

        {/* Filters */}
        <div className="flex items-center space-x-2 overflow-x-auto pb-4 hide-scrollbar">
          <button className="flex h-12 items-center space-x-2 rounded-full border border-neutral-200 bg-white px-6 font-bold text-neutral-900 shadow-sm">
            <SlidersHorizontal className="h-4 w-4" />
            <span>Filter</span>
          </button>
          <div className="h-8 w-[1px] bg-neutral-100 mx-4 shrink-0" />
          {categories.map((cat) => (
            <button
              key={cat}
              onClick={() => setActiveCategory(cat)}
              className={`h-12 rounded-full px-8 text-sm font-bold transition-all ${
                activeCategory === cat 
                  ? "bg-neutral-900 text-white shadow-lg" 
                  : "bg-white text-neutral-400 hover:text-neutral-900 border border-transparent"
              }`}
            >
              {cat}
            </button>
          ))}
        </div>
      </section>

      {/* Product Grid */}
      <section className="w-full max-w-7xl pb-32">
        <div className="grid grid-cols-1 gap-x-8 gap-y-16 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          {filteredProducts.map((product, index) => (
            <div key={index} className="group flex flex-col items-start text-left">
              {/* Image Card */}
              <div className="relative mb-6 aspect-[3/4] w-full overflow-hidden rounded-[40px] bg-[#F5F5F5] transition-all group-hover:bg-[#EEEEEE] group-hover:shadow-[0_20px_50px_rgba(0,0,0,0.08)]">
                <Image
                  src={product.image}
                  alt={product.name}
                  fill
                  className="object-contain p-12 transition-transform duration-700 group-hover:scale-110"
                />
                
                {/* Overlay Icons */}
                <div className="absolute top-6 right-6 opacity-0 translate-y-4 transition-all group-hover:opacity-100 group-hover:translate-y-0">
                  <button className="flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-md text-neutral-900 hover:text-red-500">
                    <Heart className="h-5 w-5" />
                  </button>
                </div>

                {/* Badge */}
                {product.badge && (
                  <div className="absolute top-6 left-6">
                    <span className={`rounded-full px-4 py-1.5 text-[10px] font-bold uppercase tracking-wider shadow-sm ${
                      product.badge.includes('%') 
                        ? 'bg-[#4B3425] text-white' 
                        : 'bg-white text-neutral-900'
                    }`}>
                      {product.badge}
                    </span>
                  </div>
                )}
              </div>

              {/* Product Details */}
              <div className="w-full">
                <div className="flex items-center justify-between mb-2">
                  <span className="text-[10px] font-bold uppercase tracking-[0.2em] text-neutral-400">
                    {product.category}
                  </span>
                </div>
                <h3 className="text-xl font-bold text-neutral-900 mb-2 truncate">
                  {product.name}
                </h3>
                <p className="text-sm font-medium text-neutral-400 mb-6 min-h-[40px] line-clamp-2">
                  {product.scents}
                </p>
                
                {/* Notes Tags */}
                <div className="flex flex-wrap gap-2 mb-6">
                  {Object.values(product.notes).map((note, i) => (
                    <span key={i} className="text-[10px] font-bold px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-full text-neutral-500">
                      {note}
                    </span>
                  ))}
                </div>

                <div className="flex items-center justify-between">
                  <div className="flex items-center space-x-3">
                    <span className="text-lg font-bold text-[#e8702a]">
                      {product.price}
                    </span>
                    {product.originalPrice && (
                      <span className="text-sm font-medium text-neutral-300 line-through">
                        {product.originalPrice}
                      </span>
                    )}
                  </div>
                  <button className="p-3 bg-neutral-900 text-white rounded-full hover:bg-black transition-all active:scale-90">
                    <ShoppingBag className="h-5 w-5" />
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>
      </section>

      <style jsx>{`
        .hide-scrollbar::-webkit-scrollbar {
          display: none;
        }
        .hide-scrollbar {
          -ms-overflow-style: none;
          scrollbar-width: none;
        }
      `}</style>
    </main>
  );
}
