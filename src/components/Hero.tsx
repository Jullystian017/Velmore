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
          Authentic luxury,<br />
          student <span className="bg-gradient-to-r from-[#e8702a] to-[#d65f1a] bg-clip-text text-transparent">price</span>
        </h1>
        <p className="mb-10 max-w-md text-lg leading-relaxed text-neutral-700 sm:text-xl font-medium line-clamp-2">
          Your favorite designer brands and local favorites, curated for students. 100% authentic decants for every style.
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

    </section>
  );
}
