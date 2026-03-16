"use client";

import Image from "next/image";
import { Star } from "lucide-react";

const testimonials = [
  {
    name: "Rina Lestari",
    role: "Wellness Coach",
    text: "I'm in love with the Botanica Collection. 'Lavelle Quiet Bloom' has this calming lavender touch that makes me feel grounded.",
    stars: 5,
    avatar: "/avatar-customer.png",
  },
  {
    name: "Sophia Martin",
    role: "Marketing Specialist",
    text: "Velmore completely changed the way I feel about daily scents. 'Valencia Wild Grove' is fresh and energizing — I get compliments every day!",
    stars: 5,
    avatar: "/avatar-customer.png",
  },
  {
    name: "Daniel Cho",
    role: "UI/UX Designer",
    text: "I usually don't wear perfume, but 'Mentha Fresh Path' is so clean and light. It's perfect for my workdays — not too strong, just right.",
    stars: 5,
    avatar: "/avatar-customer.png",
  },
  {
    name: "Mark Evans",
    role: "Photographer",
    text: "The packaging is beautiful, and the scent lasts long. 'Salvia Morning Root' gives a really earthy, confident vibe — highly recommended!",
    stars: 5,
    avatar: "/avatar-customer.png",
  },
  {
    name: "Jessica Tan",
    role: "Fashion Content Creator",
    text: "Velmore feels like a luxury brand but at such a fair price. 'Flora Dew Veil' smells like fresh morning air. I wear it every day! Very very nice.",
    stars: 5,
    avatar: "/avatar-customer.png",
  },
  {
    name: "Luca Ramone",
    role: "Art Director",
    text: "Every scent feels like an experience. 'Eclipse Deep Night' is my go-to for confident vibe — it's perfect for my evening events.",
    stars: 5,
    avatar: "/avatar-customer.png",
  },
];

export default function Testimonials() {
  return (
    <section className="w-full bg-[#fdfdfd] py-24 overflow-hidden">
      <div className="mx-auto max-w-7xl px-6 text-center mb-16">
        <span className="mb-4 inline-block rounded-full bg-neutral-100 px-4 py-1.5 text-[11px] font-bold uppercase tracking-widest text-neutral-500">
          Testimonials
        </span>
        <h2 className="text-4xl font-bold tracking-tight text-neutral-900 sm:text-5xl">
          What our customers say<br />
          about our products
        </h2>
      </div>

      {/* Marquee Container with Side Fades */}
      <div className="relative flex flex-col space-y-8 px-6 md:px-12 lg:px-24">
        {/* Side Masks for Premium Look */}
        <div className="absolute inset-y-0 left-0 z-10 w-24 bg-gradient-to-r from-[#fdfdfd] to-transparent pointer-events-none" />
        <div className="absolute inset-y-0 right-0 z-10 w-24 bg-gradient-to-l from-[#fdfdfd] to-transparent pointer-events-none" />

        {/* First Row: Moving Left */}
        <div className="flex animate-marquee whitespace-nowrap overflow-visible">
          {[...testimonials, ...testimonials].map((t, i) => (
            <div key={i} className="mx-4 inline-block w-[350px] shrink-0">
              <div className="h-full rounded-[32px] bg-white p-8 shadow-[0_4px_20px_rgba(0,0,0,0.03)] border border-neutral-100 transition-all hover:shadow-md">
                <div className="flex space-x-1 mb-4">
                  {[...Array(t.stars)].map((_, i) => (
                    <Star key={i} className="h-4 w-4 fill-[#D97745] text-[#D97745]" />
                  ))}
                </div>
                <p className="text-sm leading-relaxed text-neutral-600 mb-8 whitespace-normal italic">
                  "{t.text}"
                </p>
                <div className="flex items-center space-x-4">
                  <div className="relative h-12 w-12 overflow-hidden rounded-full border border-neutral-100 shadow-sm">
                    <Image src={t.avatar} alt={t.name} fill className="object-cover" />
                  </div>
                  <div className="text-left">
                    <h4 className="text-sm font-bold text-neutral-900">{t.name}</h4>
                    <p className="text-[11px] font-medium text-neutral-400">{t.role}</p>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>

        {/* Second Row: Moving Right */}
        <div className="flex animate-marquee-reverse whitespace-nowrap overflow-visible">
          {[...testimonials, ...testimonials].reverse().map((t, i) => (
            <div key={i} className="mx-4 inline-block w-[350px] shrink-0">
              <div className="h-full rounded-[32px] bg-white p-8 shadow-[0_4px_20_rgba(0,0,0,0.03)] border border-neutral-100 transition-all hover:shadow-md">
                <div className="flex space-x-1 mb-4">
                  {[...Array(t.stars)].map((_, i) => (
                    <Star key={i} className="h-4 w-4 fill-[#D97745] text-[#D97745]" />
                  ))}
                </div>
                <p className="text-sm leading-relaxed text-neutral-600 mb-8 whitespace-normal italic">
                  "{t.text}"
                </p>
                <div className="flex items-center space-x-4">
                  <div className="relative h-12 w-12 overflow-hidden rounded-full border border-neutral-100 shadow-sm">
                    <Image src={t.avatar} alt={t.name} fill className="object-cover" />
                  </div>
                  <div className="text-left">
                    <h4 className="text-sm font-bold text-neutral-900">{t.name}</h4>
                    <p className="text-[11px] font-medium text-neutral-400">{t.role}</p>
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>

      <style jsx>{`
        @keyframes marquee {
          0% { transform: translateX(0); }
          100% { transform: translateX(-50%); }
        }
        @keyframes marquee-reverse {
          0% { transform: translateX(-50%); }
          100% { transform: translateX(0); }
        }
        .animate-marquee {
          animation: marquee 40s linear infinite;
        }
        .animate-marquee-reverse {
          animation: marquee-reverse 40s linear infinite;
        }
      `}</style>
    </section>
  );
}
