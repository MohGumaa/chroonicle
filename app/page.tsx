import Clients from "@/components/Clients";
import Contact from "@/components/Contact";
import Hero from "@/components/Hero";
import OurVision from "@/components/OurVision";
import Process from "@/components/Process";

export default function Home() {
  return (
		<>
			<Hero />
			<Clients />
			<OurVision />
			<Process />
			<Contact />
		</>
	);
}
