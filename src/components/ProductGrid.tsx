import Image from "next/image";
import Link from "next/link";
import { ArrowRight } from "lucide-react";

interface Product {
  name: string;
  scents: string;
  price: string;
  originalPrice?: string;
  image?: string;
  url?: string;
  badge?: string;
}

const products: Product[] = [
  {
    name: "HMNS Alpha",
    scents: "Citrus, Grass, Cedarwood (5ml Decant)",
    price: "Rp 20.000",
    url: "http://cdn.shopify.com/s/files/1/0249/6341/6160/products/alpha_1200x1200.png?v=1676979115",
    badge: "Student Pick",
  },
  {
    name: "Velixir Apollo",
    scents: "Powdery, Rose, Musk (5ml Decant)",
    price: "Rp 25.000",
    url: "https://down-id.img.susercontent.com/file/id-11134207-8224t-mfvxpm24j2mied",
    badge: "Top Rated",
  },
  {
    name: "Bleu de Chanel",
    scents: "Grapefruit, Mint, Sandalwood (5ml Decant)",
    price: "Rp 45.000",
    originalPrice: "Rp 55.000",
    url: "https://essentia.com.do/wp-content/uploads/2024/02/BLEU-DE-CHANEL-DECANT.png",
    badge: "15% OFF",
  },
  {
    name: "Dior Addict",
    scents: "Mandarin, Jasmine, Vanilla (5ml Decant)",
    price: "Rp 40.000",
    url: "https://cdn.shopify.com/s/files/1/2170/5343/products/Dior_Addict_Eau_Frache_Eau_de_Toilette_Spray_100ml_-_Box_Product__42921.1572610962_2048x2048.jpg?v=1584646235",
  },
  {
    name: "Versace Bright Crystal",
    scents: "Yuzu, Pomegranate, Peony (5ml Decant)",
    price: "Rp 32.000",
    url: "https://www.perfumenz.co.nz/cdn/shop/files/versace-bright-crystal-parfum_7d264dcc-97bb-4492-96c6-1c0dc79d968c_1540x1540.png?v=1735266165",
  },
  {
    name: "Mykonos Aphrodite",
    scents: "Sweet Peach, White Floral (5ml Decant)",
    price: "Rp 18.000",
    originalPrice: "Rp 22.000",
    url: "https://down-id.img.susercontent.com/file/id-11134207-7r98y-lmih8br0tj1dec",
    badge: "Best Seller",
  },
];

export default function ProductGrid() {
  return (
    <section className="w-full bg-white py-24 px-6 md:px-12 lg:px-24">
      <div className="mx-auto max-w-7xl text-center">
        {/* Section Header */}
        <div className="mb-16">
          <span className="mb-4 inline-block rounded-full bg-neutral-100 px-4 py-1.5 text-[11px] font-bold uppercase tracking-widest text-neutral-500">
            Our Products
          </span>
          <h2 className="text-4xl font-bold tracking-tight text-neutral-900 sm:text-5xl">
            We know you love lots of<br />
            scents, discover them now
          </h2>
        </div>

        {/* Grid Body - Modern Border Grid */}
        <div className="grid grid-cols-1 border-l border-t border-neutral-200 sm:grid-cols-2 lg:grid-cols-3">
          {products.map((product, index) => (
            <div 
              key={index} 
              className="group flex flex-col items-start p-8 text-left transition-colors hover:bg-neutral-100/30 border-r border-b border-neutral-200"
            >
              {/* Image Container */}
              <div className="relative mb-6 aspect-square w-full overflow-hidden transition-all">
                <Image
                  src={product.url || product.image || ""}
                  alt={product.name}
                  fill
                  className="object-contain p-4 transition-transform duration-700 group-hover:scale-110 mix-blend-multiply"
                />

                {/* Badge Logic */}
                {product.badge && (
                  <div className="absolute top-0 left-0">
                    <span className={`rounded-full px-4 py-1.5 text-[10px] font-bold uppercase tracking-wider shadow-sm ${product.badge.includes('%')
                        ? 'bg-[#4B3425] text-white'
                        : 'bg-white text-neutral-900 border border-neutral-200'
                      }`}>
                      {product.badge}
                    </span>
                  </div>
                )}
              </div>

              {/* Product Info */}
              <div className="w-full">
                <h3 className="text-xl font-bold text-neutral-900 mb-1">
                  {product.name}
                </h3>
                <p className="text-sm font-medium text-neutral-400 mb-6 min-h-[40px]">
                  {product.scents}
                </p>
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
                  <button className="rounded-full bg-neutral-900 p-2 text-white transition-all hover:bg-black hover:scale-110 active:scale-90">
                    <ArrowRight className="h-4 w-4" />
                  </button>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Global CTA */}
        <div className="mt-20">
          <Link href="/product" className="inline-flex items-center space-x-3 rounded-full bg-neutral-900 px-10 py-5 text-sm font-bold text-white transition-all hover:bg-black hover:shadow-xl active:scale-95">
            <span>Find more perfume</span>
            <ArrowRight className="h-4 w-4" />
          </Link>
        </div>
      </div>
    </section>
  );
}
