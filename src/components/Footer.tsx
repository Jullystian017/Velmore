import { Instagram, Twitter, Facebook, ArrowUpRight } from "lucide-react";
import Link from "next/link";

export default function Footer() {
  const currentYear = new Date().getFullYear();

  return (
    <footer className="w-full bg-[#0A0A0A] pt-24 pb-12 px-6 md:px-12 lg:px-24 border-t border-white/5">
      <div className="mx-auto max-w-7xl">
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
          {/* Brand Info */}
          <div className="lg:col-span-2">
            <Link href="/" className="inline-block mb-6">
              <span className="text-3xl font-bold tracking-tighter text-white">VELMORE</span>
            </Link>
            <p className="max-w-xs text-neutral-500 leading-relaxed mb-8">
              Crafting premium scents for the modern individual. Experience the art of fine perfumery with Velmore.
            </p>
            <div className="flex space-x-5">
              <a href="#" className="text-neutral-500 hover:text-white transition-colors">
                <Instagram className="h-5 w-5" />
              </a>
              <a href="#" className="text-neutral-500 hover:text-white transition-colors">
                <Twitter className="h-5 w-5" />
              </a>
              <a href="#" className="text-neutral-500 hover:text-white transition-colors">
                <Facebook className="h-5 w-5" />
              </a>
            </div>
          </div>

          {/* Quick Links */}
          <div>
            <h4 className="text-white font-bold mb-6">Navigation</h4>
              <ul className="space-y-4">
                <li>
                  <Link href="/" className="text-neutral-500 hover:text-white transition-all inline-flex items-center group">
                    <span>Home</span>
                    <ArrowUpRight className="h-3 w-3 ml-1 opacity-0 group-hover:opacity-100 transition-opacity" />
                  </Link>
                </li>
                <li>
                  <Link href="/about" className="text-neutral-500 hover:text-white transition-all inline-flex items-center group">
                    <span>About</span>
                    <ArrowUpRight className="h-3 w-3 ml-1 opacity-0 group-hover:opacity-100 transition-opacity" />
                  </Link>
                </li>
                <li>
                  <Link href="/product" className="text-neutral-500 hover:text-white transition-all inline-flex items-center group">
                    <span>Product</span>
                    <ArrowUpRight className="h-3 w-3 ml-1 opacity-0 group-hover:opacity-100 transition-opacity" />
                  </Link>
                </li>
              </ul>
          </div>

          {/* Legal/Contact */}
          <div>
            <h4 className="text-white font-bold mb-6">Company</h4>
            <ul className="space-y-4">
              <li>
                <Link href="#" className="text-neutral-500 hover:text-white transition-colors">Contact Us</Link>
              </li>
              <li>
                <Link href="#" className="text-neutral-500 hover:text-white transition-colors">Privacy Policy</Link>
              </li>
              <li>
                <Link href="#" className="text-neutral-500 hover:text-white transition-colors">Terms of Service</Link>
              </li>
            </ul>
          </div>
        </div>

        {/* Bottom Bar */}
        <div className="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0 text-[13px] font-medium text-neutral-600">
          <p>© {currentYear} Velmore Parfums. All rights reserved.</p>
          <p className="flex items-center space-x-1">
            <span>Designed with</span>
            <span className="text-[#D97745]">passion</span>
            <span>for elegance.</span>
          </p>
        </div>
      </div>
    </footer>
  );
}
