import { Menu, ShoppingBag } from 'lucide-react';

export default function Navbar() {
  return (
    <nav className="fixed top-4 left-4 right-4 z-50 flex items-center justify-between rounded-full bg-white px-4 py-3 shadow-sm md:left-8 md:right-8 lg:left-12 lg:right-12">
      {/* Menu Button */}
      <button className="flex h-10 w-10 items-center justify-center rounded-full border border-gray-100 bg-white shadow-sm transition-transform hover:scale-105 active:scale-95">
        <Menu className="h-5 w-5 text-black" strokeWidth={2.5} />
      </button>

      {/* Logo */}
      <div className="flex items-center justify-center">
        <span className="text-xl font-bold tracking-tighter uppercase text-black md:text-2xl">
          Velmore
        </span>
      </div>

      {/* Cart Button */}
      <button className="flex h-10 w-10 items-center justify-center rounded-full border border-gray-100 bg-white shadow-sm transition-transform hover:scale-105 active:scale-95">
        <ShoppingBag className="h-5 w-5 text-black" strokeWidth={2.5} />
      </button>
    </nav>
  );
}
