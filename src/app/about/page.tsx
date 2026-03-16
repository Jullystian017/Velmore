import Image from "next/image";
import Link from "next/link";
import { ArrowRight, Leaf, Sparkles, Wind } from "lucide-react";

export default function AboutPage() {
  return (
    <main className="flex min-h-screen flex-col items-center bg-[#fdfdfd] pt-32">
      {/* Hero Section */}
      <section className="w-full px-6 md:px-12 lg:px-24 mb-24">
        <div className="mx-auto max-w-7xl">
          <div className="relative h-[60vh] w-full overflow-hidden rounded-[40px] shadow-2xl">
            <Image
              src="/photo-1672848700906-2b8ca62639e4.avif" // Using one of our high-quality generated images
              alt="Velmore Craftsmanship"
              fill
              className="object-cover"
              priority
            />
            <div className="absolute inset-0 bg-black/40 flex flex-col items-center justify-center text-center p-6">
              <span className="mb-4 inline-block rounded-full bg-white/20 backdrop-blur-md px-4 py-1.5 text-[11px] font-bold uppercase tracking-widest text-white border border-white/30">
                About Us
              </span>
              <h1 className="text-5xl font-bold tracking-tight text-white sm:text-7xl lg:text-8xl">
                The Story of<br />Velmore
              </h1>
            </div>
          </div>
        </div>
      </section>

      {/* Heritage Section */}
      <section className="w-full px-6 md:px-12 lg:px-24 mb-32">
        <div className="mx-auto max-w-7xl overflow-hidden rounded-[40px] bg-white p-12 lg:p-24 shadow-[0_8px_40px_rgba(0,0,0,0.02)] border border-neutral-100">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
              <h2 className="text-4xl font-bold text-neutral-900 mb-8 sm:text-5xl tracking-tight">
                Luxury should<br />be for everyone
              </h2>
              <p className="text-lg text-neutral-600 leading-relaxed lg:text-xl font-medium mb-12">
                At Velmore, we believe that premium scents shouldn't have a premium gatekeeper. We curate the world's most iconic designer labels and rising local stars, making them accessible to students through affordable decants and a passion for authenticity.
              </p>
              
              <div className="grid grid-cols-2 gap-8">
                <div className="flex flex-col space-y-3">
                  <div className="h-12 w-12 rounded-2xl bg-orange-50 flex items-center justify-center text-[#e8702a]">
                    <Sparkles className="h-6 w-6" />
                  </div>
                  <h4 className="font-bold text-neutral-900">100% Authentic</h4>
                  <p className="text-sm text-neutral-500">Only original products from trusted distributors.</p>
                </div>
                <div className="flex flex-col space-y-3">
                  <div className="h-12 w-12 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600">
                    <Wind className="h-6 w-6" />
                  </div>
                  <h4 className="font-bold text-neutral-900">Expert Curation</h4>
                  <p className="text-sm text-neutral-500">Hand-picked selections for every student style.</p>
                </div>
              </div>
            </div>
            
            <div className="relative h-[600px] w-full group">
              <div className="absolute inset-0 rounded-[32px] overflow-hidden">
                <Image
                  src="/perfumer_craftsmanship_1773643789588.png"
                  alt="Quality Control"
                  fill
                  className="object-cover transition-transform duration-700 group-hover:scale-105"
                />
              </div>
              <div className="absolute -bottom-6 -right-6 bg-white p-8 rounded-[32px] shadow-2xl border border-neutral-50 max-w-[240px]">
                <p className="text-4xl font-bold text-neutral-900 mb-1">5k+</p>
                <p className="text-xs font-bold text-neutral-400 uppercase tracking-widest">Happy Students</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* The Decant Process - Full Width Image Section */}
      <section className="w-full relative h-[80vh] mb-32 overflow-hidden flex items-center justify-center">
        <Image
          src="/photo-1589289959560-7d141a848ee0.avif"
          alt="The Decant Process"
          fill
          className="object-cover brightness-[0.7]"
        />
        <div className="relative z-10 text-center max-w-3xl px-6">
          <span className="mb-6 inline-block rounded-full bg-white/10 backdrop-blur-md px-6 py-2 text-xs font-bold uppercase tracking-widest text-white border border-white/20">
            The Decant Process
          </span>
          <h2 className="text-4xl md:text-6xl font-bold text-white mb-8 tracking-tight">
            Meticulous Purity in Every Drop
          </h2>
          <p className="text-xl text-white/80 leading-relaxed font-medium">
            We use surgical-grade precision to transfer fragrances from their original bottles into our sterilized decants. No additives, no dilutions—just the pure, unadulterated scent you love, in a size that fits your budget.
          </p>
        </div>
      </section>

      {/* Curated Brands Section */}
      <section className="w-full px-6 md:px-12 lg:px-24 mb-16">
        <div className="mx-auto max-w-7xl">
          <div className="mb-16 text-center">
            <h2 className="text-4xl font-bold text-neutral-900 mb-4 sm:text-5xl tracking-tight">Only the best, curated</h2>
            <p className="text-neutral-500 font-medium">We partner with local legends and international icons to bring you 100% authentic luxury.</p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
            {[
              { name: "Local Icons", image: "/botanica-collection.png", desc: "The best of Indonesian perfumery: HMNS, Alchemist, Mykonos, and more." },
              { name: "International Legends", image: "/velmore-hero2.png", desc: "Global designer favorites: Dior, Versace, Chanel, and Giorgio Armani." }
            ].map((brand, i) => (
              <div key={i} className="group relative overflow-hidden rounded-[32px] bg-white border border-neutral-100 p-4 transition-all hover:shadow-xl hover:border-transparent">
                <div className="relative h-72 w-full mb-6 overflow-hidden rounded-[24px]">
                  <Image 
                    src={brand.image} 
                    alt={brand.name} 
                    fill 
                    className="object-cover transition-transform duration-500 group-hover:scale-110" 
                  />
                  <div className="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-6">
                    <h4 className="text-2xl font-bold text-white">{brand.name}</h4>
                  </div>
                </div>
                <p className="px-2 text-sm text-neutral-500 leading-relaxed font-medium">{brand.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* Philosophy Section */}
      <section className="w-full bg-white pt-16 pb-24 px-6 md:px-12 lg:px-24 mb-12 overflow-hidden border-y border-neutral-100/50">
        <div className="mx-auto max-w-7xl text-center">
          <div className="mb-12 inline-flex h-16 w-16 items-center justify-center rounded-2xl bg-orange-50 text-[#e8702a]">
            <Sparkles className="h-8 w-8" />
          </div>
          <h2 className="text-4xl font-bold tracking-tight text-neutral-900 sm:text-6xl mb-12">
            Signature scents made simple
          </h2>
          <div className="grid grid-cols-1 md:grid-cols-3 gap-12 text-left">
            {[
              { 
                title: "Student Friendly", 
                desc: "We price our decants to fit a student's allowance without compromising on quality." 
              },
              { 
                title: "Guaranteed Original", 
                desc: "Every drop is taken directly from the original manufacturer's bottle. Guaranteed." 
              },
              { 
                title: "Modern Community", 
                desc: "Part of a growing movement of fragrance lovers who value smart spending." 
              }
            ].map((item, i) => (
              <div key={i} className="group p-8 rounded-[32px] bg-white border border-neutral-100 transition-all hover:shadow-xl hover:border-transparent">
                <h4 className="text-xl font-bold text-neutral-900 mb-4">{item.title}</h4>
                <p className="text-neutral-500 leading-relaxed font-medium">{item.desc}</p>
              </div>
            ))}
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="w-full px-6 md:px-12 lg:px-24 pb-32">
        <div className="mx-auto max-w-7xl text-center">
          <h2 className="text-4xl font-bold text-neutral-900 mb-12 sm:text-5xl tracking-tight">
            Ready to find your scent?
          </h2>
          <Link href="/product" className="inline-flex items-center space-x-3 rounded-full bg-neutral-900 px-12 py-6 text-sm font-bold text-white transition-all hover:bg-black hover:shadow-xl active:scale-95">
            <span>Browse Products</span>
            <ArrowRight className="h-4 w-4" />
          </Link>
        </div>
      </section>
    </main>
  );
}
