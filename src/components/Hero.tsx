import Image from "next/image";

export default function Hero() {
  return (
    <section className="relative flex min-h-screen w-full flex-col overflow-hidden px-6 pt-32 pb-16 md:flex-row md:items-center md:px-12 lg:px-24">
      {/* Full Bleed Background Image */}
      <div className="absolute inset-0 z-0">
        <Image
          src="/velmore-hero2.png"
          alt="Velmore Hero Background"
          fill
          className="object-cover object-[center_65%]"
          priority
        />
        {/* Overlay for better readability */}
        <div className="absolute inset-0 bg-black/5" />
      </div>

      {/* Left Content */}
      <div className="z-10 flex w-full flex-col items-start justify-center md:w-[60%] lg:w-1/2 md:-mt-20">
        <h1 className="mb-6 text-5xl font-bold leading-[1.1] tracking-tight text-neutral-900 sm:text-6xl lg:text-[72px]">
          Amazing scent that<br />
          reflects <span className="bg-gradient-to-r from-[#e8702a] to-[#d65f1a] bg-clip-text text-transparent">character</span>
        </h1>
        <p className="mb-10 max-w-md text-lg leading-relaxed text-neutral-800/80 sm:text-xl font-medium line-clamp-2">
          Velmore delivers distinctive fragrances with an elegant, modern touch - made for those who stand out
        </p>

        <div className="flex flex-col space-y-4 sm:flex-row sm:space-y-0 sm:space-x-4">
          <button className="flex items-center justify-center rounded-full bg-[#1c1c1c] px-8 py-3.5 text-base font-semibold text-white transition-all hover:bg-black hover:shadow-lg active:scale-95">
            Discover collection
          </button>
          <button className="flex items-center justify-center rounded-full bg-white/90 backdrop-blur-sm px-8 py-3.5 text-base font-semibold text-neutral-900 shadow-sm transition-all hover:bg-white hover:shadow-md active:scale-95">
            Contact us
          </button>
        </div>
      </div>

      {/* Floating Card Overlay (Right-aligned) */}
      <div className="relative mt-auto flex w-full items-end justify-end md:mt-0 md:w-[40%] lg:w-1/2 md:translate-y-67 md:pb-12">
        <div className="z-20 flex min-w-[260px] flex-col rounded-[24px] bg-white/80 backdrop-blur-md p-6 shadow-[0_8px_40px_rgba(0,0,0,0.08)] border border-white/20 sm:mr-0 lg:mr-0 md:translate-x-8">
          <div className="mb-3 flex w-fit items-center flex-row space-x-2 rounded-full border border-neutral-200/50 bg-white/50 px-3 py-1">
            <span className="flex h-1.5 w-1.5 items-center justify-center rounded-full bg-[#e8702a]"></span>
            <span className="text-[11px] font-bold tracking-wide text-neutral-800 uppercase">New</span>
          </div>
          <h3 className="text-xl font-bold text-neutral-900">Velour Dark Gold</h3>
          <p className="mt-1 text-sm text-neutral-500 font-medium">Luxury, Richness, Warmth</p>
          <div className="mt-4 flex items-center justify-between">
            <p className="text-xl font-bold text-[#e8702a]">$ 120.00</p>
            <button className="rounded-full bg-neutral-900 px-4 py-1.5 text-xs font-bold text-white transition-colors hover:bg-black">
              Buy Now
            </button>
          </div>
        </div>
      </div>
    </section>
  );
}
