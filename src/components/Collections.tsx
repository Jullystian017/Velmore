import Image from "next/image";

const collectionItems = [
  {
    title: "Noir Collection",
    image: "/noir-collection.png",
    count: "30+ Perfume",
  },
  {
    title: "Essence Collection",
    image: "/essence-collection.png",
    count: "25+ Perfume",
  },
  {
    title: "Botanica Collection",
    image: "/botanica-collection.png",
    count: "40+ Perfume",
  },
];

export default function Collections() {
  return (
    <section className="w-full bg-white py-24 px-6 md:px-12 lg:px-24">
      <div className="mx-auto flex max-w-7xl flex-col items-center">
        {/* Section Header */}
        <div className="mb-16 text-center">
          <span className="mb-4 inline-block rounded-full bg-neutral-100 px-4 py-1.5 text-[11px] font-bold uppercase tracking-widest text-neutral-500">
            Our Collections
          </span>
          <h2 className="text-4xl font-bold tracking-tight text-neutral-900 sm:text-5xl lg:text-6xl">
            Discover the fragrance<br />
            with an unlimited collection
          </h2>
        </div>

        {/* Collections Grid */}
        <div className="grid w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {collectionItems.map((item, index) => (
            <div
              key={index}
              className="group relative h-[450px] overflow-hidden rounded-[40px] shadow-sm transition-all hover:shadow-xl"
            >
              <Image
                src={item.image}
                alt={item.title}
                fill
                className="object-cover transition-transform duration-700 group-hover:scale-110"
              />
              
              {/* Top Badge */}
              <div className="absolute left-6 top-6 z-10">
                <span className="rounded-full bg-white/20 px-4 py-2 text-sm font-semibold text-white backdrop-blur-md border border-white/30">
                  {item.count}
                </span>
              </div>

              {/* Bottom Title */}
              <div className="absolute bottom-10 left-8 z-10">
                <h3 className="text-3xl font-bold text-white tracking-tight">
                  {item.title}
                </h3>
              </div>

              {/* Dark Gradient Overlay for Readability */}
              <div className="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-80 transition-opacity group-hover:opacity-90" />
            </div>
          ))}
        </div>
      </div>
    </section>
  );
}
