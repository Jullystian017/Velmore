import Image from "next/image";
import { ArrowRight } from "lucide-react";

const products = [
  {
    name: "Solène Morning Ray",
    scents: "Warmth of sunrise, subtle femininity",
    price: "$120.00",
    image: "/product-solene.png",
    badge: "New",
  },
  {
    name: "Noxen Silent Sweet",
    scents: "Strong, moody, sweet",
    price: "$110.00",
    image: "/product-noxen.png",
    badge: "New",
  },
  {
    name: "Salvia Morning Fresh",
    scents: "Fresh, Strong, Masculine",
    price: "$150.00",
    originalPrice: "$175.00",
    image: "/product-salvia.png",
    badge: "14% OFF",
  },
  {
    name: "Elara Gentle Strong",
    scents: "Romantic, gentle, sweet",
    price: "$100.00",
    image: "/product-elara.png",
  },
  {
    name: "Eclipse Deep Night",
    scents: "Mysterious, powerful dark energy",
    price: "$99.00",
    image: "/product-eclipse.png",
  },
  {
    name: "Lavelle Quiet Bloom",
    scents: "Amber, violet leaf, bergamot",
    price: "$130.00",
    originalPrice: "$155.00",
    image: "/product-lavelle.png",
    badge: "16% OFF",
  },
];

export default function ProductGrid() {
  return (
    <section className="w-full bg-[#fdfdfd] py-24 px-6 md:px-12 lg:px-24">
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

        {/* Grid Body */}
        <div className="grid grid-cols-1 gap-x-6 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
          {products.map((product, index) => (
            <div key={index} className="group flex flex-col items-start text-left">
              {/* Image Container */}
              <div className="relative mb-6 aspect-[4/5] w-full overflow-hidden rounded-[32px] bg-[#F5F5F5] transition-all hover:bg-[#EEEEEE]">
                <Image
                  src={product.image}
                  alt={product.name}
                  fill
                  className="object-contain p-12 transition-transform duration-700 group-hover:scale-110"
                />
                
                {/* Badge Logic */}
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

              {/* Product Info */}
              <h3 className="text-xl font-bold text-neutral-900 mb-1">
                {product.name}
              </h3>
              <p className="text-sm font-medium text-neutral-400 mb-4">
                {product.scents}
              </p>
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
            </div>
          ))}
        </div>

        {/* Global CTA */}
        <div className="mt-20">
          <button className="inline-flex items-center space-x-3 rounded-full bg-neutral-900 px-10 py-5 text-sm font-bold text-white transition-all hover:bg-black hover:shadow-xl active:scale-95">
            <span>Find more perfume</span>
            <ArrowRight className="h-4 w-4" />
          </button>
        </div>
      </div>
    </section>
  );
}
