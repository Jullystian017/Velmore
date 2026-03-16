import Hero from "@/components/Hero";
import Collections from "@/components/Collections";

export default function Home() {
  return (
    <main className="flex min-h-screen flex-col items-center justify-between">
      <Hero />
      <Collections />
    </main>
  );
}
