import type { Metadata } from "next";
import { Lora } from "next/font/google";
import "./globals.css";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";

const lora = Lora({ subsets: ['latin'] }); //className={inter.className}

export const metadata: Metadata = {
	title: 'Chroonicle | A Modern Search Firm for GTM &amp; Tech Hiring',
	description:
		'Chroonicle is a modern search firm built like the technology companies we serve. Voted #1 search firm on G2, Chroonicle excels where legacy search firms struggle by combining data, technology and human ingenuity to find and place hires with a better bi-directional fit, faster',
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
		<html lang="en">
			<body className={lora.className}>
				<Navbar />
				<main className="relative bg-transparent overflow-hidden">
					{children}
				</main>
				<Footer />
			</body>
		</html>
	);
}
