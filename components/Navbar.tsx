import { NAV_LINKS } from "@/constants";
import Image from "next/image";
import Link from "next/link";

const Navbar = () => {
  return (
		<nav className="px-3 md:px-5 lg:px-20 bg-transparent fixed top-4 w-full z-50">
			<div className="flexBetween bg-gray-40 rounded-full border shadow py-3 px-6">
				<Link href="/" className="block w-24 md:w-32 h-auto">
					<Image src="/logo-1.svg" alt="Logo" width={176} height={28} />
				</Link>
				<ul className="hidden h-full gap-12 lg:flex">
					{NAV_LINKS.map((link) => (
						<li key={link.key}>
							<Link
								href={link.href}
								className="text-base font-bold text-gray-50 flexCenter cursor-pointer transition-all hover:text-green-500"
							>
								{link.label}
							</Link>
						</li>
					))}
				</ul>
				<div className="hidden lg:flexCenter">
					<Link
						href="#contact_us"
						className="flexCenter gap-3 rounded-full border btn_green font-bold"
					>
						Contact Us
					</Link>
				</div>
				<button
					id="menu-btn"
					className="flex items-center justify-center hamburger lg:hidden focus:outline-none"
				>
					<span className="hamburger-top"></span>
					<span className="hamburger-middle"></span>
					<span className="hamburger-bottom"></span>
				</button>
			</div>
			<div className="md:hidden">
				<ul
					id="menu"
					className="absolute hidden flex-col items-center self-end py-8 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md rounded-md"
				>
					{NAV_LINKS.map((link) => (
						<li key={link.key}>
							<Link
								href={link.href}
								className="text-base font-bold text-gray-50 cursor-pointer transition-all hover:text-green-500"
							>
								{link.label}
							</Link>
						</li>
					))}
				</ul>
			</div>
		</nav>
	);
};

export default Navbar;
