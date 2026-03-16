"use client";

import { useState, useEffect } from "react";
import { Menu, ShoppingBag, X, ArrowRight, Instagram, Twitter, Facebook } from 'lucide-react';
import Link from "next/link";

export default function Navbar() {
  const [isMenuOpen, setIsMenuOpen] = useState(false);
  const [isCartOpen, setIsCartOpen] = useState(false);

  // Prevent scrolling when drawer is open
  useEffect(() => {
    if (isMenuOpen || isCartOpen) {
      document.body.style.overflow = "hidden";
    } else {
      document.body.style.overflow = "unset";
    }
  }, [isMenuOpen, isCartOpen]);

  return (
    <>
      <nav className="fixed top-4 left-4 right-4 z-50 flex items-center justify-between rounded-full bg-white/80 backdrop-blur-md px-4 py-3 shadow-sm md:left-8 md:right-8 lg:left-12 lg:right-12 border border-white/20">
        {/* Menu Button */}
        <button 
          onClick={() => setIsMenuOpen(true)}
          className="flex h-10 w-10 items-center justify-center rounded-full border border-gray-100 bg-white shadow-sm transition-transform hover:scale-105 active:scale-95"
        >
          <Menu className="h-5 w-5 text-black" strokeWidth={2.5} />
        </button>

        {/* Logo */}
        <Link href="/" className="flex items-center justify-center">
          <span className="text-xl font-bold tracking-tighter uppercase text-black md:text-2xl cursor-pointer">
            Velmore
          </span>
        </Link>

        {/* Cart Button */}
        <button 
          onClick={() => setIsCartOpen(true)}
          className="flex h-10 w-10 items-center justify-center rounded-full border border-gray-100 bg-white shadow-sm transition-transform hover:scale-105 active:scale-95"
        >
          <ShoppingBag className="h-5 w-5 text-black" strokeWidth={2.5} />
        </button>
      </nav>

      {/* --- Mobile Menu Drawer --- */}
      <div 
        className={`fixed inset-0 z-[100] transition-opacity duration-500 ${isMenuOpen ? "opacity-100 visible" : "opacity-0 invisible"}`}
      >
        {/* Backdrop */}
        <div 
          className="absolute inset-0 bg-black/40 backdrop-blur-sm"
          onClick={() => setIsMenuOpen(false)}
        />
        
        {/* Content */}
        <div 
          className={`absolute inset-y-0 left-0 w-full max-w-sm bg-white p-8 transition-transform duration-500 ease-out shadow-2xl ${isMenuOpen ? "translate-x-0" : "-translate-x-full"}`}
        >
          <div className="flex h-full flex-col">
            <div className="flex items-center justify-between mb-12">
              <span className="text-2xl font-bold tracking-tighter uppercase text-black">Velmore</span>
              <button 
                onClick={() => setIsMenuOpen(false)}
                className="flex h-10 w-10 items-center justify-center rounded-full bg-neutral-100 text-black hover:bg-neutral-200"
              >
                <X className="h-5 w-5" />
              </button>
            </div>

            <nav className="flex flex-col space-y-8">
              {['Home', 'Collections', 'About', 'Shop', 'Contact'].map((item) => (
                <Link 
                  key={item} 
                  href="#" 
                  className="group flex items-center justify-between text-4xl font-bold tracking-tight text-neutral-900 transition-colors hover:text-[#e8702a]"
                  onClick={() => setIsMenuOpen(false)}
                >
                  <span>{item}</span>
                  <ArrowRight className="h-6 w-6 opacity-0 -translate-x-4 transition-all group-hover:opacity-100 group-hover:translate-x-0" />
                </Link>
              ))}
            </nav>

            <div className="mt-auto pt-12">
              <p className="text-sm font-bold text-neutral-400 uppercase tracking-widest mb-6">Follow us</p>
              <div className="flex space-x-6">
                <Instagram className="h-6 w-6 text-neutral-900" />
                <Twitter className="h-6 w-6 text-neutral-900" />
                <Facebook className="h-6 w-6 text-neutral-900" />
              </div>
            </div>
          </div>
        </div>
      </div>

      {/* --- Cart Drawer --- */}
      <div 
        className={`fixed inset-0 z-[100] transition-opacity duration-500 ${isCartOpen ? "opacity-100 visible" : "opacity-0 invisible"}`}
      >
        {/* Backdrop */}
        <div 
          className="absolute inset-0 bg-black/40 backdrop-blur-sm"
          onClick={() => setIsCartOpen(false)}
        />
        
        {/* Content */}
        <div 
          className={`absolute inset-y-0 right-0 w-full max-w-md bg-white p-8 transition-transform duration-500 ease-out shadow-2xl ${isCartOpen ? "translate-x-0" : "translate-x-full"}`}
        >
          <div className="flex h-full flex-col">
            <div className="flex items-center justify-between mb-12">
              <h2 className="text-2xl font-bold tracking-tight text-black">Your Cart</h2>
              <button 
                onClick={() => setIsCartOpen(false)}
                className="flex h-10 w-10 items-center justify-center rounded-full bg-neutral-100 text-black hover:bg-neutral-200"
              >
                <X className="h-5 w-5" />
              </button>
            </div>

            <div className="flex-1 flex flex-col items-center justify-center text-center space-y-6">
              <div className="relative h-48 w-48 opacity-10 grayscale">
                <ShoppingBag className="h-full w-full text-neutral-300" strokeWidth={1} />
              </div>
              <div>
                <h3 className="text-xl font-bold text-neutral-900 mb-2">Your cart is empty</h3>
                <p className="text-neutral-500 max-w-[240px] mx-auto">
                  Looks like you haven't added anything to your cart yet.
                </p>
              </div>
              <button 
                onClick={() => setIsCartOpen(false)}
                className="mt-4 rounded-full bg-neutral-900 px-8 py-4 text-sm font-bold text-white transition-all hover:bg-black hover:shadow-xl active:scale-95"
              >
                Back to shopping
              </button>
            </div>

            <div className="pt-8 border-t border-neutral-100">
              <div className="flex items-center justify-between mb-6">
                <span className="text-neutral-500 font-medium">Subtotal</span>
                <span className="text-xl font-bold text-neutral-900">$0.00</span>
              </div>
              <button className="w-full rounded-full bg-neutral-100 py-4 text-sm font-bold text-neutral-400 cursor-not-allowed">
                Checkout
              </button>
            </div>
          </div>
        </div>
      </div>
    </>
  );
}
