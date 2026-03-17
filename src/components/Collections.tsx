import Image from "next/image";
import Link from "next/link";

const collectionItems = [
  {
    title: "Designer Icons",
    image: "/noir-collection.png",
    count: "World Class",
    description: "The world's most iconic designer labels: Dior, Versace, Chanel, and more.",
  },
  {
    title: "Local Legends",
    image: "/botanica-collection.png",
    count: "Indonesian Pride",
    description: "The best of Indonesian perfumery: HMNS, Alchemist, and Mykonos.",
  },
  {
    title: "Signature Decants",
    image: "/essence-collection.png",
    count: "Premium Quality",
    description: "Authentic luxury in affordable sizes, curated specially for your style.",
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
          <h2 className="text-3xl font-bold tracking-tight text-neutral-900 sm:text-4xl lg:text-5xl">
            Discover the fragrance<br />
            with an unlimited collection
          </h2>
        </div>

        {/* Collections Grid */}
        <div className="grid w-full grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
          {collectionItems.map((item, index) => (
            <Link
              href="/product"
              key={index}
              className="group relative h-[450px] overflow-hidden rounded-3xl shadow-sm transition-all hover:shadow-xl block"
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

              {/* Bottom Content */}
              <div className="absolute bottom-10 left-8 right-8 z-10">
                <h3 className="text-3xl font-bold text-white tracking-tight">
                  {item.title}
                </h3>
                <p className="mt-2 text-sm font-medium text-white/80 line-clamp-2">
                  {item.description}
                </p>
              </div>

              {/* Dark Gradient Overlay for Readability */}
              <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 transition-opacity group-hover:opacity-90" />
            </Link>
          ))}
        </div>
      </div>
    </section>
  );
}
