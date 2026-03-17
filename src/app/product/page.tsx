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
    price: "Rp 185.000",
    image: "https://allparfume.by/images/parfumes/christian_dior_sauvage_eau_de_parfum_2018.jpg",
    badge: "Student Fav",
    notes: { top: "Bergamot", middle: "Sichuan Pepper", base: "Ambroxan" }
  },
  {
    name: "HMNS Orgasm",
    category: "Local Brand",
    scents: "The best-selling floral fruity amber from Indonesia.",
    price: "Rp 45.000",
    image: "https://down-id.img.susercontent.com/file/sg-11134201-22100-azqkh6rnkciv4f",
    badge: "Best Seller",
    notes: { top: "Red Apple", middle: "Rose", base: "Amber" }
  },
  {
    name: "Versace Eros",
    category: "International",
    scents: "Vibrant, intense, and glowing. Perfect for night outs.",
    price: "Rp 135.000",
    image: "http://s1.thcdn.com/productimg/1600/1600/11034083-3104533774594048.jpg",
    badge: "Trending",
    notes: { top: "Mint", middle: "Green Apple", base: "Vanilla" }
  },
  {
    name: "Alchemist Pink Powder",
    category: "Local Brand",
    scents: "Elegant powdery scent for a clean and classy vibe.",
    price: "Rp 55.000",
    image: "https://down-id.img.susercontent.com/file/id-11134207-8224t-mfvxpm24j2mied",
    notes: { top: "Pink Pepper", middle: "Rose", base: "Musk" }
  },
  {
    name: "Bleu de Chanel",
    category: "International",
    scents: "Timeless, woody, and aromatic. A true blue fragrance.",
    price: "Rp 215.000",
    originalPrice: "Rp 250.000",
    image: "https://essentia.com.do/wp-content/uploads/2024/02/BLEU-DE-CHANEL-DECANT.png",
    badge: "Top Decant",
    notes: { top: "Lemon", middle: "Mint", base: "Sandalwood" }
  },
  {
    name: "Mykonos Aphrodite",
    category: "Local Brand",
    scents: "Sweet peach and white florals for an enchanting aura.",
    price: "Rp 42.000",
    image: "https://down-id.img.susercontent.com/file/id-11134207-7r98y-lmih8br0tj1dec",
    notes: { top: "Peach", middle: "Jasmine", base: "Vanilla" }
  },
  {
    name: "Dior Addict",
    category: "International",
    scents: "Heady and intoxicating floral with a warm vanilla base.",
    price: "Rp 195.000",
    image: "https://cdn.shopify.com/s/files/1/2170/5343/products/Dior_Addict_Eau_Frache_Eau_de_Toilette_Spray_100ml_-_Box_Product__42921.1572610962_2048x2048.jpg?v=1584646235",
    notes: { top: "Mandarin", middle: "Jasmine", base: "Vanilla" }
  },
  {
    name: "HMNS Alpha",
    category: "Local Brand",
    scents: "Clean, fresh, and energizing green scent.",
    price: "Rp 45.000",
    image: "http://cdn.shopify.com/s/files/1/0249/6341/6160/products/alpha_1200x1200.png?v=1676979115",
    notes: { top: "Citrus", middle: "Green Tea", base: "Cedarwood" }
  },
];

export default function ProductPage() {
  const [activeCategory, setActiveCategory] = useState("All");
  const [searchQuery, setSearchQuery] = useState("");

  const filteredProducts = products.filter(p => {
    const matchesCategory = activeCategory === "All" || p.category === activeCategory;
    const matchesSearch = p.name.toLowerCase().includes(searchQuery.toLowerCase()) || 
                          p.scents.toLowerCase().includes(searchQuery.toLowerCase());
    return matchesCategory && matchesSearch;
  });

  return (
    <main className="flex min-h-screen flex-col items-center bg-white pt-32 px-6 md:px-12 lg:px-24">
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
              <Search className="absolute left-5 top-1/2 -translate-y-1/2 h-4 w-4 text-neutral-400 transition-colors group-focus-within:text-neutral-900" />
              <input 
                type="text" 
                placeholder="Search scent, brand..." 
                value={searchQuery}
                onChange={(e) => setSearchQuery(e.target.value)}
                className="rounded-full border border-neutral-200 bg-white py-4 pl-14 pr-6 text-sm font-semibold text-neutral-900 placeholder:text-neutral-300 shadow-[0_4px_20px_rgba(0,0,0,0.03)] transition-all focus:border-neutral-900 focus:ring-4 focus:ring-neutral-900/5 focus:outline-none w-72 lg:w-80 group-hover:border-neutral-300"
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

      {/* Product Grid - Modern Border Grid */}
      <section className="w-full max-w-7xl pb-32">
        <div className="grid grid-cols-1 border-l border-t border-neutral-200 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
          {filteredProducts.map((product, index) => (
            <div key={index} className="group flex flex-col items-start p-8 text-left transition-all hover:bg-neutral-100/30 border-r border-b border-neutral-200">
              {/* Image Card */}
              <div className="relative mb-6 aspect-square w-full overflow-hidden transition-all">
                <Image
                  src={product.image}
                  alt={product.name}
                  fill
                  className="object-contain p-4 transition-transform duration-700 group-hover:scale-110 mix-blend-multiply"
                />
                
                {/* Overlay Icons */}
                <div className="absolute top-0 right-0 opacity-0 translate-x-2 transition-all group-hover:opacity-100 group-hover:translate-x-0">
                  <button className="flex h-10 w-10 items-center justify-center rounded-full bg-white shadow-md text-neutral-900 hover:text-red-500 border border-neutral-100">
                    <Heart className="h-5 w-5" />
                  </button>
                </div>

                {/* Badge */}
                {product.badge && (
                  <div className="absolute top-0 left-0">
                    <span className={`rounded-full px-4 py-1.5 text-[10px] font-bold uppercase tracking-wider shadow-sm ${
                      product.badge.includes('%') 
                        ? 'bg-[#4B3425] text-white' 
                        : 'bg-white text-neutral-900 border border-neutral-200'
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
                  <button className="flex h-10 w-10 items-center justify-center rounded-full bg-neutral-900 text-white transition-all hover:bg-black hover:scale-110 active:scale-95">
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
