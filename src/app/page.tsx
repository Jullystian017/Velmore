import Hero from "@/components/Hero";
import Collections from "@/components/Collections";
import Trending from "@/components/Trending";
import About from "@/components/About";

export default function Home() {
  return (
    <main className="flex min-h-screen flex-col items-center justify-between">
      <Hero />
      <Collections />
      <Trending />
      <About />
    </main>
  );
}
