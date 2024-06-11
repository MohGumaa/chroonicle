import { NAV_LINKS } from "@/constants";
import Image from "next/image";
import Link from "next/link";

const Navbar = () => {
  return (
		<nav className="padding-container bg-transparent fixed top-4 w-full z-30">
			<div className="flexBetween bg-gray-40 rounded-full border py-3 px-6">
				<Link href="/" className="block w-32 md:w-36 lg:w-44 h-auto">
					<Image src="/logo.svg" alt="Logo" width={176} height={28} />
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
				<Image
					src="/menu.svg"
					alt="menu"
					width={32}
					height={32}
					className="inline-block cursor-pointer lg:hidden"
				/>
			</div>
		</nav>
	);
};

export default Navbar;
