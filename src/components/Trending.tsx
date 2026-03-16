"use client";

import { useState } from "react";
import Image from "next/image";
import { ArrowLeft, ArrowRight, ShoppingBag } from "lucide-react";

const products = [
  {
    id: 1,
    name: "Dior Sauvage",
    tags: "Bergamot, Sichuan Pepper, Ambroxan",
    description: "The absolute classic. Dior Sauvage is a radically fresh composition, dictated by a name that has the ring of a manifesto. 100% authentic decant.",
    baseNote: "Ambroxan, Cedar",
    middleNote: "Lavender, Pink Pepper",
    topNote: "Calabrian Bergamot",
    price: "$12.00",
    image: "/velmore-hero2.png",
  },
  {
    id: 2,
    name: "Versace Eros",
    tags: "Mint, Candy Apple, Vanilla",
    description: "Love, passion, beauty, and desire. Versace Eros is a fragrance for a strong, passionate man, who is master of himself. Perfect for night outs.",
    baseNote: "Madagascar Vanilla",
    middleNote: "Tonka Bean, Geranium",
    topNote: "Mint, Green Apple",
    price: "$10.00",
    image: "/noir-collection.png",
  },
  {
    id: 3,
    name: "HMNS Orgasm",
    tags: "Red Apple, Rose, Amber",
    description: "Indonesia's best seller. HMNS Orgasm is a floral-fruity-amber scent that's sweet, elegant, and addictive. The perfect daily driver for students.",
    baseNote: "Amber, Caramel",
    middleNote: "Rose, Jasmine",
    topNote: "Red Apple",
    price: "$8.00",
    image: "/essence-collection.png",
  },
];

export default function Trending() {
  const [currentIndex, setCurrentIndex] = useState(0);

  const nextSlide = () => {
    setCurrentIndex((prev) => (prev + 1) % products.length);
  };

  const prevSlide = () => {
    setCurrentIndex((prev) => (prev - 1 + products.length) % products.length);
  };

  const currentProduct = products[currentIndex];

  return (
    <section className="w-full bg-[#fcfcfc] py-24 px-6 md:px-12 lg:px-24">
      <div className="mx-auto max-w-7xl">
        {/* Header Section */}
        <div className="flex flex-col justify-between gap-8 md:flex-row md:items-end mb-16">
          <div className="max-w-2xl">
            <span className="mb-4 inline-block rounded-full bg-neutral-100 px-4 py-1.5 text-[11px] font-bold uppercase tracking-widest text-neutral-500">
              Our Products
            </span>
            <h2 className="mb-6 text-4xl font-bold tracking-tight text-neutral-900 sm:text-5xl">
              Discover our best collection,<br />
              in other words, many fans
            </h2>
            <p className="max-w-md text-neutral-500 font-medium">
              We have four flagship products, which are the main ingredients in the creation of other impressive perfume products.
            </p>
          </div>

          {/* Navigation Buttons */}
          <div className="flex space-x-3">
            <button
              onClick={prevSlide}
              className="flex h-12 items-center space-x-2 rounded-full border border-neutral-200 bg-white px-6 font-semibold text-neutral-900 transition-all hover:border-neutral-900 hover:bg-neutral-900 hover:text-white active:scale-95"
            >
              <ArrowLeft className="h-4 w-4" />
              <span>Prev</span>
            </button>
            <button
              onClick={nextSlide}
              className="flex h-12 items-center space-x-2 rounded-full border border-neutral-200 bg-white px-6 font-semibold text-neutral-900 transition-all hover:border-neutral-900 hover:bg-neutral-900 hover:text-white active:scale-95"
            >
              <span>Next</span>
              <ArrowRight className="h-4 w-4" />
            </button>
          </div>
        </div>

        {/* Product Card */}
        <div className="group relative flex flex-col overflow-hidden rounded-2xl bg-white shadow-[0_8px_30px_rgb(0,0,0,0.04)] md:flex-row border border-neutral-100/50 min-h-[550px]">
          {/* Left Side: Image */}
          <div className="relative p-4 md:p-6 w-full md:w-1/2 min-h-[400px] md:min-h-0">
            <div className="relative h-full w-full overflow-hidden rounded-2xl shadow-sm">
              <Image
                src={currentProduct.image}
                alt={currentProduct.name}
                fill
                className="object-cover transition-transform duration-700 group-hover:scale-105"
              />
            </div>
          </div>

          {/* Right Side: Details */}
          <div className="flex w-full flex-col justify-between p-8 md:w-1/2 md:p-12 lg:p-16">
            <div>
              <h3 className="mb-2 text-3xl font-bold tracking-tight text-neutral-900 lg:text-4xl">
                {currentProduct.name}
              </h3>
              <p className="mb-8 font-medium text-neutral-400">
                {currentProduct.tags}
              </p>

              <p className="mb-10 text-neutral-600 leading-relaxed max-w-lg">
                {currentProduct.description}
              </p>

              {/* Smell Notes Table */}
              <div className="mb-10 grid grid-cols-3 rounded-2xl border border-neutral-100 bg-neutral-50/50">
                <div className="flex flex-col p-4 border-r border-neutral-100">
                  <span className="mb-2 text-[10px] font-bold uppercase tracking-wider text-neutral-400">Base note</span>
                  <span className="text-sm font-bold text-neutral-900">{currentProduct.baseNote}</span>
                </div>
                <div className="flex flex-col p-4 border-r border-neutral-100">
                  <span className="mb-2 text-[10px] font-bold uppercase tracking-wider text-neutral-400">Middle note</span>
                  <span className="text-sm font-bold text-neutral-900">{currentProduct.middleNote}</span>
                </div>
                <div className="flex flex-col p-4">
                  <span className="mb-2 text-[10px] font-bold uppercase tracking-wider text-neutral-400">Top note</span>
                  <span className="text-sm font-bold text-neutral-900">{currentProduct.topNote}</span>
                </div>
              </div>
            </div>

            <div className="flex items-center justify-between">
              <span className="text-3xl font-bold tracking-tight text-[#e8702a]">
                {currentProduct.price}
              </span>
              <button className="flex items-center space-x-2 rounded-full bg-neutral-900 px-8 py-4 text-sm font-bold text-white transition-all hover:bg-black hover:shadow-xl active:scale-95">
                <ShoppingBag className="h-4 w-4" />
                <span>I want this</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
