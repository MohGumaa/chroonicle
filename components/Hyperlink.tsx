import Image from 'next/image';
import Link from 'next/link';

type HyperLinkProps = {
	href: string;
	title: string;
	icon?: string;
	variant: string;
	full?: boolean;
};

const HyperLink = ({ href, title, icon, variant, full }: HyperLinkProps) => {
	return (
		<Link
			className={`flexCenter gap-3 rounded-full border ${variant} ${
				full && 'w-full'
			}`}
      href={href}
		>
			{icon && <Image src={icon} alt={title} width={24} height={24} />}
			<label className="bold-16 whitespace-nowrap cursor-pointer">
				{title}
			</label>
		</Link>
	);
};

export default HyperLink;
