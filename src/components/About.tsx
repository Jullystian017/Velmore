"use client";

import Image from "next/image";
import Link from "next/link";

const collections = [
  { src: "/botanica-collection.png", size: 280, top: "15%", left: "5%", delay: "0.2s" },
  { src: "/product-eclipse.png", size: 220, top: "65%", left: "8%", delay: "0.5s" },
  { src: "/noir-collection.png", size: 300, top: "12%", right: "10%", delay: "0.8s" },
  { src: "/product-solene.png", size: 240, bottom: "5%", right: "8%", delay: "1.1s" },
  { src: "/essence-collection.png", size: 260, top: "25%", right: "-2%", delay: "1.4s" },
  { src: "/product-lavelle.png", size: 200, top: "45%", left: "-5%", delay: "1.7s" },
  { src: "/product-noxen.png", size: 180, bottom: "8%", left: "20%", delay: "2.0s" },
];

export default function About() {
  return (
    <section className="relative min-h-[150vh] w-full overflow-hidden bg-[#0A0A0A] pt-96 pb-80 px-6 flex flex-col justify-center">
      {/* Scattered Collections Gallery */}
      <div className="absolute inset-0 pointer-events-none hidden lg:block">
        {collections.map((img, i) => (
          <div
            key={i}
            className="absolute animate-float opacity-80 transition-all duration-1000 grayscale hover:grayscale-0"
            style={{
              top: img.top,
              left: img.left,
              right: img.right,
              bottom: img.bottom,
              width: img.size,
              height: img.size,
              animationDelay: img.delay,
            }}
          >
            <div className="group relative h-full w-full overflow-hidden rounded-[40px] shadow-2xl border border-white/10">
              <Image
                src={img.src}
                alt="curated collection"
                fill
                className="object-cover transition-transform duration-700 group-hover:scale-110"
              />
            </div>
          </div>
        ))}
      </div>

      {/* Mobile/Tablet Simple Gallery */}
      <div className="mb-16 grid grid-cols-2 gap-4 lg:hidden">
        {collections.slice(0, 4).map((img, i) => (
          <div key={i} className="aspect-square relative overflow-hidden rounded-3xl border border-white/10">
            <Image src={img.src} alt="collection" fill className="object-cover" />
          </div>
        ))}
      </div>

      {/* Central Content */}
      <div className="relative z-10 mx-auto max-w-4xl text-center">
        <div className="mb-10 flex justify-center">
          <span className="inline-flex items-center space-x-2 rounded-full border border-[#D97745]/30 bg-[#D97745]/10 px-6 py-2 text-sm font-semibold text-[#D97745] backdrop-blur-md">
            <span>50K+ customers are satisfied with Velmore</span>
          </span>
        </div>

        <h2 className="mb-8 text-4xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">
          Curated Luxury,<br />
          Made Accessible
        </h2>

        <p className="mx-auto mb-12 max-w-2xl text-lg text-neutral-400 leading-relaxed md:text-xl">
          We bring you the world's most iconic designer labels and rising local stars. 
          Authentic, premium fragrances curated for students, because luxury shouldn't be out of reach.
        </p>

        <div className="flex flex-col sm:flex-row items-center justify-center gap-4">
          <Link href="/product" className="rounded-full bg-white px-10 py-5 text-sm font-bold text-neutral-900 transition-all hover:bg-neutral-100 hover:shadow-[0_0_40px_rgba(255,255,255,0.3)] active:scale-95">
            View our collection
          </Link>
          <Link href="/about" className="rounded-full border border-white/20 bg-white/5 px-10 py-5 text-sm font-bold text-white backdrop-blur-sm transition-all hover:bg-white/10 active:scale-95">
            Our Story
          </Link>
        </div>
      </div>

      <style jsx>{`
        @keyframes float {
          0%, 100% { transform: translateY(0); }
          50% { transform: translateY(-20px); }
        }
        .animate-float {
          animation: float 6s ease-in-out infinite;
        }
      `}</style>
    </section>
  );
}
